<?php
$a=100;
var_dump($a);
$b="100";
echo "<br>";
var_dump($b);

// if($a===$b) {
//     echo "<br>";
//     echo "可以登录";
//     } else {
//         echo "<br>";
//         echo "并不是完全一致"; 
//     }

// 强制转换，使得$a===$b
$b = (int)$b;
echo "<br>";
var_dump($b);
echo ($a===$b)?"可以登录！":"并不是完全一致。";

?>