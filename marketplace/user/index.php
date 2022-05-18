<?php
    include("../session.php");

    if(isset($_SESSION['uid'])){
        $typeUser = $_SESSION['typeUser'];
        $dashboardurl = "../user/$typeUser/";

        
        header("Location:$dashboardurl");
    }else{
        header("Location:../login/");
    }
?>