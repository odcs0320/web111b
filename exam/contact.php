<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>與我聯絡</title>
</head>

<body>
  <form name="form1" action="http://web111b.com:6080/exam/contact.php" method="get">
    <fieldset>

      <h1>聯絡表單</h1>
      <label id="user" name="user">姓名:</label><input type="text" name="user" required><br>
      <label id="tel" name="tel">電話:</label><input type="tel" name="tel" required><br>
      <p>意見:</p>
      <textarea name="sugestion" cols="30" rows="5"></textarea>

      <p>
        <input type="submit" value="確認">&emsp;&emsp;<input type="reset" value="取消">
      </p>
    </fieldset>
  </form>
</body>

</html>

<?php

//執行時機

if (isset($_GET['user']) && isset($_GET['tel']) && isset($_GET['sugestion'])
    && !empty($_GET['user']) && !empty($_GET['tel']) && !empty($_GET['sugestion'])
) {

//取得前台的資料
    $user = $_GET["user"];
    $tel = $_GET["tel"];
    $sugestion = $_GET["sugestion"];

    echo "姓名:{$user} <br> 電話:{$tel} <br> 意見:{$sugestion}";

}

?>