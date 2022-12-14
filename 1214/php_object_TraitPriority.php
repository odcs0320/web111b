<?php

//設一個Drive(驅動)的Trait,有一特徵: $carName(車名)和一行為deiving(駕駛)

trait Drive
{
    public function hello()
    {

        echo "hello drive <br>";

    }

    public function driving()
    {

        echo "driving 從 Drive <br>";

    }

}

class Person
{

    public function hello()
    {

        echo "hello person <br>";

    }

    public function driving()
    {

        echo "driving 從 Person <br>";

    }

}

class Student extends Person
{

    use Drive;
    public function hello()
    {

        echo "hello students <br>";

    }
    public function study()
    {

        echo "study <br>";

    }

}

$student = new student;
$student->hello(); //student hello
$student->driving(); //特定trait功能的driving()