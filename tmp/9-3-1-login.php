<?php

// 啟動 session
session_start();

// 預設帳號密碼，測試 session 登入用
$username = 'test';
$pwd = sha1('test'); // sha1 雜湊後的字串


// 判斷 username 與 pwd 是否同時存在
if (isset($_POST['username']) && isset($_POST['pwd'])) {
    // 判斷帳號、密碼是否為正確
    if ($_POST['username'] === $username && sha1($_POST['pwd']) === $pwd) {
        // 3秒後跳頁
        header("Refresh: 1; url=./9-3-2-admin.php");
        // 將傳送過來的 post 變數資料，放到 session，
        $_SESSION['username'] = $_POST['username'];
        echo "登入成功!!! 1秒後自動進入後端頁面";
    } else {
        // 關閉 session
        session_destroy();
        // 3秒後跳頁
        header("Refresh: 3; url=./9-3.php");
        echo "登入失敗…3 秒後自動回登入頁";
    }
} else {
    // 關閉 session
    session_destroy();
    // 3秒後跳頁
    header("Refresh: 3; url=./9-3.php");
    echo "請確實登入…3 秒後自動回登入頁";
}


// session_start在內部判斷同時存在時才建立,判斷失敗就不用刪除session

// if (isset($_POST['username']) && isset($_POST['pwd'])) {
//     if ($_POST['username'] === $username && sha1($_POST['pwd']) === $pwd) {
//         session_start();
//         header("Refresh: 1; url=./9-3-2-admin.php");
//         $_SESSION['username'] = $_POST['username'];
//         echo "登入成功!!! 1秒後自動進入後端頁面";
//     } else {
//         header("Refresh: 3; url=./9-3.php");
//         echo "登入失敗…3 秒後自動回登入頁";
//     }
// } else {
//     header("Refresh: 3; url=./9-3.php");
//     echo "請確實登入…3 秒後自動回登入頁";
// }
