<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/basic_information.css" =<?echo $version; ?>"/>
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
					<a class="head_reportBtn1" href="basic_information.php">基本信息</a>
					<a class="head_reportBtn2" href="financial_information.php">财务信息</a>
					<a class="head_reportBtn3" href="set.php">设置</a>
				</div>
				<div class="midland_r_mid">
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/img1.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">账户余额</div>
								<span class="balance_2 one">0</span>
								<span class="one">(元)</span>
							</div>
						</div>
					</div>
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/img2.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">今日支出 </div>
								<span class="balance_2 two"><?php echo $pay_day; ?></span>
								<span class="two">(元)</span>
							</div>
						</div>
					</div>
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/img3.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">累计支出 </div>
								<span class="balance_2 thr"><?php echo $pay_all; ?></span>
								<span class="thr">(元)</span>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<form action="" method="" name="editaccount" id="">
					<div class="company_name information">
						公司名称：
						<input type="text" name="company" value="<?php echo $u_res["company"];?>"/>
					</div>
					<div class="linkman information">
						联系人：
						<input type="text" name="contacter" id="" value="<?php echo $u_res["contacter"];?>" />
					</div>
					<div class="telephone information">
						手机：
						<input type="text"  name="mobile" value="<?php echo $u_res["mobile"];?>" />
					</div>
					<div class="qq information">
						QQ：
						<input type="text" name="qq" value="<?php echo $u_res["qq"];?>" />
					</div>
					<div class="mailbox information">
						邮箱：
						<input type="text" name="email"  value="<?php echo $u_res["email"];?>" readonly="readonly"/>
					</div>
					<div class="contact_address information">
						联系地址：
						<select name="province" class="province" style="" onchange="changePro()">
						<option value="0">--请选择省份--</option>
						<?php foreach($pro_res as $k=>$v){?>
							<option value="<?php echo $v['code'] ?>" <?php if($v['code']==$u_res["province"]) echo 'selected' ?> ><?php echo $v['name'] ?></option>
						<?php } ?>
						</select>
						<select name="city" class="city" style="" onchange="changeCity()">
							<option value="">--请选择城市--</option>
						</select>
						<select name="area"  class="area">
							<option value="">--请选择区/县--</option>
						</select>
					</div>
					<div class="detailed_address information">
						<input type="text" name="addr" value="<?php echo $u_res["addr"];?>" />
					</div>
					</form>
					<div class="save" onclick="chk_account_set();">保存</div>
				</div>
			</div>
		</div>
<!--底部-->
<?php
include_once 'footer.php';
?>
	</body>
</html>
<script type="text/javascript" src="./js/basic_information.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>
<script type="text/javascript">
$(function(){
	var pro_code=<?php echo $u_res["province"]>0?$u_res["province"]:0;?>;
	if(pro_code >0){	
		getCity(pro_code);
	}
	var city_code=<?php echo $u_res["city"]>0?$u_res["city"]:0;?>;
	if(city_code >0){
		$(".city").val(city_code);	
		getArea(city_code);
	}
	var area_code=<?php echo $u_res["area"]>0?$u_res["area"]:0;?>;
	if(area_code >0){	
		$(".area").val(area_code);	
	}
})
</script>
