<?php
      include('../shared/header.php');
      include('../shared/navbar.php');
      include('../general/database.php');



?>


      <!-- show data table -->
      <div class="container col-6 mt-5" enctype="multipart/form-data">  
     <table class="table">
      <thead class="thead-dark">
       <tr>
       <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>

        </tr>
       </thead>
      <tbody>
       <?php foreach ( $showcourse as $data ){ ?>
        <tr>
           <td><?= $data["id"]?></td> 
           <td><?= $data["name"]?></td> 


           <td><div class="btn-group px-md-5 col-6">
            
           <?php $updateurl = 'update.php?id=' . $data['id'] ;?>
         <a class='btn btn-info' name='update-dep-btn' href="<?= $updateurl ?>">update</a>

         
          <?php $delurl = 'delete.php?id=' . $data['id'] ;?>
          <a class='btn btn-danger' name='del-dep-btn' href="<?= $delurl ?>">delete</a>




            </div> </td> 
            

       
       </tr>
        
       <?php } ?>
     </tbody>
      </table>

  </div>      



  <?php
      include('../shared/footer.php');
   ?>