<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/basic_information.css"/>
</head>
<body>		
<!--中间右侧-->
	<div class="midland_r">
		<div class="head_btn_wrap">
			<a class="head_reportBtn1" href="basic_information.php">基本信息</a>
			<a class="head_reportBtn2" href="financial_information.php">财务信息</a>
			<a class="head_reportBtn3" href="set.php">设置</a>
		</div>
		<div class="midland_r_mid">
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img1.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">账户余额</div>
						<span class="balance_2 one">0</span>
						<span class="one">(元)</span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img2.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">今日支出 </div>
						<span class="balance_2 two"></span>
						<span class="two">(元)</span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img3.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">累计支出 </div>
						<span class="balance_2 thr"></span>
						<span class="thr">(元)</span>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<form action="" method="" name="editaccount" id="">
			<div class="company_name information">
				公司名称：
				<input type="text" name="company" value=""/>
			</div>
			<div class="linkman information">
				联系人：
				<input type="text" name="contacter" id="" value="" />
			</div>
			<div class="telephone information">
				手机：
				<input type="text"  name="mobile" value="" />
			</div>
			<div class="qq information">
				QQ：
				<input type="text" name="qq" value="" />
			</div>
			<div class="mailbox information">
				邮箱：
				<input type="text" name="email"  value="" readonly="readonly"/>
			</div>
			<div class="contact_address information">
				联系地址：
				<select name="province" class="province" style="" onchange="changePro()">
				<option value="0">--请选择省份--</option>
				
				</select>
				<select name="city" class="city" style="" onchange="changeCity()">
					<option value="">--请选择城市--</option>
				</select>
				<select name="area"  class="area">
					<option value="">--请选择区/县--</option>
				</select>
			</div>
			<div class="detailed_address information">
				<input type="text" name="addr" value="" />
			</div>
			</form>
			<div class="save" onclick="chk_account_set();">保存</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="../js/basic_information.js"></script>

