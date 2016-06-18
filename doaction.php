<?php
	// 开启session
	session_start();

	// 定义页面字符集
	header("content-type:text/html;charset=utf-8");

	// 设置默认时区
	date_default_timezone_set("PRC");

	// 处理用户的注册、登录、退出

	// 引入数据库配置文件
	include('./public/common/config.php');

	// var_dump($link);

	// 获取用户的操作
	$act = $_GET['act'];

	// var_dump($act);

	// 使用switch结构匹配用户不同的操作
	switch($act){
		case 'reg':
			// 获取用户提交的数据
			$username = htmlspecialchars(trim($_POST['username']));	// 用户名
			$userpwd = trim($_POST['userpwd']);	// 密码
			$userpwd2 = trim($_POST['userpwd2']);	// 确认密码

			// var_dump($_POST);

			// var_dump($_SESSION);

			// 获取用户输入的验证码
			$vcode = strtolower($_POST['vcode']);

			// 系统产生的验证码
			$code = strtolower($_SESSION['code']);		

			// 第一步 判断验证码 --- 用户输入的验证码和系统产生的验证码是否一致
			if($vcode!=$code){
				// 验证码错误,提示错误，跳转到注册页面
				header("location:./reg.php?error=1");

				// 终止程序
				exit;
			}		
			
			// 第二步 判断两次输入的密码是否一致
			if($userpwd!=$userpwd2){
				// 跳转回注册页面
				header("location:./reg.php?error=2");

				// 终止程序
				exit;
			}else{
				// 对密码进行md5()加密
				$userpwd = md5($userpwd);
			}

			// 第三步 判断用户名是否可用 --- 以账户为条件进行查询，如果有结果，表示用户名已占用
			$sql = "select * from shop_user where username='{$username}'";

			// 执行，如果有结果，已存在，跳转会注册界面
			$result = mysqli_query($link,$sql);

			// 判断
			if($result && mysqli_num_rows($result)>0){
				// 如果用户名存在，终止程序，提示用户
				header("location:./reg.php?error=3");

				// 终止
				exit;
			}

			// 约定用户注册时的昵称和用户名相同
			$nickname = $username;

			// 准备注册的sql语句
			$sql = "insert into shop_user(username,userpwd,nickname) value('{$username}','{$userpwd}','{$nickname}')";

			// echo $sql;

			// 执行sql语句
			$result = mysqli_query($link,$sql);

			// var_dump($result);

			// 终止程序调试
			// exit;

			// 判断
			if($result && mysqli_affected_rows($link)>0){
				// user表基本信息表和user_details详情表关联

				// mysqli_insert_id() 获取最后一次产生的id的值，赋值给uid
				$uid = mysqli_insert_id($link);

				// 注册时约定用户的最后一次登录时间和注册时间是一致的
				$lasttime = $regtime = time();

				// 获取IP地址
				$ip = $_SERVER['REMOTE_ADDR'];

				// 约定注册时，成功金币+30
				$gold = 30;

				// 拼接sql语句
				$sql = "insert into shop_user_details(uid,regtime,lasttime,regip,gold) value({$uid},{$regtime},{$lasttime},'{$ip}',{$gold})";

				// echo $sql;
				$result = mysqli_query($link,$sql);

				// echo $sql;

				// var_dump($result);

				// exit;

				if($result && mysqli_affected_rows($link)>0){
					// 表示成功
					echo '<script>
						alert("注册成功,金币+30");
						window.location.href="./index.php";
					</script>';
				}else{
					// 表示失败
					echo '<script>
						alert("注册失败，重新注册");
						window.location.href="./reg.php";
					</script>';
				}
			}else{
				// 表示失败
				echo '<script>
					alert("注册失败，重新注册");
					window.location.href="./reg.php";
				</script>';
			}

		break;

		// 匹配用户登录操作
		case 'login':
			// 获取用户的登录数据
			$username = htmlspecialchars(trim($_POST['username']));
			$userpwd = md5(trim($_POST['userpwd']));

			// 判断账户和密码是否存在
			$sql = "select id from shop_user where username='{$username}' and userpwd='{$userpwd}'";

			// echo $sql;
			// 执行sql语句
			$result = mysqli_query($link,$sql);

			if($result && mysqli_num_rows($result)>0){
				/*
					完成登录 --- 用户每天第一次登录+10金币
						上一次登录的时间戳和现在的时间戳进行比较
							将两次的时间戳进行格式化(Ymd)
							20160310
							20160302
							20160302
							20160301
							20160229
				*/ 
				$row = mysqli_fetch_assoc($result);

				// var_dump($row);
				$id = $row['id'];	// 用户的ID

				// 查询详情表user_details
				$sql = "select gold,lasttime from shop_user_details where uid = {$id}";

				// 执行
				$result = mysqli_query($link,$sql);

				// 
				if($result && mysqli_num_rows($result)>0){
					$row = mysqli_fetch_assoc($result);

					// var_dump($row);

					// 当前的时间戳
					$now = date('Ymd',time());

					// 上一次登录的时间
					$lasttime = date('Ymd',$row['lasttime']);

					// var_dump($now);
					// var_dump($lasttime);

					// 如果两次登录的时间差>=1,说明是当天的第一次登录
					if(($now-$lasttime)>=1){
						// 金币添加
						$gold = $row['gold']+10;

						// 标志添加了金币
						$goldadd = true;
					}else{
						// 金币不变
						$gold = $row['gold'];
					}

					// 更新登录时间
					$lasttime = time();

					// 执行更新
					$sql = "update shop_user_details set gold={$gold},lasttime={$lasttime} where uid={$id}";

					// echo $sql;

					$result = mysqli_query($link,$sql);

					if($result && mysqli_affected_rows($link)>0){
						// 将用户的id写入到session
						$_SESSION['user']['id'] = $id;

						// 更新成功
						if($goldadd){
							echo '<script>
								alert("登录成功，金币+10");
								window.location.href="./index.php";
							</script>';
						}else{
							echo '<script>
								alert("登录成功");
								window.location.href="./index.php";
							</script>';
						}
						
					}else{
						// 失败
					}
				}

			}else{
				echo '<script>
					alert("账户或密码错误");
					window.location.href="./login.php";
				</script>';
			}
		break;

		case 'layout':
			// 用户退出，销毁session
			unset($_SESSION['user']);

			// 提示退出成功，跳转首页
			echo '<script>
					alert("退出成功");
					window.location.href="./index.php";
			</script>';
		break;
	}