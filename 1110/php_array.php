<?php

// 1.一般陣列:搭配索引子(整數)來存取元素
// 2.結合陣列:一對鍵值 key => value

echo "======= 1.一般陣列 ======= <br>";
//方式1:直接指定陣列元素的值
$name[] = 3;
$name[] = "str";
$name[] = true;
echo $name[1] . "<br>";
//或
$name1[0] = 3;
$name1[1] = "str";
$name1[2] = true;
echo $name1[2] . "<br>";
//或
$name2 = [3, "str", true];
echo $name2[0] . "<br>";
//方式2:使用array建構式
$name3 = array(3, "str", true);
echo $name3[0] . "<br>";
print_r($name3);
echo "<br>";
var_dump($name3);
//陣列拜訪
echo "<br>";
for ($i = 0; $i < count($name3); $i++) {
    echo $name3[$i] . "<br>";
}

foreach($name3 as $value){
  echo $value . "<br>";
}