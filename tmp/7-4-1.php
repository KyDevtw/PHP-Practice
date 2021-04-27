<?php
// 從checkbox回傳的key為陣列,裝了多個value
for ($i = 0; $i < count($_POST['myColor']); $i++) {
    echo "您所選擇的顏色為: " . $_POST['myColor'][$i] . "<br />";
};
