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
  <link rel="stylesheet" href="css/style.css">
    <style>
    .footer
    {
    padding: 10px 0;
     background-color: #101010;
     color:#9d9d9d;
     bottom:0;
     width: 100%;
    }
    </style>
    <title>Lifestyle store</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand" href="#">Lifestyle store</a>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
      <a class="nav-link " href="cart.php"><i class="fas fa-cart-plus"></i>cart</a>
      </li>
    <li class="nav-item ">
       <a class="nav-link " href="logout.php"><i class="fas fa-sign-out-alt"></i>logout</a>
     </li>
  </ul>
</div>
</nav>
  <div class = "container">
   <div class = "jumbotron">
     <h1>Welcome to our lifestyle store!</h1>
     <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p>
</div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Canon EOS</h5>
      <p class="card-text" >Price Rs.36000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn1" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title" >Sony DSLR</h5>
      <p class="card-text" >Price Rs.40000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn2" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Sony DSLR</h5>
      <p class="card-text">Price Rs.50000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn3" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Olympus DSLR</h5>
      <p class="card-text">Price Rs80000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn4" style ="width:100%">Add to cart</button>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/9.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Titan Model #301</h5>
      <p class="card-text">Price Rs.13000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn5" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/10.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Titan model #201</h5>
      <p class="card-text">Price Rs.3000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn6" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/11.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">HMT Milan</h5>
      <p class="card-text">Price Rs.8000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn7" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/12.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Feber luba #111</h5>
      <p class="card-text">Price Rs.18000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn8" style ="width:100%">Add to cart</button>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/8.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">H & W</h5>
      <p class="card-text">Price Rs.800.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn9" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/6.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Louis philippe</h5>
      <p class="card-text">Price Rs.1000.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn10" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/13.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">John Zok</h5>
      <p class="card-text">Price Rs.1500.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn11" style ="width:100%">Add to cart</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/14.jpg" alt="Card image cap">
    <div class="card-body">
      <center>
      <h5 class="card-title">Jhal sani</h5>
      <p class="card-text">Price Rs.1300.00</p>
    </center>
      <button type = "button" class="btn btn-primary " name="btn12" style ="width:100%">Add to cart</button>
    </div>
  </div>
</div>
<div class = "footer">
  <div class = "container">
  <center>
  <p>Copyright © Lifestyle Store. All RightsReserved|Contact Us: +91 90000 00000</p>
</center>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
