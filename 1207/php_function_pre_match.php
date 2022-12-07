<?php

// Preg_match(比對正規式,被比對的字串)

// <form action"" method="post">
// <input type="text" name="telephone" id="">
// <input type="text" name="id_no" id="">
// </form>

//檢查電話號碼的格式為:2個數字+1個"-"符號+8個數字
if (!preg_match('/^[0-9]{2}-[0-9]{8}/', $_POST['telephone'])) {
    echo '電話號碼格式錯誤!!';
}

//檢查身分證的格式為:1個A-Z,a-z之間的英文字或1個或2個8個數字
if (!preg_match('/^[A-Za-z][1-2]\d{8}/', $_POST['id_no'])) {
    echo '身分證字號格式錯誤!!';
}