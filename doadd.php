

<?php
//	得到你要添加的数据库


	$username=$_GET['username'];
	$zhanghao=$_GET['zhanghao'];
	$mima=$_GET['mima'];


	
$link=mysqli_connect('localhost','root','');
 if(!$link){exit('数据库连接失败');}
 mysqli_set_charset($link,'utf8');
 mysqli_select_db($link,'login');
 $sql="insert into logined(username,zhanghao,mima) values ('$username','$zhanghao','$mima')";

 $result=mysqli_query($link,$sql);



	
?>
<html class="zuida">
	<head>
		<title></title>
		<meta charset="utf-8" />
		<link rel="stylesheet"  href="css/add.css" />
	    <link rel="stylesheet"  href="css/chukou.css" />
	</head>
       <body>
       	    <div class="chukou">
                 <?php  if($result){ 	echo '添加成功<a href="index.html">返回</a>';
 } else{
 	echo'添加失败<a href="index.html">返回</a>';
 }      ?> 
       	    </div>
             
       	
       </body>	
</html>-->-->