<?php


function validate($date){
    $date = trim($date);
    $date = stripslashes($date);
    $date = htmlspecialchars($date);
    return $date;
}


?>