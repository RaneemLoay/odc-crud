<?php
include '../shared/header.php';
include '../genral/env.php';
include './creat.php';



// Read
$select = "SELECT * FROM employees";
$allEmployees = mysqli_query($conn, $select);


?>


<h4 class="display-4 text-center">Veiw All Date</h4>

<table class="table table-striped text-center ">
    <h3 class=" text-center">
        <p class="mb-0"><?php ?></p>
    </h3>
    <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success'] ?>
        </div>
    <?php } ?>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">EmployeeName</th>
            <th scope="col">salary</th>
            <th scope="col">phone</th>
            <th scope="col">city</th>
            <th scope="col">departmentid</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allEmployees as $data) { ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['Name'] ?></td>
                <td><?= $data['Salary'] ?></td>
                <td><?= $data['phone'] ?></td>
                <td><?= $data['city'] ?></td>
                <td><?= $data['departmentId'] ?></td>
                <td>
                    <a href="/odc-crud/update.php?id=<?= $data['id'] ?>"class="btn btn-success">UpDate</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="link-right">
    <a href="../index.php" class="link-primary">Creat New Data</a>
</div>



<?php
include '../shared/footer.php'
?>