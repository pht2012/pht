<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- 设置网站的名称 -->
	<title>京东首页</title>
	
	<link rel="stylesheet" href="./public/css/common.css">
	<link rel="stylesheet" href="./public/css/index.css">
	
	<!-- 设置网页关键字 -->
	<meta name="keywords" content="京东,货好,包邮,奶茶妹">
	
	<!-- 网站描述 -->
	<meta name="description" content="京东是一个很不错的商城">
	
	<link rel="icon" href="./public/images/favicon.ico">
</head>
<body>
	<!-- 顶部区域 -->
	<?php
		// 引入公共头部文件
		include('./public/common/head.php');
	?>
	<!-- banner区域 -->
	<div id="banner" class="w100">
		<div class="wm"><a href="#"><img src="./public/images/banner.png" alt=""></a></div>
	</div>
	<!-- 导航区域样式 -->
	<div id="nav" class="w100">
		<div class="wm">
			<!-- LOGO，搜索，购物车 -->
			<div class="lsc">
				<div class="logo fl">
					<a href="#"><img src="./public/images/logo.png" alt="" height="80"></a>
				</div>
				<div class="search fl">
					<form action="">
						<input type="text" placeholder="你想买啥">
						<input type="submit" value="搜索">
					</form>
					<ul>
						<li><a href="#">限时打折</a></li>
						<li><a href="#">热门商品</a></li>
						<li><a href="#">健康补品</a></li>
						<li><a href="#">强壮男人</a></li>
						<li><a href="#">爱美女人</a></li>
						<li><a href="#">熊孩子专柜</a></li>
					</ul>
				</div>
				<div id="niu" >
					<input class="niu1" type="button" value="购物车">
				</div>
			</div>
		</div>
		<!-- 导航条 -->
		<div class="wm navbar">
			<ul class="fl">
				<li><a href="#">服装城</a></li>
				<li><a href="#">美妆馆</a></li>
				<li><a href="#">超市</a></li>
				<li><a href="#">全球购</a></li>
				<li><a href="#">闪购</a></li>
				<li><a href="#">团购</a></li>
				<li><a href="#">拍卖</a></li>
				<li><a href="#">金融</a></li>
			</ul>
			<div class="ads fr">
				魅族MX5赢免单
			</div>
		</div>
	</div>
	<!-- 主体区域 -->
	<div id="main" class="wm">
		<!-- 全部商品分类 -->
		<div class="navList fl">
			<ul>
				<li class="all">全部商品分类</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">手机</a>、<a href="#">数码</a>、<a href="#">京东通信</a>
					<div class="subList"></div>
				</li>
				<li>
					<a href="#">家用电器</a>
					<div class="subList"></div>
				</li>
			</ul>
		</div>
		<!-- 焦点图 -->
		<div class="jdt mt10 fl">
			<ul>
				<li><img src="./public/images/jd_01.jpg" alt=""></li>
				<li><img src="./public/images/jd_01.jpg" alt=""></li>
				<li><img src="./public/images/jd_01.jpg" alt=""></li>
			</ul>
			<ol>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ol>
		</div>
		<!-- 新闻，服务 -->
		<div class="fr ns mt10">
			<!-- 新闻 -->
			<div class="news">
				<h3 class="title">京东快报<a href="#" class="fr">更多>></a></h3>
				<ul>
					<li><a href="#">[特价]京东年货大放送</a></li>
					<li><a href="#">[特价]京东年货大放送</a></li>
					<li><a href="#">[特价]京东年货大放送</a></li>
					<li><a href="#">[特价]京东年货大放送</a></li>
					<li><a href="#">[特价]京东年货大放送</a></li>
				</ul>
			</div>
			<!-- 服务 -->
			<div class="serve">
				<h3 class="title">生活服务</h3>
				<ul>
					<li>
						<i></i>
						<span>手机</span>
					</li>
					<li>
						<i></i>
						<span>话费</span>
					</li>
					<li>
						<i></i>
						<span>电影票</span>
					</li>
					<li>
						<i></i>
						<span>手机</span>
					</li>
					<li>
						<i></i>
						<span>话费</span>
					</li>
					<li>
						<i></i>
						<span>电影票</span>
					</li>
					<li>
						<i></i>
						<span>手机</span>
					</li>
					<li>
						<i></i>
						<span>话费</span>
					</li>
					<li>
						<i></i>
						<span>电影票</span>
					</li>
					<li>
						<i></i>
						<span>手机</span>
					</li>
					<li>
						<i></i>
						<span>话费</span>
					</li>
					<li>
						<i></i>
						<span>电影票</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<!-- 推荐商品 -->
		<div class="tj mt10">
			<div class="t1 fl">
				<img src="./public/images/tj_01.jpg" alt="" width="200">
			</div>
			<ul class="t2 fr">
				<li>
					<a href="#"><img src="./public/images/tj_02.jpg" alt=""></a>
				</li>
				<li>
					<a href="#"><img src="./public/images/tj_03.jpg" alt=""></a>
				</li>
				<li>
					<a href="#"><img src="./public/images/tj_04.jpg" alt=""></a>
				</li>
				<li>
					<a href="#"><img src="./public/images/tj_05.jpg" alt=""></a>
				</li>
			</ul>
		</div>

		<!-- 商品列表 -->
		<div class="wm mt10">
			<div class="floor">
				<div class="title">
					<h3>猜你喜欢</h3>
				</div>
				<ul>
					<li>
						<a href="#"><img src="./public/images/nv_01.jpg" alt="女装"></a>
						<a class="goods_name">
							商品名称商品名称商品名称商品名称商品名称商品名称
						</a>
						<span class="price">￥98.8</span>
					</li>
					<li>
						<a href="#"><img src="./public/images/dm_01.jpg" alt="萌图"></a>
						<a class="goods_name">
							商品名称商品名称商品名称商品名称商品名称商品
						</a>
						<span class="price">￥98.8</span>
					</li>
					<li>
						<a href="#"><img src="./public/images/nv_01.jpg" alt="女装"></a>
						<a class="goods_name">
							商品名称商品名称商品名称商品名称商品名称商品名称
						</a>
						<span class="price">￥98.8</span>
					</li>
					<li>
						<a href="#"><img src="./public/images/dm_01.jpg" alt="萌图"></a>
						<a class="goods_name">
							商品名称商品名称商品名称商品名称商品名称商品
						</a>
						<span class="price">￥98.8</span>
					</li>
					<li>
						<a href="#"><img src="./public/images/nv_01.jpg" alt="女装"></a>
						<a class="goodsName">
							商品名称商品名称商品名称商品名称商品名称商品名称
						</a>
						<span class="price">￥98.8</span>
					</li>
					<li>
						<a href="#"><img src="./public/images/dm_01.jpg" alt="萌图"></a>
						<a class="goods_name">
							商品名称商品名称商品名称商品名称商品名称商品
						</a>
						<span class="price">￥98.8</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
		// 引入公用底部文件
		include('./public/common/bottom.php');
	?>
	<!-- 悬浮窗 -->
	<div class="fixed">
		<div class="right">
			<a href="#">车</a>
			<a href="#">爱心</a>
			<a href="#">历史</a>
			<a href="#">留言</a>
			<a href="#">回</a>
		</div>
		<div class="backTop">
			<a href="#">^</a>
			<a href="#">写</a>
		</div>
	</div>
</body>
</html>