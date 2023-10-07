<?php 
    include_once('../../config/dbConfig.php');

    $email  = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    $query = "INSERT INTO Users (username, email, password) VALUES ('$username', '$email', '$password')";

    $res = mysqli_query($conn, $query);

    if($res) {
        $lastInsertId = mysqli_insert_id($conn);

        $secondQuery = "INSERT INTO UserData (UserID, FullName) VALUES ('$lastInsertId', '$name')";

        $result2 = mysqli_query($conn, $secondQuery);

        if($result2) {
            echo "<script> window.location.href='../signin/?signup=success'</script>";

        }
        else {
            echo "<script> window.location.href='?signup=failed'</script>";

        }
    }
?>