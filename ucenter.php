<?php
	/*
		前台用户个人中心： ---- 如何进入到个人中心
			// 个人中心查询的id值 -- 是$_SESSION['user']['id'];

			1.修改基本信息 --账户不能修改，昵称修改、性别、年龄等
			2.修改头像
			3.修改密码  --- 
				必须验证原密码

			4.找回密码（扩展） --- 完成条件验证之后，随机生成指定的字符串，当成临时密码，登录之后，建议再次修改密码
				a.密码问题
					tiid 所有密保问题

					tiid uid 答案是说什么

				b.绑定手机验证
				c.绑定邮箱---

			5.绑定邮箱验证(扩展)

	*/ 
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="./public/css/common.css">
	<link rel="stylesheet" href="./public/css/userinfo.css">
</head>
<body>
	<!-- 顶部区域 -->
	<div id="top" class="w100">
		<div class="wm">
			<!-- 左侧地域选择 -->
			<div class="add fl">
				<ul>
					<li>进入,</li>
					<li><a href="#">北京</a></li>
				</ul>
			</div>
			<!-- 右侧信息 -->
			<div class="info fr">
				<ul>
					<li>
						<a href="./login.php">登录</a>,
						<a href="#">退出</a>
					</li>
					<li><a href="#">我的订单</a></li>
					<li><a href="#">我的京东</a></li>
					<li><a href="#">京东会员</a></li>
					<li><a href="#">企业采购</a></li>
					<li><a href="#">手机京东</a></li>
					<li><a href="#">关注京东</a></li>
					<li><a href="#">客户服务</a></li>
					<li><a href="#">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 用户中心导航 -->
	<div class="w100" id="userNav">
		<div class="wm">
			<div id="logo" class="fl">
				<a href="#"><img src="./images/user_logo.png" alt=""></a>
			</div>
			<div class="navBar fl">
				<ul>
					<li><a href="./index.php">首页</a></li>
					<li><a href="#">账户设置</a></li>
					<li><a href="#">社区</a></li>
					<li><a href="#">消息<span>5</span></a></li>
				</ul>
			</div>
			<div class="form fl">
				<form action="" method="post">
					<input type="text" name="keywords" placeholder="搜索商品">
					<input type="submit" value="搜索">
				</form>
			</div>
			<div id="niu">
				<input class="niu1" type="button" value="购物车">
			</div>
		</div>
	</div>
	<!-- 主体信息 -->
	<div id="main" class="w100">
		<div class="wm mt10">
			<!-- 左侧设置 -->
			<div class="fl setNav">
				<ul>
					<li>设置</li>
					<li><a href="#">个人信息</a></li>
					<li><a href="#">账户安全</a></li>
					<li><a href="#">账号绑定</a></li>
					<li><a href="#">我的级别</a></li>
					<li><a href="#">收货地址</a></li>
					<li><a href="#">分享绑定</a></li>
					<li><a href="#">邮件订阅</a></li>
					<li><a href="#">消费记录</a></li>
					<li><a href="#">应用授权</a></li>
					<li><a href="#">快捷支付</a></li>
					<li><a href="#">增票资质</a></li>
				</ul>
			</div>
			<!-- 右侧详细信息设置 -->
			<div class="setInfo fr">
				<!-- 个人信息 -->
				<div class="user fr">
					<div class="userMsg">
						<div class="userpic fl"></div>
						<p class="fl">
							用户名：hahah <br>
							<a href="" class="link">银牌会员</a> <br>
							购物行为评级<br>
							会员类型：个人用户
						</p>
					</div>
					<p style="text-align:right;">注：修改手机和邮箱请到<a href="#" class="link">账户安全</a></p>
				</div>
				<!-- 设置选项 -->
				<div class="setOpt fl">
					<ul>
						<li class="on">基本信息</li>
						<li><a href="#">头像照片</a></li>
						<li><a href="#">更多个人信息</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="setMsg fl">
					<ul>
					<form action="ucenter.php" method="post">
						<li>
							<label for="">
								<i class="red">*</i>用户名:
							</label>
							<input type="text" name="username">
						</li>
						<li>
							<label for="">
								<i class="red">*</i>性别:
							</label>
							<input type="radio" name="sex" value="1">男
							<input type="radio" name="sex" value="0">女
							<input type="radio" name="sex" value="2">保密
						</li>
						<li>
							<label for="">兴趣爱好:</label>
							<span>请选择感兴趣的分类，给您最精准的推荐</span>
							<ul>
								<li>图书/图像/数字商品</li>
								<li>家用电器</li>
								<li>手机/数码</li>
								<li>电脑/办公</li>
								<li>家居/家具/家装/厨具</li>
								<li>服饰内衣/珠宝首饰</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
								<li>个护化妆</li>
							</ul>
							<div class="clear"></div>
						</li>
						<li>
							<label for="">
								<i class="red">*</i>
								邮箱:
							</label>
							<span><a href="#" class="link">验证邮箱</a></span>
						</li>
					</form>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 底部 -->
	<div class="w100" id="footer">
		<div class="wm mt10">
			<div class="info">
				<ul>
					<li><a href="#">关于我们</a></li>
					<li><a href="#">联系我们</a></li>
					<li><a href="#">人才招聘</a></li>
					<li><a href="#">商家入驻</a></li>
					<li><a href="#">广告服务</a></li>
					<li><a href="#">手机京东</a></li>
					<li><a href="#">友情连接</a></li>
					<li><a href="#">销售联盟</a></li>
					<li><a href="#">京东社区</a></li>
					<li><a href="#">京东公益</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<p class="mt10">
				CopyRight&copy;2015-2016 京东JD.com 版权所有
			</p>
		</div>
	</div>
</body>
</html>