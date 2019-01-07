<?php
 //判断是否有错误号
 if($_FILES['file']['error']){
 	switch($_FILES['file']['error']){
 		case 1: 
 		$str='上传的问价超过了php.ini中upload_max_filesize选项限制的值';
 		break;
 		
 		case 2:
 		$str ='上传的文件的大小超过了HTML表单中MAX_FILE_SIZE选项指定的值';
 		break;
 		
 		case 3:
 		$str='只有部分文件被上传';
 		break;
 		
 		case 4:
 		$str='没有文件被上传';
 		break;
 		
 		case 6:
 		$str='找不到临时文件夹';
 		break;
 		case 7:
 		$str='文件写入失败';
 		break; 		 		 		
 		
 	}
 	echo $str;
 	exit;
 }
//判断你准许的文件大小
if($_FILES['file']['size']>(pow(1024,2)*2)){
	exit('文件大小超过了准许的文件大小');
	
}
//判断的准许的1.mime类型 2.文件后缀
 $allowMime=['image/png','image/jpeg','image/gif','image/wbmp'];
$allowSubFix=['png','jpeg','gif','wbmp','jpg','PNG'];

$info=pathinfo($_FILES['file']['name']);
$subFix=$info['extension'];
if (!in_array($subFix,$allowSubFix)){
	exit('不准许的文件后缀');
}
//if (!in_array($_FILES['file']['type'],$allowSubFix)){
//	exit('不允许的mime类型');
//}
//!!!!我想了两天的问题，我日耶！上传路径的位置到mysql中
//拼接上传路径
$path='upload';
if(!file_exists($path)){
	mkdir($path);
}
//文件名随机
$name=uniqid(). '.' . $subFix;

if(is_uploaded_file($_FILES['file']['tmp_name'])){
	
	
	if(move_uploaded_file($_FILES['file']['tmp_name'],$path.$name)){
		echo '上传成功';
		
	}else{
		echo'文件移动失败';
	}
	
}else{
	echo '不是上传文件';
	exit;
}

//	得到你要添加的数据库


$biaoti = $_POST['biaoti'];
$neirong=$_POST['neirong'];
$addtime=date("Y-m-d H:i:s");
	

	
$link=mysqli_connect('localhost','root','');
 if(!$link){exit('数据库连接失败');}
 mysqli_set_charset($link,'utf8');
 mysqli_select_db($link,'tupian');
$sql="insert into userpic(biaoti,neirong,dizhi,addtime) values ('$biaoti','$neirong','upload$name','$addtime')";
$result=mysqli_query($link,$sql);
if(!$result){
echo"<script>alert('添加失败');
	window.location.href='kongjian.php';</script>";
	
}else {echo"<script>alert('添加成功');
  window.location.href='kongjian.php';</script>";
}



	

?>
