<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Document</title>
</head>

<body>
    <!--  
    $_FILES["欄位名稱"]["tmp_name"] 取得上傳檔案暫存檔名稱
    $_FILES["欄位名稱"]["name"] 取得上傳檔案原始檔名
    $_FILES["欄位名稱"]["type"] 取得上傳檔案類型，例如 text/plain（文字檔）、images/jpeg（JPEG 圖片檔）
    $_FILES["欄位名稱"]["size"] 取得上傳檔案大小
    $_FILES["欄位名稱"]["error"] 錯誤碼
    -->
    <form name="myForm" action="./7-5-1.php" method="POST" enctype="multipart/form-data">
        <h3>請選擇所要上傳的檔案</h3>
        <input type="file" name="fileUpload" /><br>
        <input type="submit" value="送出資料">
    </form>

    <form name="myForm" action="./7-5-2.php" method="POST" enctype="multipart/form-data">
        <h3>請選擇所要上傳的檔案到7-5-2</h3>
        <input type="file" name="fileUpload" /><br>
        <input type="submit" value="送出資料">
    </form>
</body>

</html>