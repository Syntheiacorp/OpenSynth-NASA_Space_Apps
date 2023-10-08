<?php 

    include_once('../config/dbConfig.php');

    $pId = $_GET['projectId'];
    $userId = $_GET['userId'];

    $query = "INSERT INTO `ProjectParticipants`(`ProjectID`, `UserID`) VALUES ('$pId',' $userId')";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script> window.location.href='../projects'</script>";
    }
?>