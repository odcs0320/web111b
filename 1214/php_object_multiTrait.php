<?php

trait Trait1
{
    public function hello()
    {

        echo "{Trait1上的hello()}";
    }

    public function hi()
    {

        echo "{Trait1上的hi()}";
    }
}

trait Trait2
{
    public function hello()
    {

        echo "{Trait2上的hello()}";
    }

    public function hi()
    {

        echo "{Trait2上的hi()}";
    }
}

//使用 insteadof 解決碰撞

class Class1
{

    use Trait1, Trait2 {
        //取代 Trait1上的hello(),使用Trait2上的hello()
        Trait2::hello insteadof Trait1;

        //取代 Trait2上的hi(),使用Trait1上的hi()
        Trait1::hi insteadof Trait2;

    }

}

$obj1 = new Class1;
$obj1->hello();
$obj1->hi();

class Class2
{

    use Trait1, Trait2 {
        //取代 Trait1上的hello(),使用Trait2上的hello()
        Trait2::hello insteadof Trait1;

        //取代 Trait2上的hi(),使用Trait1上的hi()
        Trait1::hi insteadof Trait2;

        //Trait2上的hi(),使用別名hei()
        Trait2::hi as hei;

        //Trait1上的hello(),使用別名hehe()
        Trait1::hello as hehe;

    }

}

$obj2 = new Class2;
$obj2->hello();
$obj2->hi();
$obj2->hei();
$obj2->hehe();