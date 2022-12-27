<?php

//告訴瀏覽器這頁面是UTF-8編碼
header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

//創建db連接
//php操作資料庫的第一步驟
$user = "root";
$password = "1234";
$host = "localhost";
$db = "class";
$port = "3306";

//a.建立連接
$conn = mysqli_connect($host, $user, $password, $db);
//保險
if ($conn) {
    //b.判斷是否連接
    //c.設置編碼
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");

    //d.創建sql子句
    $sql = "SELECT * FROM `students` WHERE 1";
    //e.執行該sql子句,得到結果
    $result = mysqli_query($conn, $sql);
    //print_r($result);
    //f.判斷是否有資料筆數
    if (mysqli_num_rows($result) > 0) {
        $info = [];
        //g.透過fetch_assoc()拜訪方法,獲取$result中的每一筆資料
        for ($i = 0; $row = $result->fetch_assoc(); $i++) {
            $info[] = $row;
        }
        //h.以json資料型態返回
        echo json_encode($info);
    }
}
