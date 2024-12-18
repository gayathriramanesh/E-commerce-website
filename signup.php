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
    <style>
    .footer
    {
     position:fixed;
     padding: 10px 0;
     background-color: #101010;
     color:#9d9d9d;
     bottom:0;
     width: 100%;
    }
    body{
       background: linear-gradient(to right, #b92b27, #1565c0);
    }
    .container
    {
      text-align: center;
      margin:auto;
    }
    .box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
}
    </style>
    <title>Lifestyle store</title>
  </head>
  <body>
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
<div class="container">
<div class = "row">
   <div class="col-md-6">
     <div class="card">
     <form action = "register.php" method = "post" class = "box">
      <h2>SIGNUP</h2>
        <div class = "form-group">
          <input type = "name"  placeholder = "Name" name = "name" class="form-control" >
        </div>
        <div class = "form-group">
          <input type = "email"  placeholder = "Email" name = "email" class="form-control">
        </div>
        <div class = "form-group">
          <input type = "password" placeholder = "Password" name= "password" class="form-control">
        </div>
        <div class = "form-group">
          <input type = "contact"  placeholder = "Contact" name = "contact" class="form-control">
        </div>
        <div class = "form-group">
          <input type = "text"  placeholder = "City" name= "city" class="form-control">
        </div>
        <div class = "form-group">
          <input type = "text"  placeholder = "Address" name= "address" class="form-control">
        </div>
        <button type = "submit" class = "btn btn-primary" name = "submit">Submit</button>
        <p>Already have an account?<a href = "login.php">login here</a></p>
    </form>
  </div>
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
