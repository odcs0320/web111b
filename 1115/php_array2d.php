<?php

//1.直接賦值
$array2d[][] = 123;
$array2d[0][1] = "abc";

//2.使用array()函式嵌套
$row0 = array(64, 65);
$row1 = array(77, 81);
$row2 = array(89, 93);

$grades = array($row0, $row1, $row2);
print_r($grades);
echo "<br>";
$grades[1][0] = 30;

$total = 0;
echo count($grades) . "<br>";

for ($row = 0; $row < count($grades); $row++) {
    $sum = 0;
    for ($col = 0; $col < count($grades[$col]); $col++) {
        $sum += $grades[$row][$col];
        $total += $sum;
    }
    echo "第" . $row + 1 . "row小計為" . $sum . "<br>";
}
echo "總計為" . $total . "<br>";
print_r($grades);