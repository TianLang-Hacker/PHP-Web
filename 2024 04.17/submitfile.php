<?php
$upfile=$_FILES['file'] ['tmp_name'];
$path="uploads/".$_FILES['file'] ['name'];
$size=$_FILES['file'] ['size'];
$maxSize=1*1024*1024;

if(!is_uploaded_file($upfile)) {
	echo '非法上传';
	exit;
	}

// if($size>$maxSize){
// 	echo '文件大小超过1MB';
// 	exit;
// }

if(move_uploaded_file($upfile, $path)){
	echo '文件上传成功';
	}else{
		echo '文件上传失败';
		}
?>