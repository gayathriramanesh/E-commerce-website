<?php
if(isset($_POST["submit"]))
{
  include("common.php");
  $name1 = mysqli_real_escape_string($conn,$_POST["name"]);
  $email1 = mysqli_real_escape_string($conn,$_POST["email"]);
  $password1 = mysqli_real_escape_string($conn,$_POST["password"]);
  $contact1 = mysqli_real_escape_string($conn,$_POST["contact"]);
  $city1 = mysqli_real_escape_string($conn,$_POST["city"]);
  $address1 = mysqli_real_escape_string($conn,$_POST["address"]);
//  if(empty($name1) || empty($email11)|| empty($password1)|| empty($contact1)|| empty($city1)|| empty($address1))
  //{
  //  header("Location: signup.php?signup=emptyboxes");
  //}
   if(!(filter_var($email1,FILTER_VALIDATE_EMAIL)))
   {
     header("Location: signup.php?signup=invalidemail");
   }
  else if(!preg_match("/^[a-zA-Z ]*$/", $name1)) {
    header("Location: signup.php?signup=invalidname");
  }
  else if(!preg_match("/^[0-9]{10}+$/", $contact1)) {
      header("Location: signup.php?signup=invalidcontact");
  }
  else if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $password1))
  {
      header("Location: signup.php?signup=reenterpwd");
  }
  else
  { $email_check = mysqli_query($conn,"SELECT * FROM users where email='$email1'");
    $rowCount = mysqli_num_rows($email_check);
    if($rowCount > 0)
      header("Location: signup.php?signup=repetitiveusername");
   else
  { $password_hash = password_hash($password1, PASSWORD_BCRYPT);
  $sql = "INSERT INTO users(username,email,password,contact,city,address) VALUES ('$name1', '$email1','$password1','$contact1','$city1','$address1')";
  mysqli_query($conn,$sql);
}
}
}
 ?>
