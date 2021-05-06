<?php
// preg_match() 只比對第一組的結果
$regex = "/[a-zA-Z]+/";
$test = "You are the only one we love.";

// 判斷是否比對成功
if (preg_match($regex, $test, $matches)) {
    echo "比對成功！ 結果為: {$matches[0]}";
    echo "<pre>";
    print_r($matches); // print_r()是本身就會輸出的函式不用echo
    echo "</pre>";
} else {
    echo "比對失敗…";
}
