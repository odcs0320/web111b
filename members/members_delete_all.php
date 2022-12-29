<?php
require_once "members_connDB.php";
$del = $_POST['del'];
// var_dump($del);
foreach ($del as $value) {
    mysqli_query($conn, "DELETE FROM `members` WHERE `m_id`='" . $value . "'");
}

mysqli_close($conn);
header('Location: members_read.php');
