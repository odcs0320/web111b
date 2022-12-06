<?php
echo "<pre>";
$color = ["Red", "Yellow", "Pink"];
$members = ["Jim" => "99", "Lucy" => "77", "Mark" => "55"];

var_dump($color);
//sort() 遞增
//rsort() 遞減
//ksort() 用鍵值做遞增
//asort() 用值做遞增
//krsort() 用鍵值做遞減
//arsort() 用鍵值做遞減

sort($color);
echo "<br>";

foreach ($color as $key => $value) {
    echo $value . "<br>";
}

echo "<br>";

ksort($members);
foreach ($members as $name => $score) {
    echo $name . "=>" . $score . "<br>";
}