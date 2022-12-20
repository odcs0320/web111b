<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>亂數抽籤</title>

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
  <form action="php_rand.php" method="post" id="form">
    請輸入最小範圍:<input type="number" placeholder="請輸入最小範圍" required name="min"><br>
    請輸入最大範圍:<input type="number" placeholder="請輸入最大範圍" required name="max"><br>
    請輸入抽籤次數:<input type="number" placeholder="請輸入抽籤次數" required name="count"><br>
    <input type="submit" value="抽籤">
  </form>
  <div class="sort"></div>
  <div class="error"></div>
</body>

</html>

<?php

// 判斷是否為第一次進入畫面
if (isset($_POST['min']) && !empty($_POST['min'])
    || isset($_POST['max']) && !empty($_POST['max'])
    || isset($_POST['count']) && !empty($_POST['count'])) {
    // 判斷亂數抽籤條件是否正確
    if ((($_POST['min']) < ($_POST['max'])) && ((($_POST['max']) - ($_POST['min']) + 1) >= ($_POST['count']))) {

        // 代入指定的變數
        $min = $_POST['min'];
        $max = $_POST['max'];
        $count = $_POST['count'];

        // 產生不重複的亂數
        $numbers = range($min, $max);
        shuffle($numbers);
        $random_numbers = array_slice($numbers, 0, $count);

        // 印出抽籤的結果
        $i = 1;

        echo "<div class='sort'>從" . $min . "到" . $max . "抽" . $count . "次</div><br>";

        foreach ($random_numbers as $number) {

            echo "<div class='sort'>第" . $i . "次抽籤的結果：" . $number . "</div><br>";

            $i++;

            /*這段程式碼的意思是，它會首先用 range 函式產生一個大小範圍從 $min 到 $max 的陣列，然後用 shuffle 函式對陣列進行洗牌，再用 array_slice 函式取出指定數量的亂數，最後用迴圈輸出抽籤的結果*/

        }
    } else {
        echo "<div class='error'>請輸入正確的亂數抽籤條件</div>";
    }
} else {
    echo "<div class='error'>請輸入亂數抽籤條件</div>";
}
