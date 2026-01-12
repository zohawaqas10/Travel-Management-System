<?php
// Start the session (if you plan to use sessions in the future)
session_start();

// You can set a dummy name here
$userName = "Zoha";  // Example dummy name

?>
<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title> AtoZ </title>
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
  <div class="container">
    <h5 style="text-align:center;">Welcome to Your Dashboard, <?php echo htmlspecialchars($userName); ?>!</h5>
  </div>
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +92 1234567890
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : AtoZ@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
     
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                AtoZ
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="form.php">Book Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bookings.php"> <i class="fa fa-user" aria-hidden="true"></i> My Bookings</a>
                </li>
             
                <button><a href="index.php">Log Out</a></button>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
  
 
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="images/sliderbusimage.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                
                    <h1>
                      We Provide best <br>
                      Transport Service
                    </h1>
                    <p>
                      Discover unforgettable journeys with us – Your trusted travel partner for exploring the world's most breathtaking destinations!
                    </p>
                    <div class="btn-box">
                      <a target="_blank" href="schedules-post-login.php" class="btn1">
                        View Schedules
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      We Provide best <br>
                      Transport Service
                    </h1>
                    <p>
                      From pristine beaches to majestic mountains, let us craft the perfect travel experience tailored just for you!
                    </p>
                    <div class="btn-box">
                      <a target="_blank" href="schedules-post-login.php" class="btn1">
                        View Schedules
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      We Provide best <br>
                      Transport Service
                    </h1>
                    <p>
                      Turning your travel dreams into reality – Experience the joy of effortless planning and extraordinary destinations with us!
                    </p>
                    <div class="btn-box">
                      <a href="schedules-post-login.php" target="_blank" class="btn1">
                        View Schedules
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    
  </div>



  <section id="service" class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            Your comfort is our priority – Dedicated to making your journeys seamless, enjoyable, and unforgettable!
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/luxury.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                 Luxury
                </h5>
                <p>
                  Experience premium comfort with spacious seating, air-conditioning, and onboard entertainment.
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/superluxury.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Super Luxury
                </h5>
                <p>
                   Redefining elegance with reclining seats, enhanced legroom, and complimentary refreshments.
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/economy2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Economy
                </h5>
                <p>
                  Affordable travel without compromising on basic comfort and safety standards.
                </p>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/goldclass2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Gold Class
                </h5>
                <p>
                   Ultimate indulgence featuring exclusive services, VIP seating, and personalized amenities.
                </p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              At AtoZ, we are passionate about making travel an unforgettable experience. With a wide range of bus services, we strive to offer comfort, safety, and convenience to travelers across Pakistan.
            </p>
            
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/aboutbusimage.jpg"alt="" width="700">
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contact" class="contact_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container contact-form">
          <form method="POST" action="contact.php">
          <div>
              <input type="text" name="name" placeholder="Your Name" required />
          </div>
          <div>
              <input type="text" name="phone" placeholder="Phone Number" required />
          </div>
          <div>
              <input type="email" name="email" placeholder="Email" required />
          </div>
          <div>
              <input type="text" name="message" class="message-box" placeholder="Message" required />
          </div>
          <div class="btn_box">
              <button type="submit">SEND</button>
          </div>
         </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +92 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  AtoZ@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="facebook.com">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="twitter.com">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="linkedin.com">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="instagram.com">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Your comfort is our priority – Dedicated to making your journeys seamless, enjoyable, and unforgettable!
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="#">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="#about">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="#service">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="contact.php">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

 
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Anosha and Zoha</a>
      </p>
    </div>
  </section>
  

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>