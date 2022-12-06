<?php

$score = 65;

switch ($score) {
    case 90:
        echo "A";
        break;
    case 80:
        echo "B";
        break;
    case 70:
        echo "C";
        break;
    case 60:
        echo "D";
        break;
    default:
        echo "E";
        break;
}

echo "<br>";

switch (true) {
    case $score >= 90:
        echo "A";
        break;
    case $score >= 80:
        echo "B";
        break;
    case $score >= 70:
        echo "C";
        break;
    case $score >= 60:
        echo "D";
        break;
    default:
        echo "E";
        break;

}