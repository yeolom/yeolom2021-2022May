<!DOCTYPE html>
<html>

<head>
  <title>Game Store</title>

  <meta name ="viewport" content="width=device-width,initial-scale=1">



  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">



  <!-- Folder CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




  <!-- Bootstrap active class script -->
  <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <style>
    /* Custom Fonts */

    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500&family=Roboto+Mono:wght@200;300;700&display=swap');




    @import url("https://fonts.googleapis.com/css?family=Raleway");

    :root {
      --glow-color: hsl(186 100% 69%);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* Additional custom styles */
    .navbar-nav {
      margin-left: 32rem;
    }

    /* Custom logo styles */
    .brand-logo {
      width: 50px;
      height: auto;
    }

    /* Custom button styles */
    .store-btn {
      width: 120px;
      background-color: transparent;
      color: #fff;
      border-color: white;
      border-radius: 5px;
      padding: 8px 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    /* Button hover effect */
    .store-btn:hover {
      background-color: #fff;
      color: #4472C4;
    }

    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 100%;
      height: 3px;
      background-image: radial-gradient(circle at 3px 3px, #FBB731 10%, transparent 10.5%);
      background-size: 6px 6px;
      background-repeat: repeat-x;
      z-index: -1;
      transition: width 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
      width: calc(100% - 20px);
    }

    /* Hero section */
    .hero-section {
      background-color: #F5F7FA;
    }

    /* Content within the hero section */
    .content {
      position: absolute;
      margin-top: 10%;
      left: 30%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;

    }

    /* After Hero Section */
    .custom-card {
      border-radius: 15px;
      overflow: hidden;
      height: 400px;
    }

    .card-image-container {
      background-image: url('../imgs/Yeolom landing page Banner.png');
      background-size: cover;
      background-position: center;
      height: 400px;
      border-radius: 15px 0 0 15px;
    }

    .card-img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 15px 0 0 15px;
    }


    .card-content {
      padding: 20px;
      color: #ffffff;
    }


    .carousel-inner {
      padding: 1em;
    }

    .card {
      margin: 0 .5em;
      box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
      border: none;
    }

    .carousel-control-prev,
    .carousel-control-next {
      background-color: #e1e1e1;
      width: 6vh;
      height: 6vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {

      background-image: url('http://www.w3.org/2000/svg');
      display: inline-block;
      width: 2rem;
      height: 2rem;
      background-repeat: no-repeat;
      background-position: 50%;
      background-size: 100% 100%;
      margin-top: 700px;
    }

    /* Text styles */
    a {
      font-family: 'Roboto Condensed', sans-serif;

    }

    .nav-link {
      margin-right: 30px;
    }

    h1,
    p {
      font-family: 'Roboto Mono', monospace;
    }

    h1 {
      color: black;
      text-align: left;
      width: 190%;
      font-size: 65px;
      line-height: 94px;
    }


    .first-heading {
      color: #4472C4;
      font-weight: 700;
      font-size: 50px;
    }

    .second-heading {
      font-weight: 700;
      font-size: 50px;
      color: black;
    }

    p {
      font-weight: 500;
      color: black;
      text-align: left;
    }

    .featured {
      margin-top: 20px;
      font-family: 'Roboto Condensed', sans-serif;
    }

    .card-title {
      color: black;
    }

    .third-heading {
      font-family: 'Roboto Mono', monospace;
      font-weight: 700;
    }


    /* BUTTON CSS */

    .btn {
      border-radius: 50px;
      padding: 50px;
    }
  </style>
</head>

<body>

<!-- Scroll to Top Button -->
<div id="progress">
  <span id="progress-value">&#x1F815;</span>
</div>


<!-- Nav bar section 1-->
<header class="header">
  <a href="" class="logo"><img style="width: 50px; height: auto;" src="../imgs/yeolom_logo_20x21.png" alt="" srcset=""></a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a class= "nav-item" href="#home">Home</a></li>
    <li><a class= "nav-item" href="#aboutus">About Us</a></li>
    <li><a class= "nav-item" href="#blog">Blog</a></li>
    <li><a class= "nav-item" href="#contact">Contact Us</a></li>
    <li><a href="#store"><button class="store-btn btn btn-outline-light my-2 my-sm-0">Store</button></a></li>
  </ul>
</header>




  <!-- Nav bar section -->

    



  <!-- Hero section after the navbar -->
  <div class="hero-section" style="background-color: #F5F7FA;">
    <div class="container">
      <div class="row">
        <!-- Content column -->
        <div class="col-md-6 mt-5">
          <div class="content col-md-6 mb-10 ml-md-2">
            <h1 class="first-heading">Play fun games,</h1>
            <h1 class="second-heading">Get Entertained.</h1>
            <p class="mb-4">Play fun 2D platformer<br> games with a centralized <br>story</p>
          </div>
        </div>

        <!-- Image column -->
        <div class="col-md-6 mt-5 text-md-right">
          <img src="../imgs/Detective nari.png" class="hero-img img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- Info section -->
  <div class="container-fluid info-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 class="info-title featured">FEATURED GAME</h5>
        </div>
      </div>
      <div class="row">
        <!-- Title tags -->
        <div class="col-md-12">
          <h3 class="info-title third-heading">Latest release</h3>
        </div>
      </div>
      <div class="row">
        <!-- Card section -->
        <div class="container-fluid">
          <div class="row">
            <!-- Card with image on the left and text on the right -->
            <div class="col-md-12">
              <div class="card custom-card">
                <div class="row g-0">
                  <div class="col-md-6 card-image-container">
                    <!-- Image will be set as background here -->
                  </div>
                  <div class="col-md-6">
                    <div class="card-content">
                      <p class="card-description">fun & thrill </p>
                      <h5 class="card-title">Private Parfait</h5>
                      <p class="card-description">A new soldier recruit who is sent on non-combat missions to gather items; once all the items are gathered the recruit was shocked about what he helped to do</p>
<a href="game-details-page.php">
<button class="btn btn-primary download-button glowing-btn"><span class="glowing-txt">GET <span class="faulty-letter">NOW</span></span></button>  
</a> 
                      </form>



                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="other-games">
          <h5 class="info-title featured">OTHER GAMES</h5>
          <h5 class="info-title third-heading">Simple non combat <span style="color:#4472C4">explore</span> and <span style="color:#4472C4">find</span> 2d pixel art platformer</h5>

        </div>


        <!-- Folder css card carousel -->
        <div class="slide-container swiper">
          <div class="slide-content">
            <div class="card2-wrapper swiper-wrapper">
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 1
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 2
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 3
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 4
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 5
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 6
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 7
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 8
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 9
                  </h2>
                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
              <div class="card2 swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card2-image">
                    <img src="../imgs/futureEnv.jpg" alt="" class="card2-img">
                  </div>
                </div>
                <div class="card2-content">
                  <h2 class="name">
                    Game title 10
                  </h2>

                  <p class="description">Some quick example text describing the game and make up the bulk of the
                    card's content.
                  </p>
                  <button class="btn btn-primary">TRY IT</button>

                </div>

              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>

        <!-- Review section -->
        <div class="review">
          <h5 class="info-title featured">Reviews</h5>
          <div class="underline"></div>
        </div>
        <div class="review-text">
          <p>
            <br>“I must admit, the game is oddly compelling.”
            Chika <br>

            <br>“Detective Nari is a very smart fellow”
            Gamer
          </p>
        </div>
      </div>

      <!-- Target devices section -->
        <div class="review">
          <h5 class="info-title featured">Target devices</h5>
          <div class="underline"></div>
        </div>
        <div class="review-text">
          <p>
            <li class="hideOnMobile">
              Android
            </li>
            <li class="hideOnMobile">
              MAC
            </li>
            <li class="hideOnMobile">
              Windows
            </li>
            <li class="hideOnMobile">
              Linux
            </li>
          </p>
        </div>

        <!-- Available at section -->
        <div class="review">
          <h5 class="info-title featured flicker-text">ONLY AVAILABLE AT YEOLOM.COM</h5>
          <div class="underline"></div>
        </div>

        <!-- Email Columns Section -->
        <div class="subscribe-section"></div>

        <!-- Two Columns Section -->
        <div class="two-columns-container">
          <div class="two-columns-section">
            <!-- First Column -->
            <div class="column">
              <h4>Stay in the loop</h4>
              <p>Subscribe to receive the latest news and updates about Yeolom. We promise not to spam you! </p>
            </div>

            <!-- Second Column (Email Form) -->
            <div class="email-form">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-primary subscribe-btn">Continue</button>
              </form>
            </div>
          </div>
        </div>

        
    </div>  
  </div>
<!-- for space between the footer and email section -->
<div class="subscribe-section"></div>

  <!-- Footer section -->
        <footer class="p-5 text-white w-100 footer">
          <div class="container-fluid footer-container ">
            <div class="row">
              <!-- First Column (Logo) -->
              <div class="col-md-3">
                <img src="../imgs/yeolom_logo_20x21.png" alt="Logo" class="img-fluid footer-logo mb-3">
                <p class="mb-3 text-white">We provide the best gaming experience possible. </p>
                <a href="#" class="text-white">@yeolom</a>
              </div>

              <!-- Second Column (Links) -->
              <div class="col-md-3">
                
                <ul class="list-unstyled">
                  <li class="hideOnMobile"><a href="#" class="text-white">About Us</a></li>
                  <li class="hideOnMobile"><a href="#" class="text-white">Portfolio</a></li>
                  <li class="hideOnMobile"><a href="#" class="text-white">Careers</a></li>
                </ul>
              </div>

              <!-- Third Column (Links) -->
              <div class="col-md-3">
                
                <ul class="list-unstyled">
                  <li class="hideOnMobile"><a href="#" class="text-white">Contact Us</a></li>
                  <li class="hideOnMobile"><p class="mb-3 text-white">We have great customer service and would love to hear your feedbacks. </p></li>
                  <li class="hideOnMobile"><a href="contact@yeolom.com" class="text-white">contact@yeolom.com</a></li>
                </ul>
              </div>

              <!-- Fourth Column (Social Media Icons) -->
<div class="col-md-3">
  <h5 class="mb-3">Follow Us</h5>
  <ul class="list-unstyled social-icons">
    <li class="hideOnMobile"><a href="#" class="text-white"><i class="fab fa-facebook"></i></a></li>
    <li class="hideOnMobile"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
    <li class="hideOnMobile"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
    <li class="hideOnMobile"><a href="#" class="text-white"><i class="fab fa-linkedin"></i></a></li>
    <!-- Add more social media icons as needed -->
  </ul>
</div>

            </div>
          </div>
          


        </footer>

<!-- Copyright Text -->
<div class="copyright text-center">
  <p class ="text-white text-center"->&copy;2023 Yeolom. All rights reserved.</p>
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   
</body>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">





<!-- Bootstrap active class script -->
<script>
  // Script to activate Bootstrap's active class on navbar links
  $('.navbar-nav .nav-link').on('click', function() {
    $('.navbar-nav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
</script>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>

</script>

<!-- Swiper Js -->
<script src="js/swiper-bundle.min.js"></script>
<!-- Javascript -->
<script src="js/script.js"></script>








</html>