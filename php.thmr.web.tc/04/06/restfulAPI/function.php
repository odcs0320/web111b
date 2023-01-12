<?php

function index($table, $sex = "", $keyword = '')
{
    global $pdo;
    $where = '';

    //初始化
    $all_students = $value = [];

    //是否要條件查詢 $sex
    if ($sex) {
        $where = " WHERE `cSex`= ? ";
        $value = [$sex];
    } elseif ($keyword) {
        //關鍵字查詢
        $where = "WHERE `cName` like ? or `cSex` like ? or `cBirthday` like ?
      or `cEmail` like ? or `cPhone` like ? or `cAddr` like ?
      or `cHeight` like ? or `cWeight` like ? ";
        $value = ["%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%",
            "%{$keyword}%", "%{$keyword}%", "%{$keyword}%", "%{$keyword}%"];
    }
    $sql = "SELECT * FROM $table $where ORDER BY `cBirthday` DESC";
    $sth = $pdo->prepare($sql);
    $sth->execute($value);

    while ($all_students[] = $sth->fetch(PDO::FETCH_NUM)) {
        //過濾整個陣列
        $all_students = filter_var_array($all_students, FILTER_SANITIZE_STRING);
    }
    return $all_students;
}

function create($table, $col, $value)
{
    global $pdo;
    if (count($col) == count($value)) {
        // INSERT INTO $table(col1,col2,...)VALUES('?','?',...)
        $sql = "INSERT INTO `$table` ( ";
        for ($i = 0; $i < count($col); $i++) {
            $sql .= "`" . $col[$i] . "`";
            if ($i == count($col) - 1) {
                continue;
            }

            $sql .= ",";
        }
        $sql .= ") VALUES(";

        for ($i = 0; $i < count($value); $i++) {
            $sql .= "?";
            if ($i == count($value) - 1) {
                continue;
            }

            $sql .= ",";
        }
        $sql .= ")";
    } else {
        echo "<script>alert(\"資料比數不正確\")</script>";
    }
}

function update()
{

}

function delete()
{

}