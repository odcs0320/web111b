<?php
require_once "connDB.php";

if (isset($_POST["action"]) && $_POST["action"] == "update") {

    $sql_query = "UPDATE `users` SET ";
    $sql_query .= "`account`='" . $_POST["account"] . "',";
    $sql_query .= "`password`='" . $_POST["password"] . "',";
    $sql_query .= "`name`='" . $_POST["name"] . "',";
    $sql_query .= "`sex`='" . $_POST["sex"] . "',";
    $sql_query .= "`year`='" . $_POST["year"] . "',";
    $sql_query .= "`month`='" . $_POST["month"] . "',";
    $sql_query .= "`day`='" . $_POST["day"] . "',";
    $sql_query .= "`telephone`='" . $_POST["telephone"] . "',";
    $sql_query .= "`cellphone`='" . $_POST["cellphone"] . "',";
    $sql_query .= "`address`='" . $_POST["address"] . "',";
    $sql_query .= "`email`='" . $_POST["email"] . "',";
    $sql_query .= "`url`='" . $_POST["url"] . "',";
    $sql_query .= "`comment`='" . $_POST["comment"] . "' ";
    $sql_query .= "WHERE `id`=" . $_POST["id"];
    //echo $sql_query;
    //exit;
    mysqli_query($conn, $sql_query);
    //mysqli_free_result($result);
    mysqli_close($conn);
    header("location: php_mysqli_read.php");
}

$sql_db = "SELECT * FROM `users` WHERE `id`=" . $_GET["id"];
$result = mysqli_query($conn, $sql_db);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

mysqli_close($conn);

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
  <h1 align='center'>會員資料管理系統 - 修改資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
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
          <input type="hidden" name="id" value="<?=$row['id'];?>">
          <input type="hidden" name="action" value="update">
          <input type="submit" name="button" value="修改資料">
          <input type="reset" name="button" value="重新填寫">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
