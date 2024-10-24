<?php
    include "conn.php";
    session_start();
    if(!isset($_SESSION['uname'])){
      header("Location: {$hostname}/stm/loginsign/login/login.php");
    }
?>

<!DOCTYPE html>
<!DOCTYPE html>
<?php
?>
<html lang="en">

<head>
  <!-- Stock-Market-Recommendation-and-Advisory -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Stockyyy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../img/lg.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>

  .modal-content{
    border-radius: 7px;
    background: #151E28;
}
.close{
    color: yellow;
}
.close:hover{
    color: yellowgreen;
}
.modal-body h1 {
    font-weight: 900;
    font-size: 2.3em;
    text-transform: uppercase;
}
 .modal-body span{
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: 500;
  }

</style>  
</head>

<body>

  
<<<<<<< HEAD
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  <script>
      $(document).ready(function(){       
          $('#myModal').modal('show');
           });
  </script>
  
=======
>>>>>>> 2ff3be33ebab2fbffc54be4757d532a4cd67c73c
  <!-- <div id="particles-js" style="position: absolute;width: 100%;height: 100vh;"></div>
        <script src="Particles/particles.js"></script>
    <script src="Particles/app.js"></script> -->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">

    <div class="header">
      <script type="text/javascript" style="pointer-events: none; cursor: none;"
        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
          </script>
          <script type="text/javascript">
          new TradingView.widget({
            "symbols": [
              {
                "description": "SENSEX",
                "proName": "BSE:SENSEX"
              },
              {
                "description": "RELIANCE",
                "proName": "BSE:RELIANCE"
              },
              {
                "description": "INFY",
                "proName": "BSE:INFY"
              },
              {
                "description": "TCS",
                "proName": "BSE:TCS"
              },
              {
                "description": "WIPRO",
                "proName": "BSE:WIPRO"
              }
            ],
              "showSymbolLogo": true,
                "colorTheme": "dark",
                  "isTransparent": false,
                    "displayMode": "regular",
                      "locale": "in"
          });
        </script>
    </div>

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <span class="stockbar">
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_e4rTY4.json" background="transparent"
          speed="1" style="width: 40px; height: 40px;" loop autoplay></lottie-player>
      </span>
      <a href="index.php" class="logo d-flex align-items-center" style="color: yellow;">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>Stockyyy</span>
      </a>
      <nav id="navbar" class="navbar">

        <ul>
          <li>
            <a class="nav-link scrollto one"style="" href="#">
            <form action="search.php" method="get">
              <div class="search1"style="">
                <span class=""style="">
                <i class="bi bi-search" >  <input class="in_search" type="search" name="search" value=""
                      placeholder="Search here your favourite Stocks..." style="border:0px"></i>

                    
                 
                </span>
              </div>
              </form>
            </a>
          </li>

          <li><a class="nav-link scrollto" href="#Watchlist">Your Watchlist</a></li>

          <li><a class="nav-link scrollto" href="#Notification">Notification</a></li>

          

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          
          <li><a class="nav-link scrollto" href="profile.php">Welcome <?PHP
          echo $_SESSION['uname']; ?></a></li>
          <li><a class="nav-link scrollto" href="\stm/loginsign/login/logout.php">Logout</a></li>
          <!-- <li><a class="getstarted scrollto" href="../loginsign/login/login.php">LogIn/SignUp</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    
  </section><!-- End Hero -->






  <!-- End Team Section -->
    <!-- contact section begin -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <!--<h2>Contact</h2>-->
          <p style="color: #FFC72B;">Contact Us</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Charotar University<br>Nadiad,Gujarat.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+99 99XXXXXXXX<br>+99 99YYYYYYYY</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>it@charusat.com<br>contact@charusat.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <span style="color: #FFC72B;">Three Bulls</span>
            </a>
            <p style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, expedita.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" style="color: rgba(255, 255, 255, 0.822);">
            <h4>Contact Us</h4>
            <p>Charotar University <br>Nadiad,Gujarat.<br>
              <br>
              <strong style="color: yellow;">Phone:</strong> +99 99XXXXXXXX<br>
              <strong style="color: yellow;">Email:</strong> it@charusat.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  
</body>

</html>
