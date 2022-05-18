<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.png" type="image/x-icon"> 
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeolom</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="imgs/yeolom_logo_20x21.png" width = "20" height = "21" class ="img-fluid pb-1">
                Yeolom
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <!--<span class="navbar-toggler-icon"></span>-->
                Families
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="https://yeolom.com/marketplace/" target="_blank" class="nav-link">MarketPlace</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://yeolom.com/blog/" target="_blank" class="nav-link">Blog</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://yeolom.com/lapma" target="_blank" class="nav-link">Lapma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<style>
    body::before{
        display: block;
        content: "";
        height: 60px;
    }
</style>
    <!--ShowCase--->
    <section class="bg-light text-dark p-5 text-center">
        <div class="container">
            <div>
<?php
    if($_GET['result'] == "suc"){
        mysqli_close($conn);
           
        echo "
            <div class=\"alert alert-primary\" role=\"alert\"><span>EMAIL <strong>REGISTERED</strong></span></div>  
        ";
}
    

?>
    
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/futureEnv.jpg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Value</h1>
                        <p class="lead my-2">Yeolom currently aims to build the environment we see when a cartoon character time travels to a good future.<br/>Yeolom calls this environment <span class="text-primary">Simple Times</span>.</p>
                        <!---<a href="#" class="btn btn-primary mb-4">View Proof</a>--->
                    
                    </div>
                    
            </div>
        </div>
    </section>

    <!--Families-->
    <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">Proof of Progress</h1>
            <div class="row text-center">
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">MarketPlace</h3> 
                            <p class="card-test">Yeolom would need a lucrative income stream.<br/>So Yeolom built a PDF <span class="text-primary">MarketPlace</span>.</p>
                            <a href="https://yeolom.com/marketplace/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>
                    
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Blog</h3> 
                            <p class="card-test">Yeolom would need an audience to monetize.<br/>So Yeolom built a <span class="text-primary">Blog</span> to grow an Audience.</p>
                            <a href="https://yeolom.com/blog/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>
                    
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lapma</h3> 
                            <p class="card-test">Humans and other specie needs entertainment.<br/>So Yeolom built a lucrative <span class="text-primary">entertainment business</span>.</p>
                            <a href="https://yeolom.com/lapma" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Benefits--->
    <section class="bg-light text-dark p-5 text-center">
        <div class="container">
            <div>
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/smartEnv.jpg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Benefits</h1>
                        <p class="lead my-2">You, and your descendants benefit by living an <span class="text-primary">insanely simple</span> life,<br/> where <span class="text-primary">necessities</span> are handled automatically.</p>
                        
                    </div>
                    
            </div>
        </div>
    </section>

     <!--Plan-->
     <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">How Yeolom does it</h1>
            <div class="row text-center">
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Build Foundation</h3> 
                            <p class="card-test">Yeolom would build <span class="text-primary">businesses</span> in the <span class="text-primary">needs</span> for humans,<br/>such as income, food, shelter, and transport.</p>
                           
                        </div>
                    </div>
                </div>
               
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Maintain Foundation</h3> 
                            <p class="card-test">Yeolom would <span class="text-primary">maintain</span> and <span class="text-primary">scale</span><br/>the foundation built.</p>
                           
                        </div>
                    </div>
                </div>
               
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Build Upwards</h3> 
                            <p class="card-test">Yeolom would build other <span class="text-primary">components</span> <br/>for 
    <span class="text-primary">Simple Times</span></p>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

       <!--Interested-->
       <section class="bg-light text-dark p-5 text-center">
        <div class="container">
            <div>
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/smartId.jpg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Interested?</h1>
                    
                        
                        <p class="lead my-2">The first step to <span class="text-primary">effectively</span> participate in <span class="text-primary">Simple Times</span> is to list your <span class="text-primary">email</span> below.</p>
                        
                        <form action = "listCont.php" method="POST">
            <input name="email" type="email" id = "email" style="margin: 10px;" placeholder="Email here.">
            <input class="btn btn-primary" type="submit" value="submit">
            
        </form>
                   </div>
                    
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy Yeolom</p>
            <div class="row text-center">
                
                <div class="col-md mb-4">
                   <a href="https://www.instagram.com/yeolom" class="px-2">Instagram</a>
                   <a href="https://wa.me/message/FDYIQ5NX553DO1" class="px-2">Whatsapp</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>