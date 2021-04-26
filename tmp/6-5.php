<?php

// 不使用陣列索引鍵
// foreach 類似 Javascript for of / for in
$arrSeasons = ['春', '夏', '秋', '冬'];
echo "每年的四季分別為： ";
foreach ($arrSeasons as $value) {
    echo $value . "&nbsp;";
}

echo "<hr>";

// 各別輸出陣列的索引鍵 key，同時輸對應的值 value
$arrPerson = [
    '學號' => '103',
    '姓名' => '孫小美',
    '性別' => '女',
    '生日' => '2000/7/15',
    '手機號碼' => '0939666999'
];
foreach ($arrPerson as $key => $value) {
    echo $key . ": " . $value . "<br />";
}

echo "<hr>";

// 輸出二維陣列的結果，其中第二維放置關聯式陣列 (物件)
$arrStudents = [];
$arrStudents[] = ["name" => "Alex", "age" => 18];
$arrStudents[] = ["name" => "Bill", "age" => 21];
$arrStudents[] = ["name" => "Carl", "age" => 13];
$arrStudents[] = ["name" => "Darren", "age" => 19];
foreach ($arrStudents as $key => $obj) {
    echo "{$obj['name']} 今年 {$obj['age']}<br>";
}

// key只表示索引值,沒有寫出沒有差
// $obj表示陣列的value
foreach ($arrStudents as $obj) {
    echo "{$obj['name']} 今年 {$obj['age']}<br>";
}
