<body align="center">
  <form method="post" action="">
    <p><span>帳號:</span><span><input type="text" name="username"></span></p>
    <p><span>密碼:</span><span><input type="text" name="password"></span></p>
    <p><button type="submit">確定</p>
  </form>
</body>



<?php
session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=login", "root", "1qaz@wsx");
        $pdo->query("set names utf8");
    } catch (PDOException $e) {
        echo "錯誤";
        echo $e->getMessage();
    }

    function select($table, $cond)
    {
        $sql = "SELECT * FROM `" . $table . "` WHERE " . $cond;
        // echo $sql;
        // exit;

        global $pdo;
        return $pdo->query($sql);
    }

    //加入 preg_replace() 處理
    $_POST = preg_replace("/[\'\"]+/", '', $_POST);

    $result = select("users", "username='" . $_POST["username"] . "' and password= '" . $_POST['password'] . "'");

    if ($result->rowCount()) { //有找到此帳號密碼
        $_SESSION['admin'] = $_POST['username'];
        header("location: admin.php");
    } else {
        echo "<script>alert('帳號或密碼錯誤');</script>";
    }
}
?>