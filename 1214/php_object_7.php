<?php

class Peo
{
    public $peoName;

    public function __construct($str)
    {
        $this->peoName = $str;
    }
}

//令 obj1 指向 peoName 屬性為 allen 的案例
$obj1 = new Peo("allen");
//令 obj2 指向 peoName 屬性為 allen 的案例
$obj2 = new Peo("allen");
//令 obj3 指向 obj1 所指向 的案例
$obj3 = $obj1;

if ($obj2 == $obj1) {
    echo '$obj2的成員與值和$obj1相同<br>';
} else {
    echo '$obj2的成員與值和$obj1不同<br>';
}

if ($obj2 === $obj1) {
    echo '$obj2 $obj1 指向相同案例<br>';
} else {
    echo '$obj2 $obj1 指向不同案例<br>';
}

if ($obj3 === $obj1) {
    echo '$obj3 $obj1 指向相同案例<br>';
} else {
    echo '$obj3 $obj1 指向不同案例<br>';
}