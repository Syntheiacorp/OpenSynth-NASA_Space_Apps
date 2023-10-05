<?php
    // require __DIR__ . '/../vendor/autoload.php'; // Include Composer's autoloader
    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..'); // Go up one level to the root directory
    // $dotenv->load();

    // // Getting data from environment variables
    // $dbHost = getenv('DB_HOST');
    // $dbPort = getenv('DB_PORT');
    // $dbUser = getenv('DB_USER');
    // $dbPass = getenv('DB_PASS');
    // $dbName = getenv('DB_NAME');

    // echo "Hi";
    // echo $dbHost;

    $conn = mysqli_connect("opensynth.cquy1dijuc9e.ap-south-1.rds.amazonaws.com", "admin", "OOoo1212", "opensynth_db")
    or die("db not connected");

    // print_r($conn);
?>