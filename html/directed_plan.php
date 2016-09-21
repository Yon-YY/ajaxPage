<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/directed_plan.css?version=<?echo $version; ?>"/>
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
					<a class="head_reportBtn1" href="directed_plan.php">定向计划</a>
					<a class="head_reportBtn3" href="ad_plan.php">广告计划</a>
				</div>
				<div class="generalize">
					<div class="generalize_top">
						<div class="generalize_addposter" id="generalize_addposter2">新增定向计划</div>
						<div class="generalize_custom">自定义列</div>
						<div class="generalize_download">下载报表</div>
						<div style="display:none">
							<form action="ajaxexcel.php" name="downloadmes"  method="post"  id="downloadmes">
							<input type="hidden" name="mes" value='<?php echo $download_mes;?>'/>
							<input type="hidden" name="mod" value="directed"/>
							</form>
						</div>
						<!--<div class="generalize_tip">
							<p>平台内所有数据有一小时的延时统计延迟</p>
						</div>-->
						<form action="directed_plan.php" method="post" name="search_ad">
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
								<label for="rest1">
									<input type="checkbox" name="" id="rest1" value="" />
									<span class="effect_span1">其他</span>
								</label>
								<span class="effect_span2"></span>
							</div>
							<div class="sex">
								<table class="tabchange" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<label for="sex1">
												<input type="checkbox" name="" id="sex1" value="4" <?php if(itemIsExistExplode($columns,"4"))echo 'checked="checked"';?>/>
												<span>性别</span>
											</label>
										</td>
										<td>
											<label for="sex2">
												<input type="checkbox" name="" id="sex2" value="5" <?php if(itemIsExistExplode($columns,"5"))echo 'checked="checked"';?>/>
												<span>年龄</span>
											</label>
										</td>
										<td>
											<label for="sex3">
												<input type="checkbox" name="" id="sex3" value="6" <?php if(itemIsExistExplode($columns,"6"))echo 'checked="checked"';?>/>
												<span>消费能力</span>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="cancelsure">
								<input id="columns" type="hidden" name="columns" value="<?php echo $columns;?>"/>
								<span class="cancelsure_span1">取消</span>
								<span class="cancelsure_span2" onclick="document.search_ad.submit();"  >确定</span>
							</div>
						</div>
						<!-- <select class="generalize_select" name="">
							<option value="">所有未删除</option>
							<option value="">所有计划</option>
							<option value="">启用中</option>
							<option value="">暂停中</option>
						</select> -->
						<input type="text" name="begin_day" class="generalize_date1" value="<?php echo $begin_day;?>" placeholder="起始日期" onclick="WdatePicker();"/>
	                  	<span class="generalize_span1">—</span>
	                    <input type="text" name="end_day" class="generalize_date2" value="<?php echo $end_day;?>" placeholder="终止日期" onclick="WdatePicker();"/>
						<input type="text" name="keywords" class="search1" id="" value="<?php echo $keywords;?>" placeholder="定向计划或ID"/>
						<img class="search2" src="./img/right/img8.png" onclick="document.search_ad.submit();"/>
						</form>
					</div>
					<div class="circle">
						<table class="plantable" border="0" cellspacing="0" cellpadding="0">
							<tr class="trheader">
								<td>计划名称</td>
								
								<?php if(itemIsExistExplode($columns,"4")){?>
								<td>用户性别</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"5")){?>
								<td>用户年龄</td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"6")){?>
								<td>消费能力</td>
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
								
								<td>操作</td>
							</tr>
							<?php 
							if(count($list)){
								foreach($list as $k=>$v){
							?>
							<tr>
								<td><?php echo $v['name'];?></td>
								<?php if(itemIsExistExplode($columns,"4")){?>
								<td><?php if($v['sex']==2){echo '女';}elseif($v['sex']==1){echo '男';}else{echo '不限';}?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"5")){?>
								<td><?php if(strlen($v['age'])<2)echo "不限";else echo $v['age'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"6")){?>
								<td><?php if($v['spend']==1){echo '3000以下';}elseif($v['spend']==2){echo '3000-5000';}elseif($v['spend']==3){echo '5000-8000';}elseif($v['spend']==4){echo '8000-10000';}elseif($v['spend']==5){echo '10000-12000';}elseif($v['spend']==6){echo '12000-15000';}else{echo '15000以上';}?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"1")){?>
								<td><?php echo $v['get'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"2")){?>
								<td><?php echo $v['hit'];?></td>
								<?php }?>
								<?php if(itemIsExistExplode($columns,"3")){?>
								<td><?php echo $v['rate'];?>%</td>
								<?php }?>
								
								<td class="operate">
									<img class="copy1" src="./img/right/img9_1.png" data-id="<?php echo $v['id'];?>" />
									<img class="copy3" src="./img/right/img10_1.png" data-id="<?php echo $v['id'];?>"/>
									<img class="amend1" src="./img/right/img9_3.png" data-id="<?php echo $v['id'];?>"/>
									
									<img class="amend3" src="./img/right/img10_2.png" data-id="<?php echo $v['id'];?>"/>
									<img class="delete1" data-id="<?php echo $v['id'];?>" src="./img/right/img9_5.png"/>
									
									<img class="delete3" src="./img/right/img10_3.png"/>
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
				<!-- 自定义弹框 -->
				<div class="poster_wrap">
					<div class="poster_cont_main">
						<!-- 关闭 -->
						<img class="head_poster_btn" src="./img/top/close_layer_btn.png">
						<iframe id="poster_cont_layer" src="./add_orient.php"></iframe>
					</div>
					<!-- 遮罩层 -->
					<div class="poster_cont_shade"></div>
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
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/directed_plan.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/js_date/WdatePicker.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>