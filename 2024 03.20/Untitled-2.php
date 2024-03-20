<!-- 循环 -->
<?php
$num=0;
//while语句的特点：不符合表达式要求，则一次也不输出

// while($num<= 100){
//     echo $num."<br>";
//     $num++;
// }

//do while语句特点：至少要执行一次循环体
// do{
//     echo $num."<br>";
//     $num++;
// }
// while($num<= 100);

while($num<= 100){
    echo $num.",";
    $num++;
    $num=$num+1;
}

?>