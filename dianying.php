<?php
     session_start();
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>LikeSundayLikeRain</title>
		<link rel="stylesheet"  href="css/index.css"  />
		<link rel="stylesheet"  href="css/afterlogin.css" />
		<link rel="stylesheet" href="css/xiangce.css"/>
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
	<!--	类型标签-->
			<section id="type_title" class="type-title">
				<div class="type-title-in">
				     <span class="line-left"></span>
			         <span>影评</span>
				     <span class="line-right"></span>
				</div>
				
			</section>