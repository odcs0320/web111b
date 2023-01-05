<?php
session_start();
$user = $_SESSION['admin'];
echo "$user 你好,歡迎光臨!!";