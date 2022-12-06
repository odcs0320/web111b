<?php

//implode('分割字元',陣列);
$couress = ['HTML', 'CSS', 'JS', 'PHP'];
$s = implode(",", $couress);
echo $s . "<br>";
foreach ($couress as $couress) {
    echo $couress . "<br>";
}

$members = ["John" => "20", "Mary" => "18", "Jack" => "19"];
$m_value = implode(",", $members);
echo $m_value . "<br>";
$m_key = implode(",", array_keys($members));
echo $m_key . "<br>";
