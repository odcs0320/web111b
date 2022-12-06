<?php

$Msg = "Hello, This is outside of Func1()";
echo $Msg . "<br>"; //global function value
Func1();
echo $Msg . "<br>";

function Func1()
{

    $Msg = "Hello, This is inside of Func1()";
    echo $Msg . "<br>"; //local function value

}