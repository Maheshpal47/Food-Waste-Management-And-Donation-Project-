<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">

    <!-- css file -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home - WFMD</title>

</head>

<body>

    <header>
      

        <div id="bottomHeader">
            <div class="container-fluid">
                  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a class="navbar-brand" href="">
                        <img class="img-fluid logo1" src="images/logo.jpeg" height="61px" width="155px" alt="">
                    </a>
                    <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarToggler">








                        <ul class="navbar-nav ">
                          

                            <li class="nav-item active">

                                <a class="home nav-link " href="index.php"  >Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="ab nav-link" href="aboutus.php">About Us</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="ret nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Restaurants</a>
                                <div class="dropdown-menu">
                                   
                                    <a class="dropdown-item" href="">Register</a>
                                    <a class="dropdown-item" href="">Login</a>
                                     <a class="dropdown-item" href="donate.php">Donate</a>
                                    
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="ng nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">NGO</a>
                                <div class="dropdown-menu">
                                   
                                    <a class="dropdown-item" href="">Register</a>
                                    <a class="dropdown-item" href="">Login</a>
                                     <a class="dropdown-item" href="list.php">NGO List</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <!--- START : Home Page Button section -->

    <section class="top-home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Save - Protect - Feed</h4>
                    <h1>What if the excess food and empty plates meet?</h1>
                    <h5>Tons of good cooked food is thrown in the dustbin every day when 1 million people including 75,000 children in Mumbai go to bed with and empty stomach.</h5>
                    <button style="font-weight: 700; color: black; background-color: #9B786F" class="btn btn-primary btn-lg" onclick="window.location.href = '//docs.google.com/forms/d/e/1FAIpQLSdNMXk0iX7vA-6_SSkVvGVtHAxOBAPCjGFpQjFPynMs1-y2Gw/viewform' "> Donate </button>  <a href="#">Read More...</a> 
                </div>

                <div class="col-md-5">
                    <img src="images/1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <!--- END : Home Page top-home-section -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>
                        What if the excess food and empty plates meet?
                    </h3>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">

                </div>
            </div>

            <div class="row">

            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/c1.jpg" alt="">
                    <div class="text-center">
                        <div class="counter" data-target="6000">0</div>
                        <h3>Meals served so far</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/c2.jpg" alt="">
                    <div class="text-center">
                        <div class="counter" data-target="3000">0</div>
                        <h3>Volunteer hours and counting</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/c3.jpg" alt="">
                    <div class="text-center">
                        <div class="counter" data-target="5300">0</div>
                        <h3>Meals to children Served So Far</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="full-footer">
        <div class="container top-footer p-md-3 p-1">
            <div class="row">
                <div class="col-md-3 pl-4 pr-4">
                    <img class="img-fluid" src="images/logo.jpeg" height="61px" width="155px" alt="">
                    <p>
                        The sharp rise in the amount of food waste creates need for charity in terms of donations.
                        <a href="#">Read More....</a>
                    </p>
                    <a style="color: black;" class="p-1" href="https://www.facebook.com/"><i class="fab fa-2x fa-facebook-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://www.google.com/"><i class="fab fa-2x fa-google-plus-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://twitter.com/"><i class="fab fa-2x fa-twitter-square"></i></a>
                    <a style="color: black;" class="p-1" href="https://www.instagram.com/"><i class="fab fa-2x fa-instagram-square"></i></a>
                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Important Links</h3>
                    <a href="donatereq.php">Donation Request</a><br>
                    <a href="list.php">NGO List</a><br>
                    <a href="donate.php">Donate</a><br>
                    <a href="blog.php">Blogs</a><br>
                    <a href="aboutus.php">About Us</a><br>

                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Our Services</h3>
                    <a href="#">Terms & Security</a><br>
                    <a href="policies.php">Privacy Policy</a><br>
                    <a href="#">Community</a><br>
                    <a href="#">Careers</a><br>

                </div>

                <div class="col-md-3 pl-4 pr-4">
                    <h3>Contact Us</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +(91) 8369008375 </a><br>
                    <a href="mailto:mahesh2pal@gmail.com"> <i class="fas fa-envelope"></i> mahesh2pal@gmail.com</a><br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64332144568!2d72.74109713631994!3d19.08252232482484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633617239954!5m2!1sen!2sin"
                            frameborder="0"></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid bottom-footer pt-2">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Copyrights © 2021 - All Rights Reserved</p>
                </div>
            </div>
        </div>



    </footer>

    <script src="script.js"></script>
    <!-- bootstrap js -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>