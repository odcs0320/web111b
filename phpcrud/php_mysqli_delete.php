<?php

require_once "connDB.php";

if (isset($_POST["action"]) && $_POST["action"] == "delete") {
    $sql = "DELETE FROM `users` WHERE `id`={$_POST['id']}";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location: php_mysqli_read.php");

}

$sql = "SELECT * FROM `users` WHERE `id`=" . $_GET["id"];
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$row = mysqli_fetch_assoc($result);

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
  <h1 align='center'>會員資料管理系統 - 刪除資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="" method="POST" name="formAdd" onsubmit="return confirm('\n是否確定要刪除這筆資料?\n刪除後無法恢復喔!\n')">
    <table border="1" align="center" cellpadding=4>

      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>

      <tr>
        <td>序號</td>
        <td><input type="number" name="id" size="11" value="<?=$row["id"];?>" required></td>
      </tr>
      <tr>
        <td>帳號</td>
        <td><input type="text" name="account" size="10" value="<?=$row["account"];?>" required></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="text" name="password" size="10" value="<?=$row["password"];?>" required></td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="name" size="10" value="<?=$row["name"];?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="sex" value='男' <?php if ($row["sex"] == "男") {
    echo " checked";
}
?>>男
          <input type="radio" name="sex" value='女' <?php if ($row["sex"] == "女") {
    echo " checked";
}
?>>女
        </td>
      </tr>
      <tr>
        <td>年</td>
        <td><input type="number" name="year" size="4" value="<?=$row["year"];?>" required></td>
      </tr>
      <tr>
        <td>月</td>
        <td><input type="number" name="month" size="4" value="<?=$row["month"];?>" required></td>
      </tr>
      <tr>
        <td>日</td>
        <td><input type="number" name="day" size="4" value="<?=$row["day"];?>" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="telephone" value="<?=$row["telephone"];?>" required></td>
      </tr>
      <tr>
        <td>手機</td>
        <td><input type="tel" name="cellphone" value="<?=$row["cellphone"];?>" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="address" size="50" value="<?=$row["address"];?>" required></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="email" value="<?=$row["email"];?>" required></td>
      </tr>
      <tr>
        <td>網址</td>
        <td><input type="url" name="url" value="<?=$row["url"];?>" required></td>
      </tr>
      <tr>
        <td>備註</td>
        <td><input type="text" name="comment" value="<?=$row["comment"];?>" required></td>
      </tr>
      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="id" value="<?=$row['id'];?>">
          <input type="hidden" name="action" value="delete">
          <input type="submit" name="button" value="刪除這筆資料">
          <input type="reset" name="button" value="取消">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
