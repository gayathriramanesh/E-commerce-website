<?php
session_start();
if(isset($_POST['submit']))
{   include ("common.php");
    $email1 = mysqli_real_escape_string($conn,$_POST["email"]);
    $password1 = mysqli_real_escape_string($conn,$_POST["password"]);
    $sql = mysqli_query($conn,"SELECT * FROM users where email='$email1' and password='$password1'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        header("Location: product.php");
        $_SESSION['email'] = $email1;

    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
