<?php

class ParentClass
{

    protected $Field1;
    public function __construct($Value)
    {
        $this->Field1 = $Value;
        echo '建立物件成功時將 Field1 的值設定為' . $this->Field1 . "<br>";
    }

    public function __destruct()
    {
        $this->Field1 = 0;
        echo '釋放物件成功時將 Field1 的值設定為' . $this->Field1 . "<br>";
    }

}

class ChildClass extends ParentClass
{
    protected $Field2;
    public function __construct($Value)
    {
        $this->Field2 = $Value;
        echo '建立物件成功時將 Field2 的值設定為' . $this->Field2 . "<br>";
    }

    public function __destruct()
    {
        $this->Field2 = 0;
        echo '釋放物件成功時將 Field2 的值設定為' . $this->Field2 . "<br>";
    }
}

$MyObject = new ChildClass(100);
$MyObject = null;