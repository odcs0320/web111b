<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207_01</title>

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
  <form action="hw_01.php" method="post" id="form">

    請輸入正方形邊長:<input type="number" placeholder="請輸入正方形邊長" required name="num">
    請輸入正方形樣式:<input type="text" placeholder="請輸入正方形樣式" required name="type">
    <input type="submit" value="產生"><br>

  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['num']) && !empty($_POST['num'])
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
}
