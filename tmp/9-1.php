<?php
$cookie_name = "username";
$cookie_value = "darren";
// 86400 = 1 天， 86400 * 15 = 15 天
// setcookie(名稱, 內容, 存活時間, "網域");
// time() 格林威治時間 1970 年 1 月 1 日到現在的總秒數
setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Document</title>
</head>
<body>

<?php
// 如果 cookie 不存在，則顯示尚未設定
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie '{$cookie_name}' 還沒有設定…";
} else { // 若是已設定，則顯示 cookie 內容
echo "Cookie '{$cookie_name}' 已經設定。<br>";
echo "Cookie '{$cookie_name}' 的值是: {$_COOKIE[$cookie_name]}";
}
?>

</body>
</html>