<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <title>Lifestyle store</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION['email'])){ ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
          <a class="navbar-brand" href="#">Lifestyle store</a>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto ">
        <li class="nav-item ">
        <a class="nav-link " href="cart.htm"><i class="fas fa-cart-plus"></i>cart</a>
        </li>
     <li class="nav-item ">
        <a class="nav-link " href="settings.htm"><i class="fas fa-cog"></i>settings</a>
      </li>
      <li class="nav-item ">
         <a class="nav-link " href="logout.php"><i class="fas fa-sign-out-alt"></i>logout</a>
       </li>
    </ul>
  </div>
  </nav>
<?php }
  else { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Lifestyle store</a>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
      <a class="nav-link " href="signup.php"><i class="fas fa-user-plus"></i>signup</a>
      </li>
   <li class="nav-item ">
      <a class="nav-link " href="login.php"><i class="fas fa-sign-in-alt"></i>login</a>
    </li>
  </ul>
</div>
</nav>
<?php } ?>
  </body>
</html>
