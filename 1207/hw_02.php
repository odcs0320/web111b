<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207_02</title>

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
  <form action="hw_02.php" method="post" id="form">

    請輸入身高(cm):<input type="number" placeholder="請輸入身高(cm)" required name="cm">
    請輸入體重(kg):<input type="number" placeholder="請輸入體重(kg)" required name="kg">
    <input type="submit" value="轉換"><br>

  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['cm']) && !empty($_POST['cm'])
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
}
