<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/public.css"/>
</head>
<body>
<!-- 头部 -->
<div class="modal"></div>
<header>
	<ul>
		<li class="header_li1"><img src="../img/top/img1.png"/></li>
		<li class="header_li2"><img src="../img/top/img2.png"/></li>
		<li class="header_li3">广告投放平台</li>
		<li class="header_li18"><img src="../img/top/img4.png"/></li>
		<li class="header_li4"><img src="../img/top/img3.png"/></li>
		<li class="header_li5">
		</li>
		<li class="header_li7">
			<img class="header_li7_img1" src="../img/top/img5.png"/>
			<img class="header_li7_img2" src="../img/top/img5_1.png"/>
			<img class="header_li7_img3" src="../img/top/img8_1.png"/>
			<img class="header_li7_img4" src="../img/top/img9_1.png"/>
			<div class="relation">
				<p class="relation_p1"><a href="">联系商务</a></p>
				<p>咨询电话<br />123 4567 8910</p>
			</div>
		</li>
		<li class="header_li8" onclick="showLayer()">
			<img class="header_li8_img1" src="../img/top/img6.png"/>
			<img class="header_li8_img2" src="../img/top/img6_1.png"/>
			<img class="header_li8_img3" src="../img/top/img8_2.png"/>
			<img class="header_li8_img4" src="../img/top/img9_2.png"/>
		</li>
		<li class="header_li9">
			<img class="header_li9_img1" src="../img/top/img7.png"/>
			<img class="header_li9_img2" src="../img/top/img7_1.png"/>
			<img class="header_li9_img3" src="../img/top/img8_3.png"/>
			<img class="header_li9_img4" src="../img/top/img9_3.png"/>
			<div class="problem">
				<p class="problem_p1"><a href="">常见问题</a></p>
				<p class="problem_p2">反馈建议</p>
				<p class="problem_p3">广告服务平台</p>
				<img src="../img/top/img9_4.png"/>
			</div>
			<div class="suggest">
				<div class="suggest_div1"><b>您好，欢迎您给我们提产品的使用感受和建议！</b></div>
				<div class="suggest_div2">标题：<input class="suggest_div2_ipt" placeholder="请输入4~30个字符" type="text" /></div>
				<div class="suggest_div3"><span class="suggest_div3_span">内容：</span><textarea class="suggest_div3_txt" name="" id="" cols="30" rows="10" 
					placeholder="感谢您给我们提出的建议。                                           抱歉我们不能逐一回复您的意见。          您的感受和建议一旦再次发表，即表示您同意我们可无偿参考您的感受和建议来优化我们的产品和服务。若您有商业合作意向，请联系公司相关业务部门。"></textarea>
					<div class="suggest_div3_1">
						<div class="suggest_div3_1_div1">系统提示<span>×</span></div>
						<img src="../img/top/img11_2.png"/>
						<div class="suggest_div3_1_div8">
    						<div class="suggest_div3_1_div2">提交成功！</div>
    						<div class="suggest_div3_1_div3">感谢您提出的宝贵建议。</div>
    						<div class="suggest_div3_1_div4">温馨提示：</div>
    						<div class="suggest_div3_1_div5">1，抱歉我们还不能对您的建议进行逐一回复；</div>
    						<div class="suggest_div3_1_div6">2，我们处理后会通过QQ消息或QQ邮箱提醒您。</div>
							<div class="suggest_div3_1_div7">确定</div>
						</div>
					</div>
				</div>
				<div class="suggest_div4">
					<div class="suggest_div4_div1">
						<input class="sug_d4_d1_input" type="file">
						<img class="sug_d4_d1_img" src="../img/top/img11_1.png">
					</div>
					<div class="suggest_div4_div2">添加图片</div>
					<div class="suggest_div4_div3">发表</div>
					<div class="suggest_div4_div4">取消</div>
				</div>
			</div>
		</li>
		<li class="header_li17">发布广告</li>	
		<li class="header_li16"><a href="javascript:;" onclick="logout()">退出</a></li>
	</ul>
	<!-- 发布广告弹层 -->
	<div class="poster_layer_wrap">
		<!-- 透明背景 -->
		<div class="head_poster_shade"></div>
		<div class="head_poster_main1">
			<!-- 关闭按钮 -->
			<img class="head_poster_btn" src="../img/top/close_layer_btn.png"/>
			<!-- 内容区 -->
			<iframe id="poster_layer" src=""></iframe>
			<iframe id="poster_layer2" src=""></iframe>
		</div>
	</div>
</header>
<!-- 左侧 -->
<div class="midland_l">
	<ul class="left_menu">
		<a target="default.php">
			<li class="midland_l_li1">
				<img class="img1" src="../img/left/img1.png"/>
				<img class="img2" src="../img/left/img2.png"/>
				<img class="img3" src="../img/left/img3.png"/>
			</li>
		</a>
		<a target="generalize_plan.php">
			<li class="midland_l_li2">
				<img class="img1" src="../img/left/img1.png"/>
				<img class="img4" src="../img/left/img4.png"/>
				<img class="img5" src="../img/left/img5.png"/>
			</li>
		</a>
		<a target="overall_statement.php">
			<li class="midland_l_li3">
				<img class="img1" src="../img/left/img1.png"/>
				<img class="img6" src="../img/left/img6.png"/>
				<img class="img7" src="../img/left/img7.png"/>
			</li>
		</a>
		<a target="basic_information.php">
			<li class="midland_l_li4">
				<img class="img1" src="../img/left/img1.png"/>
				<img class="img8" src="../img/left/img8.png"/>
				<img class="img9" src="../img/left/img9.png"/>
			</li>
		</a>
	</ul>
</div>
<input type="hidden" class="left_choose" value="">
<!--中间-->
<div class="midland" id="midland">
	<div class="clear"></div>
</div>
<!--底部-->
</body>
</html>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/layer-v2.0/layer.js"></script>
<script type="text/javascript" src="../js/public.js"></script>