<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/ad_plan.css?version=<?echo $version; ?>"/>
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
					<a class="head_reportBtn2" href="generalize_plan.php">推广计划</a>
					<a class="head_reportBtn3" href="directed_plan.php">定向计划</a>
					<a class="head_reportBtn1" href="ad_plan.php">广告计划</a>
				</div>
				<div class="generalize">
					<div class="generalize_top">
						<div class="generalize_addposter" id="generalize3">新增广告计划</div>
						<div class="generalize_custom">自定义列</div>
						<div class="generalize_download">下载报表</div>
						<div style="display:none">
							<form action="ajaxexcel.php" name="downloadmes"  method="post"  id="downloadmes">
							<input type="hidden" name="mes" value='<?php echo $download_mes;?>'/>
							<input type="hidden" name="mod" value="ad_plan"/>
							</form>
						</div>
						<!--<div class="generalize_tip">
							<p>平台内所有数据有一小时的延时统计延迟</p>
						</div>-->
						<form action="ad_plan.php" method="post" name="search_ad">
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
										<td>
											<input type="checkbox" checked="checked" disabled="disabled" name="" id="" value="" />
											<span>状态</span>
										</td>
									</tr>
								</table>
							</div>
							<div class="effect">
								<label for="effect1">
									<input type="checkbox" name="" id="effect1" value="" />
									<span class="effect_span1">效果</span>
								</label>
								<span class="effect_span2"></span>
							</div>
							<div class="exposure">
								<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<label for="exposure1">
												<input type="checkbox" name="" id="exposure1" value="1" <?php if(itemIsExistExplode($columns,"1"))echo 'checked="checked"';?>/>
												<span>曝光量</span>
											</label>
										</td>
										<td>
											<label for="exposure2">
												<input type="checkbox" name="" id="exposure2" value="2" <?php if(itemIsExistExplode($columns,"2"))echo 'checked="checked"';?>/>
												<span>点击量</span>
											</label>
										</td>
										<td>
											<label for="exposure3">
												<input type="checkbox" name="" id="exposure3" value="3" <?php if(itemIsExistExplode($columns,"3"))echo 'checked="checked"';?>/>
												<span>转化率</span>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="effect">
								<label for="rest11">
									<input type="checkbox" name="" id="rest11" value="" />
									<span class="effect_span1">属性</span>
								</label>
								<span class="effect_span2"></span>
							</div>
							<div class="attribute">
								<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<label for="attribute1">
												<input type="checkbox" name="" id="attribute1" value="4" <?php if(itemIsExistExplode($columns,"4"))echo 'checked="checked"';?>/>
												<span>定向计划</span>
											</label>
										</td>
										<td>
											<label for="attribute2">
												<input type="checkbox" name="" id="attribute2" value="5" <?php if(itemIsExistExplode($columns,"5"))echo 'checked="checked"';?>/>
												<span>推广计划</span>
											</label>
										</td>
										<td>
											<label for="attribute3">
												<input type="checkbox" name="" id="attribute3" value="6" <?php if(itemIsExistExplode($columns,"6"))echo 'checked="checked"';?>/>
												<span>投放设备</span>
											</label>
										</td>
										<td>
											<label for="attribute4">
												<input type="checkbox" name="" id="attribute4" value="7" <?php if(itemIsExistExplode($columns,"7"))echo 'checked="checked"';?>/>
												<span>结束日期</span>
											</label>
										</td>
										<td>
											<label for="attribute5">
												<input type="checkbox" name="" id="attribute5" value="8" <?php if(itemIsExistExplode($columns,"8"))echo 'checked="checked"';?>/>
												<span>广告形式</span>
											</label>
										</td>
									</tr>
									<tr>
										<td>
											<label for="attribute6">
												<input type="checkbox" name="" id="attribute6" value="9" <?php if(itemIsExistExplode($columns,"9"))echo 'checked="checked"';?>/>
												<span>固定位置</span>
											</label>
										</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
							</div>
							<div class="cancelsure">
								<input id="columns" type="hidden" name="columns" value="<?php echo $columns;?>"/>
								<span class="cancelsure_span1">取消</span>
								<span class="cancelsure_span2" onclick="document.search_ad.submit();">确定</span>
							</div>
						</div>
						<select class="generalize_select" name="status">
							<option value="">所有计划</option>
							<option value="1" <?php if($status==1)echo "selected";?> >审核中</option>
							<option value="2" <?php if($status==2)echo "selected";?> >审核通过</option>
							<option value="3" <?php if($status==3)echo "selected";?> >审核失败</option>
							<option value="5" <?php if($status==5)echo "selected";?> >已关闭</option>
						</select>
						<input type="text" name="begin_day" class="generalize_date1" value="<?php echo $begin_day;?>" placeholder="起始日期" onclick="WdatePicker();"/>
	                  	<span class="generalize_span1">—</span>
	                    <input type="text" name="end_day" class="generalize_date2" value="<?php echo $end_day;?>" placeholder="终止日期" onclick="WdatePicker();"/>
						<input type="text" name="keywords" class="search1" id="" value="<?php echo $keywords;?>" placeholder="广告计划或ID"/>
						<img class="search2" src="./img/right/img8.png" onclick="document.search_ad.submit();"/>
						</form>
					</div>
					<div class="circle">
						<table class="plantable" border="0" cellspacing="0" cellpadding="0">
							<tr class="trheader">
								
								<td>广告名称</td>
								<?php if(itemIsExistExplode($columns,"4")){?>
								<td>定向计划</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"5")){?>
								<td>推广计划</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"6")){?>
								<td>投放设备</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"7")){?>
								<td>结束日期</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"8")){?>
								<td>广告形式</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"9")){?>
								<td>固定位置</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"1")){?>
								<td>曝光量</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"2")){?>
								<td>点击量</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"3")){?>
								<td>转化率</td>
								<?php }?>
								<td>审核状态</td>
								<td>操作</td>
							</tr>
							<?php 
							if(count($list)){
								foreach($list as $k=>$v){
							?>
							<tr>
								<td><?php echo $v['adv_name'];?></td>
								<?php if(itemIsExistExplode($columns,"4")){?>
								<td><?php echo $v['planmes']['name'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"5")){?>
								<td><?php echo $v['budgetmes']['name'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"6")){?>
								<td class="equipment">
									<?php if($v['platform']==1){
											echo '<img class="equipment1" src="./img/right/android.png"/>';
										}elseif($v['platform']==2){
											echo '<img class="equipment1" src="./img/right/ios.png"/>';
										}elseif($v['platform']==3){
											echo 'PC';
										}else{
											echo "不限";
										}
									?>
								</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"7")){?>
								<td><?php if($v['end_time_type']==0){
											echo '不限';
										}else{
											echo date("Y/m/d",$v['end_time']);
										}
									?>
								</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"8")){?>
								<td ><?php echo $v['ad_type_name'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"9")){?>
								<td><?php echo functions::getPositionStr($v['position']);?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"1")){?>
								<td ><?php echo $v['get']?$v['get']:0;?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"2")){?>
								<td ><?php echo $v['hit']?$v['hit']:0;?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"3")){?>
								<td ><?php echo $v['rate']."%";?></td>
								<?php }?>
								<td class="state">
								<?php if($v["status"]==1){echo "审核通过";}
									elseif($v["status"]==2){echo "<span style='color:#f00;cursor:default;' title=".$v["cause"].">审核被拒</span>";}
									else{if($v["status"]==0) 
										{echo '<img class="audit1" src="./img/right/img10_5.png" style="display:inline-block;" data-id='.$v['id'].' />';echo '<img class="audit2" src="./img/right/img10_6.png" style="display:none;" data-id='.$v['id'].' />';}
										elseif($v["status"]==4)
										{echo '<img class="audit1" src="./img/right/img10_5.png" style="display:none;" data-id='.$v['id'].' />';echo '<img class="audit2" src="./img/right/img10_6.png" style="display:inline-block;" data-id='.$v['id'].'  />';}
										}?>
									
								</td>
								<td class="operate">
									<img class="copy1" src="./img/right/img9_1.png" data-id="<?php echo $v['id'];?>"/>
									<img class="copy3" src="./img/right/img10_1.png" data-id="<?php echo $v['id'];?>"/>
									<img class="amend1" src="./img/right/img9_3.png" data-id="<?php echo $v['id'];?>"/>
									<img class="amend3" src="./img/right/img10_2.png" data-id="<?php echo $v['id'];?>"/>
									<img class="delete1" data-id="<?php echo $v['id'];?>" src="./img/right/img9_5.png"/>
									<img class="delete3" data-id="<?php echo $v['id'];?>" src="./img/right/img10_3.png"/>
									<img class="preview1" onclick="onAdvDisplay(<?php echo $v['id'];?>)" src="./img/right/img9_7.png"/>
									<img class="preview3" onclick="onAdvDisplay(<?php echo $v['id'];?>)" src="./img/right/img10_4.png"/>
								</td>
							</tr>
							
							<?php
								}
							}
							?>
							<tr>
								<td colspan="12"><div class="page_div"><?php echo $pageinfo;?></div></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
<!--底部-->
<?php
include 'footer.php';
?>
	</body>
</html>

<script type="text/javascript" src="./js/jquery.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/ad_plan.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/js_date/WdatePicker.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>