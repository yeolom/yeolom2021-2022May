<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
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
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="https://yeolom.com/marketplace/login/">Log In</a><a class="btn btn-secondary action-button" role="button" href="https://yeolom.com/marketplace/signup/" style="background: var(--bs-blue);">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <?php
        if(isset($_GET['return'])){
            //Sample alert text
            //echo "<div class=\"alert alert-success\" role=\"alert\"><span><strong>Sorry, Data Already Used.</strong> text.</span></div>";
            
            if($_GET['return'] == "exist"){
                echo "<div class=\"alert alert-success\" role=\"alert\"><span><strong>Sorry, Data Already Used. Account Not Created</strong></span></div>";
            }else if ($_GET['return'] == "success"){
                echo "<div class=\"alert alert-success\" role=\"alert\"><span><strong>Account Successfully Created.</strong></span></div>";    
            }
        }
    ?>
    <section class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;assets/img/3560106.jpg&quot;) center / contain repeat;"></div>
            <form method="post" action="formController.php">
                <h2 class="text-center"><strong>Join The Community.</strong></h2>
                <div class="mb-3"><input class="form-control" type="text" name="firstName" placeholder="First Name"></div>
                <div class="mb-3"><input class="form-control" type="text" name="lastName" placeholder="Last Name"></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="mb-3"><input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="mb-3">
                    <!--<input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)">
                    -->
                    </div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div> 
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-blue);" name="signupButton">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a>
            </form>
        </div>
    </section>
    <footer class="footer-basic">
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Login</a></li>
            <li class="list-inline-item"><a href="#">Sign Up</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Blyte Tech</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>