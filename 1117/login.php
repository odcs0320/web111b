<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
</head>

<body>
  <div class="welcome"></div>
  <div class="error"></div>
</body>

</html>

<?php
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
    } else {
        echo "<div class='error'>帳號密碼有誤</div>";
    }

}

?>
