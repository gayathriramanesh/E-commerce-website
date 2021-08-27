
<?php
include("common.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="./css/addons/datatables.min.css">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Life Style Store</title>
        <link href="index.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
          <a class="navbar-brand" href="#">Lifestyle store</a>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto ">
        <li class="nav-item ">
        <a class="nav-link " href="login.php"><i class="fas fa-sign-in-alt"></i>login</a>
        </li>
     <li class="nav-item ">
        <a class="nav-link " href="signup.php"><i class="fas fa-user-plus"></i>signup</a>
      </li>
    </ul>
  </div>
  </nav>
        <div class="content">
            <!--Main banner image-->
            <div class = "banner_image">
                <div class="inner-banner-image">
                    <center>
                        <div class="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="login.php" class="button">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
            <!--Item categories listing-->
            <div class="container">
                <div class="items">
                    <a href="login.php" >
                        <img src="img/1.jpg" alt="" class="thumbnail">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="login.php" >
                        <img src="img/10.jpg" alt="" class="thumbnail">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="login.php" >
                        <img src="img/13.jpg" alt="" class="thumbnail">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Item categories listing end-->

        <!--Footer-->
        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
        <!--Footer end-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
