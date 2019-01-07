
<?php

?>
<html class="zuida">
<head>
<meta charset="utf-8" />	
<title>我的留言板</title>
<link rel="stylesheet"  href="css/liuyan.css" />
<link rel="stylesheet"  href="css/add.css" />
</head>
<body>
<center>
 <h2>我的留言板</h2>
<a href = "">添加留言</a>
<a href = "afterlogin.php" >查看留言</a>
<hr width = "90%">
<h3>添加留言</h3>
<form action = "insert.php" method = "post">
 <table width = "380" border = "0" cellpadding = "4">
      <tr>
             <td  align = "right">标题：</td>
             <td><input type = "text" name = "title"></td>
     </tr>

     <tr>
             <td align = "right" valign = "top">留言内容：</td>
             <td><textarea name = "content" row = "10" class="chang" ></textarea></td>
     </tr>
      <tr>
              
	     <td colspan = "2" align = "center"><input type = "submit" value = "提交">
                                   <input type = "reset" value = "重置"></td>
     </tr></table>
</form>
</center>
 
</body>
</html>
