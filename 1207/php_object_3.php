<?php

class Peo
{

    //聲明類別常數
    const peoName = "Jim";
    //聲明靜態變數
    static $peoAge = 18;

}

echo Peo::peoName . "<br>";
echo Peo::$peoAge . "<br>";

$peo = new Peo;
echo Peo::peoName . "<br>";

echo Peo::$peoAge . "<br>";
Peo::$peoAge++;
echo Peo::$peoAge . "<br>";

class MyMath
{
    public static function Cubic($X)
    {
        return pow($X, 3);
    }
}

echo '5的三次方為' . MyMath::Cubic(5) . "<br>";

class Circle
{
    const PI = 3.14159;
    public $Radius;

    public function ShowArea()
    {
        echo '圓面積為' . pow($this->Radius, 2) * self::PI . "<br>";
    }
}

echo "圓周率為" . Circle::PI . "<br>";
$obj = new Circle;
$obj->Radius = 10;
$obj->ShowArea();