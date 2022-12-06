<?php

$score = array(101, 102, 104, 105, 106);
$sum = 0;

for ($i = 0; $i < count($score); $i++) {

    if ($i <  count($score)-1){

    echo $score[$i] . "+" ;
}
    else {
      echo $score[$i] . "=" ;
    }

    $sum += $score[$i];

}

echo $sum;


?>