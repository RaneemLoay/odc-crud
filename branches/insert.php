
      <?php
      include('../shared/header.php');
      include('../shared/navbar.php');
      include('../general/database.php');

       ?>

    <!--  insertion form -->
    <div class="container col-6 border border-info mt-2">   

       
        <form action="" method="post">
            <label for="">branch name:</label>
            <input type="text" name="name" class="form-control">



            <button name="insert-branch-btn" class=" btn btn-info mt-3 mr-3 ">insert branch</button>
         </form>
     </div>  

   <?php  include('../shared/footer.php'); ?>