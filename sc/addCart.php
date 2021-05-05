<?php
session_start();
require_once('./db.inc.php');


$objResponse = [];
$objResponse['success'] = false;
$objResponse['info'] = "加入購物車失敗";
$objResponse['cartItemNum'] = 0; // 預設購物車商品數量0


// 判斷POST回傳過來的值是否存在
if (!isset($_POST['cartQty']) || !isset($_POST['itemId'])) {
    header("Refresh: 3; url=./itemList.php");
    $objResponse['info'] = "資料傳遞有誤";
    echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
    exit();
}

// 如果先前沒有建立購物車,就直接初始化 (建立)
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

$sql = "SELECT COUNT(1) AS `count` FROM `items` WHERE `itemId` = ? ";

$stmt = $pdo->prepare($sql);
$stmt->execute([(int)$_POST['itemId']]);
$count = $stmt->fetchAll()[0]['count'];

// 若商品項目個數大於 0,則將商品代號和購買數量放到購物車當中
if ($count > 0) {
    // 將主要資料放到SESSION購物車中
    $_SESSION['cart'][] = [
        "itemId" => (int)$_POST['itemId'],
        "cartQty" => $_POST["cartQty"]
    ];

    header("Refresh: 3; url=./myCart.php");
    $objResponse['success'] = true;
    $objResponse['info'] = "已加入購物車";
    $objResponse['cartItemNum'] = count($_SESSION['cart']);
} else {
    header("Refresh: 3; url=./itemList.php");
    $objResponse['info'] = "查無商品項目";
    $objResponse['cartItemNum'] = count($_SESSION['cart']);
}

echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);