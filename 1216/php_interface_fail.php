<?php

interface Person
{

    //不可宣告屬性
    //public $height;
    //protected $weight;
    //private $age;

    //不可宣告靜態屬性
    //public static $interest;
    //protected static $appearance;
    //private static $character;

}

//不可以實例化
interface Person1
{
    public function eat();
    public function sleep();
}

//不可以實例化
//$person1 = new Person1()

//不可以實作方法內容
interface Person2
{

    //public function eat(){}
    //public function sleep(){}
}