<?php 
    include "../shared/header.php";
    include "../general/env.php";



    if (isset($_POST['login'])) {
        $id=$_POST['login'];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $select= "SELECT * FROM `admin` WHERE `name`='$name' and `password`='$password'";
        $row = mysqli_query($connication,$select);
        $numRows =mysqli_num_rows($row);
        if($numRows == 1)
        {
            echo "True Admin ";
            $_SESSION["userName"]="admin";
            header("location: ../index.php");
        }
        else
        {
            echo "False Admin ";
        }
    }
    // session_destroy();
    // print_r($_SESSION);

?>
<br>
<h1>Welcome in System</h1>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

<body>
    <div class="card card-body">
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>


<?php 
include "../shared/footer.php";
?>