<?php

if (isset($_POST["action"]) && $_POST["action"] == "add") {
    require_once "connDB.php";
    $sql_query = "INSERT INTO `users`(`id`,`account`,`password`,`name`,`sex`,`year`,`month`,`day`,`telephone`,`cellphone`,`address`,`email`,`url`,`comment`) VALUES(";
    $sql_query .= "'" . $_POST["id"] . "',";
    $sql_query .= "'" . $_POST["account"] . "',";
    $sql_query .= "'" . $_POST["password"] . "',";
    $sql_query .= "'" . $_POST["name"] . "',";
    $sql_query .= "'" . $_POST["sex"] . "',";
    $sql_query .= "'" . $_POST["year"] . "',";
    $sql_query .= "'" . $_POST["month"] . "',";
    $sql_query .= "'" . $_POST["day"] . "',";
    $sql_query .= "'" . $_POST["telephone"] . "',";
    $sql_query .= "'" . $_POST["cellphone"] . "',";
    $sql_query .= "'" . $_POST["address"] . "',";
    $sql_query .= "'" . $_POST["email"] . "',";
    $sql_query .= "'" . $_POST["url"] . "',";
    $sql_query .= "'" . $_POST["comment"] . "')";
    //echo $sql_query;
    //exit;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header("location: php_mysqli_read.php");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員資料管理系統</title>
</head>

<body>
  <h1 align='center'>會員資料管理系統 - 新增資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>序號</td>
        <td><input type="number" name="id" size="11" required></td>
      </tr>
      <tr>
        <td>帳號</td>
        <td><input type="text" name="account" size="10" required></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="text" name="password" size="10" required></td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="name" size="10" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="sex" value='男' checked>男
          <input type="radio" name="sex" value='女'>女
        </td>
      </tr>
      <tr>
        <td>年</td>
        <td><input type="number" name="year" size="4" required></td>
      </tr>
      <tr>
        <td>月</td>
        <td><input type="number" name="month" size="4" required></td>
      </tr>
      <tr>
        <td>日</td>
        <td><input type="number" name="day" size="4" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="telephone" required></td>
      </tr>
      <tr>
        <td>手機</td>
        <td><input type="tel" name="cellphone" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="address" size="50" required></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="email" required></td>
      </tr>
      <tr>
        <td>網址</td>
        <td><input type="url" name="url" required></td>
      </tr>
      <tr>
        <td>備註</td>
        <td><input type="text" name="comment" required></td>
      </tr>
      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="action" value="add">
          <input type="submit" name="button" value="新增資料">
          <input type="reset" name="button" value="重新填寫">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
