<?php

echo "<script>
function delall() {
  console.log('delall')
  if (confirm('\\n是否確定要刪除這筆資料?\\n刪除後無法恢復喔!\\n')) {
    form1.submit();
  }
  return false;
}
</script>
";

echo "
   <style>
     table,td{
        border-collapse: collapse;
     }
   </style>

";

require_once "connDB.php";

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

//總共有幾筆資料
$record = mysqli_num_rows($result);
//每頁顯示幾筆資料
$per_page = 10;
$total_page = ceil($record / $per_page);

if (isset($_GET['page'])) {
    $page = intVal($_GET['page']);
} else {
    $page = 1;
}

$start = ($page - 1) * $per_page;
//$sql = "SELECT * FROM `students` LIMIT " . $start . "," . $per_page;
$sql = "SELECT * FROM `users` LIMIT {$start},{$per_page}";
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
echo "<form align=center action='php_mysqli_delete_all.php' name='form1' method='post'>";
echo "<h1 align='center'>會員資料管理系統</h1>";
echo "<p align='center'>總共:{$record}筆資料," . "目前在第{$page}頁</p>";
echo "<p align=\"center\">
         <a href=\"php_mysqli_create.php\">新增會員資料</a>&emsp;
         <a href=\"#\" onclick='delall();'>刪除被選取的資料</a>&emsp;




</p>";

//資料內容呈現
echo "<p><table align=center border=1>";
//資料表頭
echo "<tr>
    <th>序號</th>
    <th>帳號</th>
    <th>密碼</th>
    <th>姓名</th>
    <th>性別</th>
    <th>年</th>
    <th>月</th>
    <th>日</th>
    <th>電話</th>
    <th>手機</th>
    <th>住址</th>
    <th>電子郵件</th>
    <th>網址</th>
    <th>備註</th>
    <th colspan='3'>功能</th>
</tr>";

//資料內容
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align=center>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['account'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "<td>" . $row['month'] . "</td>";
    echo "<td>" . $row['day'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['cellphone'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['url'] . "</td>";
    echo "<td>" . $row['comment'] . "</td>";
    echo "<td><a href='php_mysqli_update.php?id=" . $row["id"] . "'>修改</a></td>";
    echo "<td><a href='php_mysqli_delete.php?id={$row["id"]}'>刪除</a></td>";
    echo "<td><input type=\"checkbox\" name=\"del[]\" value='{$row['id']}'></td>";
    echo "</tr>";
}

echo "</table></p>";
echo "</form>";

echo "<table align=center>";
echo "<tr>";
echo "<td>";

$prev = $page - 1;
$next = $page + 1;

if ($page > 1) {
    echo "<a href='?page=1'>首頁</a>&emsp;<a href='?page=$prev'>上頁</a>&emsp;";
}
if ($page < $total_page) {
    echo "<a href='?page=$next'>下頁</a>&emsp;<a href='?page=$total_page'>末頁</a>";
}

echo "</td>";
echo "</tr>";
echo "</table>";

mysqli_free_result($result);
mysqli_close($conn); //關閉資料庫連接

// while ($row = mysqli_fetch_assoc($result)) {
//   # code...
//   echo "
// {$row['cID']}
// {$row['cName']}
// {$row['cSex']}
// {$row['cBirthday']}
// {$row['cEmail']}
// {$row['cPhone']}
// {$row['cAddr']}
// {$row['cHeight']}
// {$row['cWeight']} </br>
// ";
// }
