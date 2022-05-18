<?php
    include("../../../session.php");
    include("../../../model/model.php");

    if(!(isset($_SESSION['uid']))){
        mysqli_close($conn);
           
        header("Location:../../../login/");
    }else{
        if(($_SESSION['typeUser'] != "source")){
            logOut();
            mysqli_close($conn);
           
            header("Location:../../../login/");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UploadScreen(sou) (copy)</title>
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
        <div class="container"><a class="navbar-brand" href="https://yeolom.com/marketplace/" style="padding: 3px 0px;margin: 7px;">Yeolom's MarketPlace</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> 
                    <a class="login" href="..\..\..\logout.php">Log Out</a>
                    <a class="btn btn-secondary action-button" role="button" href="#" style="background: var(--bs-blue);">Upload</a></span>
            </div>
        </div>
    </nav>
    <?php
    if(isset($_GET["returned"])){
        if($_GET["returned"] == "too"){
            echo "
            <div class=\"alert alert-success\" role=\"alert\"><span><strong>Alert:</strong> File too big.</span></div>
    
            ";
        }else if($_GET["returned"] == "success"){
            echo "
            <div class=\"alert alert-success\" role=\"alert\"><span><strong>Alert:</strong> Successfully uploaded.</span></div>
    
            ";
        }else if($_GET["returned"] == "notpdf"){
            echo "
            <div class=\"alert alert-success\" role=\"alert\"><span><strong>Alert:</strong> Not Pdf Uploaded</span></div>
    
            ";
        }else if($_GET["returned"] == "alreadyexist"){
            echo "
            <div class=\"alert alert-success\" role=\"alert\"><span><strong>Alert:</strong>File Already Exist.</span></div>
    
            ";
        }
    }
    ?>
    <div class="container">
        <form method="POST" action="controller.php" enctype = "multipart/form-data">
            <input class="form-control-plaintext" type="text" value="Title" readonly="">
            <input name = "title" class="form-control" type="text">
            <input class="form-control-plaintext" type="text" value="Short Description" readonly="">
            <input name = "description" class="form-control" type="text">
            <input class="form-control-plaintext" type="text" value="Price" readonly="">
            <input name = "price" class="form-control" type="price">
            <input class="form-control-plaintext" type="text" value="Attach File" readonly="">
            <input class="btn btn-primary" type="file" name="fileToUpload"  readonly="">
            
            <!--<button class="btn btn-primary" type="button">Get File</button>-->
            <br/>
            <br/>
            <input type = "submit" name = "uploadpdfSubmit" class="btn btn-primary" value = "Upload"/>
            
        </form>
    </div>
    <footer class="footer-basic">
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright">MarketPlace by Yeolom</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>