<?php
// Establish a MySQL database connection here if not already established
// Include database connection code here
session_start();
include_once('../config/dbConfig.php');
// MySQL Query for Ranking Projects
$query = "
    SELECT
        p.Title AS Name,
        AVG(pr.Rating) AS Score
    FROM
        Projects p
    LEFT JOIN
        ProjectRatings pr ON p.ProjectID = pr.ProjectID
    GROUP BY
        p.ProjectID, p.Title
    ORDER BY
        Score DESC
";

$result = mysqli_query($connection, $query);

$data = array();

if ($result) {
    $rank = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'Rank' => $rank,
            'Name' => htmlspecialchars($row['Name']),
            'Score' => htmlspecialchars($row['Score'])
        );
        $rank++;
    }
} else {
    $data[] = array("Rank" => "Error fetching data", "Name" => "", "Score" => "");
}

// JSON response
$response = array('data' => $data);

echo json_encode($response);
?>
