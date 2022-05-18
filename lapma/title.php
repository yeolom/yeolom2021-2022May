<?php
    if(!(isset($_GET["titleId"]))){
        header("Location:index.php");
    }

    if($_GET["titleId"] == NULL){
        header("Location:index.php");
    }



    include "db.php";
    include "model.php";


    $titleID = mysqli_real_escape_string($conn, $_GET["titleId"]);
?>
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
<?php

                $titleDisc = getTitle($conn, $titleID);
                //print_r($titleDisc);
                if($titleDisc == "no title"){
                    header("Location:index.php");
                }
                //print_r($titleDisc);


                $title = $titleDisc[0]["titleName"];
                $longDisc = $titleDisc[0]["longDisc"];
                $img = $titleDisc[0]["img"];
                $date = $titleDisc[0]["date"];
                $titleID = $titleDisc[0]["titleId"];

?>
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
                <img src="titleCover/<?php echo $img;?>" class="img-fluid mb-4" alt="">
                
                    <div>
                        <h1><?php echo $title; ?></h1>
                        <h6 class="card-title"><?php echo $date;?></h6> 
                                    
                        <p class="lead my-2 fw-normal"><?php echo $longDisc;?></p>
                    </div>
                    
            </div>
        </div>
    </section>

    <!--Stories-->
    <section class="bg-dark p-5 text-light text-center">
        <div class="container">
            <h1 class="pb-4">Images</h1>
            
                
            <!---For loops-->
            <?php 

            $titleImgs = getTitleImgs($conn, $titleID);
            foreach($titleImgs as $img){
                $dir = $img["fileName"];
                $date = $img["date"];
                //print_r($img);
                echo "
                    <div class=\"row text-center\">
                        <div class=\"col-md mb-4\">
                            <div class=\"card bg-light text-dark\">
                                <div class=\"card-body text-center\">
                                    <img src=\"titleImg/$dir\" class=\"img-fluid mb-4\" alt=\"\">
                                    <!--<h3 class=\"card-title\">$title</h3>--> 
                                    <h6 class=\"card-title\">$date</h6> 
                                                 
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
                        <p class="lead my-2">The first step to be <span class="text-primary">entertained</span> is to <span class="text-primary">visit</span> any of <span class="text-primary">Yeolom's Lapma</span> store.</p>
                        <p class="lead my-2"><span class="text-primary">Click</span> Stores in <span class="text-primary">Navbar</span>.</p>
                 
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
<?php
                mysqli_close($conn);
?>