<?php
if(!isset($_SESSION['userName']))
{
  //header_remove();
  header("location: ./auth/login.php");
  exit;
}
?>
include "shared/header.php";
include "shared/navbar.php";
include "general/database.php";
?>

<h1>Welcome in System</h1>


<?php 
include "shared/footer.php";
?>