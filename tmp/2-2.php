<?php

// 宣告陣列
$arrName = ["Alex", "Bill", "Carl", "Darren"];
echo $arrName[0]."<br>";
echo $arrName[1]."<br>";
echo $arrName[2]."<br>";
echo $arrName[3]."<br>";

// 整合 HTML標籤

echo "<br>";

// 物件變數
$obj = ["name" => "Alex", "age" => "17"];

// 串接字串與物件
echo "姓名: " . $obj["name"] . "，年齡: " . $obj["age"];
