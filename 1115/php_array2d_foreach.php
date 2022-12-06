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

$row = 0;

foreach ($grades as $matrix) {
    $sum = 0;
    foreach ($matrix as $element) {
        $sum += $element;
        $total += $element;
    }
    $row++;
    echo "第" . $row . "row小計為" . $sum . "<br>";
}
echo "總計為" . $total . "<br>";
print_r($grades);