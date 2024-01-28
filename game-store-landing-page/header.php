<head>
<title>header</title>

   

    <!-- Folder CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

body,html{
    margin: 0;}


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


.header{
    position: absolute !important;
    top: 0%;
}


</style>




</head>
<body>
  <!-- Nav bar section 1-->
<header class="header">
  <a href="" class="logo"><img style="width: 50px; height: auto;" src="../imgs/yeolom_logo_20x21.png" alt="" srcset=""></a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a class= "nav-item" href="index.php">Home</a></li>
    <li><a class= "nav-item" href="#aboutus">About Us</a></li>
    <li><a class= "nav-item" href="#blog">Blog</a></li>
    <li><a class= "nav-item" href="#contact">Contact Us</a></li>
    <li><a href="#store"><button class="store-btn btn btn-outline-light my-2 my-sm-0">Store</button></a></li>
  </ul>
</header>
<!-- Nav bar section -->  

</body>


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
