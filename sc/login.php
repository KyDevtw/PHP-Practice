<?php
session_start();

// 引用資料庫連線
require_once('./db.inc.php');

// 預設訊息(錯誤先行),概念上預設會錯誤,遇到正確的情況時再修正回來
$objResponse['success'] = false;
$objResponse['info'] = "登入失敗";

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    switch ($_POST['identity']) {
        case 'admin':
            // SQL 語法
            $sql = "SELECT `username`, `pwd`, `name`
                    FROM `admin` 
                    WHERE `username` = ? 
                    AND `pwd` = ? ";
            break;

        case 'users':
            // SQL 語法
            $sql = "SELECT `username`, `pwd`, `name`
                    FROM `users`
                    WHERE `username` = ? 
                    AND `pwd` = ? 
                    -- 確認帳號是否啟用
                    AND `isActivated` = 1 ";
            break;
    }

    $arrParam = [
        $_POST['username'],
        sha1($_POST['pwd'])
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($arrParam);

    if ($stmt->rowCount() > 0) {
        // 取得資料
        $arr = $stmt->fetchAll()[0];

        // 3 秒後跳頁
        if ($_POST['identity'] === 'admin')
            header("Refresh: 1; url=./admin/admin.php");
        elseif ($_POST['identity'] === 'users')
            header("Refresh: 1; url=./index.php");


        // 將傳送過來的 post 變數資料，放到 session，
        $_SESSION['username'] = $arr['username'];
        $_SESSION['name'] = $arr['name'];
        $_SESSION['identity'] = $_POST['identity'];

        $objResponse['success'] = true;
        $objResponse['info'] = "登入成功!!! 權限為「{$_SESSION['identity']}」，1秒後自動進入頁面";
        // JSON_UNESCAPED_UNICODE編碼格式來顯示中文
        echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
        exit();
    }
} else {
    $objResponse['info'] = "請確實登入…3秒後自動回登入頁";
}

header("Refresh: 3; url=./index.php");
echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
