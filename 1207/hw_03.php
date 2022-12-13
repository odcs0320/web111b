<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207_03</title>

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
  <form action="hw_03.php" method="post" id="form">

    請輸入寬度:<input type="number" placeholder="請輸入寬度" required name="w">
    請輸入高度:<input type="number" placeholder="請輸入高度" required name="h">
    <input type="submit" value="產生"><br>

  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['w']) && !empty($_POST['w'])
    || isset($_POST['h']) && !empty($_POST['h'])) {

// 代入指定的變數
    $w = $_POST['w'];
    $h = $_POST['h'];

    function F($w, $h)
    {
        for ($i = 1; $i <= $h; $i++) {
            for ($j = 1; $j <= $w; $j++) {
                echo ($i * $j) . ' ';

            }
            echo "<br>";
        }
    }

    F($w, $h);

}