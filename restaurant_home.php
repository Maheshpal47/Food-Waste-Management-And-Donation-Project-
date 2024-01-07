<?php
    session_start();
    include "logic.php";
    include "server1.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="st1.css">
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="ngo_posts.php">Donation Requests </a>
      </li>
      
      <li class="nav-item">
             <a href="home_page.php" class="btn btn-info" role="button">log out</a>
      </li>

       
    </ul>
  </div>  
</nav>


<div class=" col-12 ">
    <div class="jumbotron">
    <div>
        <h1 class="text">Do_Donate</h1>
        <p class="text1">
        Donate the leftover food and feed the needy ones <br>
        Create posts so the NGO's near you will come to know about you</p>
        
      

    </div>
            </div>

</div>




  <div class="content">
    <div class="row">


  <div class="col-12 others">



              <div class="box1 col-5">
                <br>
              
                <h3 class="rounded bg-info font=plane text-center text-white " text>Donate food  </h3>
                <p class="textbox">If you have some leftover food !! <br>
                haven't received request from any ngo? <br>
                You can create a post here!!<br></p>
                <p class="textb">
                create posts and do your part </p>

                  <br>
                    
                        <br>
                        <div class="but">
                            <a href="create.php" class="btn btn-info " role="button" text >click here</a>
                          
                        </div>
             

              </div>

             

              <div class="box1 col-5">
                <br> 
                <h3 class="rounded bg-info font=plane text-center text-white " text >Your posts </h3>
           
                    <div class="row">
                      <?php foreach($querynew as $q){ ?>
                          <div class="col-lg-4 d-flex justify-content-center">
                              <div class="card text-white bg-dark mt-5" style="width: 10rem;">
                                  <div class="card-body">
                                      <h5 class="card-title"><?php echo $q['restname'];?></h5>
                                      <p class="card-text"><?php echo substr($q['Dateofpost'], 0, 50);?>...</p>
                                      <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>

                                  </div>
                              </div>
                          </div>
                      <?php }?>
                  </div>
                </div>
              </div>
    </div>

 


    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    
      <h3>Connect With Us</h3 >
  
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="contain text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>project details
          </h6>
          <p>
            A project to reduce food waste and use that food to feed the needy ones.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
       Project By 
          </h6>
          <p>
            <a class="text-reset">xxxxxx</a>
          </p>
          <p>
            <a  class="text-reset">yyyyy  </a>
          </p>
          <p>
           <a  class="text-reset">cccccc</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">home page </a>
          </p>
          <p>
            <a href="#!" class="text-reset">create post</a>
          </p>
          <p>
            <a href="#!" class="text-reset">contact us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">project owners</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




</div>

</body>
</html>
