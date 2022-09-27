<?php
include '../shared/header.php';
include '../shared/navbar.php';
include '../general/env.php';

    if (isset($_POST['add'])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
    
        $insert = "INSERT INTO `admin` VALUES(NULL,'$name','$password')";
        mysqli_query($connication, $insert);
        header("location: listAdmin.php");
    }
    $name = "";
    $password="";
    $update = false;
    
?>

<h1 class="text-center"> Welcome Create Admin Page </h1>
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
                <button name="add" class="btn btn-info"> Add New Admin </button>
            </form>
        </div>
    </div>
</div>
<?php
include '../shared/footer.php';
?>

</html>