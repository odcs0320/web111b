<?php

include "php_function_practice.php";

function eat($a, $b)
{
    echo "今天" . $a . "吃" . $b . "<br>";
}

if ($a == null || $b == null) {
    echo "請輸入完整內容";
} else {
    eat($a, $b);
}
