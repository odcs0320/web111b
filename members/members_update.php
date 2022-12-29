<?php
require_once "members_connDB.php";

if (isset($_POST["action"]) && $_POST["action"] == "update") {

    $sql_query = "UPDATE `members` SET ";
    $sql_query .= "`m_name`='" . $_POST["m_name"] . "',";
    $sql_query .= "`m_username`='" . $_POST["m_username"] . "',";
    $sql_query .= "`m_passwd`='" . $_POST["m_passwd"] . "',";
    $sql_query .= "`m_sex`='" . $_POST["m_sex"] . "',";
    $sql_query .= "`m_birthday`='" . $_POST["m_birthday"] . "',";
    $sql_query .= "`m_level`='" . $_POST["m_level"] . "',";
    $sql_query .= "`m_email`='" . $_POST["m_email"] . "',";
    $sql_query .= "`m_url`='" . $_POST["m_url"] . "',";
    $sql_query .= "`m_phone`='" . $_POST["m_phone"] . "',";
    $sql_query .= "`m_address`='" . $_POST["m_address"] . "',";
    $sql_query .= "`m_login`='" . $_POST["m_login"] . "',";
    $sql_query .= "`m_logintime`='" . $_POST["m_logintime"] . "',";
    $sql_query .= "`m_jointime`='" . $_POST["m_jointime"] . "' ";
    $sql_query .= "WHERE `m_id`=" . $_POST["m_id"];

    //echo $sql_query;
    //exit;
    mysqli_query($conn, $sql_query);
    //mysqli_free_result($result);
    mysqli_close($conn);
    header("location: members_read.php");
}

$sql_db = "SELECT * FROM `members` WHERE `m_id`=" . $_GET["m_id"];
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
  <p align='center'><a href='members_read.php'>回主畫面</a></p>
  <form action="" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="m_name" value="<?=$row["m_name"];?>" required></td>
      </tr>
      <tr>
        <td>帳號</td>
        <td><input type="text" name="m_username" value="<?=$row["m_username"];?>" required></td>
      </tr>
      <tr>
        <td>密碼</td>
        <td><input type="password" name="m_passwd" value="<?=$row["m_passwd"];?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="m_sex" value='男' <?php if ($row["m_sex"] == "男") {
    echo " checked";
}
?>>男
          <input type="radio" name="m_sex" value='女' <?php if ($row["m_sex"] == "女") {
    echo " checked";
}
?>>女
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="m_birthday" value="<?=$row["m_birthday"];?>" required></td>
      </tr>
      <tr>
      <tr>
        <td>層級</td>
        <td><input type="radio" name="m_level" value='admin' <?php if ($row["m_level"] == "admin") {
    echo " checked";
}
?>>管理員
          <input type="radio" name="m_level" value='member' <?php if ($row["m_level"] == "member") {
    echo " checked";
}
?>>一般會員
        </td>
      </tr>
      <td>電子郵件</td>
      <td><input type="email" name="m_email" value="<?=$row["m_email"];?>" required></td>
      </tr>
      <tr>
        <td>網址</td>
        <td><input type="url" name="m_url" value="<?=$row["m_url"];?>" required></td>
      </tr>
      <tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="m_phone" value="<?=$row["m_phone"];?>" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="m_address" value="<?=$row["m_address"];?>" size="100" required></td>
      </tr>
      <tr>
        <td>登入次數</td>
        <td><input type="number" name="m_login" value="<?=$row["m_login"];?>" required></td>
      </tr>
      <tr>
      <tr>
        <td>登入時間</td>
        <td><input type="datetime" name="m_logintime" value="<?=$row["m_logintime"];?>" required></td>
      </tr>
      <tr>
        <td>註冊時間</td>
        <td><input type="datetime" name="m_jointime" value="<?=$row["m_jointime"];?>" required></td>
      </tr>

      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="m_id" value="<?=$row['m_id'];?>">
          <input type="hidden" name="action" value="update">
          <input type="submit" name="button" value="修改資料">
          <input type="reset" name="button" value="重新填寫">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
