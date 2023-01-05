<?php
class richestMan
{
    //通過私有靜態聲明單例物件
    //私有:保證只能在這個類別下訪問
    //靜態聲明:只在class DBConnectionSingletion {...}聲明時被執行一次

    private static $richestPeople = null;
    public $pname = "";
    //function __construct(){}
    public static function findRichestMan()
    {
        if (self::$richestPeople == null) {
            //richestPeople不存在時操作以下內容
            echo "=========創建單例類別=========</br>";
            self::$richestPeople = new self();
            self::$richestPeople->pname = "最富有的人";
        }
        return self::$richestPeople;
    }
}

$richestMan1 = richestMan::findRichestMan();
$richestMan2 = richestMan::findRichestMan();
print_r($richestMan1);
echo "<br>";
print_r($richestMan2);