<?php
session_start();
if(isset($_SESSION['email']))
{ header("Location :product.php"); }
else
{
  header("Location :login.php");
  exit();
}
?>
