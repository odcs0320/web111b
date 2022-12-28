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

require_once "members_connDB.php";

$sql = "SELECT * FROM `members`";
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
$sql = "SELECT * FROM `members` LIMIT {$start},{$per_page}";
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
echo "<form align=center action='members_delete_all.php' name='form1' method='post'>";
echo "<h1 align='center'>會員資料管理系統</h1>";
echo "<p align='center'>總共:{$record}筆資料," . "目前在第{$page}頁</p>";
echo "<p align=\"center\">
         <a href=\"members_create.php\">新增會員資料</a>&emsp;
         <a href=\"#\" onclick='delall();'>刪除被選取的資料</a>&emsp;




</p>";

//資料內容呈現
echo "<p><table align=center border=1>";
//資料表頭
echo "<tr>
    <th>序號</th>
    <th>姓名</th>
    <th>帳號</th>
    <th>密碼</th>
    <th>性別</th>
    <th>生日</th>
    <th>層級</th>
    <th>電子郵件</th>
    <th>網址</th>
    <th>電話</th>
    <th>住址</th>
    <th>登入次數</th>
    <th>登入時間</th>
    <th>加入時間</th>
    <th colspan='3'>功能</th>
</tr>";

//資料內容
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align=center>";
    echo "<td>" . $row['m_id'] . "</td>";
    echo "<td>" . $row['m_name'] . "</td>";
    echo "<td>" . $row['m_username'] . "</td>";
    echo "<td>" . $row['m_passwd'] . "</td>";
    echo "<td>" . $row['m_sex'] . "</td>";
    echo "<td>" . $row['m_birthday'] . "</td>";
    echo "<td>" . $row['m_level'] . "</td>";
    echo "<td>" . $row['m_email'] . "</td>";
    echo "<td>" . $row['m_url'] . "</td>";
    echo "<td>" . $row['m_phone'] . "</td>";
    echo "<td>" . $row['m_address'] . "</td>";
    echo "<td>" . $row['m_login'] . "</td>";
    echo "<td>" . $row['m_logintime'] . "</td>";
    echo "<td>" . $row['m_jointime'] . "</td>";
    echo "<td><a href='members_update.php?m_id=" . $row["m_id"] . "'>修改</a></td>";
    echo "<td><a href='members_delete.php?m_id={$row["m_id"]}'>刪除</a></td>";
    echo "<td><input type=\"checkbox\" name=\"del[]\" value='{$row['m_id']}'></td>";
    echo "</tr>";
}

echo "</table></p>";
echo "</form>";

echo "<table align=center>";
echo "<tr>";
echo "<td>";

$prev = $page - 1;
$next = $page + 1;

echo "<a href='?page=1'>首頁</a>&emsp;";

if ($page > 1) {
    echo "<a href='?page=$prev'>上頁</a>&emsp;";
}
if ($page < $total_page) {
    echo "<a href='?page=$next'>下頁</a>";
}

echo "&emsp;<a href='?page=$total_page'>末頁</a>";

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
