<?php

//使用雙引號,變數可以使用樣板字串來動態顯示,不用使用.串接
$myVar = "Darren";
echo "Hi, $myVar <br>";
echo "Hi, {$myVar} <br>";
echo "Hi, ${myVar} <br>";

// 可以串接兩組樣板字串
echo "Hi, $myVar $myVar <br>";
echo "Hi, {$myVar} {$myVar} <br>";
echo "Hi, ${myVar} ${myVar} <br>";
echo "<br><br>";

//使用單引號括住字串,變數會變成一般字串,直接輸出顯示
echo 'Hi, $myVar <br>';
echo 'Hi, {$myVar} <br>';
echo 'Hi, ${myVar} <br>';
