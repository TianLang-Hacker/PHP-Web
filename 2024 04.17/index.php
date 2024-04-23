<?php
echo "<h3>您提交的信息是：</h3>";
$xm=$_POST["xingming"];
echo"举报人姓名：".$xm;
echo "<br>";

$birthday=$_POST["birthday"];
echo "举报人出生日期：".$birthday;
echo "<br>";

$sex=$_POST["sex"];
echo "举报人的性别是：".$sex;
echo "<br>";

$idcard=$_POST["idcard"];
echo "举报人的身份证号码是：".$idcard;
echo "<br>";

$tel=$_POST["tel"];
echo "举报人的手机号码是：".$tel;
echo "<br>";

echo "用户举报的平台违规类型是：";
for ($i= 0; $i<=count($_POST['leixing']); $i++){
    echo $_POST['leixing'][$i]."&nbsp&nbsp";
}
echo "<br>";

$fangwen=$_POST['fangwen'];
echo "举报人提供的违规平台访问信息：". $fangwen;
echo "<br>";