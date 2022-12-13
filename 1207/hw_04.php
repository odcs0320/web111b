<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207_04</title>

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
  <form action="hw_04.php" method="post" id="form">

    請輸入一整數判斷其奇偶:<input type="number" placeholder="請輸入一整數判斷其奇偶" required name="int">
    <input type="submit" value="判斷"><br>

  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['int']) && !empty($_POST['int'])) {

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
}