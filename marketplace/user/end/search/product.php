<?php
include("../../../model/model.php");
include("../../../db/header.php");

if(!(isset($_GET['pid']))){
    mysqli_close($conn);
       
    header("Location:../../../login/");
}

$pid = mysqli_real_escape_string($conn,$_GET['pid']);
$fileDetails = getfile($pid,$conn);
//print_r($fileDetails);

$fileTitle = $fileDetails[0]['title'];
$fileDescription = $fileDetails[0]['description'];
$filePrice = $fileDetails[0]['price'];
$fileId = $fileDetails[0]["productid"];
$fileDate = $fileDetails[0]["date"];
$authorID = $fileDetails[0]["sourceId"];
$author = getAuthor($authorID, $conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $fileTitle." by ".$author;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="color: var(--bs-blue);background: var(--bs-white);">
        <div class="container">
            <a class="navbar-brand" href="https://yeolom.com/marketplace/" style="padding: 3px 0px;margin: 7px;">Yeolom's MarketPlace</a>
            <!--
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> 
                    <a class="login" href="..\..\..\logout.php">Log Out</a>
                    <a class="btn btn-secondary action-button" role="button" href="#" style="background: var(--bs-blue);">Browse</a></span>
            </div> -->
        </div>
    </nav>

    <div class="alert alert-primary" role="alert"><span>HELLO <strong> THERE </strong></span></div>

    <?php

        //IF the user just arrive, then the latest would be fetched.
                

            if($filePrice == 0){
                $filePrice = "FREE";
            }

            echo"
            <div class=\"card\" style=\"margin: 10px;\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">$fileTitle</h4>
                    <p class=\"card-text\">$fileDescription</p>
                    <p class=\"card-text\">By $author</p>
                    <p class=\"card-text\">Published on $fileDate</p>";

                    if($filePrice == "FREE"){
                        
                        echo "<a href=\"pay.php?id=$fileId\" target=\"_blank\" class=\"btn btn-primary mb-4\">Get FREE DOWNLOAD</a>";
                        //<a class=\"card-link\" href=\"pay.php?id=$fileId\">$filePrice</a>                
                
                    }else{
                        echo "<a href=\"pay.php?id=$fileId\" target=\"_blank\" class=\"btn btn-primary mb-4\">NGN $filePrice</a>";
                    }        
                    echo"
                    </div>
            </div>
            ";
            mysqli_close($conn);
    ?>
      
    </div>
    <footer class="footer-basic">
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright">MarketPlace by Yeolom</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>