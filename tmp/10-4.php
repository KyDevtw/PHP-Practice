<?php
//preg_match_all() 比對所有結果
$regex = "/https:\/\/stickershop\.line-scdn\.net\/stickershop\/v1\/sticker\/([0-9]+)\/android\/sticker.png/";
$test = 'background-image:url(https://stickershop.line-scdn.net/stickershop/v1/sticker/13183/android/sticker.png;compress=true);
background-image:url(https://stickershop.line-scdn.net/stickershop/v1/sticker/13184/android/sticker.png;compress=true);
background-image:url(https://stickershop.line-scdn.net/stickershop/v1/sticker/13185/android/sticker.png;compress=true);';

// 判斷是否比對成功
if (preg_match_all($regex, $test, $matches)) {
    echo "比對成功！ 結果為: <br>";

    // 格式化輸出所有比對結果
    // 有group會成為下一個陣列輸出
    echo "<pre>";
    print_r($matches);
    echo "</pre>";

    echo "<hr>";

    // 將所有比對結果,以及透過群組取得的文字,進行輸出
    for ($i = 0; $i < count($matches[0]); $i++) {
        echo "照片連結為: <a href='{$matches[0][$i]}' target='_blank'>{$matches[0][$i]}</a> <br>";
        echo "照片代號為: {$matches[1][$i]} <br>";
        echo "<img src='{$matches[0][$i]}'>";
        echo "<hr>";
    }
} else {
    echo "比對失敗…";
}
