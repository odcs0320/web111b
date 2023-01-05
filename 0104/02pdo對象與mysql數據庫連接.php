<?php
$user = "root";
$password = "1234";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=class", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}