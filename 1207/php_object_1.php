<?php
class Peo
{

    public $peoName = "allen";

    //定義方法
    public function showSelf()
    {
        echo "Say Hello !";
        echo $this->peoName . "<br>";
    }

}

$peo = new peo;
$peo->peoName = "Jim";
$peo->showSelf();
print_r($peo);