<?php
header("Content-type:text/html;charset=utf-8");	
//接收数据
$title = $_POST['title'];
$content=$_POST['content'];
$addtime=date("Y-m-d H:i:s");
//对数据验证
if($title == ''||$content ==''){
	echo "<script>alert('标题内容不能为空');
	window.location.href='liuyan.php';</script>";
	exit;
}
//插入数据到数据库
$link=mysqli_connect('localhost','root','');
 if(!$link){exit('数据库连接失败');}
 mysqli_set_charset($link,'utf8');
 mysqli_select_db($link,'mes');
$sql="insert into mes_info(title,content,addtime) values ('$title','$content','$addtime')";
$result=mysqli_query($link,$sql);
var_dump($result);
if(!$result){
echo"<script>alert('添加失败');
	window.location.href='liuyan.php';</script>";
	
}else {echo"<script>alert('添加成功');
    window.location.href='afterlogin.php';</script>";
}
?>