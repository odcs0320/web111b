<?php

class name
{
    public $name;

    public function getname()
    {
        return $this->name = "mick";
    }

    public function getnamebythis()
    {
        return $this->name;
    }

    public function getnamebyself()
    {
        return self::getname();
    }
}

class name2 extends name
{

    public function getname()
    {
        return $this->name = "jeff";
    }

}

$newname = new name2;
echo $newname->getnamebythis();
echo "=======================<br>";
echo $newname->getnamebyself();