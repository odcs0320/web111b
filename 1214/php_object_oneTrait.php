<?php

//設一個Drive(驅動)的Trait,有一特徵: $carName(車名)和一行為deiving(駕駛)

trait Drive
{

    public $carName = 'Benz';
    public function driving()
    {

        echo "driving {$this->carName} <br>";

    }

}

class Person
{

    public function eat()
    {

        echo "eat <br>";

    }

}

class Student extends Person
{

    use Drive;
    public function study()
    {

        echo "study <br>";

    }

}

$student = new student;
$student->study(); //自己的study()
$student->eat(); //繼承而來的eat()
$student->driving(); //特定trait功能的driving()