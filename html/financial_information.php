<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/financial_information.css=<?echo $version; ?>"/>
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
					<a class="head_reportBtn1" href="financial_information.php">财务信息</a>
					<a class="head_reportBtn3" href="set.php">设置</a>
				</div>
				<div class="midland_r_mid">
					<div class="midland_r_mid_div">
						<form action="" method="" name="" id="">
						<div class="payee information">
							收款方：
							<input type="text" name="account_name" id="account_name" value="<?php echo $account_info["account_name"];?>"/>
						</div>
						<div class="location information">
							所在地：
							<input type="text" name="bank_full_name" id="bank_full_name" value="<?php echo $account_info["bank_full_name"];?>" />
						</div>
						<div class="bank_name information">
							银行名称：
							<input type="text"  name="bank_name" id="bank_name" value="<?php echo $account_info["bank_name"];?>" />
						</div>
						<div class="bank_account information">
							银行账户：
							<input type="text" name="bank_account" id="bank_account" value="<?php echo $account_info["bank_account"];?>" />
						</div>
						<div class="sure_account information">
							确认账户：
							<input type="text" name="re_bank_account" id="re_bank_account" value="<?php echo $account_info["bank_account"];?>"/>
						</div>
						</form>
						<div class="save">保存</div>
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
<script type="text/javascript" src="./js/financial_information.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>
