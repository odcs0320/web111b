<?php

//取得前台的資料
$user = $_GET["user"];
$email = $_GET["email"];
$edu = $_GET["edu"];
$hobbys = $_GET["hobbys"];

//法1:
//foreach ($hobbys as $hobby){
//echo $hobby . "<br>";
//}

//法2:
//echo implode(",",$hobbys);
$h = implode(",", $hobbys);

echo "使用者是:{$user} 他的郵件是:{$email} 他的學歷是:{$edu} 他的興趣是:{$h}";
