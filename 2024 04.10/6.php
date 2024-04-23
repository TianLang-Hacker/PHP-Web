<?php
// $array=array_fill(3,5,'sunny');
// print_r($array);
// $student=array_fill(1,20,'男');
// print_r($student);
// $input=array("PHP","JSP","HTML") ;
// $result1=array_pad($input,5,8) ;
// print_r($result1);
// echo"<hr>";
// $result2=array_pad($input,-5,9) ;
// print_r($result2);
// echo "<hr>";
// $result3=array_pad($input,1,5) ;
// print_r($result3);

//字符串分割函数explode
// $str="Jiangsu, Anhui, Zhejiang";
// $str_arr=explode(", ",$str);
// print_r($str_arr);

// $str2="1； 2； 3；4";
// $str2_arr=explode(", ",$str2);
// print_r($str2_arr);

// 数组统计函数
// 1 count()函数 统计元素个数
// $array=array(0=>"2024",1=>"2025",2=>"2026",3=>"2027");
// echo count($array);
// //max统计数组元素的最大值
// echo"<hr>";
// echo max($array);
// //min统计数组元素的最小值
// echo "<hr>";
// echo min($array);
// //array_sum函数 统计数组元素的和
// echo "<hr>";
// echo array_sum($array);
//array_count_values 函数

// 统计所有元素出现的次数
// $array2=array(0=> "2021",1=> "2024",2=> "2026",3=> "2027");
// print_r(array_count_values($array2));

// 数组指针函数
// $array=array("3月"=>"春天","6月"=>"夏天","9月"=>"秋天","12月"=>"冬天") ;
// echo key($array);
// echo "<br>";
// echo current($array);
// echo "<br>";
// next($array);
// echo current($array);
// echo "<br>";
// prev($array);
// echo current($array);
// echo "<br>";
// end($array);
// echo current($array);
// echo "<br>";
// reset($array);

// $array=array("月3"=>"春天","月6"=>"夏天","月9"=>"秋天","月12"=>"冬天");
// extract($array);
// echo $月3;
// //compact函数用于将变量组建为数组
// $a="6";
// $b= "66";
// $c= "666";
// $result=compact("a","b","c");
// print_r($result);

//5.5.5 数组检索函数
// $array=array("3月"=>"春天","6月"=>"夏天","9月"=>"秋天","12月"=>"冬天");
// $arr1=array_keys($array);
// print_r($arr1);
// echo"<br>";
// $array2=array("子鼠","丑牛","寅虎");
// $arr2=array_keys($array2);
// print_r($arr2);

//array_search 函数 用于在数组中搜索给定的值
// $array=array("114514","1145","6","666","Chicken","Chicken_you_are_so_beautiful") ;
// if (array_search("114514", $array) !== false) {
//     echo"找到";
//     }
//     else {
//         echo "没找到";
//     }
?>