<?php

//告訴瀏覽器這頁面是UTF-8編碼
header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "1234";
$host = "localhost:3306";
$db = "member";
$port = "3306";

//$conn = mysqli_connect($host, $user, $password, $db, $port);
$conn = mysqli_connect($host, $user, $password);

if ($conn) {
    //選擇資料庫
    mysqli_select_db($conn, $db);
    //設置資料庫編碼方式
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
} else {
    echo "資料庫連線失敗";
}