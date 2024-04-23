<?php
// // 一维数组的创建
// // 方法一
// $array[0]="中国";
// $array[1]= "Россия";
// print_r($array);
// echo"<br>";

// // 方法二
// $arr=array("Province"=>"JiangSu","City"=>"SuZhou");
// print_r($arr);
// echo "<hr>";

// // 二维数组的创建
// $arr2=array("0"=>"China", "1"=>"Россия");

$name=array("1"=>"Laptop","2"=>"Smartphone","3"=>"Sportwatch","4"=>"Jeans") ;
$price=array("1"=>"114514CNY","2"=>"1145CNY","3"=>"1919CNY","4"=>"1919810CNY");
$counts=array("1"=> 1,"2"=> 1,"3"=> 3,"4"=>2) ;

$wuprice=array_combine($name,$price);
print_r($wuprice);

$wucount
?>