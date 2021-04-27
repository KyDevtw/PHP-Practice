<?php

// 先行判斷某個 key 是否存在於 GET 變數當中
// isset 常使用在本端頁面先行判斷 key 的存在與否
if (isset($_GET['keyword'])) {
    echo '有 $_GET["keyword"]';
} else {
    echo '沒有 $_GET["keyword"]';
}


// 列出所有 GET 變數的資訊,會從前端的頁面抓輸入的資料過來使用
echo $_GET['ro'];
echo "<hr>";
echo $_GET['jobcat'];
echo "<hr>";
echo $_GET['kwop'];
echo "<hr>";
echo $_GET['keyword'];
echo "<hr>";
echo $_GET['expansionType'];
echo "<hr>";
echo $_GET['area'];
echo "<hr>";
echo $_GET['order'];
echo "<hr>";
echo $_GET['asc'];
echo "<hr>";
echo $_GET['page'];
echo "<hr>";
echo $_GET['mode'];
echo "<hr>";
echo $_GET['jobsource'];
echo "<hr>";
echo $_GET['aaa'];
echo "<hr>";
