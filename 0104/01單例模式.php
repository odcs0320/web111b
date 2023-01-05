<?php
class DBConnectionSingleton
{
    //通過私有靜態聲明單例物件
    //私有:保證只能在這個類別下訪問
    //靜態聲明:只在class DBConnectionSingletion {...}聲明時被執行一次

    private static $pdo = null;
    //function __construct(){}
    public static function getpdo()
    {
        if (!self::$pdo) {
            //pdo不存在時操作以下內容
            self::$pdo = new self();
        }
        return self::$pdo;
    }
}