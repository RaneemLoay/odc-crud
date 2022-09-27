<?php
      include('../shared/header.php');
      include('../shared/navbar.php');
      include('../general/database.php');

       //select branch(show)
$select = "SELECT * from `studentcourse`";
$showregistered = mysqli_query($connection,$select);


?>


      <!-- show data table -->
      <div class="container col-6 mt-5" enctype="multipart/form-data">  
     <table class="table">
      <thead class="thead-dark">
       <tr>
       <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Course</th>
        <th scope="col">Branch</th>

        </tr>
       </thead>
      <tbody>
       <?php foreach ( $showregistered as $data ){ ?>
        <tr>
           <td><?= $data["studentid"]?></td> 
           <td><?= $data["name"]?></td> 
           <td><?= $data["coursename"]?></td> 
           <td><?= $data["branchname"]?></td>

           <td><div class="btn-group px-md-5 col-6">
            

       

            </div> </td> 
            

       
       </tr>
        
       <?php } ?>
     </tbody>
      </table>

  </div>      



  <?php
      include('../shared/footer.php');
   ?>