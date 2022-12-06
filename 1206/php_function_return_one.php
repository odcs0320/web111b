<?php

function Conver2F($degreeC)
{

    return $degreeC * 1.8 + 32;

}

echo '攝氏30度可以轉換為華氏' . Conver2F(30) . '度';