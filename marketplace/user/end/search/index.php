<?php
    include("../../../model/model.php");
    include("../../../db/header.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>searchScreen</title>
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
      
    <div class="container text-center">
        <form action="index.php" method="POST">
            <input type="text" name="searchresult" style="margin: 10px;">
            <input type="submit" class="btn btn-primary" style="padding: 2px 10px 5px 10px;" value="Search"/>
        </form>
    </div>
    <div class="container">

    <?php

        //IF the user just arrive, then the latest would be fetched.
        if(isset($_POST['searchresult'])&&($_POST['searchresult']!=NULL)){
            //The form for search would send the data here.
            //echo "You searched.";
            $searched = mysqli_real_escape_string($conn, $_POST['searchresult']);
            $data = getRelatedProducts($conn,$searched);

            //print_r($data);
        }else{
            $data = getLatestUpload($conn);
        }
        if($data == "no product"){
            echo "
            <div class=\"alert alert-danger\" role=\"alert\"><span>No <strong> Product </strong></span></div>       
            ";
        }else{
            foreach($data as $file){
                $fileDescription = $file['description'];
                $fileTitle = $file['title'];
                $filePrice = $file['price'];
                $fileId = $file["productid"];
                $authorID = $file["sourceId"];
                $author = getAuthor($authorID, $conn);
                
               
    
                if($filePrice == 0){
                    $filePrice = "FREE";
                }
    
                echo"
                <div class=\"card\" style=\"margin: 10px;\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">$fileTitle</h4>
                    <p class=\"card-text\">$fileDescription</p>
                    <p class=\"card-text\">By $author</p><a class=\"card-link\" target=\"_blank\" href=\"product.php?pid=$fileId\">$filePrice</a>
                </div>
            </div>
                ";
            }
        }
        
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