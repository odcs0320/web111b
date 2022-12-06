<?php

$num = 100;
function func()
{
    global $num;
    echo $num;
    $num++;
}

func();
func();
func();