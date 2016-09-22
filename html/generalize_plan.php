<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/generalize_plan.css"/>
</head>
<body>
<!--中间右侧-->
	<div class="midland_r">
		<div class="head_btn_wrap">
			<a class="head_reportBtn1" href="generalize_plan.php">推广计划</a>
			<a class="head_reportBtn2" href="directed_plan.php">定向计划</a>
			<a class="head_reportBtn3" href="ad_plan.php">广告计划</a>
		</div>
		<div class="generalize">
			<div class="generalize_top">
				<div class="generalize_addposter" id="generalize_addposter1">新增推广计划</div>
				<div class="generalize_custom">自定义列</div>
				<div class="generalize_download" >下载报表</div>
				<div style="display:none">
					<form action="ajaxexcel.php" name="downloadmes"  method="post"  id="downloadmes">
					<input type="hidden" name="mes" value=''/>
					<input type="hidden" name="mod" value="generalize"/>
					</form>
				</div>
				<!--<div class="generalize_tip">
					<p>平台内所有数据有一小时的延时统计延迟</p>
				</div>-->
				<form action="generalize_plan.php" method="post" name="search_ad">
				<div class="generalize_custom_child">
					<div class="mustchange">
						<span class="mustchange_span1">必选项</span>
						<span class="mustchange_span2"></span>
					</div>
					<div class="planname">
						<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<input type="checkbox" checked="checked" disabled="disabled" name="" id="" value="" />
									<span>计划名称</span>
								</td>
								<td>
									<input type="checkbox" checked="checked" disabled="disabled" name="" id="" value="" />
									<span>操作</span>
								</td>
							</tr>
						</table>
					</div>
					<div class="effect">
						<label for="effect1">
							<input type="checkbox" checked="checked" name="" id="effect1" value="" />
							<span class="effect_span1">效果</span>
						</label>
						<span class="effect_span2"></span>
					</div>
					<div class="exposure">
						<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<label for="exposure1">
										<input type="checkbox" name="" id="exposure1" value="1"/>
										<span>曝光量</span>
									</label>
								</td>
								<td>
									<label for="exposure2">
										<input type="checkbox" name="" id="exposure2" value="2"/>
										<span>点击量</span>
									</label>	
								</td>
								<td>
									<label for="exposure3">
										<input type="checkbox" name="" id="exposure3" value="3"/>
										<span>转化率</span>
									</label>	
								</td>
								<td>
									<label for="exposure4">
										<input type="checkbox" name="" id="exposure4" value="4"/>
										<span>限额</span>
									</label>	
								</td>
							</tr>
						</table>
					</div>
					<div class="cancelsure">
						<input id="columns" type="hidden" name="columns" value="<?php echo $columns;?>"/>
						<span class="cancelsure_span1">取消</span>
						<span class="cancelsure_span2" onclick="document.search_ad.submit();">确定</span>
					</div>
				</div>
				<input type="text" name="begin_day" class="generalize_date1" value="" placeholder="起始日期" onclick="WdatePicker();"/>
              	<span class="generalize_span1">—</span>
                <input type="text" name="end_day" class="generalize_date2" value="" placeholder="终止日期" onclick="WdatePicker();"/>
				<input type="text" name="keywords" class="search1" id="" value="" placeholder="推广计划或ID"/>
				<img class="search2" src="../img/right/img8.png" onclick="document.search_ad.submit();"/>
				</form>
			</div>
			<div class="circle">
				<table class="plantable" border="0" cellspacing="0" cellpadding="0">
					<tr class="trheader">
						<td>推广计划名称</td>
						<td>每日限额</td>
						<td>曝光量</td>
						<td>点击量</td>
						<td>转化率</td>
						<td>操作</td>
					</tr>
					<tr>
						<td>111</td>
						<td>111</td>
						<td>111</td>
						<td>111</td>
						<td>111</td>
						<td>111</td>
					</tr>
					<tr>
						<td>222</td>
						<td>222</td>
						<td>222</td>
						<td>222</td>
						<td>222</td>
						<td>222</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 新增推广计划 -->
		<div class="release_main">
			<div class="release21_layer_main">
				<form if="releaseForm21" name="releaseForm21">
					<div class="release21_layer_bd">
						<div class="release21_head">
							新建推广计划
							<span class="close_release21_btn">×</span>
						</div>
						<ul class="release21_cont">
							<li>
								<span class="release21_name">计划名称：</span>
								<input class="release21_input1" type="text">
							</li>
							<li>
								<span class="release21_name">每日限额：</span>
								<input class="release21_input2" type="text">
							</li>
							<li>
								<span class="release21_name ver_m">备注：</span>
								<textarea rows="2"></textarea>
							</li>
						</ul>
						<span class="release21_submit" id="submitForm21">确定</span>
					</div>
				</form>
				<!-- 遮罩 -->
			</div>
			<div class="release_layer21_shade"></div>
		</div>
		
	</div>
</body>
</html>

<script type="text/javascript" src="../js/generalize_plan.js"></script>