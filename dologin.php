



<?php


$zhanghao = trim($_POST['zhanghao']);
$mima = trim($_POST['mima']);
$link=mysqli_connect('localhost','root','');
 if(!$link){exit('数据库连接失败');}
 mysqli_set_charset($link,'utf8');
 mysqli_select_db($link,'login');
 $sql="select *from logined where zhanghao = '$zhanghao'and mima='$mima' ";

 $result=mysqli_query($link,$sql);

$rows=mysqli_fetch_array($result);






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
                 <?php  
                 	if($rows){
  session_start();             		
  $_SESSION['username']=$rows['username'];


  echo '登陆成功<a href="afterlogin.php">返回</a>';
 
}else{
  $is_login='';
  echo '登陆失败<a href="index.html">返回</a>';
}    ?> 
       	    </div>
             
       	
       </body>	
</html>-->-->