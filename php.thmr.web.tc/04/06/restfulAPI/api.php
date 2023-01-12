<?php
require_once "StudentsRest.php";
$StudentsRest = new StudentsRest;

$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_STRING) : 'index';

switch ($op) {
    case 'index':
        echo $StudentsRest->index($table, $sex, $keyword);
        break;
    case 'create':
        $col = explode(',', $col);
        $value = explode(',', $value);
        echo $StudentsRest->create($table, $col, $keyw);
        break;
    case 'index':
        echo $StudentsRest->index($table, $sex, $keyword);
        break;
    case 'index':
        echo $StudentsRest->index($table, $sex, $keyword);
        break;
}