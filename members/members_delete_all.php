<?php

require_once "connDB.php";

$del = $_POST['del'];
//print_r($del);
foreach ($del as $value) {
    mysqli_query($conn, "DELETE FROM `students` WHERE `cID`=" . $value);
}
mysqli_close($conn);
header("location: php_mysqli_read.php");