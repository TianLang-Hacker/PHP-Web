<html>
	<head>
		<meta charset="utf-8" />
		<title>计算器</title>
	</head>
	<body>
		<h1> 矩形计算器 </h1>
		<form action="" method="post">
			<label>请输入矩形的长：</label>
			<input type="text" name="chang" />
			<br />
             <label>请输入矩形的宽：</label>
			<input type="text" name="kuan" />
			<br />
			<input type="submit" value="计算矩形面积" />
		</form>
	</body>
</html>
<?php
if(!empty($_POST['chang']) && !empty($_POST['kuan'])){
	echo "矩形的长是：".$_POST['chang'];
	echo "<br>";
	echo "矩形的宽是：".$_POST['kuan'];
	echo '<br>';
	echo "面积是：".$_POST['chang'] * $_POST['kuan'];
}
?>
