<?php
    $server = "localhost";
    $user = "yeolomco_root";
    $password = "Olom@l123";
    $database = "yeolomco_marketplace";

    $conn = mysqli_connect($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>