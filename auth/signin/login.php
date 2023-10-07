<?php 
    session_start();
    include_once("../../config/dbConfig.php");

    $email = $_POST['email'];
    $passHash = hash('sha256', $_POST['remember']);
    $remember = $_POST['remember'];

    $query = "SELECT * FROM `Users` WHERE Email = '$email' AND PasswordHash = '$passHash'";

    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_assoc($res);

        $_SESSION['userId'] = $data['UserID'];

        echo "<script> window.location.href='../../dashboard'</script>";
    }
    else {
        echo "<script> window.location.href='../signin?login=error'</script>";
    }   
?>
