<?php 
if($_SESSION("userName")==null)
{
  header("location : /odc-crud/login.php");
  exit;
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/Projects/odc-crud/index.php">Home <span class="sr-only">(current)</span></a>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Branches
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/Projects/odc-crud/branches/insert.php">Insert new branch</a>
          <?php
          //  if(!isset($_SESSION['adminid'])) {
             ?>
          <a class="dropdown-item" href="/Projects/odc-crud/branches/list.php"> Show branches</a>
          <?php 
        // }
         ?>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/Projects/odc-crud/courses/insert.php">Insert New Course</a>
          <?php 
          // if(!isset($_SESSION['adminid'])) { 
            ?>
          <a class="dropdown-item" href="/Projects/odc-crud/courses/list.php"> Show Courses</a>
          <?php
        //  } 
         ?>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Students
        </a>
        <div class="dropdown-menu">
        <?php
        //  if(isset($_SESSION['adminid'])) { 
          ?>
          <a class="dropdown-item" href="/Projects/odc-crud/student/createStudent.php">Insert new student</a>
          <?php 
        // }
         ?>
          <a class="dropdown-item" href="/Projects/odc-crud/student/ListStudent.php"> Show students</a>
          <a class="dropdown-item" href="/Projects/odc-crud/student/registered.php"> Show Registered</a>

        </div>
      </li>


      <?php
      //  if(isset($_SESSION['adminid'])) {
         ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/Projects/odc-crud/admin/createAdmin.php">Add new Admin</a>
        </div>
      </li>
      <?php 
    // } 
    ?>


<li class="nav-item active">
        <?php if(isset($_SESSION['userName'])) { ?>
          <a class="nav-link btn btn-danger mr-5" href="/Projects/odc-crud/auth/logout.php" >logout <span class="sr-only">(current)</span></a>

        <?php  } else { ?>
          <a class="nav-link btn btn-success" href="/Projects/odc-crud/auth/login.php"> login <span class="sr-only">(current)</span></a>
          <?php  } ?>
    </ul>
  </div>
</nav>