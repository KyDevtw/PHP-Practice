<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //nl2br() 以 HTML 的 <br> 取代分行字元（\n）
    $str01 = "小明:「我重要嗎？」\n 小美:「再重都要。」";
    echo nl2br($str01);
    ?>

    <hr>

    <?php
    // trim() 去除字串「起始處」與「結束處」的空白
    // ltrim() 去除字串「起始處(左邊)」的空白
    // rtrim() 去除字串「結束處(右邊)」的空白
    $str02 = " 我想妳一定很忙，所以只要看前三個字就好… ";
    echo trim($str02) . "<br>";
    echo ltrim($str02) . "<br>";
    echo rtrim($str02);
    ?>

    <hr>

    <?php
    // explode( , ) 把字串由指定符號進行切割轉成陣列 
    // print_r() 印出內容的形式與資料類型,常用於檢查
    $str03 = "人,帥,得,體";
    $arr03 = explode(",", $str03);
    echo $arr03[0] . $arr03[1] . $arr03[2] . $arr03[3] . "<br>";
    print_r($arr03);
    ?>

    <hr>

    <?php
    //implode()、join() 將陣列的元素連結起來,成為字串,
    $str04_1 = implode("~", $arr03);
    echo $str04_1 . "<br>";
    $str04_2 = join("...", $arr03);
    echo $str04_2 . "<br>";
    ?>

    <hr>

    <?php
    // strlen()、mb_strlen() 查詢字串中的字元長度（個數）
    // strpos()、mb_strpos() 查詢字元在字串中第一次出現的位置,字元的索引值，從 0 開始,若是沒有找到查詢字元，則回傳 FALSE
    // substr()、mb_substr() 擷取字串中，指定開始位置，擷取字數的部分字串；不設定字數，字串會由開始位置取到最後
    // 字元順序與陣列雷同,索引起始值為0

    // mb_用於中文字(中文字為3bytes字元組)
    $str05_1 = "abcdefg";
    $str05_2 = "懷疑人生";
    echo strlen($str05_1) . "<br>";
    echo mb_strlen($str05_2) . "<br>";
    echo strpos($str05_1, "c") . "<br>";
    echo mb_strpos($str05_2, "人") . "<br>";
    echo substr($str05_1, 3, 5) . "<br>";
    echo mb_substr($str05_2, 2, 3);
    ?>

    <hr>

    <?php
    // str_replace() 取代指定字元
    // str_pad( a, num , b) 字串 a + 重複的b, ? 中間為字元數(中文佔3字元所以不會直接顯示該數字的量)
    // . str_repeat(" ", 5) 加上重複數量的指定字元
    $str06 = "正規表達式";
    echo str_replace("達", "示", $str06) . "<br>";
    echo str_pad("不要", 30, "啊") . "<br>";
    // STR_PAD_BOTH 向兩側填滿, 還有LEFT and RIGHT
    echo str_pad("不要", 30, "啊", STR_PAD_BOTH) . "<br>";
    echo "y" . str_repeat("e", 5);
    ?>

    <hr>

    <?php
    // strtolower()、strtoupper() 轉換英文小寫
    $str07_1 = "HELLO ";
    $str07_2 = "world!";
    echo strtolower($str07_1) . strtoupper($str07_2);
    ?>

    <hr>

    <?php
    // md5() 使用 MD5 計算字串雜湊值，並回傳。預設 32 個字元長度的字串。
    $strOrigin = "T1st@localhost";
    echo "原始資料: " . $strOrigin . "<br>";
    echo "md5() 加密後: " . md5($strOrigin) . "<br>";

    $strOrigin = "test@localhost";
    echo "修改後資料: " . $strOrigin . "<br>";
    echo "md5() 加密後: " . md5($strOrigin) . "<br>";

    $strOrigin = "T1st@localhost";
    echo "回復原資料: " . $strOrigin . "<br>";
    echo "md5() 加密後: " . md5($strOrigin) . "<br>";
    ?>

    <hr>

    <?php
    // sha1() 使用 sha1 計算字串雜湊值，並回傳。預設 40 個字元長度的字串。破解難度更高
    $strOrigin = "T1st@localhost";
    echo "原始資料: " . $strOrigin . "<br>";
    echo "sha1() 加密後: " . sha1($strOrigin) . "<br>";

    $strOrigin = "test@localhost";
    echo "竄改後資料: " . $strOrigin . "<br>";
    echo "sha1() 加密後: " . sha1($strOrigin) . "<br>";
    
    $strOrigin = "T1st@localhost";
    echo "回復原資料: " . $strOrigin . "<br>";
    echo "sha1() 加密後: " . sha1($strOrigin) . "<br>";
    ?>



</body>

</html>