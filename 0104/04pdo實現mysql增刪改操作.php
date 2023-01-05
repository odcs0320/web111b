<?php
require_once "singletPDO.php";

if (isset($_GET['do']) && !empty($_GET['do'])) {
    switch ($_GET['do']) {
        case 'create':
            $data = [
                $_POST["cName"],
                $_POST["cSex"],
                $_POST["cBirthday"],
                $_POST["cEmail"],
                $_POST["cPhone"],
                $_POST["cAddr"],
                $_POST["cHeight"],
                $_POST["cWeight"],
            ];
            $sql = "INSERT INTO `students` (`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`,`cHeight`,`cWeight`) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            try {
                if ($stmt->execute($data)) {
                    echo "新增成功";
                } else {
                    echo "新增失敗";
                }
            } catch (PDOException $th) {
                echo "新增失敗" . $th->getMessage();
            }

            break;

        case 'delete':
            $data = [$_POST["cID"]];
            $sql = "DELETE FROM `students` WHERE `cID`= ?";
            $stmt = $pdo->prepare($sql);
            try {
                if ($stmt->execute($data)) {
                    echo "刪除成功";
                } else {
                    echo "刪除失敗";
                }
            } catch (PDOException $th) {
                echo "刪除失敗" . $th->getMessage();
            }

            break;
        case 'update':
            $data = [$_POST['cWeight'], $_POST['cID']];
            $sql = "UPDATE `students` SET `cWeight` = ? WHERE `cID`= ?";
            $stmt = $pdo->prepare($sql);

            try {
                if ($stmt->execute($data)) {
                    echo "修改成功";
                } else {
                    echo "修改失敗";
                }
            } catch (PDOException $th) {
                echo "修改失敗" . $th->getMessage();
            }

            break;
        case 'select':
            if ($_POST['method'] == "1") {
                //使用 PDO::query() 方法
                $sql = "SELECT * FROM `students`";
                $result = $pdo->query($sql);
                $result->setFetchMode(PDO::FETCH_NUM);
                while ($row = $result->fetch()) {
                    print_r($row);
                }
            } elseif ($_POST['method'] == "2") {
                //使用 PDO::prepare() 方法
                $sql = "SELECT * FROM `students`";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    print_r($row);
                }
            }
            break;
    }
}