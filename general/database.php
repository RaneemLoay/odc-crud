<?php 


//connection
$connection = mysqli_connect("localhost","root","","odc4");




//select branch(show)
$select = "SELECT * from `branches`";
$showbranch = mysqli_query($connection,$select);



//select courses(show)
$select = "SELECT * from `courses`";
$showcourse = mysqli_query($connection,$select);

//select admins(show)
$select = "SELECT * from `admin`";
$showadmins = mysqli_query($connection,$select);


//select students(show)
$select = "SELECT * from `students`";
$showstudents = mysqli_query($connection,$select);




//courses


if(isset($_POST['insert-course-btn'])){

        $coursename = $_POST['name'];
    
    
    //insert
    $insert = "INSERT INTO `courses` values(null,'$coursename')";
    $insertdata = mysqli_query($connection,$insert);
    
    header("location: list.php");

}

 


//branch

if(isset($_POST['insert-branch-btn'])){

    $branchname = $_POST['name'];


//insert
$insert = "INSERT INTO `branches` values(null,'$branchname')";
$insertdata = mysqli_query($connection,$insert);

header("location: list.php");


}





//edit branch update
if(isset($_POST['edit-branch-btn'])){

    $name= $_POST['name'];
    $updateid = $_GET['id'];

   //update
   $updatebranch = "UPDATE `branches` SET `name`='$name' WHERE `id` = $updateid  ";
   $updatebranchdata = mysqli_query($connection,$updatebranch);
   header('Location: /ODC/odc-crud/branches/list.php');

}


//edit course update
if(isset($_POST['edit-course-btn'])){

    $name= $_POST['name'];
    $updateid = $_GET['id'];

   //update
   $updatecourse = "UPDATE `courses` SET `name`='$name' WHERE `id` = $updateid  ";
   $updatecoursedata = mysqli_query($connection,$updatecourse);
   header('Location: /ODC/odc-crud/courses/list.php');

}




?>