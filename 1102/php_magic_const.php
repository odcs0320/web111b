<?php
namespace MyProject;

$a = __LINE__;
$b = __file__;
$c = __DIR__;
$g = __namespace__;

echo "取得運行程式的行號 {$a} <br>";
echo "取得文件在本機的路徑與檔名 {$b} <br>";
echo "取得文件在本機的路徑 {$c} <br>";

class test
{
    public function fun()
    {
        $d = __function__;
        echo "取得函數的名稱 {$d} <br>";
    }

    public function meth()
    {
        $e = __class__;
        $f = __method__;
        echo "取得類別的名稱 {$e} <br>";
        echo "取得類別的方法名稱 {$f} <br>";
    }
}

$obj = new test;
$obj->fun();
$obj->meth();

echo "取得區分大小寫的命名空間名稱 {$g} <br>";