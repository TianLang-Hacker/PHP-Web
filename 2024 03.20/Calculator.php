<html>
	<head>
		<meta charset="utf-8" />
		<title>计算器</title>
	</head>
	<body>
		<h1> 简易在线计算器 </h1>
		<form action="" method="post">
			<input type="text" name="one" />
			<br />
			<input type="radio" name="suan" value="+" />
			+
			<input type="radio" name="suan" value="-" />
			-
			<input type="radio" name="suan" value="*" />
			*
			<input type="radio" name="suan" value="/" />
			/
			<br />
			<input type="text" name="two" />
			<br />
			<input type="submit" value="提交" />
		</form>
	</body>
</html>

<?php

	$one = $_POST['one'];
	$two = $_POST['two'];
	$suan = $_POST['suan'];
	
	switch ($suan) {
		case '+':
			echo "$one$suan$two=" . ($one + $two);
			break;

		case '-':
			echo "$one$suan$two=" . ($one + $two);
			break;

		case '*':
			echo "$one$suan$two=" . ($one + $two);
			break;

		case '/':
			echo "$one$suan$two=" . ($one + $two);
			break;
		}

?>
