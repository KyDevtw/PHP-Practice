<?php

// 關聯陣列宣告方法1
$myArray = [];
$myArray['myName'] = 'Alex';
$myArray['myHeight'] = 160;
$myArray['myWeight'] = 90;

echo "大家好，我的名字是 " . $myArray['myName'] . "，";
echo "我的身高是 " . $myArray['myHeight'] . "，";
echo "我的體重是 " . $myArray['myWeight'] . "。";


echo "<hr>";


// 關聯陣列宣告方法2
$myArray2 = [
'myName' => 'Ben',
'myHeight' => 170,
'myWeight' => 70,
];

echo "大家好，我的名字是 " . $myArray2['myName'] . "，";
echo "我的身高是 " . $myArray2['myHeight'] . "，";
echo "我的體重是 " . $myArray2['myWeight'] . "。";
