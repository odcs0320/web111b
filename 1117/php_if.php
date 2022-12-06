<?php

$score = 69;

if ($score > 60) {
    echo "success <br>";
}

if ($score > 70) {
    echo "success <br>";
} else {
    echo "fail <br>";
}

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "不及格";
}
