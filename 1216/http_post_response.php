<?php

$uname = $_POST["username"];
$upass = $_POST["password"];

if ($uname == "Jim" && $upass == "1qaz@wsx") {
    setcookie('username', $uname, time() + 24 * 60 * 60);
    setcookie('password', $upass, time() + 24 * 60 * 60);
    //echo "登入成功";
    $success = ['msg' => 'OK', 'info' => 'hello'];
    echo json_encode($success);
} else {
    $success = ['msg' => 'OK', 'info' => 'hello'];
    echo json_encode($success);
}