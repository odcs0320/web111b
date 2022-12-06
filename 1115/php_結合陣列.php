<?php

//指元素儲存的是對應的"鍵值"和"值",但"鍵值"不可重複,"值"可以重複
//"鍵值"可以是字串或數值,拜訪需要用"鍵值"
//格式:$變數名稱["鍵值"]="值";

//方式1:直接指定陣列元素值
$arr["color"] = "Red";
$arr["name"] = "Jim";
$arr["shape"] = "Round";
$arr[] = 50; //php自動指定從0開始的整數

//方式2:使用建構式array
$arr = array("color" => "Red", "name" => "Jim", "shape" => "Round", 50);

if (!isset($arr["color"])) {
    $arr["color"] = "Green";
}

//unset()
unset($arr["color"]);
$arr["color"] = "Green";

//拜訪需用"鍵值"
foreach ($arr as $key => $value) {
    # code...
    echo "$key=>$value <br>";
}
