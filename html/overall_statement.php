<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/overall_statement.css?version=<?echo $version; ?>"/>
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
					<a class="head_reportBtn1" href="overall_statement.php">整体报表</a>
					<a class="head_reportBtn2" href="direction_statement.php">定向报表</a>
				</div>
				<div class="screening">
				<form action="overall_statement.php" method="post" name="rundata" id="rundata" >
					<!-- <select class="screening_device" name="platform">
						<option value="0" >数据来源</option>
						<option value="1" <?php if ($platform ==1) echo 'selected="selected"';?>  >安卓</option>
						<option value="2" <?php if ($platform ==2) echo 'selected="selected"';?>  >IOS</option>
						<option value="3" <?php if ($platform ==3) echo 'selected="selected"';?>  >PC</option>
						<option value="4" <?php if ($platform ==4) echo 'selected="selected"';?>  >其他</option>
					</select> -->
					<select class="screening_sele" name="adv_id">
						<option value="0">全部广告</option>
						<?php foreach($adv_list as $ka => $va){?>
		                    <option value="<?php echo $va['id'];?>" <?php if ($adv_id ==$va['id']) echo 'selected="selected"';?> ><?php echo $va['adv_name']?></option>
			            <?php }?>
					</select>
					<input class="screening_data1" type="text" name="begin_day" class="date1" value="<?php if($begin_day){ echo $begin_day;}?>" placeholder="<?php  echo date("Y/m/d",strtotime("-6 day"));?>" onclick="WdatePicker();"/>
                  	<span class="screening_span1">—</span>
                    <input class="screening_data2" type="text" name="end_day" class="date2" value="<?php if($end_day){ echo $end_day;}?>" placeholder="<?php  echo date("Y/m/d");?>" onclick="WdatePicker();"/>
                    <input id="columns" type="hidden" name="columns" value="<?php echo $columns;?>"/>
					<span class="screening_span2" onclick="document.rundata.submit();">确定</span>
					</form>
				</div>
				<div class="midland_r_tmid">
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/img3.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">花费</div>
								<span class="balance_2 two"><?php echo $pay_all; ?></span>
								<span class="one">(元)</span>
							</div>
						</div>
					</div>
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/show.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">曝光量</div>
								<span class="balance_2 thr"><?php echo $pv_count; ?></span>
							</div>
						</div>
					</div>
					<div class="div1">
						<div class="div1_1">
							<div class="div1_1_img"><img src="./img/right/click.png"/></div>
							<div class="div1_1_txt">
								<div class="balance_1">点击率</div>
								<span class="balance_2 fou"><?php echo $pv_count>0?round($click_count/$pv_count*100,2):0; ?></span>
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
						<div class="form1_div1_d2"><?php echo date('Y-m-d',$begin_time);?>/<?php echo date('Y-m-d',$end_time);?></div>
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
												<input type="checkbox" name="" id="exposure1" value="1" <?php if(itemIsExistExplode($columns,"1"))echo 'checked="checked"';?> />
												<span>广告名称</span>
											</label>
										</td>
										<td>
											<label for="exposure2">
												<input type="checkbox" name="" id="exposure2" value="2" <?php if(itemIsExistExplode($columns,"2"))echo 'checked="checked"';?> />
												<span>预算计划</span>
											</label>	
										</td>
										<td>
											<label for="exposure3">
												<input type="checkbox" name="" id="exposure3" value="3" <?php if(itemIsExistExplode($columns,"3"))echo 'checked="checked"';?> />
												<span>定向计划</span>
											</label>	
										</td>
										<td>
											<label for="exposure4">
												<input type="checkbox" name="" id="exposure4" value="4" <?php if(itemIsExistExplode($columns,"4"))echo 'checked="checked"';?> />
												<span>结束日期</span>
											</label>	
										</td>
										<td>
											<label for="exposure5">
												<input type="checkbox" name="" id="exposure5" value="5" <?php if(itemIsExistExplode($columns,"5"))echo 'checked="checked"';?> />
												<span>广告形式</span>
											</label>	
										</td>
									</tr>
									<tr>
										<td>
											<label for="exposure6">
												<input type="checkbox" name="" id="exposure6" value="6" <?php if(itemIsExistExplode($columns,"6"))echo 'checked="checked"';?> />
												<span>投放设备</span>
											</label>
										</td>
									<!-- 	<td>
											<label for="exposure7">
												<input type="checkbox" name="" id="exposure7" value="7" <?php if(itemIsExistExplode($columns,"7"))echo 'checked="checked"';?> />
												<span>数据来源</span>
											</label>	
										</td> -->
										<td>
											<label for="exposure8">
												<input type="checkbox" name="" id="exposure8" value="8" <?php if(itemIsExistExplode($columns,"8"))echo 'checked="checked"';?> />
												<span>曝光量</span>
											</label>	
										</td>
										<td>
											<label for="exposure9">
												<input type="checkbox" name="" id="exposure9" value="9" <?php if(itemIsExistExplode($columns,"9"))echo 'checked="checked"';?> />
												<span>点击量</span>
											</label>	
										</td>
										<td>
											<label for="exposure10">
												<input type="checkbox" name="" id="exposure10" value="10" <?php if(itemIsExistExplode($columns,"10"))echo 'checked="checked"';?> />
												<span>点击率</span>
											</label>	
										</td>
										<td>
											<label for="exposure11">
												<input type="checkbox" name="" id="exposure11" value="11" <?php if(itemIsExistExplode($columns,"11"))echo 'checked="checked"';?> />
												<span>计费方式</span>
											</label>
										</td>
									</tr>
									<tr>
										
										<td>
											<label for="exposure12">
												<input type="checkbox" name="" id="exposure12" value="12" <?php if(itemIsExistExplode($columns,"12"))echo 'checked="checked"';?> />
												<span>计费次数</span>
											</label>	
										</td>
										<td>
											<label for="exposure13">
												<input type="checkbox" name="" id="exposure13" value="13" <?php if(itemIsExistExplode($columns,"13"))echo 'checked="checked"';?> />
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
							<td>时间</td>
							<?php if(itemIsExistExplode($columns,"1")){?>
							<td>广告名称</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"2")){?>
							<td>预算计划</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"3")){?>
							<td>定向计划</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"4")){?>
							<td>结束日期</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"5")){?>
							<td>广告形式</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"6")){?>
							<td>投放设备</td>
							<?php }?>
							
							<!-- <td>数据来源</td> -->
							<?php if(itemIsExistExplode($columns,"8")){?>
							<td>曝光量</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"9")){?>
							<td>点击量</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"10")){?>
							<td>转化率</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"11")){?>
							<td>计费方式</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"12")){?>
							<td>计费次数</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"13")){?>
							<td>计费价格</td>
							<?php }?>
							<td>花费</td>
						</tr>
						<?php 
						if( count($table_arr) ){
							foreach($table_arr as $k=>$v){
						?>
						<tr>
							<td><?php echo $v['time'];?></td>
							<?php if(itemIsExistExplode($columns,"1")){?>
							<td><?php echo $v['adv_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"2")){?>
							<td><?php echo $v['budget_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"3")){?>
							<td><?php echo $v['plan_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"4")){?>
							<td><?php echo $v['end_time_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"5")){?>
							<td><?php echo $v['ad_type_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"6")){?>
							<td><?php echo $v['platform_name'];?></td>
							<?php }?>
							
							<!-- <td>数据来源</td> -->
							<?php if(itemIsExistExplode($columns,"8")){?>
							<td><?php echo $v['pv'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"9")){?>
							<td><?php echo $v['click'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"10")){?>
							<td><?php echo $v['pv']>0?round($v['click']/$v['pv']*100,2):0;?>%</td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"11")){?>
							<td><?php echo $v['pay_type_name'];?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"12")){?>
							<td><?php if($v['pay_type_name']=="CPC")echo $v['click_ip'];else echo  $v['ip']; ?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"13")){?>
							<td><?php echo $v['pay_fee_name'];?></td>
							<?php }?>
							<td><?php echo round($v['pay_money'],2);?></td>
						</tr>
						<?php 
							}?>
							<tr>
							<td>总计</td>
							<?php if(itemIsExistExplode($columns,"1")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"2")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"3")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"4")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"5")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"6")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"8")){?>
							
							<td><?php echo $pv_count;?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"9")){?>
							<td><?php echo $click_count;?></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"10")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"11")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"12")){?>
							<td></td>
							<?php }?>
							<?php if(itemIsExistExplode($columns,"13")){?>
							<td></td>
							<?php }?>
							<td><?php echo round($pay_all,2);?></td>
						</tr>
						<?php 
						}
						?>
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
			<div class="clear"></div>
			<div style="display:none">
			  <form action="ajaxexcel.php"   method="post"  name="downloadmes1" id="downloadmes1">
		      <input type="hidden" name="pvmes" value='<?php echo $download_mes_re;?>'/>
		      <input type="hidden" name="pv_count" value='<?php echo $pv_count;?>'/>
		      <input type="hidden" name="click_count" value='<?php echo $click_count;?>'/>
		      <input type="hidden" name="pay" value='<?php echo $pay_all;?>'/>
		      <input type="hidden" name="data" value='<?php echo $begin_day."至".$end_day;?>'/>
		      <input type="hidden" name="mod" value="rundata1"/>
		      </form>
			</div>
		</div>
