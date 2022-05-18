<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeolom's MarketPlace</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
                Yeolom's MarketPlace
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="user\end\search\" target="_blank" class="nav-link">View Products</a>
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
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/picOne.svg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Value</h1>
                        <p class="lead my-2">Get <span class="text-primary">Summaries</span> on business, educative, and entertainment books.<br/>Yeolom would <span class="text-primary">summarize</span> key messages and lessons within <span class="text-primary">20 to 40 pages</span>.</p>
                        <a href="user\end\search" class="btn btn-primary mb-4">Get A Summary</a>
                    
                    </div>
                    
            </div>
        </div>
    </section>

    <!--Families-->
    <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">Proof of Need</h1>
            <div class="row text-center">
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lazy</h3> 
                            <p class="card-test">A lot of people are <span class="text-primary">lazy</span>.<br/>And reading <span class="text-primary">300+</span> pages isn't a high priority.</p>
                            <!---<a href="https://yeolom.com/marketplace/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>--->
                    
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                        <h3 class="card-title">Agreed</h3> 
                        <p class="card-test">    
                            <?php
                                include "db/header.php";
                                include "model/model.php";

                                $num = getTotalUsers($conn);
                                mysqli_close($conn);

                                echo "<span class=\"text-primary\">".$num."</span>";
                            ?>
                            people are genuinely interested in <span class="text-primary">20 to 40</span> pages summary <br/>than <span class="text-primary">200+</span> pages book.</p>
                            <!--<a href="https://yeolom.com/blog/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>-->
                    
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

<!--Families-->
<section class="bg-light p-5 text-dark text-center">
        <div class="container">
            <img src="imgs/picThree.jpg" class="img-fluid mb-4" alt="">
                
            <h1 class="pb-4">Benefits</h1>
            <div class="row text-center">
                <div class="col-md mb-4">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <h3 class="card-title">Time</h3> 
                            <p class="card-test">You get to have more time to <span class="text-info">focus</span> on school, or <span class="text-info">growing</span> your business. </p>
                            <!---<a href="https://yeolom.com/marketplace/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>--->
                    
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <h3 class="card-title">Guilt-Free</h3> 
                            <p class="card-test">You also avoid the <span class="text-info">guilt</span> of <span class="text-info">not finishing</span> a book you started.</p>
                            <!---<a href="https://yeolom.com/marketplace/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>--->
                    
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <h3 class="card-title">Knowledge</h3> 
                            <p class="card-test">You finally gain knowledge in a <span class="text-info">simple</span> way.</p>
                            <!---<a href="https://yeolom.com/marketplace/" target="_blank" class="btn btn-primary m-3 px-4">Visit</a>--->
                    
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


   

        <!--Benefits--->
        <section class="bg-dark text-light p-5 text-center">
        <div class="container">
            <div>
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/picTwo.svg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>How Yeolom does it.</h1>
                        <p class="lead my-2">Yeolom literally get a member to sit down and read the <span class="text-info">200+</span> pages,<br/> and summarize everything in <span class="text-info">20 to 40</span> pages.</p>
                        
                    </div>
                    
            </div>
        </div>
    </section>

       <!--Interested--->
       <section class="bg-light text-dark p-5 text-center">
        <div class="container">
            <div>
                <!--<img src="img/partOne.svg" alt="">-->
                <img src="imgs/smartId.jpg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Interested?</h1>
                        <p class="lead my-2">The first step to get a <span class="text-primary">summary</span> is to literally view our products.</br>No sign up nor login.</p>
                        <a href="user\end\search" target="_blank" class="btn btn-primary m-3 px-4">View Products</a>
                 
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