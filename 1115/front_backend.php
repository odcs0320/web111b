<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="main">
    <form name="form1" action="http://web111b.com:6080/1115/front_backend.php" method="get">
      使用者:<input type="text" name="user"><br>
      郵件:<input type="email" name="email"><br>
      學歷:<select name="edu">
        <option value="國小">國小</option>
        <option value="國中">國中</option>
        <option value="高中">高中</option>
        <option value="大學">大學</option>
        <option value="其他">其他</option>
      </select><br>
      喜好:
      <input type="checkbox" name="hobbys[]" value="吃">吃
      <input type="checkbox" name="hobbys[]" value="喝">喝
      <input type="checkbox" name="hobbys[]" value="玩">玩
      <input type="checkbox" name="hobbys[]" value="樂">樂<br>

      <input type="reset" value="取消"><input type="submit" value="送出">
    </form>
  </div>
</body>

</html>

<?php

//執行時機

if (isset($_GET['user']) && isset($_GET['email']) && isset($_GET['edu']) && isset($_GET['hobbys'])
    && !empty($_GET['user']) && !empty($_GET['email']) && !empty($_GET['edu']) && !empty($_GET['hobbys'])
) {

//取得前台的資料
    $user = $_GET["user"];
    $email = $_GET["email"];
    $edu = $_GET["edu"];
    $hobbys = $_GET["hobbys"];

//法1:
//foreach ($hobbys as $hobby){
//echo $hobby . "<br>";
//}

//法2:
//echo implode(",",$hobbys);
    $h = implode(",", $hobbys);

    echo "使用者是:{$user} 他的郵件是:{$email} 他的學歷是:{$edu} 他的興趣是:{$h}";

}

?>
