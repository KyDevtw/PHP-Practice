<?php
require_once './checkAdmin.php';
require_once '../db.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My php programming</title>
    <?php require_once './templates/style.php' ?>

<body class="px-2">
    <?php require_once './templates/title.php'; ?>
    <hr>
    <h3 class="text-center">編輯商品資訊</h3>
    <form name="mtForm" method="POST" action="updateCategory.php">
        <table class="border">
            <thead>
                <tr>
                    <th class="border">種類名稱</th>
                    <th class="border">新增時間</th>
                    <th class="border">更新時間</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT `categoryId`, `categoryName`,`created_at`, `updated_at`
                FROM  `categories`
                WHERE `categoryId` = ? ";

                $arrParam = [(int)$_GET['editCategoryId']];


                // $_stmt也可以寫成連鎖,但底下rowCount()就不能繼續使用$_stmt
                $stmt = $pdo->prepare($sql);
                $stmt->execute($arrParam);

                // 資料數量大於 0，則列出相關資料
                if ($stmt->rowCount() > 0) {
                    $arr = $stmt->fetchAll()[0];
                ?>
                    <tr>
                        <td class="border">
                            <input type="text" name="categoryName" value="<?php echo $arr['categoryName']; ?>" maxlength="100" />
                        </td>
                        <td class="border"><?php echo $arr['created_at']; ?></td>
                        <td class="border"><?php echo $arr['updated_at']; ?></td>
                    </tr>
                <?php
                } else {
                ?>
                    <tr>
                        <td colspan="3">沒有資料</td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <?php if ($stmt->rowCount() > 0) { ?>
                        <td class="border" colspan="3"><input type="submit" name="smb" value="更新"></td>
                    <?php } ?>
                </tr>
                </tfoot>
        </table>
        <!-- 透過input以POST方式傳送原本要透過網址GET的資料過去 -->
        <input type="hidden" name="editCategoryId" value="<?php echo (int)$_GET['editCategoryId']; ?>">
    </form>
</body>

</html>