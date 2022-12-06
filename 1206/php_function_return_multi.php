<?php

function ExpValue($X)
{

    $Result[0] = $X;
    $Result[1] = $X * $X;
    $Result[2] = $X * $X * $X;

    return $Result;

}

$ReturnArray = ExpValue(10);
foreach ($ReturnArray as $value) {
    echo $value . '<br>';
}