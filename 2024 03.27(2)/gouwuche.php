<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用foreach语句遍历数组</title>

</head>
<style type="text/css">

</style>
<body>
<table width="580" height="180" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="img/bg.jpg" width="580" height="150"></td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#EEEFE9" class="STYLE1">&nbsp;&nbsp;购物车商品信息展示</td>
  </tr>
</table>

<?php
$name=array("1"=>"Laptop","2"=>"Smartphone","3"=>"Sportwatch","4"=>"Jeans") ;
$price=array("1"=>"114514CNY","2"=>"1145CNY","3"=>"1919CNY","4"=>"1919810CNY");
$counts=array("1"=> 1,"2"=> 1,"3"=> 3,"4"=>2) ;
echo '
      <table width=580 border="1" cellpadding="0"
      cellspacing="0" bordercolor="#FF00FF">
      <tr>
      <td width=145 align="center" bgcolor="#FFFFFF">商品名称</td>
      <td width=145 align="center" bgcolor="#FFFFFF">商品价格</td>
      <td width=145 align="center" bgcolor="#FFFFFF">商品数量</td>
      <td width=145 align="center" bgcolor="#FFFFFF">商品金额</td>
      </tr>';
  foreach($name as $key=>$value){
    echo '<tr>
      <td height="25" align="center" bgcolor="#FFFFFF">'.$value.'</td>
      <td height="25" align="center" bgcolor="#FFFFFF">'.$price[$key].'</td>
      <td height="25" align="center" bgcolor="#FFFFFF">'.$counts[$key].'</td>
      <td height="25" align="center" bgcolor="#FFFFFF">'.intval($price[$key])*intval($counts[$key]).'</td>
      </tr>';
  }
  echo '</table>';
?>

</body>
</html>