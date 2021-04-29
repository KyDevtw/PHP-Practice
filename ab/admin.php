<?php
// 可以寫 checkSession.php 但因為每次都要驗證,所以可以寫成一個php檔,用require_once在需要的地方執行一次
require_once './checkSession.php';
require_once('./db.inc.php'); // 引用資料庫連線

// SQL 敘述: 取得 students 資料表總筆數
// 這個SQL語法會計算共幾筆資料
$sqlTotal = "SELECT count(1) AS `count` FROM `students`";

// 執行 SQL 語法，並回傳、建立 PDOstatment 物件
$stmtTotal = $pdo->query($sqlTotal);

// 查詢結果，取得第一筆資料(索引為 0)
$arrTotal = $stmtTotal->fetchAll()[0];

// 資料表總筆數
$total = $arrTotal['count'];

/**
 * 上面的作法，可以直接寫成： (鍊的寫法)
 * $total = $pdo->query($sqlTotal)->fetchAll()[0]['count'];
 */

// 每頁幾筆
$numPerPage = 5;

// 總頁數,ceil()括弧內最小的整數
$totalPages = ceil($total / $numPerPage);

// 目前第幾頁,如果page存在就依page顯示,如果不存在就顯示1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// 若 page小於1,則回傳1,以防page被惡意輸入1小於1的值
$page = $page < 1 ? 1 : $page;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border {
            border: 2px solid #000;
        }

        .border2 {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    
    <?php
    require_once './title.php';
    ?>

    <table class="border">
        <thead>
            <tr>
                <th class="border2">勾選</th>
                <th class="border2">學號</th>
                <th class="border2">學生</th>
                <th class="border2">性別</th>
                <th class="border2">生日</th>
                <th class="border2">手機</th>
                <th class="border2">個人描述</th>
                <th class="border2">照片</th>
                <th class="border2">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL 敘述
            $sql = "SELECT `id`, `studentId`, `studentName`, `studentGender`, `studentBirthday`, `studentPhoneNumber`, `studentDescription`, `studentImg`
                FROM `students` 
                ORDER BY `id` ASC 
                LIMIT ?, ? "; // 從第幾個到第幾個

            // 設定繫結值
            $arrParam = [
                ($page - 1) * $numPerPage,
                $numPerPage
            ];

            // 查詢分頁後的學生資料
            $stmt = $pdo->prepare($sql);
            $stmt->execute($arrParam);

            // 資料數量大於 0，則列出所有資料
            if ($stmt->rowCount() > 0) {
                $arr = $stmt->fetchAll(); // 把資料抓出來形成陣列,跑for迴圈建立html
                for ($i = 0; $i < count($arr); $i++) {
            ?>
                    <tr>
                        <td class="border2">
                            <input type="checkbox" name="chk[]" value="<?php echo $arr[$i]['id'] ?>" />
                        </td>
                        <td class="border2"><?php echo $arr[$i]['studentId'] ?></td>
                        <td class="border2"><?php echo $arr[$i]['studentName'] ?></td>
                        <td class="border2"><?php echo $arr[$i]['studentGender'] ?></td>
                        <td class="border2"><?php echo $arr[$i]['studentBirthday'] ?></td>
                        <td class="border2"><?php echo $arr[$i]['studentPhoneNumber'] ?></td>
                        <td class="border2"><?php echo nl2br($arr[$i]['studentDescription']) ?></td>
                        <td class="border2">
                            <?php if ($arr[$i]['studentImg'] !== NULL) { ?>
                                <!-- 透過php把圖片連結寫入 -->
                                <img class="w200px" src="./files/<?php echo $arr[$i]['studentImg'] ?>">
                            <?php } ?>
                        </td>
                        <td class="border2">
                            <!-- 透過超連結執行php把id帶入 -->
                            <a href="./edit.php?id=<?php echo $arr[$i]['id']; ?>">編輯</a>
                            <a href="./delete.php?id=<?php echo $arr[$i]['id']; ?>">刪除</a>
                        </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td class="border" colspan="9">沒有資料</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <!-- 生成頁碼選項 -->
        <tfoot>
            <tr>
                <td class="border" colspan="9">
                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <!-- ?page是在網址page後生成page,可以用自己想要的字母 -->
                        <a href="?page=<?php echo $i ?>"> <?php echo $i ?> </a>
                    <?php } ?>
                </td>
            </tr>
        </tfoot>
    </table>

</body>

</html>