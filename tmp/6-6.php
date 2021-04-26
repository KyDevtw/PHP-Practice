<?php

// 建立一個空陣列
$arr = [];

$arr[0] = "";
$arr[1] = 0;
$arr[2] = false;
$arr[3] = 10;
$arr[4] = NULL;


/**
*若是要判斷陣列指定索引的值「是否為空」，可以使用 empty() 函式，為空則回傳 true;不為空，則回傳 false
* "" (空字串)
* 0 (代表整數 0)
* 0.0 (代表浮點數 0)
* "0" (代表字串符號的 0)
* NULL
* FALSE
* array() (一個空陣列)
* $var; (變數已經宣告，卻沒有提供初始值)
*/


echo '$a[0] = "" ... 是否為空? ';
echo empty($arr[0]) ? '為空' : '不為空';
echo "<hr />";
echo '$a[1] = 0 ... 是否為空? ';
echo empty($arr[1]) ? '為空' : '不為空';
echo "<hr />";
echo '$a[2] = false ... 是否為空? ';
echo empty($arr[2]) ? '為空' : '不為空';
echo "<hr />";
echo '$a[3] = 10 ... 是否為空? ';
echo empty($arr[3]) ? '為空' : '不為空';
echo "<hr />";
echo '$a[4] = NULL ... 是否為空? ';
echo empty($arr[4]) ? '為空' : '不為空';