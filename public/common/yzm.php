<?php
	// 开启session
	session_start();

	/**
		定义获取验证码的函数 getCode()
		@param int $length	验证码的长度 默认值$length=4
		@param int $type	验证码的类型 约定 1是数字,2是小写字母和数字,3大小写字母、数字 默认值$type=3
		return string $code 返回生成的验证码 
	*/
	function getCode($length=4,$type=3){
		// 第一步 准备包含了所有的字母的字符串
		$str = '123456789abcdefghijkmnopqrstuvwxyABCDEFGHJKLMNPQRSTUVWXYZ';
		
		// 匹配用户指定的验证码的类型
		switch($type){
			// 全部是数字
			case 1:
				$max = 8;		// 定义字符串的最大值下标
			break;
			
			// 数字、小写字母
			case 2:
				$max = 32;
			break;
			
			// 数字、大小写字母
			case 3:
				$max = 56;
			break;
		}
		
		// 使用for循环产生对应数量的验证码
		$code = '';		// 接收验证码
		for($i=0;$i<$length;$i++){
			$code .= $str[rand(0,$max)];
		}
		
		// 返回验证码
		return $code;
	}
	
	$length = 4;
	$type = 3;
	$code = getCode($length,$type);

	// 将产生的验证码存储到session中
	$_SESSION['code'] = $code;
	
	// 将验证码输入到画布中
	$width = $length*22;		// 宽度随着验证码长度而变化
	$height = 30;
	
	// 创建画布
	$im = imagecreatetruecolor($width,$height);
	
	// 分配颜色
	$bgcolor[0] = imagecolorallocate($im,128,255,128);	// 淡绿色
	$bgcolor[1] = imagecolorallocate($im,128,255,255);	// 淡蓝色
	$bgcolor[2] = imagecolorallocate($im,255,255,128);	// 淡黄色
	$bgcolor[3] = imagecolorallocate($im,255,128,255);	// 淡粉色
	
	
	// $color[1] = imagecolorallocate($im,0,255,0);
	
	// 填充背景
	imagefill($im,0,0,$bgcolor[rand(0,3)]);
	
	// 将验证码依次输出到画布中
	for($i=0;$i<$length;$i++){
		// 为验证码分配颜色 --- 每一次随机颜色
		$color = imagecolorallocate($im,rand(90,200),rand(90,200),rand(90,200));
		
		// 输出对应的每一个字符
		imagettftext($im,18,rand(-30,30),5+$i*20,20,$color,'./msyh.ttf',$code[$i]);
	}
	
	// 产生随机的干扰线
	
	// 产生随机的干扰点
	
	// 定义文档头，输出画布
	header("Content-type:image/png");
	imagepng($im);
	
	// 销毁图像资源
	imagedestroy($im);