<?php 

    include_once('../config/dbConfig.php');

    $pId = $_GET['projectId'];
    $userId = $_GET['userId'];

    $query = "DELETE FROM `ProjectParticipants` WHERE ProjectID = '$pId' AND UserID = '$userId'";
    $result = mysqli_query($conn, $query);

    // echo $pId, $userId;

    if($result) {
        echo "<script> window.location.href='../projects'</script>";
    }
?>