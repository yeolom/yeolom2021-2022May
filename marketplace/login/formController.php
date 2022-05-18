<?php

 $dir1 = (dirname( dirname(__FILE__) )."/db/header.php");
    include $dir1;
    
    $dir2 = (dirname( dirname(__FILE__) )."/model/model.php");
    include $dir2;

    if(isset($_POST['loginButton'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $exist = checkIfUserExistUsingEmail($email,$conn);

        if($exist == "none"){
            header("Location:index.php?return=none");
        }
        $detailsInDb = getUserLoginDetails($email, $conn);
        
        print_r($detailsInDb);

        if($detailsInDb[0]['password'] == $password){
            $typeUser = $detailsInDb[0]['typeUser'];
            

            if($typeUser == "end"){
                $dashboardurl = "../user/end/search/";
            }else if($typeUser == "source"){
                $dashboardurl = "../user/source/upload/";
            }
            include("../session.php");

            $_SESSION["firstname"] = $detailsInDb[0]["firstName"];
            $_SESSION["lastname"] = $detailsInDb[0]["lastName"];
            $_SESSION["typeUser"] = $detailsInDb[0]["typeUser"];
            $_SESSION["phoneNumber"] = $detailsInDb[0]["phoneNumber"];
            $_SESSION["connected"] = 'yes';
            $_SESSION["email"] = $detailsInDb[0]["email"];
            $_SESSION["uid"] = $detailsInDb[0]["userID"];
            mysqli_close($conn);
           
            header("Location:$dashboardurl");
        }else{
            mysqli_close($conn);
           
            header("Location:index.php?return=wrong");
        }

    }else{
        mysqli_close($conn);
           
        header("Location:index.php");
    }

?>