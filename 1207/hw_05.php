<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php練習1207_05</title>

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
  <form action="hw_05.php" method="post" id="form">

    請輸入一串數字:<input type="number" placeholder="請輸入一串數字" required name="number">
    <input type="submit" value="拆解"><br>

  </form>
  <div class="square"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['number']) && !empty($_POST['number'])) {

// 代入指定的變數
    $number = $_POST['number'];

    function decomp(int $number)
    {
// 將數字轉換為字串
        $str = (string) $number;

// 將字串中的每個字元分開
        $chars = str_split($str);

// 將每個字元都輸出，並在其中插入空格
        foreach ($chars as $char) {
            echo $char . " ";
        }

    }

    decomp($number);

} else {
    echo "<div class='error'>請輸入一串數字</div>";
}