<!--底部-->
<?php
include_once 'footer.php';
?>
	</body>
</html>
<script type="text/javascript" src="./js/overall_statement.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/js_date/WdatePicker.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>
<script type="text/javascript" src="./js/highcharts/js/highcharts.js"></script>
<script type="text/javascript" src="./js/highcharts/js/modules/exporting.js"></script>
<script type="text/javascript">
var categories=<?php echo $chart_data_str;?>;
var series_name1=<?php echo "'".$platformInfo['1']."'";?>;
var series_name2=<?php echo "'".$platformInfo['2']."'";?>;
var series_name3=<?php echo "'".$platformInfo['3']."'";?>;
var series_name4=<?php echo "'".$platformInfo['4']."'";?>;
var series_data1=<?php echo $platform1_str;?>;
var series_data2=<?php echo $platform2_str;?>;
var series_data3=<?php echo $platform3_str;?>;
var series_data4=<?php echo $platform4_str;?>;
  $('label input[type=checkbox]').change(function(){
    $('#columns').val($('label input[type=checkbox]:checked').map(function(){return this.value}).get().join(','))
  })
function changechart(){
    	var platform1=$('.form1_div1_s1').val();
    	var platform2=$('.form1_div1_s2').val();
    	var name1="";
    	var data1="";
    	var name2="";
    	var data2="";
    	if(platform1==1){
    		name1=series_name1;
    		data1=series_data1;
    	}else if(platform1==2){
    		name1=series_name2;
    		data1=series_data2;
    	}else if(platform1==3){
    		name1=series_name3;
    		data1=series_data3;
    	}else{
    		name1=series_name4;
    		data1=series_data4;
    	}
    	if(platform2==1){
    		name2=series_name1;
    		data2=series_data1;
    	}else if(platform2==2){
    		name2=series_name2;
    		data2=series_data2;
    	}else if(platform2==3){
    		name2=series_name3;
    		data2=series_data3;
    	}else{
    		name2=series_name4;
    		data2=series_data4;
    	}
    	getHomeData(categories,name1,data1,name2,data2);
    }
$(function () {
	
    getHomeData(categories,series_name1,series_data1,series_name2,series_data2);

});
</script>