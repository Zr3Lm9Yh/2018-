<?php
     session_start();

$link=mysqli_connect('localhost','root','');
 if(!$link){exit('数据库连接失败');}
 mysqli_set_charset($link,'utf8');
 mysqli_select_db($link,'mes');
$sql="select * from mes_info order by addtime desc";
$result=mysqli_query($link,$sql);

//将结果集资源转化为将来的数据
//$rows=mysqli_fetch_array($result);
//获取多个数据用while循环
//定义一个空数组用来接收
$rows= array();
while($row =mysqli_fetch_array($result)){
	$rows[]=$row;
	
}

?>

<!--<!DOCTYPE html>-->
<html>
	<head>
		<meta charset="utf-8" />
		<title>LikeSundayLikeRain</title>
		<link rel="stylesheet"  href="css/index.css"  />
		<link rel="stylesheet"  href="css/afterlogin.css" />
	</head>
	<body>
		<div id="page" class="page">
			<!--头部-->
			<header id="header" class="header">
				<div id="header_in" class="header-in">
					<div class="header-left">
						<ul>
							<li class="xinxi"><h1><a href="">hola~<?php echo $_SESSION['username']?></a></h1></li>
							<li><a href="afterlogin.php">主页</a></li>
							<li><a href="kongjian.php">空间</a></li>
							<li><a href="">动态</a></li>
							<li><a href="dianying.php">电影<span class="new">new</span></a></li>
							<li><a href="youxi.php">游戏</a></li>
							<li><a href="">...</a></li>
						</ul>
					</div>
					<div class="header-center" >
						    <input id="query" name="query" type="text" placeholder="搜索你喜欢的" size="27" value=""/>
					</div>
					<div class="header-right">
						<a href="out.php" class="regiter" id="register">
							<span class="text">退出</span>
						</a>
						<!--<a href="login.html" class="login" id="login">
							 <span class=text>登陆</span>
						</a>-->
					</div>
					
				</div>
				
			</header>
			<!--中间的广告切换-->
			<section id="slider_banner" class="slider-banner">
				<ul>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					
					
				</ul>
			</section>
			<!--快速登陆-->
			<section id="quick_login" class="quick-login">
				<div class="quick-login-in">
					<div class="intro">
						<div class="title">从前慢</div>
						<div class="title">从前的日色变得慢，车马，邮件都慢，一生只够爱一个人</div>
				    </div>
				    <div class="login_icon">
				    	<ul>
				    		<li><a href=""><span></span></a></li>
				    		<li><a href=""><span></span></a></li>
				    		<li><a href="https://www.zhihu.com/people/jia-you-76-45"target="_blank"><span></span></a></li>
				    		<li><a href="https://www.douban.com/people/150059461/"target="_blank"><span></span></a></li>
				    	</ul>
				    	<div class="tip_text">
				    		<span class="line_left"></span>
				    		<span class="text">联系方式</span>
				    		<span class="line_right"></span>
				    	</div>
				    </div>
				</div>
			</section>
			<!--吸顶效果-->
			<section id="top_z" class="top-z">
				<div class="top-z-in">
					<div class="left">
						<p>读书  行路  见人  历事</p>
						<p>wish you a good day~ </p>
						
					</div>
					<div class="right">
						<ul>
							<li><p>素质四连：</p></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
						</ul>
					</div>
				</div>
			</section>
			<!--类型标签-->
			<section id="type_title" class="type-title">
				<div class="type-title-in">
				     <span class="line-left"></span>
			         <span>广场</span>
				     <span class="line-right"></span>
				</div>
				
			</section>
			
			
			<!--选项卡-->
		
			<div id="tab" class="tab">
				   <div id="tab_header" class="tab-header">
					 <ul>
						<li class="current">图片区</li>
						<li>心情</li>
						<li>电影分享</li>
					 </ul>
				   </div>
				<div id="tab_content" class="woaini">
				     <div class="dom" style="display: block;">
				           <div class="dom_top">
				           	        <ul>
				           	        	<li><a href="">spring</a></li>
				           	        	<li><a href="">summer</a></li>
				           	        	<li><a href="">autumn</a></li>
				           	        	<li><a href="">winter</a></li>				           	        	
				           	        	<li><a href="">	like U</a></li>				           	        	
				           	        </ul>
				           </div>				           
