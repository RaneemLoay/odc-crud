<?php

include '../genral/fun.php';


if (isset($_POST['insertdate'])) {
    include '../genral/env.php';
    $name = validate($_POST['name']);
    $salary = validate($_POST['salary']);
    $phone = validate($_POST['phone']);
    $city = validate($_POST['city']);
    $departmentid = validate($_POST['departmentid']);

    $user_data = [
        'name'=> $name,
        'salary'=> $salary,
        'phone'=> $phone,
        'city'=> $city,
        'departmentid'=> $departmentid,
    ];

    if (empty($name)) {
        header("location: ../index.php?error=Name is required&$user_data");
    }
    else if (empty($salary)) {
        header("location: ../index.php?error=Salary is required&$user_data");
    }
    else if (empty($phone)) {
        header("location: ../index.php?error=Phone is required&$user_data");
    }
    else if (empty($city)) {
        header("location: ../index.php?error=City is required&$user_data");
    }
    else if (empty($departmentid)) {
        header("location: ../index.php?error=Department Id is required&$user_data");
    }
    else {
        $sql = "INSERT INTO employees VALUES (null,'$_POST[name]',
        $_POST[salary], $_POST[departmentid], '$_POST[phone]','$_POST[city]')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ./list.php?success=successfuly process");
            
        }
        else {
            header("location: ../index.php?error=unknown error&$user_data");
        }
    }

    
}
