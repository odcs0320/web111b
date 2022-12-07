<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207</title>

  <style>
  div.sort {
    color: blue;
  }

  div.error {
    color: red;
  }
  </style>
  <script>
  document.getElementById('form').style.display = "none";
  </script>
</head>

<body style="text-align: center">
  <form action="php_homework.php" method="post" id="form">
    <!--請輸入正方形邊長:<input type="number" placeholder="請輸入正方形邊長" required name="num">
    請輸入正方形樣式:<input type="text" placeholder="請輸入正方形樣式" required name="type">
    <input type="submit" value="產生"><br>-->
    <!--請輸入身高(cm):<input type="number" placeholder="請輸入身高(cm)" required name="cm">
    請輸入體重(kg):<input type="number" placeholder="請輸入體重(kg)" required name="kg">
    <input type="submit" value="轉換"><br>-->
    <!--請輸入一整數判斷其奇偶:<input type="number" placeholder="請輸入一整數判斷其奇偶" required name="int">
    <input type="submit" value="判斷"><br>-->
    請輸入一串數字:<input type="number" placeholder="請輸入一串數字" required name="number">
    <input type="submit" value="拆解"><br>
  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

/*if (isset($_POST['num']) && !empty($_POST['num'])
|| isset($_POST['type']) && !empty($_POST['type'])) {

$num = $_POST['num'];
$type = $_POST['type'];

function square($num, $type)
{
for ($i = 0; $i < $num; $i++) {
for ($j = 0; $j < $num; $j++) {
echo $type;
}
echo "<br>";
}
}

square($num, $type);

} else {
echo "<div class='error'>請輸入正方形邊長與樣式</div>";
}*/

/*if (isset($_POST['cm']) && !empty($_POST['cm'])
|| isset($_POST['kg']) && !empty($_POST['kg'])) {

// 代入指定的變數
$cm = $_POST['cm'];
$kg = $_POST['kg'];

function convert($cm, $kg)
{
$cm = $cm * 0.3937;
$kg = $kg * 2.20462262;

echo "身高為" . $cm . "吋,體重為" . $kg . "磅<br>";

}

convert($cm, $kg);

} else {
echo "<div class='error'>請輸入身高(cm)與體重(kg)</div>";
}*/

/*if (isset($_POST['int']) && !empty($_POST['int'])) {

// 代入指定的變數
$int = $_POST['int'];

function even($int)
{
if ($int == 0 || $int % 2 == 0) {
echo $int . "為偶數";
} else {
echo $int . "為奇數";
}

}

even($int);

} else {
echo "<div class='error'>請輸入一整數判斷其奇偶</div>";
}*/

if (isset($_POST['number']) && !empty($_POST['number'])) {

// 代入指定的變數
    $number = $_POST['number'];

    function decomp($number)
    {

    }

    decomp($number);

} else {
    echo "<div class='error'>請輸入一串數字</div>";
}