<!--		图片展示-->
                <section id="tu_pian" class="tu-pian">
                    <div class="item">	
    	                           <ul>
    	    			           	    <li><a href=""></a></li>
				           	          	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>	
				           	        </ul>
    	

                    </div>
                    <div class="itema">	
    	                           <ul>
    	    			           	    <li><a href=""></a></li>
				           	          	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>	
				           	        </ul>
    	

                    </div>
                    <div class="itemb">	
    	                            <ul>
    	    			           	    <li><a href=""></a></li>
				           	          	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>
				           	        	<li><a href=""></a></li>	
				           	        </ul>
                    </div>
                </section>
				     </div>
				     <!--留言-->
				     
				     
				     <div class="dom">
				            				     
				     	<div class="fabiao">
				     		<div class="wenben"
				     			<input class="biao" type="text"value=""name="" />
				     			请点击右边的发表按钮，进行发表留言~
				     		</div>
				     		<div class="anniu" >   
				     			 <form action="liuyan.php" class="anniu1">
				     		          <input class="anniu1" type="submit" value="发表" />
				     		     </form>
				     		</div>
				     		<div class="wenzina">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp你可以将你的心情记录下来，并分享到这里~祝你玩得愉快hah</div>
				     		
				     			
				     			
				     		
				     	</div>
				     <!--	留言区-->
				    <?php foreach($rows as $k=>$v):?> 	
				     	<div class="liuyan">
				     		<div class="one">.&nbsp&nbsp&nbsp .&nbsp&nbsp. &nbsp&nbsp标题: &nbsp&nbsp<?php echo $v['title'];?><br><br>&nbsp&nbsp&nbsp&nbsp内容: &nbsp&nbsp<?php echo $v['content'];?></div>
				     		<div class="two">.&nbsp&nbsp&nbsp<br><br><br> 左上的留言是于<?php echo $v['addtime'];?>发表(=з」∠)_</div>
				     	</div>
				      <?php endforeach;?> 	
				     	
				     	
				     	<!--<div class="liuyan2">
				     		<div class="onea">.&nbsp&nbsp&nbsp step.3  &nbsp&nbsp账号密码很好注册，但请不要用自己熟悉的账号密码注册&nbsp~~~&nbsp &nbsp因为我后台是有记录滴(*°ω°*)ﾉ"~id的话从20开始挑一你喜欢的数字注册但是要小于100哈，注册之后只需记住你的账号密码就好啦/</div>
				     		<div class="twob">.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp step.4&nbsp&nbsp登陆过后就能看到一些留言记录并且还可以发表啦</div>
				     	</div>
				     	
				     	
				     	<div class="liuyan3">
				     		<div class="onec">.&nbsp&nbsp&nbsp step.5  &nbsp&nbsp这个网站是没有什么人啦_(:зゝ∠)_，要是你发现了，请你关注~~ &nbsp &nbsp我的知乎，豆瓣(网页右上联系方式处)再走好吗，我会回关的~</div>
				     		<div class="twod">...&nbsp&nbsp&nbsp嗯呢，就这样啦，一个学习前端的小透明，也希望自己的网站越来越 &nbsp&nbspbeautiful~</div>
				     	</div>-->
				     
				     </div>  
				  <!--   </div>-->
			<!--	     电影-->
				         <div class="dom">
				     	    <div class="henga">

				     			<div class="zitiup">千与千寻</div>
				     			<div class="zitidown">——————谢谢你教会我什么叫做勇敢，什么叫做善良</div>
                                <div class="photosa"></div>

                               
				     		</div>

				     	
				     	
				     	
				     	
				     	     <div class="hengb">
				     	      	<div class="zitiup">美国往事</div>
				     			<div class="zitidown">往事如烟,幸与不幸 </div>
                                <div class="photosb"></div
				     	    </div>
				     	
				     	
				     	    <div class="hengc">
				     			<div class="zitiup">你的名字 </div>
				     			<div class="zitidown">当你问我，我是谁，我也不知道我叫什么，只觉得距离有10000km </div>
                                <div class="photosc"></div
				     	    </div>
				     	
				     	    <div class="hengd">
				     			<div class="zitiup">秒速五厘米 </div>
				     			<div class="zitidown">不对的人怎么聊都不能，心都不可能拉近1cm </div>
                                <div class="photosd"></div
				     	    </div>
				     	
				     	
				     	    <div class="henge">
				        		<div class="zitiup">少年派的奇幻漂流 </div>
				     			<div class="zitidown">这就是信仰哇！ </div>
                                <div class="photose"></div
				     		</div>
				     		
				     		
				     		
				     					     	
				     </div>
				</div>
			</div>
			<!--右边浮动-->
			<div id="elevator_item"></div>
			<!--登陆界面-->
			<section id="mask" class="mask"></section>
			
			
			
			
		</div>
		
	
		
		
		<script src="js/index.js"></script>
	</body>
</html>

