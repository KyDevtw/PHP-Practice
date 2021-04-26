<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--「echo」是輸出資料的語法，不用加括號，類似 print 的效果。-->
<!-- php單行不換行不用加; -->
<?php echo "哈囉你好嗎?" ?>

<?php
// php內單行註解

/**
 * 多行註解
 * 斜線兩個星號後會自己生成註解頭尾
 * 2.
 * 3.
 */

?>

<?php
// PHP 標籤換行，則程式碼需要分號結尾
// PHP 可以直接使用echo輸出html標籤
echo "Hello World!<br>";
echo "<hr>";
echo "Hello PHP!";
?>

<!-- PHP 可以用兩個標籤包住html標籤動態執行程式 -->

<?php for ($i=0; $i<10; $i++){ ?>
    <div><?php echo $i ?></div>
<?php } ?>

</body>
</html>