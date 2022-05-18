<?php
// //Local workspace.
// $server = "localhost";
// $user = "root";
// $password = "";
// $database = "lapma";

// $conn = mysqli_connect($server, $user, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


//Cloud workspace.

 $server = "localhost";
 $user = "yeolomco_root";
 $password = "Olom@l123";
 $database = "yeolomco_lapma";

 $conn = mysqli_connect($server, $user, $password, $database);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


?>