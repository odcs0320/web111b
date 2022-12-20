<?php

function CircleArea($R)
{

    echo '半徑為' . $R . "的圓面積為" . ($R * $R * 3.14159) . "<br>";

}

function SquareArea($L)
{

    echo '長度為' . $L . "的正方形面積為" . ($L * $L) . "<br>";

}

$func = 'CircleArea';
$func(10);
$func = 'SquareArea';
$func(10);
