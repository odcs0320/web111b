<?php

$counter =
function ($res = 0) {

    static $res;
    $res += 1;
    echo $res . "<br>";

};

$counter();
$counter();