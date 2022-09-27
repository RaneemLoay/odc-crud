<?php
include './shared/header.php';
include './employees/update.php';

?>
<form class="row g-3" method="POST" action="employees/update.php">
    <h4 class="display-4 text-center">UpDate Date</h4>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error'] ?>
        </div>
    <?php } ?>
    <div class="col-md-6">
        <label for="name" class="form-label">Employee Name</label>
        <input type="text" name="name" class="form-control" value="<?= $row['Name'];  ?>" id="name">
    </div>
    <div class="col-md-6">
        <label for="salary" class="form-label">Employee salary</label>
        <input type="text" name="salary" class="form-control" value=<?=$row['Salary']; ?> id="salary">
    </div>
    <div class="col-12">
        <label for="phone" class="form-label">Employee phone</label>
        <input type="text" class="form-control" name="phone" value="<?=$row['phone']; ?>" id="phone">
    </div>
    <div class="col-md-6">
        <label for="city" class="form-label">Employee city</label>
        <select class="form-control" id="city" value="<?=$row['city']; ?>" name="city">
            <option value="cairo">cairo</option>
            <option value="Alex">Alex</option>
            <option value="Dhab">Dhab</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="Department" class="form-label">Department Id</label>
        <select class="form-control" id="Department" value="<?=$row['departmentId'] ;?>" name="departmentid">
            <option value="1">CS</option>
            <option value="2">IS</option>
            <option value="3">IT</option>
        </select>
    </div>

    <div class="col-12 text-center">
        <h1 style="padding: 15px; "></h1>
        <button name="update" class="btn btn-success"> UpDate Date </button>
    </div>
    <a href="employees/list.php" class="btn btn-light">view all data</a>
</form>

<?php
include './shared/footer.php';
?>