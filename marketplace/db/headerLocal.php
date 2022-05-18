<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "marketplace";

    $conn = mysqli_connect($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>