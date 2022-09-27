<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/navbar.php';

$select = "SELECT * FROM `admin`";
$s = mysqli_query($connication,$select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `admin` WHERE id=$id ";
    $id=mysqli_query($connication, $delete);
    header("location: ListAdmin.php");
}
$update = false;

?>
<!DOCTYPE html>
<html lang="en">

            <h1 class="text-center"> Welcome Admins List Page </h1>

             <br>   
             <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th> id </th>
                        <th> Admin Name </th>
                        <th> Admin Password </th>
                        <th> Action </th>
                        <th>     </th>
                    </tr>
                    <?php foreach ($s as $data) { ?>
                        <tr>
                            <td><?= $data['id'] ?> </td>
                            <td><?= $data['name'] ?> </td>
                            <td><?= $data['password'] ?> </td>
                            <td> <a class="btn btn-info" href="/Projects/odc-crud/admin/updateAdmin.php?edit=<?= $data['id'] ?>"> Update </a> </td>
                            <td> <a class="btn btn-danger" href="/Projects/odc-crud/admin/ListAdmin.php?delete=<?= $data['id'] ?>"> Delete </a> </td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>

    </div>


<?php
include '../shared/footer.php';
?>

</html>