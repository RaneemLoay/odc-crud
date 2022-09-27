<?php 

         $updateid = $_GET['id'];

      include('../shared/header.php');
      include('../shared/navbar.php');
      include('../general/database.php');
       
      $select = "SELECT * from `courses` where `id` = $updateid ";
      $coursesselect = mysqli_query($connection,$select);
      $coursedata = mysqli_fetch_assoc($coursesselect);
   
       ?>
  
  
  <!--update from -->  
  <div class="container col-6 border border-info mt-2">   
  <form action="" method="post">

            <label for="">course name:</label>
            <input type="text" name="name" class="form-control" value = "<?= $coursedata["name"] ?>">


      <button name="edit-course-btn" class=" btn btn-info mt-3 mr-3 ">edit course</button>
   </form>
</div>  
 


<?php
      include('../shared/footer.php');
   ?>
