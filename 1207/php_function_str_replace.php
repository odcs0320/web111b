<?php

// str_replace (找尋值,要用來取代部分字串的字串,被搜尋的字串,對替換樹進行計數)

echo str_replace("World", "Allen", "Hello World") . "<br>";

$arr = ["blue", "red", "green", "yellow"];
print_r(str_replace("red", "pink", $arr, $i));
echo "有幾個 $i red <br>";

$find = ["AAA", "BBB"];
$replae = ["B"];
$arr = ["AAA", "BBB", "CCC"];
print_r(str_replace($find, $replae, $arr));

//["B",,"!"]
