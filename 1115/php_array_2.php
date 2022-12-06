<?php

$a = ["DOG", "CAT", "BIRD", "MOKEY"];
echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";
echo $a[3] . "<br>";

$member = ["Jim" => "99", "Lucy" => "77", "Mark" => "55"];
echo $member["Jim"] . "<br>";
echo $member["Lucy"] . "<br>";
echo $member["Mark"] . "<br>";

foreach ($member as $name => $score) {
    echo $name . "=>" . $score . "<br>";
}
