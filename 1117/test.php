<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome!!</title>

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
  <form action="test.php" method="post" id="form">
    請輸入列(row)數:<input type="text" name="urow"><br>
    <input type="submit" value="送出">
  </form>
  <div class="welcome"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['urow']) && !empty($_POST['urow'])
) {

    $row = $_POST['urow'];

    for ($i = 0; $i <= $row; $i++) {

        // for ($j = $row; $j > $i; $j--) {
        for ($j = 0; $j <= $row - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

} else {
    echo "<div class='error'>請輸入列數</div>";
}