<?php
include '../general/env.php';
include '../shared/header.php';
include '../shared/navbar.php';

$select = "SELECT * FROM students";
$sel = mysqli_query($connication,$select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM students WHERE id=$id ";
    $id=mysqli_query($connication, $delete);
    header("location: ListStudent.php");
}
$update = false;

?>
<!DOCTYPE html>
<html lang="en">

<h1 class="text-center"> Welcome Student List Page </h1>

<br>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
                <tr>
                    <th> id </th>
                    <th> Student Name </th>
                    <th> Student Phone </th>
                    <th> Student Email </th>
                    <th> Student Password </th>
                    <th> Action </th>
                    <th> </th>
                </tr>
                <?php foreach ($sel as $data) { ?>
                <tr>
                    <td><?= $data['id'] ?> </td>
                    <td><?= $data['name'] ?> </td>
                    <td><?= $data['phone'] ?> </td>
                    <td><?= $data['email'] ?> </td>
                    <td><?= $data['password'] ?> </td>

                    <td> <a class="btn btn-info"
                            href="/Projects/odc-crud/student/updateStudent.php?edit=<?= $data['id'] ?>"> Update </a>
                    </td>
                    <td> <a class="btn btn-danger"
                            href="/Projects/odc-crud/student/ListStudent.php?delete=<?= $data['id'] ?>"> Delete </a>
                    </td>
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