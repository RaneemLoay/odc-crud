<?php 

         $updateid = $_GET['id'];

      include('../shared/header.php');
      include('../shared/navbar.php');
      include('../general/database.php');
       
      $select = "SELECT * from `branches` where `id` = $updateid ";
      $branchesselect = mysqli_query($connection,$select);
      $branchesdata = mysqli_fetch_assoc($branchesselect);
   
       ?>
  
  
  <!--update from -->  
  <div class="container col-6 border border-info mt-2">   
  <form action="" method="post">

            <label for="">branches name:</label>
            <input type="text" name="name" class="form-control" value = "<?= $branchesdata["name"] ?>">


      <button name="edit-branch-btn" class=" btn btn-info mt-3 mr-3 ">edit branch</button>
   </form>
</div>  
 


<?php
      include('../shared/footer.php');
   ?>
