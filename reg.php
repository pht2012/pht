<?php
	// 获取错误信息
	$error = $_GET['error'];

	// 使用switch结构匹配错误信息
	switch($error){
		case 1:
			$code_error = '<font color="red">验证码错误</font>';
		break;

		case 2:
			$pwd_error = '<font color="red">两次密码不一致</font>';
		break;

		case 3:
			$user_error = '<font color="red">用户名已占用</font>';
		break;
	}	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<link rel="stylesheet" href="./public/css/common.css">
	<link rel="stylesheet" href="./public/css/login_reg.css">
</head>
<body bgcolor="#F2F2F2">
	<!-- 顶部区域 -->
	<div id="top" class="w100">
		<div class="wm">
			<!-- 左侧地域选择 -->
			<div class="add fl">
				<ul>
					<li><a href="#">收藏京东</a></li>
				</ul>
			</div>
			<!-- 右侧信息 -->
			<div class="info fr">
				<ul>
					<li><a href="#">我的订单</a></li>
					<li><a href="./ucenter.php">我的京东</a></li>
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
	<!-- logo -->
	<div class="wm">
		<div class="regLogo">
			<a href="#"><img src="./public/images/reg_logo.gif" alt=""></a>
		</div>
	</div>
	<!-- 注册表单 -->
	<div class="wm">
		<div class="regWay">
			<ul>
				<li class="on">个人用户</li>
				<li>企业用户</li>
				<li>International Customers</li>
			</ul>
		</div>
		<div class="fr alreadyReg">
			我已经注册，现在就
			<a href="./login.php" class="link" style="margin-right:20px;">登录</a>
			<a href="#" class="link fr">English</a>
		</div>
		<div class="clear"></div>
		<!-- 注册表单DIV -->
		<div class="regFormBox">
			<!-- 手机快速注册 -->
			<div class="phoneReg fr">
				<h3>手机快速注册</h3>
				<p>
					中国大陆手机用户,<br>
					编辑短信“<span>JD</span>”发送到: <br>
					<span>12345678911</span>
				</p>
			</div>
			<!-- 注册表单 -->
			<div class="regForm">
				<ul>
				<form action="./doaction.php?act=reg" method="post">
					<li>
						<label for="">
							<i class="red">*</i>用户名:
						</label>
						<input type="text" required name="username">
						<?php
							// 用户名重复
							echo $user_error;
						?>
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							请设置密码:
						</label>
						<input type="password" required name="userpwd"> 
						<?php
							// 输出两次密码不一致的信息
							echo $pwd_error;
						?>
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							请确认密码:
						</label>
						<input type="password" required name="userpwd2">
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							验证码:
						</label>
						<input type="text" required name="vcode" class="yzm">
						<span>
							<img id="yzm" src="./public/common/yzm.php" alt="">
							看不清？<a href="#" id="change" class="link">换一张</a>
							<?php
								// 输出验证码错误的信息
								echo $code_error;
							?>
						</span>
					</li>
					<li>
						<input type="checkbox" id="">
						我已阅读并同意<a href="#" class="link">《京东用户注册协议》</a>
					</li>
					<li>
						<input type="submit" value="立即注册">
					</li>
				</form>
				</ul>
			</div>
		</div>
	</div>
	<!-- 底部 -->
	<?php
		// 引入底部文件
		include('./public/common/bottom.php');
	?>
</body>
	<script>
			// 获取验证码图片的节点
			var yzm = document.getElementById("yzm");

			// 获取换一张的节点
			var change = document.getElementById("change");

			// alert(yzm);

			// 给yzm添加单击事件
			yzm.onclick = function(){
				// 重新请求验证码文件
				yzm.src="./public/common/yzm.php?id="+Math.random();
			}


			// 给换一张添加单击事件
			change.onclick = function(){
				// 重新请求验证码文件
				yzm.src="./public/common/yzm.php?id="+Math.random();

				// 取消超链接的跳转事件
				return false;
			} 
	</script>
</html>