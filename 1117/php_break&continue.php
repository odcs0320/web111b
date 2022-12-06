<?php

//break

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i == 51) {
        break;
    }

    $sum += $i;
}

echo $sum . "<br>";

//continue

$sum1 = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i == 88 || $i == 89) {
        continue;
    }

    $sum1 += $i;
}

echo $sum1 . "<br>";
