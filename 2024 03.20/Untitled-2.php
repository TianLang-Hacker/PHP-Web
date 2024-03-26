<!-- 循环 -->
<?php
// $num=0;
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


// 输出0~100所有偶数
// $num=0;
// while($num<= 100){
//     echo $num.",";
//     $num++;
//     $num=$num+1;
// }


// for循环实现输出1-100之间的偶数
// for ($num=2;$num<=100;$num+=2){
//     echo $num."<br>";
// }


// 用for循环计算1-100之间的和 1+2+3+4+5......+100
// $sum=0;
// for ($num= 1;$num<= 100;$num++){
//     // echo $num."+";
//     $sum+=$num;
//     }
// echo"1-100总和是".$sum;

// 用foreach语句输出数组内容
// $name = array("1"=>"6","2"=>"1145","3"=>"手鸡");
// foreach($name as $value) {
//     echo $value."<br>";
// }
// echo"<hr/>";
// foreach($name as $key=>$value) {
//     echo "第".$key."项的值是:".$value."<br>";
// }


$name = array("1"=>"6","2"=>"你干嘛","3"=>"1145","4"=>"手鸡");
$price = array("1"=> "1145元","2"=> "1919元","3"=> "810元","4"=>"1145141919810元");
$counts = array("1"=> "1","2"=> "1","3"=> "2","4"=>"3");

echo'
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF000">
<tr>
   <td width="145" align="center" bgcolor="#FFFFFF">商品名称</td>
   <td width="145" align="center" bgcolor="#FFFFFF">价格</td>
   <td width="145" align="center" bgcolor="#FFFFFF">数量</td>
   <td width="145" align="center" bgcolor="#FFFFFF">金额</td>
</tr>
';
foreach($name as $key => $value) {
    echo '
        <tr>
            <td height="25" align="center" bgcolor="#FFFFFF">'.$value.'</td>
            <td height="25" align="center" bgcolor="#FFFFFF">'.$price[$key].'</td>
            <td height="25" align="center" bgcolor="#FFFFFF">'.$counts[$key].'</td>
            <td height="25" align="center" bgcolor="#FFFFFF">'.intval($counts[$key])*intval($price[$key]).'</td>
        </tr>
    ';
}
echo '</table>';
?>