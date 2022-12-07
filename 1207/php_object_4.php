<?php

class Peo
{

    public $peoName;
    public function __construct()
    {
        $this->peoName = "Jim";
    }

}

$peo = new Peo;
echo $peo->peoName;