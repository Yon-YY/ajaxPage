<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/set.css" =<?echo $version; ?>"/>
	</head>
	<body>
	<?php
	include_once 'top.php';
	?>
	
<!--中间主体-->
		<div class="midland">
			<?php
			include 'left.php';
			?>
<!--中间右侧-->
			<div class="midland_r">
				<div class="head_btn_wrap">
					<a class="head_reportBtn2" href="basic_information.php">基本信息</a>
					<a class="head_reportBtn3" href="financial_information.php">财务信息</a>
					<a class="head_reportBtn1" href="set.php">设置</a>
				</div>
				<div class="midland_r_mid">
					<div class="midland_r_mid_div1">
						<div class="mid_div1">密码修改</div>
						<div class="mid_div2 information">
							原密码：
							<input type="text" name="old_pwd" id="old_pwd" value=""/>
						</div>
						<div class="mid_div3 information">
							新密码：
							<input type="text" name="new_pwd" id="new_pwd" value=""/>
						</div>
						<div class="mid_div4 information">
							确认密码：
							<input type="text" name="re_pwd" id="re_pwd"/>
						</div>
						<div class="mid_div5">修改</div>
					</div>
				</div>
			</div>
		</div>
<!--底部-->
<?php
include_once 'footer.php';
?>
	</body>
</html>
<script type="text/javascript" src="./js/set.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>
