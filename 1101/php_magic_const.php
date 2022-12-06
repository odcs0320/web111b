<?php

//price name list
$priceNameList = array('Original', 'VIP', 'Employee');

//price list
$priceList = [300, 200, 100];

$total = count($priceList);
for ($i = 0; $i < $total; $i++) {
    ${'price' . $priceNameList[$i]} = $priceList[$i];
}

echo $priceOriginal . "<br>";

$priceDictionary = array("Original" => 300, "VIP" => 200, "Employee" => 100);

foreach ($priceDictionary as $key => $value) {
    ${'price' . $key} = $value;
}

echo $priceVIP . "<br>";