<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/navbar.php';


if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $selectstude = "SELECT * FROM students where id =$id";
    $sel =  mysqli_query($connication, $selectstude);
    $row = mysqli_fetch_assoc($sel);
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password=$row['password'];

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password=$_POST['password'];

        $update = "UPDATE students SET `name` ='$name' ,phone=$phone,email='$email',`password`='$password'  where id =$id";
        $id=mysqli_query($connication, $update);

         header("location: ListStudent.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<h1 class="text-center"> Update Student</h1>
<br><br>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Student Name : </label>
                    <input class="form-control" value="<?= $name ?>" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Student Phone : </label>
                    <input class="form-control" value="<?= $phone ?>" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="">Student Email : </label>
                    <input class="form-control" value="<?= $email ?>" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="">Student Password : </label>
                    <input class="form-control" value="<?= $password ?>" type="password" name="password">
                </div>

                <br>
                <button name="update" class="btn btn-primary"> Update </button>
            </form>
        </div>
    </div>
</div>
<br>
<?php
include '../shared/footer.php';
?>

</html>