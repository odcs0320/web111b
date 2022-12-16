<?php

/**
 *
 */
trait Hello
{
    public function sayHello()
    {
        echo "Hello 從 trait Hello<br>";
    }
}

trait World
{
    //引用另一個  Trait
    use Hello;

    public function sayWorld()
    {
        echo "World <br> 從 trait World";
    }

    //抽象方法
    abstract public function getWorld();

    public function inc()
    {
        static $c = 0;
        $c++;
        echo "$c <br>";
    }

    public static function doSomething()
    {
        echo "Doing something <br>";
    }
}

class HelloWorld
{
    use World;

    //實現抽象方法
    public function getWorld()
    {
        return 'get World';
    }
}

$obj = new HelloWorld;
$obj->sayHello();
$obj->sayWorld();