<?php

?>
<html class="zuida">
<head>
<meta charset="utf-8" />	
<title>图片区</title>
<link rel="stylesheet"  href="css/liuyan.css" />
<link rel="stylesheet"  href="css/add.css" />
</head>
<body>
<center>
 <h2>分享图片~</h2>

<hr width = "90%">
<h3>添加图片</h3>
<form action = "fenxiangover.php" method = "post" enctype="multipart/form-data">
 <table width = "380" border = "0" cellpadding = "4">
      <tr>
             <td  align = "right">标题：</td>
             <td><input type = "text" name = "biaoti"></td>
     </tr>

     <tr>
             <td align = "right" valign = "top">图片内容：</td>
             <td><textarea name = "neirong" row = "10" class="chang" ></textarea></td>
     </tr>
     <tr>
             <td align = "right" valign = "top">图片</td>
             <td><input  name="file" type="file" value="浏览" />
                 <input  type="hidden" name="MAX_FILE_SIZE" name="upload" />    	
             </td>
     </tr>
      <tr>
              
	     <td colspan = "2" align = "center"><input type = "submit" value = "上传" name="upload" >
     </tr>
     
 </table>
</form>
</center>
 
</body>
</html>
