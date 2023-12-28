<!DOCTYPE html>
<html>
  <head>
    <title>Lewis Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./static/style.css">
        <link rel="icon" href="./Images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/60fedd8558.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->

    <script src="https://kit.fontawesome.com/60fedd8558.js" crossorigin="anonymous"></script>    
    <title>Lewis Cart</title>
  </head>
  <body>

    <section>
      <nav class="navbar navbar-expand-lg navbar-light" style="background:grey;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">
                <img src="Images\Logo\lewislogo.png" alt="logo" width="45" height="35" class="d-inline-block align-text-top mr-2 navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-capitalize">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 text-capitalize">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                        
                        <li class="nav-item text-capitalize">
                            <a class="nav-link" href="./contactus.php">Contact us</a>
                        </li>
                        <li class="nav-item text-capitalize">
                       
                            <?php
                            session_start();
                            if (isset($_SESSION['username'])) {
                                // User is logged in
                                echo '<a class="nav-link" href="logout.php">Logout</a>';
                            } else {
                                // User is not logged in
                                echo '<a class="nav-link" href="login.html">Login</a>';
                            }
                            ?>
                        </li>       
                        <li class="nav-item text-capitalize">
                            <a class="nav-link" href="./about.php">About us</a>
                        </li>
                        <li class="nav-item text-capitalize">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./books.php">Books</a></li>
                                <li><a class="dropdown-item" href="./">Electronics</a></li>
                                <li><a class="dropdown-item" href="./stationery.php">Stationery</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                
                                <?php
                                if (isset($_SESSION['username'])) {
                                // If the user is logged in, display the welcome message and logout link
                                echo '<li><a class="dropdown-item" href="#">Welcome, ' . $_SESSION['username'] . '</a></li>';
                                echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                                } else {
                                // If the user is not logged in, display the login link
                                echo '<li><a class="dropdown-item" href="./login.html">Login/Signup</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item text-capitalize">
                            <a class="nav-link" href="cart.html">My Cart</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
            </div>
        </div>
    </nav>
    </section>
    
    <section style="padding:20px 70px" id="content">
     <div class="privacybanner" style="text-align: center ;position: relative;">
      <img class="img-sz" src="./Images/About Us Images/privacy.jpg" style=" height: 200px;width: 90%;">
      <div class="head-sz" style="font-weight:bold; font-size:50px; color: black; position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-shadow: 2px 2px rgb(67, 67, 163);">
          
      </div>
     </div>
        
        
     <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Collection of Your Information</h2>
    <p>We collect and store your information when you use our platform. You can browse our platform anonymously, but providing personal information is required for certain services.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Use of Your Information</h2>
    <p>We use your personal information to provide requested services, improve user experience, and ensure security. You may receive promotional information, but you can opt out.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Cookies</h2>
    <p>We use cookies to analyze web traffic, enhance your experience, and offer certain features. You can manage cookie preferences through your browser settings.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Sharing of Personal Information</h2>
    <p>We may share your information with affiliates, business partners, and third parties to provide and improve our services. Your data is not shared for third-party marketing without your consent.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Links to Other Sites</h2>
    <p>Our platform may contain links to other websites. We are not responsible for the privacy practices or content of linked sites.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Security Precautions</h2>
    <p>We maintain safeguards to protect your data. While we take security measures, data transmission over the internet carries inherent risks, and users are responsible for their account security.</p>

    <h2 style="color: #2980b9; margin-top: 15px; font-weight: bold;">Queries</h2>
    <p>If you have questions or concerns about your data and privacy, please contact us using the information provided above.</p> 
        
        
    </section>
    <footer class="bg-dark text-white pt-5 pb-4" style="font-size: 18px;">
      <div class="container text-md-left">
        <div class="row text-md-left">
          <div class="col mt-3" style="color:red;">
            <h5 class="text-uppercase mb-4 font-weight-bold md-sz">DISCOVER US</h5>
            <p>
              <a href="./about.html" class="text-white" style="text-decoration: none;">About us</a>
            </p>
            <p>
              <a href="" class="text-white" style="text-decoration: none;">Our Partners</a>
            </p>
            <p>
              <a href="./Partner Stores.html" class="text-white" style="text-decoration: none;">Lewis Cart Cares</a>
            </p>
          </div>
          <div class="col mt-3"  style="color:red;">
            <h5 class="text-uppercase mb-4 font-weight-bold md-sz">CUSTOMER SUPPORT</h5>
              <p>
                <a href="./faq.html" class="text-white" style="text-decoration: none;">Frequently Asked Questions</a>
              </p>
              <p>
                <a href="" class="text-white" style="text-decoration: none;">Report an issue</a>
              </p>
              <p>
                <a href="./contactus.html" class="text-white" style="text-decoration: none;">Contact us</a>
              </p>
          </div> 
          <div class="col mt-3" style="color:red;">
            <h5 class="text-uppercase mb-4 font-weight-bold md-sz">JOIN US</h5>
              <p>
                <a href="" class="text-white" style="text-decoration: none;">Advertise your products</a>
              </p>
              <p>
                <a href="./Partner Stores.html" class="text-white" style="text-decoration: none;">Become our partner</a>
              </p>
          </div>
          <div class="col mt-3" style="color:red;">
            <h5 class="text-uppercase mb-4 font-weight-bold md-sz">POLICIES</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Privacy Policy</a>
              </p>
              <p>
                <a href="./paypolicy.html" class="text-white" style="text-decoration: none;">Payment Policy</a>
              </p>
              <p>
                <a href="./shippolicy.html" class="text-white" style="text-decoration: none;">Shipping Policy</a>
              </p>
          </div>          
          <div class="col mt-3" style="color:red;">
            <div>
              <h5 class="text-uppercase mb-4 font-weight-bold md-sz">Connect with us</h5>
              <p>
                <a href="https://www.facebook.com" class="text-white" style="text-decoration: none;">
                  <i class="fab fa-facebook-square"></i>
                  Facebook
                </a>
              </p>
              <p>
                <a href="https://twitter.com" class="text-white" style="text-decoration: none;">
                  <i class="fab fa-twitter-square"></i>
                  Twitter
                </a>
              </p>
              <p>
                <a href="https://instagram.com" class="text-white" style="text-decoration: none;">
                  <i class="fab fa-instagram-square"></i>
                  Instagram
                </a>
              </p>
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
          <div class="text-center">
            © 2023 Lewis Cart. All rights reserved.
          </div>
        </div>
      </div>
    </footer>
    
    <!-- scroll to top button -->
    <button id = "btnScrollToTop">
      <i class="material-icons">arrow_upward</i>
  </button>
  
  <script>
      const btnScrollToTop = document.querySelector("#btnScrollToTop");
       btnScrollToTop.addEventListener("click", function () {
          window.scrollTo(0,0); }
      );
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    </script>
  </body>
</html>
