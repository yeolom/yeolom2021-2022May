<?php
//Local workspace.
$server = "localhost";
$user = "root";
$password = "";
$database = "yeolomco_lapma";

$conn = mysqli_connect($server, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>
