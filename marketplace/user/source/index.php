<?php

    include("../../model/model.php");
    include("../../session.php");

    if(isset($_SESSION['uid'])){
        $typeUser = $_SESSION['typeUser'];
        $dashboardurl = "upload/";
    
        if(($_SESSION['typeUser'] != "source")){
            logOut();
            header("Location:../../../login/");
        }
    
        header("Location:$dashboardurl");
    }else{
        header("Location:../../login/");
    }
?>