<?php
// private 範例
// private 無法讓子類別可以使用,也無法在外部呼叫
// 通常用於較為隱密的計算方法,只會回傳結果,不讓外部存取或修改方法
class GrandPa
{
    private $name = 'Mark Henry';
}

class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }
}

$daddy = new Daddy;
echo $daddy->displayGrandPaName(); // Results in a Notice 

echo "<hr>";

$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; //  Fatal Error