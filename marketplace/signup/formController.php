<?php
    $dir1 = (dirname( dirname(__FILE__) )."/db/header.php");
    include $dir1;
    
    $dir2 = (dirname( dirname(__FILE__) )."/model/model.php");
    include $dir2;

    if(isset($_POST['signupButton'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $typeUser = "end";

        $exist = checkIfUserExist($email, $phoneNumber, $conn);
        echo $exist;

        if($exist == "exist"){
            mysqli_close($conn);
           
            header("Location:index.php?return=exist");
        }else if ($exist == "available"){
            addUser($firstName, $lastName, $typeUser, $phoneNumber, $email, $password, $conn);
            mysqli_close($conn);
           
            header("Location:index.php?return=success");
        }
    }else{
        mysqli_close($conn);
           
        header("Location:index.php");
    }

?>