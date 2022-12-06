<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今天吃什麼?</title>

  <style>
  div.welcome {
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
  <form action="function.php" method="post" id="form">
    請輸入飲食時段:<input type="text" name="a"><br>
    請輸入食物內容:<input type="text" name="b"><br>
    <input type="submit" value="送出">
  </form>
  <div class="welcome"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['a']) && isset($_POST['b'])
) {

    $a = $_POST['a'];
    $b = $_POST['b'];

} else if (!empty($_POST['a']) || !empty($_POST['b'])) {
    echo "<div class='error'>請輸入完整內容</div>";
}