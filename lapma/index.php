<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="https://yeolom.com//favicon.ico" type="image/x-icon"> 
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeolom's Lapma</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
               Yeolom's Lapma
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <!--<span class="navbar-toggler-icon"></span>-->
                Stores
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">                    
                    <li class="nav-item">
                        <a href="https://Lapma.gamejolt.io" target="_blank" class="nav-link">Itch</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="https://Lapma.gamejolt.io" target="_blank" class="nav-link">GameJolt</a>
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
                <img src="imgs/storytelling.svg" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1>Value</h1>
                        <p class="lead my-2">Get <span class="text-primary">captivated</span> by the <span class="text-primary">stories</span> we tell.</p>
                    </div>
                    
            </div>
        </div>
    </section>

    <!--Stories-->
    <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">Latest Stories</h1>
            
                
            <!---For loops-->
            <?php
                include "db.php";
                include "model.php";

                $listOfTitles = getLatestTitles($conn);
                mysqli_close($conn);
                

                //print_r($listOfTitles);
                foreach ($listOfTitles as $franchiseTitle){
                    //print_r($franchiseTitle);
                    $title = $franchiseTitle["titleName"];
                    $shortDisc = $franchiseTitle["shortDisc"];
                    $img = $franchiseTitle["img"];
                    $date = $franchiseTitle["date"];
                    $titleID = $franchiseTitle["titleId"];
    
                    echo"
                    <div class=\"row text-center\">
                    <div class=\"col-md mb-4\">
                        <div class=\"card bg-light text-dark\">
                                <div class=\"card-body text-center\">
                                    <img src=\"titleCover/$img\" class=\"img-fluid mb-4\" alt=\"\">
                                    <h3 class=\"card-title\">$title</h3> 
                                    <h6 class=\"card-title\">$date</h6> 
                                    <p class=\"card-test\">$shortDisc</p>
                                    <a href=\"title.php?titleId=$titleID\" target=\"_blank\" class=\"btn btn-primary m-3 px-4\">Visit</a>
                            
                                </div>
                        </div>
                    </div>
                 </div>
                        
                    
                    ";
                }


                
            ?>
        </div>
    </section>

     <!--Plan

        Use this for contract Vacancy in tasks.
     <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">How Yeolom do it</h1>
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
                            <p class="card-test">Yeolom would build other <span class="text-primary">components</span> <br/>for <span class="text-primary">Simple Times</span></p>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    -->

       <!--Interested--->
       <section class="bg-light text-dark p-5 text-center">
        <div class="container">
            <div>
                  <div>
                        <h1>Interested?</h1>
                        <p class="lead my-2">The first step to be <span class="text-primary">entertained</span> is to <span class="text-primary">visit</span> any <span class="text-primary">story</span> above.</p>
                       
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