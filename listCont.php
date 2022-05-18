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
 $database = "yeolomco_emailListing";

 $conn = mysqli_connect($server, $user, $password, $database);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


if((!isset($_POST['email']))||($_POST['email'] == NULL)){
         mysqli_close($conn);
           
        header("Location:index.php");

}


function addEmail($conn, $email){
    $sql_cmd = "INSERT INTO `emails`(`email`) 
    VALUES (?);";
    
    $sql_stmt =  mysqli_stmt_init($conn);
    
    
    if(mysqli_stmt_prepare($sql_stmt, $sql_cmd)){
        mysqli_stmt_bind_param($sql_stmt,"s",$email);
        
        //mysqli_stmt_execute($sql_stmt);
        echo("The returned for inserting is..".mysqli_stmt_execute($sql_stmt)."<br/>");//The error is here.
        if(mysqli_stmt_error($sql_stmt) != NULL){
            echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.    
            //return "failed";
        }else{
            //return "success";
            
            
            header("Location:index.php?result=suc");
        }
    }else{
        echo("The error for inserting is..".mysqli_stmt_error($sql_stmt));//The error is here.    
  
        echo "The SQL command to Add data didn't work.";
        echo "<br/>";
        
    
    }
}    
    

$email = $_POST["email"];

echo "The email is $email<br/>";
addEmail($conn, $email);

?>