<?php

interface Person
{

    const IS_AGE_PUBLIC = false;
    //抽象方法不用寫adstract
    public function eat();
    public function sleep();
}

interface Human
{

    public function laugh();

}

class Girl implements Person, Human
{

    public function eat()
    {
        //實作內容
    }
    public function sleep()
    {
        //實作內容
    }
    public function laugh()
    {
        //實作內容
    }

}

interface Person1 extends Human
{
    public function eat();
    public function sleep();
}