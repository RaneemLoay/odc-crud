<?php
include 'C:\xampp\htdocs\odc-crud\genral\fun.php';


if (isset($_GET['id'])) {
    include 'C:\xampp\htdocs\odc-crud\genral\env.php';
    $id = validate($_GET['id']);
    // Read
    $select = "SELECT * FROM employees where id =$id";
    $employee = mysqli_query($conn, $select);
    if (mysqli_num_rows($employee) > 0) {
        $row = mysqli_fetch_assoc($employee);
    } else {
        header("Location: list.php");
    }
} elseif (isset($_POST['update'])) {
    include '../genral/env.php';
    if (empty($name)) {
        header("location: ../update.php?id=$id&error=Name is requireda");
    } else if (empty($salary)) {
        header("location: ../update.php?id=$id&error=Salary is required");
    } else if (empty($phone)) {
        header("location: ../update.php?id=$id&error=Phone is required");
    } else if (empty($city)) {
        header("location: ../update.php?id=$id&error=City is required");
    } else if (empty($departmentid)) {
        header("location: ../update.php?id=$id&error=Department Id is required");
    } else {
        $sql = "UPDATE `employees` SET `Name`='$_POST[name]',
        `Salary`=$_POST[salary],`departmentId`=$_POST[departmentid],`phone`='$_POST[phone]',`city`='$city' WHERE id='$_POST[id]'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ./list.php?success=successfuly process");
        } else {
            header("location: ../update.php?id=$id&error=unknown error");
        }
    }
} else {
    header("Location: list.php");
}
