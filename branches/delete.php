<?php

  include('../general/database.php');
  include('../general/functions.php');

  if(isset($_GET['id'])){
    
      $deletedepid = $_GET['id'];

// sql to delete a record
$deletebranch = "DELETE from `branches` where `id` = $deletedepid ";
$deletebranchdata = mysqli_query($connection,$deletebranch);
if ($deletebranchdata) {
  echo 'deleted';
    header('Location: list.php'); //If list.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

}

?>