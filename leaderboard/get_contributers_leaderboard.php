<?php
// Establish a MySQL database connection here if not already established
// Include database connection code here

// MySQL Query for Ranking Contributors
$query = "
    SELECT
        u.Username AS Name,
        COUNT(pc.ProjectID) AS Score
    FROM
        ProjectContributors pc
    INNER JOIN
        Users u ON pc.ContributorUserID = u.UserID
    WHERE
        pc.ContributionStatus = 'Accepted'
    GROUP BY
        pc.ContributorUserID, u.Username
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

echo json_encode(array('data' => $data));
?>
