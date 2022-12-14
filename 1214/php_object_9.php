<?php

//父類別
class Payroll
{

    public $Name;

    public static function Payment($Hours, $PayRate)
    {
        return $Hours * $PayRate;
    }

}

class BonusPayroll extends Payroll
{

    //Override 父類別的方法
    public static function Payment($Hours, $PayRate)
    {
        return $Hours * $PayRate + 5000;
        //改用parent來操作
        //return parent::Payment($Hours, $PayRate);
        //改用父類別名稱來操作
        //return Payroll::Payment($Hours, $PayRate);

    }
}

echo '尚未加上獎金的薪資為' . Payroll::Payment(100, 80) . "<br>";
echo '加上獎金的薪資為' . BonusPayroll::Payment(100, 80) . "<br>";