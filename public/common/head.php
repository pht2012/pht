<?php
	// 开启session
	session_start();

	// var_dump($_SESSION);

	// 引入数据库配置文件
	include('./public/common/config.php');
?>
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
					<?php
						// 判断用户是否登录
						if(empty($_SESSION['user'])){
					?>
							<a href="./login.php">登录</a>
							<a href="./reg.php">注册</a>
					<?php
						}else{
							// 显示已登录，用户的昵称
							$id = $_SESSION['user']['id'];

							$sql = "select nickname from shop_user where id = {$id}";

							// echo $sql;
							$result = mysqli_query($link,$sql);

							if($result && mysqli_num_rows($result)>0){
								$row = mysqli_fetch_assoc($result);
								// var_dump($row);

								// 输出用户昵称
								echo $row['nickname'];
								// 以id为条件查询user表
								echo ' <a href="./doaction.php?act=layout">退出</a>';
							}


							
						}
					?>
					
				</li>
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