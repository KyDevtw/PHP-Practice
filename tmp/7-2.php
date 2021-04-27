<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- POST 方法是將資料包裝在 HTTP 標頭內（headers）傳送給 web server -->
    <!-- 使用 GET method 所能傳遞的資料有限連同 URI 共 255 字元,在需要上傳大量資料或檔案時,使用 POST method -->\
    <!-- enctype 用以規範該 form 被送出時，所採用的 content type. 可用的值有兩種：application/x-www-form-urlencoded（預設值）與 multipart/formdata -->
    <form name="myForm" action="./7-2-1.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label>我的姓名: </label>
        <input type="text" name="myName"> <br>
        <label>我的年紀: </label>
        <input type="text" name="myAge"> <br>
        <label>我的身高: </label>
        <input type="text" name="myHeight"> <br>
        <label>我的體重: </label>
        <input type="text" name="myWeight"> <br>
        <input type="submit" name="smb" value="送出" />
        <!-- 透過表單來上傳檔案時，請務必將 enctype 設為 multipart/form-data,同時 method 也要設為 POST -->
    </form>
</body>

</html>