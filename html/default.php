<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
</head>
<body>
	<div class="midland_r">
		<div class="midland_r_top">
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img1.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">账户余额</div>
						<span class="balance_2">0</span>
						<span>(元)</span>
					</div>
				</div>
				<div class="div1_2">
					<div>提现</div>
					<div class="div1_2_div1">充值</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img2.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">昨日支出</div>
						<span class="balance_2 two"></span>
						<span class="two">(元)</span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img3.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">已花费</div>
						<span class="balance_2 thr"></span>
						<span class="thr">(元)</span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img4.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">当月支出</div>
						<span class="balance_2 fou"></span>
						<span class="fou">(元)</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="midland_r_foot">
			<div class="midland_r_foot_div1">
				<span class="midland_r_foot_div1_span1"><b>整体情况</b></span>
				<span class="midland_r_foot_div1_span2">（表格内所有数据有一小时的统计延迟）</span>
				<input type="text" name="begin_day" class="date1 begin_day" value="" placeholder="" onclick="WdatePicker();"/>
              	<span class="midland_r_foot_div1_span3">—</span>
                <input type="text" name="end_day" class="date2 end_day" value="" placeholder="" onclick="WdatePicker();"/>
		        <span class="midland_r_foot_div1_img" onclick="getHomeData()"/>确定</span>       
			</div>
			<div class="midland_r_foot_div2">
				<div class="data exposure">
					<div class="data1">曝光量（次）</div>
					<div class="data2 pv_count">0</div>
				</div>
				<div class="data hits">
					<div class="data1">点击量（次）</div>
					<div class="data2 click_count">0</div>
				</div>
				<div class="data clickrate">
					<div class="data1">平均点击率</div>
					<div class="data2 rate_count">0</div>
				</div>
				<div class="data spend">
					<div class="data1">花费（元）</div>
					<div class="data2 pay_count">0</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="midland_r_foot_div3"  onchange="getHomeData()">
				<select class="select1" name="">
					<option value="1">曝光量</option>
					<option value="2">花费</option>
					<option value="3">点击量</option>
					<option value="4">点击率</option>
				</select>
				<select class="select2" name="" onchange="getHomeData()">
					<option value="1">曝光量</option>
					<option value="2" selected="selected">花费</option>
					<option value="3">点击量</option>
					<option value="4">点击率</option>
				</select>
			</div>
			<div id="container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="../js/index.js"></script>