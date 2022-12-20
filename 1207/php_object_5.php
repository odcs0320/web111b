<?php

class Peo
{

    public $peoName;
    public function __construct($str)
    {
        $this->peoName = $str;
        echo "已建立名字為:" . $this->peoName . "的物件<br>";
    }
    public function __destruct()
    {
        $this->peoName = null;
        echo "這個物件已經被釋放掉了<br>";
    }

}

$peo = new Peo('Jim');
//$peo = null; //釋放物件
