<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/overall_statement.css"/>
	</head>
	<body>
	
<!--中间右侧-->
	<div class="midland_r">
		<div class="head_btn_wrap">
			<a class="head_reportBtn1" href="overall_statement.php">整体报表</a>
			<a class="head_reportBtn2" href="direction_statement.php">定向报表</a>
		</div>
		<div class="screening">
		<form action="overall_statement.php" method="post" name="rundata" id="rundata" >
			
			<select class="screening_sele" name="adv_id">
				
			</select>
			<input class="screening_data1" type="text" name="begin_day" class="date1" value="" placeholder="" onclick="WdatePicker();"/>
          	<span class="screening_span1">—</span>
            <input class="screening_data2" type="text" name="end_day" class="date2" value="" placeholder="" onclick="WdatePicker();"/>
            <input id="columns" type="hidden" name="columns" value=""/>
			<span class="screening_span2" onclick="document.rundata.submit();">确定</span>
			</form>
		</div>
		<div class="midland_r_tmid">
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/img3.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">花费</div>
						<span class="balance_2 two"></span>
						<span class="one">(元)</span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/show.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">曝光量</div>
						<span class="balance_2 thr"></span>
					</div>
				</div>
			</div>
			<div class="div1">
				<div class="div1_1">
					<div class="div1_1_img"><img src="../img/right/click.png"/></div>
					<div class="div1_1_txt">
						<div class="balance_1">点击率</div>
						<span class="balance_2 fou"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="form1">
			<div class="form1_div1">
				<select class="form1_div1_s1" name="" onchange="changechart()">
					<option value="1">曝光量</option>
					<option value="2">花费</option>
					<option value="3">点击量</option>
					<option value="4">点击率</option>
				</select>
				<div class="form1_div1_d1">整体折线图</div>
				<div class="form1_div1_d2"></div>
				<select class="form1_div1_s2" name="" onchange="changechart()">
					<option value="1">曝光量</option>
					<option value="2" selected="selected">花费</option>
					<option value="3">点击量</option>
					<option value="4">点击率</option>
				</select>
			</div>
			<div class="form1_div2">
				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div>
		</div>
		<div class="condition">
			<div class="condition_div1 condition_change">广告报表数据</div>
			<div class="condition_div2 condition_change">
				自定义列
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
									<span>时间</span>
								</td>
								<td>
									<input type="checkbox" checked="checked" disabled="disabled" name="" id="" value="" />
									<span>花费</span>
								</td>
							</tr>
						</table>
					</div>
					<div class="effect">
						<label for="effect1">
							<input type="checkbox" name="" id="effect1" value="" />
							<span class="effect_span1">其他</span>
						</label>
						<span class="effect_span2"></span>
					</div>
					<div class="exposure">
						<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<label for="exposure1">
										<input type="checkbox" name="" id="exposure1" value="1"/>
										<span>广告名称</span>
									</label>
								</td>
								<td>
									<label for="exposure2">
										<input type="checkbox" name="" id="exposure2" value="2"/>
										<span>预算计划</span>
									</label>	
								</td>
								<td>
									<label for="exposure3">
										<input type="checkbox" name="" id="exposure3" value="3"/>
										<span>定向计划</span>
									</label>	
								</td>
								<td>
									<label for="exposure4">
										<input type="checkbox" name="" id="exposure4" value="4"/>
										<span>结束日期</span>
									</label>	
								</td>
								<td>
									<label for="exposure5">
										<input type="checkbox" name="" id="exposure5" value="5"/>
										<span>广告形式</span>
									</label>	
								</td>
							</tr>
							<tr>
								<td>
									<label for="exposure6">
										<input type="checkbox" name="" id="exposure6" value="6"/>
										<span>投放设备</span>
									</label>
								</td>
								<td>
									<label for="exposure8">
										<input type="checkbox" name="" id="exposure8" value="8"/>
										<span>曝光量</span>
									</label>	
								</td>
								<td>
									<label for="exposure9">
										<input type="checkbox" name="" id="exposure9" value="9"/>
										<span>点击量</span>
									</label>	
								</td>
								<td>
									<label for="exposure10">
										<input type="checkbox" name="" id="exposure10" value="10"/>
										<span>点击率</span>
									</label>	
								</td>
								<td>
									<label for="exposure11">
										<input type="checkbox" name="" id="exposure11" value="11"/>
										<span>计费方式</span>
									</label>
								</td>
							</tr>
							<tr>
								
								<td>
									<label for="exposure12">
										<input type="checkbox" name="" id="exposure12" value="12"/>
										<span>计费次数</span>
									</label>	
								</td>
								<td>
									<label for="exposure13">
										<input type="checkbox" name="" id="exposure13" value="13"/>
										<span>计费价格</span>
									</label>	
								</td>
							</tr>
						</table>
					</div>
					<div class="cancelsure">
						<input id="columns" type="hidden" name="columns" value=""/>
						<span class="cancelsure_span1">取消</span>
						<span class="cancelsure_span2" onclick="document.rundata.submit();">确定</span>
					</div>
				</div>
			</div>
			<div class="condition_div3 condition_change" onclick="document.downloadmes1.submit();">下载报表</div>
			<div class="clear"></div>
		</div>
		<div class="tabtab">
			<table class="plantable" border="0" cellspacing="0" cellpadding="0">
				<tr class="trheader">
					
				</tr>
				
			</table>
		</div>
		<!-- 点击日期弹层 -->
		<div class="date_wrap">
			<div class="date_cont">
				<div class="date_head">
					<span class="today_time">2016年10月10日</span>
					<span class="today_txt">明细数据</span>
					<span class="download_time">下载图表</span>
					<em class="close_today_chart">×</em>
				</div>
				<table class="time_tab">
					<tbody>
						<tr>
							<th>时间</th>
							<th>媒体名称</th>
							<th>展现形式</th>
							<th>有效CPM</th>
							<th>CPM均价/千次</th>
							<th>CPM收入/RMB</th>
							<th>有效CPC</th>
							<th>CPC均价/单次</th>
							<th>CPC收入/RMB</th>
							<th>总收入/RMB</th>
						</tr>
						<tr>
							<td>总计</td>
							<td>集合盆</td>
							<td>插屏</td>
							<td>200000</td>
							<td>2</td>
							<td>200</td>
							<td>100000</td>
							<td>1</td>
							<td>10000</td>
							<td>500000</td>
						</tr>
						<tr>
							<td>01:00</td>
							<td>集合盆</td>
							<td>插屏</td>
							<td>200000</td>
							<td>2</td>
							<td>200</td>
							<td>100000</td>
							<td>1</td>
							<td>10000</td>
							<td>500000</td>
						</tr>
						<tr>
							<td>01:00</td>
							<td>集合盆</td>
							<td>插屏</td>
							<td>200000</td>
							<td>2</td>
							<td>200</td>
							<td>100000</td>
							<td>1</td>
							<td>10000</td>
							<td>500000</td>
						</tr>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
<!--底部-->
	</body>
</html>
<script type="text/javascript" src="../js/overall_statement.js"></script>

