<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome!!</title>

  <style>
  body {
    text-align: center;
  }

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
  <form action="php_login.php" method="post" id="form">
    會員名稱:<input type="text" name="uname"><br>
    密碼:<input type="password" name="upass"><br>
    <input type="submit" value="登入">
  </form>
  <div class="welcome"></div>
  <div class="error"></div>
</body>

</html>

<?php

if (isset($_POST['uname']) && isset($_POST['upass'])
    && !empty($_POST['uname']) && !empty($_POST['upass'])
) {

    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $userpass = array(
        'admin' => '12345',
        'tony' => '54321',
    );

    $count = count($userpass);

    if (!$_POST['uname'] || !$_POST['upass']) {
        echo "<div class='error'>請輸入帳號密碼</div>";
    } else {
        //有收到 $uname 與 $upass
        $username = $_POST['uname'];
        $password = $_POST['upass'];

        $count = 1;

        foreach ($userpass as $key => $value) {
            if ($key == $username) {
                break;
            } else {
                if ($count == count($userpass)) {
                    echo "<div class='error'>無此帳號</div>";
                    return;
                }
                $count++;
            }
        }

        if ($userpass[$username] == $password) {
            echo "<div class='welcome'>$username 會員您好!!";
            echo "您有新留言</div>";
            echo "<script>
    document.getElementById('form').style.display = 'none';
  </script>";
        } else {
            echo "<div class='error'>帳號密碼有誤</div>";
        }

    }
} else {
    echo "<div class='error'>資料尚未輸入完全</div>";
}
