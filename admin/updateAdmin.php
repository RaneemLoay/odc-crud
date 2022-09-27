<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/navbar.php';


if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $selectAdmin = "SELECT * FROM `admin` where id =$id";
    $selAdmin =  mysqli_query($connication, $selectAdmin);
    $row = mysqli_fetch_assoc($selAdmin);
    $name = $row['name'];
    $password=$row['password'];

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $password=$_POST['password'];

        $update = "UPDATE `admin` SET `name` ='$name',`password`='$password' where id =$id";
        $id=mysqli_query($connication, $update);

         header("location: ListAdmin.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<h1 class="text-center"> Update Admin</h1>
<br><br>
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">AdminName : </label>
                    <input class="form-control" value="<?= $name ?>" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">AdminPassword : </label>
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