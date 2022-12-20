<?php

class Father
{

    public $pubPro = '父類別公開的屬性';
    protected $protecPro = '父類別受保護的屬性';
    private $priPro = '父類別私有的屬性';

    public function fatherPublicPut()
    {

        echo "[" . $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "]<br>";

    }

    protected function fatherProtectPut()
    {

        echo "[" . $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "]<br>";

    }

    private function fatherPrivatePut()
    {

        echo "[" . $this->pubPro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "]<br>";

    }
}

class Son extends Father
{

    public function SonSelPut()
    {
        echo $this->pubPro . "<br>"; //繼承
        echo $this->protecPro . "<br>"; //繼承
        // echo $this->priPro . "<br>"; //沒被繼承
    }

}

$father = new Father;

echo $father->pubPro . "<br>"; //OK 父類別公開的屬性
//echo $father->protecPro . "<br>"; //NG 受保護的屬性,外部無法直接訪問
//echo $father->priPro . "<br>"; //NG 私有的屬性,外部無法直接訪問

echo $father->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $father->fatherProtectPut() . "<br>"; //NG 受保護的方法,外部無法直接訪問
//echo $father->fatherPrivatePut() . "<br>"; //NG 私有的方法,外部無法直接訪問

$son = new Son;

echo $son->pubPro . "<br>"; //OK 父類別公開的屬性
//echo $son->protecPro . "<br>"; //NG 受保護的屬性,外部無法直接訪問
//echo $son->priPro . "<br>"; //NG 私有的屬性,外部無法直接訪問

echo $son->fatherPublicPut() . "<br>"; //OK 父類別公開的方法
//echo $son->fatherProtectPut() . "<br>"; //NG 受保護的方法,外部無法直接訪問
//echo $son->fatherPrivatePut() . "<br>"; //NG 私有的方法,外部無法直接訪問

$son->SonSelPut();
