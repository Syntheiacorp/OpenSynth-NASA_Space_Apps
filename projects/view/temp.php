<?php
require("../../config/dbConfig.php");

// Replace '1' with the specific project ID you want to fetch comments for
$projectID = 1;

// Execute the SQL query to fetch comments
$query = "SELECT
    pc.CommentID,
    pc.UserID,
    u.Username AS CommenterUsername,
    pc.CommentText
FROM
    ProjectComments pc
INNER JOIN
    Users u ON pc.UserID = u.UserID
WHERE
    pc.ProjectID = ?
ORDER BY
    pc.CommentID DESC";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $projectID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if there are comments
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="comment">';
        echo '<strong>' . $row['CommenterUsername'] . '</strong>';
        echo '<p>' . $row['CommentText'] . '</p>';
        echo '</div>';
    }
} else {
    echo 'No comments available for this project.';
}

// Close the database connection
mysqli_close($conn);
?>
