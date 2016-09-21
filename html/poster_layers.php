<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/index.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/head_poster.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./js/uploadify/ad_uploadify_createadv3.css?version=<?echo $version; ?>">
	</head>
	<body>
		<!-- 发布广告弹层 -->
		<div class="head_poster_main">
			<div class="head_tit">发布广告</div>
			<input type="hidden" value='<?php echo $adv_info[0]["id"] ?>' class="adv_id"/>
			<div class="cont_mian">
				<form if="releaseForm1" name="releaseForm1">
					<ul class="hierarchy_ul">
						<li>
							<dl class="hierarchy_l">
								<span class="stress_icon">*</span>
								<span class="hierarchy_tit">推广计划:</span>
							</dl>
							<dl class="hierarchy_m">
								<select class="hierarchy_expand" name="tg_plan_select" id="tg_plan_select">
									<?php foreach($tglist as $k=>$v){
									?>
									<option value="<?php echo $v["id"];?>" <?php if($v["id"] == $adv_info[0]["ad_budget_id"]){ echo 'selected="selected"'; }  ?>><?php echo $v["name"];?></option>											
									<?php } ?>
								</select>
							</dl>
							<dl class="hierarchy_r">
								<a class="hierarchy_btn" id="hierarchy_btn" href="javascripet:;">新建推广</a>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="stress_icon">*</span>
								<span class="hierarchy_tit">定向计划:</span>
							</dl>
							<dl class="hierarchy_m">
								<select class="hierarchy_expand" name="plan_select" id="plan_select">
									<?php foreach($list as $k=>$v){
									?>
									<option value="<?php echo $v["id"];?>" <?php if($v["id"] == $adv_info[0]["ad_plan_id"]){ echo 'selected="selected"'; }  ?> ><?php echo $v["name"];?></option>											
									<?php } ?>
								</select>
							</dl>
							<dl class="hierarchy_r">
								<a class="hierarchy_btn" id="direct_btn" href="javascripet:;">新建定向</a>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="stress_icon">*</span>
								<span class="hierarchy_tit">广告名称:</span>
							</dl>
							<dl class="hierarchy_m">
								<input type="text" id="name" name="name" class="hierarchy_poster" value='<?php echo $adv_info[0]["adv_name"];if($copy_id)echo "_副本";?>' />
							</dl>
							<dl class="hierarchy_r dl_mg">
								<span class="explain_txt">该名称仅方便您在我们的广告系统中识别！</span>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="stress_icon">*</span>
								<span class="hierarchy_tit">广告类型:</span>
							</dl>
							<dl class="hierarchy_alone">
								<span class="poster_type_btn <?php if($adv_info[0]["type"]==1||!$adv_info[0]["type"]) echo  'type_btn_active'; ?>" data="1">应用</span>
								<span class="poster_type_btn <?php if($adv_info[0]["type"]==2) echo  'type_btn_active'; ?>" data="2">网站</span>
								<span class="poster_type_btn <?php if($adv_info[0]["type"]==3) echo  'type_btn_active'; ?>" data="3">游戏</span>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">广告URL:</span>
							</dl>
							<dl class="hierarchy_alone">
								<input type="text" class="hierarchy_poster_url" id="link_url" name="link_url" value="<?php echo $adv_info[0]["link_url"]; ?>" />
							</dl>
							<p class="hierarchy_url_ex">输入格式参考：http://www.4jj.com</p>
						</li>
						<li class="hierarchy_mg_t">
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">投放设备:</span>
							</dl>
							<?php $platform = $adv_info[0]["platform"]; ?>	
							<dl class="hierarchy_alone">
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="platform" <?php if(!$platform){ echo 'checked=true';}?> value="0">
										</span>
										<span class="device_txt">不限</span>
									</label>
								</dd>
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="platform" value="1" <?php if($platform==1){ echo 'checked=true'; }?>>
										</span>
										<span class="device_txt">Android</span>
									</label>
								</dd>
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="platform" value="2" <?php if($platform==2){ echo 'checked=true'; }?>>
										</span>
										<span class="device_txt">苹果IOS</span>
									</label>
								</dd>
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="platform" value="3" <?php if($platform==3){ echo 'checked=true'; }?>>
										</span>
										<span class="device_txt">PC</span>
									</label>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">投放日期:</span>
							</dl>
							<?php $end_time_type = $adv_info[0]["end_time_type"]; ?>	
							<dl class="hierarchy_alone">
								<dd class="mg_r">
									<label>
										<span class="device_icon">
											<input type="radio" name="end_time_type" <?php if(!$end_time_type) echo 'checked="checked"'; ?> value="0">
										</span>
										<span class="device_txt">不限时间</span>
									</label>
								</dd>
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="end_time_type" value="1" <?php if($end_time_type==1) echo 'checked="checked"'; ?>>
										</span>
										<span class="device_txt">截止时间</span>
									</label>
									<input type="text" name="end_time" id="end_time" class="stop_date" value="<?php if($adv_info[0]["end_time"])echo date("Y/m/d",$adv_info[0]["end_time"]);?>" placeholder="<?php echo date("Y/m/d",$endtime);?>" title="选择推广结束日期"  onclick="WdatePicker();"/>
								</dd>
							</dl>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">投放周期:</span>
							</dl>
							<?php $period_type = $adv_info[0]["period_type"]; ?>
							<dl class="hierarchy_alone">
								<dd class="mg_r">
									<label class="cycle_choose_btn">
										<span class="device_icon">
											<input type="radio" name="period_type" checked="checked" value="0" <?php if(!$period_type) echo 'checked="checked"'; ?>>
										</span>
										<span class="device_txt">不限周期</span>
									</label>
									<label class="cycle_choose_btn">
										<span class="device_icon">
											<input type="radio" name="period_type" value="1" <?php if($period_type==1) echo 'checked="checked"'; ?>>
										</span>
										<span class="device_txt">设定周期日程</span>
									</label>
								</dd>
								<!-- <dd>
									
								</dd> -->
							</dl>
							<!-- 周期日程弹框 -->
							<div class="cycle_choose_main" <?php if($period_type==1) echo 'style="display:block;"'; ?>>
								<table class="cycle_date_tab">
									<tbody>
										<tr>
											<td class="checkbox_all"><label><input name="week1" id="week1" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week1"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期一</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week1h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week1"]==1) { if( itemIsExistExplode($adv_info[0]["period_week1"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?>  class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week2" id="week2" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week2"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期二</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week2h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week2"]==1) { if( itemIsExistExplode($adv_info[0]["period_week2"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week3" id="week3" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week3"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期三</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week3h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week3"]==1) { if( itemIsExistExplode($adv_info[0]["period_week3"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week4" id="week4" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week4"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期四</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week4h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week4"]==1) { if( itemIsExistExplode($adv_info[0]["period_week4"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week5" id="week5" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week5"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期五</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week5h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week5"]==1) { if( itemIsExistExplode($adv_info[0]["period_week5"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week6" id="week6" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week6"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期六</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week6h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week6"]==1) { if( itemIsExistExplode($adv_info[0]["period_week6"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										<tr>
											<td class="checkbox_all"><label><input name="week7" id="week7" type="checkbox"  class="checkbox checkbox_all_td"  <?php if($adv_info[0]["week7"]==1||!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> ><span class="checkbox_all_span">星期日</span></label>
											</td>
											<?php
											for($i=0;$i<24;$i++){
											?>		
											<td><label><input name="week7h" type="checkbox" value="<?php echo $i;?>" <?php if($adv_info[0]["week7"]==1) { if( itemIsExistExplode($adv_info[0]["period_week7"],(string)$i)) { echo 'checked="checked"'; } } ?> <?php if(!$adv_info[0]["end_time_type"]) echo 'checked="checked"'; ?> class="checkbox"><span><?php echo $i; ?></span></label></td>
											<?php  } ?>	
										</tr>
										
										
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<dl class="hierarchy_l shape_mg_t">
								<span class="hierarchy_txt">广告形式:</span>
							</dl>
							<dl class="hierarchy_alone">
								<div class="poster_change">
									<ol class="left num_ol">
										<li><span class="shape change_active" data="1">横幅</span></li>
										<li><span class="shape" data="2">插屏</span></li>
										<li><span class="shape" data="3">开屏</span></li>
										<li><span class="shape" data="4" >漂浮</span></li>
										<li><span class="shape" data="5">弹窗</span></li>
									</ol>
									<div class="left change_img_main">
										<img class="poster_img_pre" src="./img/top/poster_img_pre.png">
										<img class="poster_img_next" src="./img/top/poster_img_next.png">
										<ol class="pic_ol">
											<li><img src="./img/top/poster_shape_img1.png" /></li>
											<li><img src="./img/top/poster_shape_img2.png" /></li>
											<li><img src="./img/top/poster_shape_img3.png" /></li>
											<li><img src="./img/top/poster_shape_img4.gif" /></li>
											<li><img src="./img/top/poster_shape_img5.png" /></li>
										</ol>
									</div>
									<ol class="left change_txt_main">
										<li>
											<div class="change_exp_txt exp_active">
												<p>横幅广告</p>
												<p>适合在用户停留较久或者访问频繁的页面，可选3种位置</p>
												<p class="exp_mg_t">展现场景：用户停留较久的页面用户访问比较频繁的页面</p>
												<p>尺 寸： 640x150、640x100、480x75、320x50</p>
												<div class="exp_choose_main">
													<span class="exp_choose_txt">固定横幅：</span>
													<span class="exp_choose_btn">
														<span class="exp_radio_main">
															<label class="exp_active_cl"><img class="exp_radio_img" src="./img/top/radio_bg2.png"><input type="radio" name="expChoose"  <?php if($adv_info[0]["position"]==1||!$adv_info[0]["position"]) {echo 'checked="checked"'; }?> value="1" >顶部</label>
														</span>
														<span class="exp_radio_main">
															<label><img class="exp_radio_img" src="./img/top/radio_bg1.png"><input type="radio" name="expChoose" <?php if($adv_info[0]["position"]==2) {echo 'checked="checked"'; }?> value="2">底部</label>
														</span>
														<span class="exp_radio_main">
															<label><img class="exp_radio_img" src="./img/top/radio_bg1.png"><input type="radio" name="expChoose"  <?php if($adv_info[0]["position"]==3) {echo 'checked="checked"'; }?> value="3">任意</label>
														</span>
													</span>
												</div>
											</div>
										</li>
										<li>
											<div class="change_exp_txt">
												<p>插屏广告</p>
												<p>应用暂停或场景切换时以全屏、半屏的方式弹出</p>
												<p class="exp_mg_t">展现场景：视频前贴、暂停、后贴、游戏暂停、过关、阅读翻页、加载</p>
												<p>尺 寸： 600x500、640x960</p>
											</div>
										</li>
										<li>
											<div class="change_exp_txt">
												<p>开屏广告</p>
												<p>应用开启后全屏展现的广告样式</p>
												<p class="exp_mg_t">展现场景：应用开启时</p>
												<p>尺 寸： 640x960、320x480、640x1136</p>
											</div>
										</li>
										<li>
											<div class="change_exp_txt">
												<p>漂浮广告</p>
												<p>应用暂停或场景切换时以全屏、半屏的方式由上而下飘出，含关闭按钮和关闭时间</p>
												<p class="exp_mg_t">展现场景：视频前贴、暂停、后贴、游戏暂停、过关、阅读翻页、加载</p>
												<p>尺 寸： 600x500、640x960</p>
											</div>
										</li>
										<li>
											<div class="change_exp_txt">
												<p>弹窗广告</p>
												<p>系统弹框形式展示，仅有文字链展示</p>
												<p class="exp_mg_t">展现场景：应用下载，插件下载，网站链接跳转</p>
												<p>尺 寸：系统弹框样式</p>
											</div>
										</li>
									</ol>
									<span class="clear"></span>
								</div>
							</dl>
						</li>
						<li class="poster_alert">
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">取消按钮:</span>
							</dl>
							<dl class="hierarchy_alone">
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" checked="checked" name="showChoose">
										</span>
										<span class="device_txt" name="cancelbtn" value="1" <?php if($adv_info[0]["cancelbtn"]==1||!$adv_info) {echo 'checked="true"'; } ?>>显示</span>
									</label>
								</dd>
								<dd>
									<label>
										<span class="device_icon">
											<input type="radio" name="showChoose">
										</span>
										<span class="device_txt" name="cancelbtn" value="0" <?php if($adv_info&&$adv_info[0]["cancelbtn"]==0) {echo 'checked="true"'; } ?> >隐藏</span>
									</label>
								</dd>
							</dl>
						</li>
						<li class="poster_alert">
							<dl class="hierarchy_l ver_t">
								<span class="stress_icon">*</span>
								<span class="hierarchy_tit">弹框文字:</span>
							</dl>
							<dl class="hierarchy_alone">
								<textarea class="alert_text" id="adv_text" name="alertText" maxlength="512"><?php echo $adv_info[0]["adv_text"]; ?></textarea>
							</dl>
						</li>
						<li class="hierarchy_mg_t cont_hide">
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">素材来源:</span>
							</dl>
							<dl class="hierarchy_alone upload_btn">
								<dd class="matter_mg_r">
									<label>
										<span class="device_icon">
											<input type="radio" name="matterChoose" checked="checked" value="1">
										</span>
										<span class="device_txt">本地上传</span>
									</label>
								</dd>
								<dd class="matter_mg_r">
									<label>
										<span class="device_icon">
											<input type="radio" name="matterChoose" value="2">
										</span>
										<span class="device_txt">远程文件</span>
									</label>
								</dd>
								<dd class="matter_mg_r">
									<label>
										<span class="device_icon">
											<input type="radio" name="matterChoose" value="3">
										</span>
										<span class="device_txt">html代码</span>
									</label>
								</dd>
							</dl>
						</li>
						<li class="cont_hide">
							<div class="cont_tab cont_tab_show" id="cont_tab1">
								<dl class="hierarchy_l shape_mg_t">
									<span class="stress_icon">*</span>
									<span class="hierarchy_tit">上传素材:</span>
								</dl>
								<input type="hidden" name="timestamp" value="<?php echo $timestamp;?>"/>
								<input type="hidden" name="token" value="<?php echo $token;?>"/>

								<dl class="hierarchy_upload_r">
									<?php
									
									for($im=1;$im<=10;$im++){
											$this_material = "";
											
											if($adv_info[0]["material_type"]==1){

												$this_material = $upload_material[$im-1];
												if($im>1)$pre_material = $upload_material[$im-2];
											}
									?>
									<div class="upload_wrap_show <?php if($im==1 || strlen($pre_material)>0) {echo 'upload_show';} ?>">
										<div class="upload_img_main" data="<?php echo $im;?>" id="upload_img<?php echo $im;?>"></div>
										<img class="show_img <?php if($this_material)echo 'show_active';?>" id="show_img<?php echo $im;?>" src="<?php echo $this_material;?>"  style="<?php if($this_material)echo "z-index:20";?>" />
										<input type="hidden" name="material_<?php echo $im;?>" class="data_src" id="material_<?php echo $im;?>" value="<?php echo $this_material;?>"/>
									</div>

									<?php } ?>
									<span class="upload_exp_main">
										<!-- <img class="upload_txt_btn" src="./img/top/upload_txt_btn.jpg"> -->
										<span class="upload_exp_txt">请根据您选择的尺寸提交相应的素材，文件大小< 4M,最多支持十张图</span>
									</span>
								</dl>
							</div>

							<div class="cont_tab" id="cont_tab2">
								<?php
								$pre_net_material="";
								$this_net_material ="";
									for($im=1;$im<=10;$im++){
										if($adv_info[0]["material_type"]==2){
											$this_net_material = $net_material[$im-1];
											if($im>1)$pre_net_material = $net_material[$im-2];
											
										}									
								?>
								<div class="long_input <?php if($im==1 || strlen($pre_net_material)>0) {echo 'long_input_show';} ?>" id="long_input<?php echo $im;?>">
									<dl class="hierarchy_l shape_mg_t">
										<span class="stress_icon">*</span>
										<span class="hierarchy_tit">素材链接URL：</span>
									</dl>
									<dl class="hierarchy_alone">
										<input type="text" name="netmaterial_<?php echo $im;?>" id="netmaterial_<?php echo $im;?>" class="input_txt" maxlength="128" placeholder="如：http://www.4jj.com/img/test.png" value="<?php echo $this_net_material;?>">
										<p class="input_exp">请根据您选择的尺寸提交相应的素材</p>
									</dl>
								</div>
								<?php } ?>
								<span class="add_matter_btn">新增素材</span>
							</div>
							<div class="cont_tab" id="cont_tab3">
								<dl class="hierarchy_l shape_mg_t">
									<span class="stress_icon">*</span>
									<span class="hierarchy_tit">HTML广告代码:</span>
									<div class="hierarchy_text">@注：如填写，则优先调用此代码作为广告样式，代码中不能使用单引号(')。:</div>
								</dl>
								<dl class="hierarchy_upload_r">
									<textarea name="htmlcode" id="htmlcode" maxlength="4096"><?php echo stripslashes($adv_info[0]["htmlcode"]); ?></textarea>
								</dl>
							</div>
						</li>
						<li>
							<dl class="hierarchy_l">
								<span class="hierarchy_txt">广告计费:</span>
							</dl>
							<dl class="hierarchy_alone">
								<span class="poster_biling_btn <?php if($adv_info[0]["pay_type"]==1||!$adv_info[0]["pay_type"]){ echo 'billing_btn_active'; } ?>"   data="1">CPM</span>
								<span class="poster_biling_btn <?php if($adv_info[0]["pay_type"]==2){ echo 'billing_btn_active'; } ?>"   data="2">CPC</span>
							</dl>
						</li>
						<li>
							<div class="consult_main">
								<input class="consult_input" type="text" id="pay_fee" name="pay_fee" value="<?php  echo $adv_info[0]["pay_fee"];  ?>">
								<img class="consult_img" src="./img/top/consult.jpg">
								<p class="consult_exp_txt">按每千次展示量收费 如：1元=1000次展示</p>
							</div>	
						</li>
						<li>
							<div class="consult_main">
								<span class="submit_input">发布广告</span>
							</div>	
						</li>
					</ul>
				</form>
			</div>
			<!-- 新建推广弹层 -->
			<div class="release2_layer_main">
				<form if="releaseForm2" name="releaseForm2">
					<div class="release2_layer_bd">
						<div class="release2_head">
							新建推广计划
							<span class="close_release2_btn">×</span>
						</div>
						<ul class="release2_cont">
							<li>
								<span class="release2_name">计划名称：</span>
								<input class="release2_input1" type="text">
							</li>
							<li>
								<span class="release2_name">每日限额：</span>
								<input class="release2_input2" type="text">
							</li>
							<li>
								<span class="release2_name ver_m">备注：</span>
								<textarea rows="2"></textarea>
							</li>
						</ul>
						<span class="release2_submit" id="submitForm2">确定</span>
					</div>
				</form>
			</div>
			<!-- 遮罩层 -->
			<div class="release_layer2_shade"></div>
		</div>
<!--底部-->
<script type="text/javascript" src="./js/jquery.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/layer-v2.0/layer.js"></script>
<script type="text/javascript" src="./js/js_date/WdatePicker.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/uploadify/jquery.uploadify.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/upload.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>

<script type="text/javascript">
//初始化页面显示
<?php if($adv_info){ ?>
	<?php if($adv_info[0]["ad_type"]>0){ ?>
		var num=<?php echo $adv_info[0]["ad_type"]; ?>;
		if(num>0){
			num=parseInt(num)-1;
			$('.num_ol li').eq(num).click();
		}
		

	<?php } ?>
	<?php if($adv_info[0]["ad_type"]>0&&$adv_info[0]["ad_type"]!=5){ ?>
		var num=<?php echo $adv_info[0]["material_type"]; ?>;
		if(num>0){
			num=parseInt(num)-1;
			$('.upload_btn .matter_mg_r').find('input').removeAttr("checked");
			$('.upload_btn .matter_mg_r').eq(num).click();
			$('.upload_btn .matter_mg_r').eq(num).find('input').prop("checked","checked");
		}
	<?php } ?>
<?php }else{ ?>
	posterImg();
<?php } ?>
</script>
<script type="text/javascript">
$('.submit_input').click(function(){
	
	var plan_id   = document.getElementById("plan_select").value;
	var tg_plan_id   = document.getElementById("tg_plan_select").value;
	var name 	  = document.getElementById("name").value;
	var note 	  = "";
	var link_url  = document.getElementById("link_url").value;
	var ad_type   = "1";
	$('.shape').each(function(){ 
		if($(this).hasClass('change_active')){
			ad_type=$(this).attr('data');
			
		}		
	});
	var ad_size   =0;
	var adv_text  = document.getElementById("adv_text").value;
	
	//广告类型
	var type = 0;
	$('.poster_type_btn').each(function(){ 
		if($(this).hasClass('type_btn_active')){
			type=$(this).attr('data');
			
		}		
	});
	
	//广告固定位置
	var position = 0;
	var positionObj = document.getElementsByName("expChoose");
	for(i=0;i<positionObj.length;i++){
		if(positionObj[i].checked){
			position = positionObj[i].value;
			break;
		}
	}
	
	//计费方式
	var pay_type = 1;
	$('.poster_biling_btn').each(function(){ 
		if($(this).hasClass('billing_btn_active')){
			pay_type=$(this).attr('data');
			
		}		
	});
	var pay_fee=$('#pay_fee').val();
	//投放设备
	var platform = 0;
	var platObj = document.getElementsByName("platform");
	for(i=0;i<platObj.length;i++){
		if(platObj[i].checked){
			platform = platObj[i].value;
			break;
		}
	}
	if(pay_fee.length==0){
		var index = layer.alert('请输入计费金额！', {
			title: '提示',
			skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
		},function(){
			 document.getElementById("pay_fee").focus();
			 layer.close(index);
		});
		return;
	}	
	//结束时间
	var end_time_type = 0;
	var etObj = document.getElementsByName("end_time_type");
	for(i=0;i<etObj.length;i++){
		if(etObj[i].checked){
			end_time_type = etObj[i].value;
			break;
		}
	}	
	
	var end_time 	 = document.getElementById("end_time").value;
	//周期日程类型
	var period_type = 0;
	var ptObj = document.getElementsByName("period_type");
	for(i=0;i<ptObj.length;i++){
		if(ptObj[i].checked){
			period_type = ptObj[i].value;
			break;
		}
	}
		
	//星期一
	var week1 = 0;
	if(document.getElementById("week1").checked){
		week1=1;	
	}
	
	//星期一时间选择
	var week1h_str = "";
	var week1hObj = document.getElementsByName("week1h");
	for(i=0;i<week1hObj.length;i++){
		if(week1hObj[i].checked){
			week1h_str += week1hObj[i].value +',';
		}
	}
	
	//星期二
	var week2 = 0;
	if(document.getElementById("week2").checked){
		week2=1;	
	}
	
	//星期二时间选择
	var week2h_str = "";
	var week2hObj = document.getElementsByName("week2h");
	for(i=0;i<week2hObj.length;i++){
		if(week2hObj[i].checked){
			week2h_str += week2hObj[i].value +',';
		}
	}
	
	//星期三
	var week3 = 0;
	if(document.getElementById("week3").checked){
		week3=1;	
	}
	
	//星期三时间选择
	var week3h_str = "";
	var week3hObj = document.getElementsByName("week3h");
	for(i=0;i<week3hObj.length;i++){
		if(week3hObj[i].checked){
			week3h_str += week3hObj[i].value +',';
		}
	}
	
	//星期四
	var week4 = 0;
	if(document.getElementById("week4").checked){
		week4=1;	
	}
	
	//星期四时间选择
	var week4h_str = "";
	var week4hObj = document.getElementsByName("week4h");
	for(i=0;i<week4hObj.length;i++){
		if(week4hObj[i].checked){
			week4h_str += week4hObj[i].value +',';
		}
	}
	
	//星期五
	var week5 = 0;
	if(document.getElementById("week5").checked){
		week5=1;	
	}
	
	//星期五时间选择
	var week5h_str = "";
	var week5hObj = document.getElementsByName("week5h");
	for(i=0;i<week5hObj.length;i++){
		if(week5hObj[i].checked){
			week5h_str += week5hObj[i].value +',';
		}
	}
	
	//星期六
	var week6 = 0;
	if(document.getElementById("week6").checked){
		week6=1;	
	}
	
	//星期六时间选择
	var week6h_str = "";
	var week6hObj = document.getElementsByName("week6h");
	for(i=0;i<week6hObj.length;i++){
		if(week6hObj[i].checked){
			week6h_str += week6hObj[i].value +',';
		}
	}
	
	//星期日
	var week7 = 0;
	if(document.getElementById("week7").checked){
		week7=1;	
	}
	
	//星期六时间选择
	var week7h_str = "";
	var week7hObj = document.getElementsByName("week7h");
	for(i=0;i<week7hObj.length;i++){
		if(week7hObj[i].checked){
			week7h_str += week7hObj[i].value +',';
		}
	}
	//取消按钮
	var cancelbtn = 0;
	var cbtnObj = document.getElementsByName("cancelbtn");
	for(i=0;i<cbtnObj.length;i++){
		if(cbtnObj[i].checked){
			cancelbtn = cbtnObj[i].value;
			break;
		}
	}
	
	if(plan_id.length==0){
		layer.confirm('请先创建一个定向计划再发布广告！', {
			title: '提示',
			 btn: ['新建广告计划', '取消'],
			skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
		},function(){
			layer.closeAll();
		});
		return;
	}
	if(tg_plan_id.length==0){
		layer.confirm('请先创建一个推广计划再发布广告！', {
			title: '提示',
			 btn: ['新建广告计划', '取消'],
			skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
		},function(){
			layer.closeAll();
		});
		return;
	}
	
	if(name.length==0){
		var index = layer.alert('请输入广告名称！', {
			title: '提示',
			skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
		},function(){
			 document.getElementById("name").focus();
			 layer.close(index);
		});
		return;
	}	
	
	if(ad_type==5){
		if(adv_text.length<=0){
			var index = layer.alert('请输入弹窗文字！', {
				title: '提示',
				skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
			},function(){
				 document.getElementById("adv_text").focus();
				 layer.close(index);
			});
			return;			
		}
	}
	
	//素材来源
	var material_type = 0;
	var mtObj = document.getElementsByName("matterChoose");
	for(i=0;i<mtObj.length;i++){
		if(mtObj[i].checked){
			material_type = mtObj[i].value;
			break;
		}
	}
	
	if(ad_type!=5){
		if(material_type !=3 && link_url.length==0){
			var index = layer.alert('请输入广告链接URL！', {
				title: '提示',
				skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
			},function(){
				 document.getElementById("link_url").focus();
				 layer.close(index);
			});
			return;
		}
		
		//素材来源
		if(material_type==1){ //上传
			var material_1   = document.getElementById("material_1").value;
			var material_2   = document.getElementById("material_2").value;
			var material_3   = document.getElementById("material_3").value;
			var material_4   = document.getElementById("material_4").value;
			var material_5   = document.getElementById("material_5").value;
			var material_6   = document.getElementById("material_6").value;
			var material_7   = document.getElementById("material_7").value;
			var material_8   = document.getElementById("material_8").value;
			var material_9   = document.getElementById("material_9").value;
			var material_10   = document.getElementById("material_10").value;
			
			if(material_1.length==0&&material_2.length==0&&material_3.length==0&&material_4.length==0&&material_5.length==0&&material_6.length==0&&material_7.length==0&&material_8.length==0&&material_9.length==0&&material_10.length==0){
				var index = layer.alert('请上传广告素材，如果只有一个素材，优先上传素材一', {
					title: '提示',
					skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
				},function(){
					 document.getElementById("material_1").focus();
					 layer.close(index);
				});
				return;
			}			
		}else if(material_type==2){ //远程链接
			var netmaterial_1 = document.getElementById("netmaterial_1").value;
			var netmaterial_2 = document.getElementById("netmaterial_2").value;
			var netmaterial_3 = document.getElementById("netmaterial_3").value;
			var netmaterial_4 = document.getElementById("netmaterial_4").value;
			var netmaterial_5 = document.getElementById("netmaterial_5").value;
			var netmaterial_6 = document.getElementById("netmaterial_6").value;
			var netmaterial_7 = document.getElementById("netmaterial_7").value;
			var netmaterial_8 = document.getElementById("netmaterial_8").value;
			var netmaterial_9 = document.getElementById("netmaterial_9").value;
			var netmaterial_10 = document.getElementById("netmaterial_10").value;
			
			if(netmaterial_1.length==0&&netmaterial_2.length==0&&netmaterial_3.length==0&&netmaterial_4.length==0&&netmaterial_5.length==0&&netmaterial_6.length==0&&netmaterial_7.length==0&&netmaterial_8.length==0&&netmaterial_9.length==0&&netmaterial_10.length==0){
				var index = layer.alert('请输入广告素材链接URL，优先填写素材链接一。', {
					title: '提示',
					skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
				},function(){
					 document.getElementById("netmaterial_1").focus();
					 layer.close(index);
				});
				return;
			}		
		}else if(material_type==3){ //HTML
			var htmlcode = document.getElementById("htmlcode").value;
			if(htmlcode.length==0){
				var index = layer.alert('请输入HTML广告代码。', {
					title: '提示',
					skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
				},function(){
					 document.getElementById("htmlcode").focus();
					 layer.close(index);
				});
				return;
			}	
		}else{
			layer.alert("不支持的素材来源。", {
				title: '提示',
				skin: 'yourclass'
			});
			return;	
		}
	}else{
		if(link_url.length==0){
			var index = layer.alert('请输入广告链接URL！', {
				title: '提示',
				skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
			},function(){
				 document.getElementById("link_url").focus();
				 layer.close(index);
			});
			return;
		}		
	}
	
	layer.confirm('您确定要发布此广告吗？', {
		title: '提示',
		skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
	},function(){
		var sData = "plan_id=" + plan_id +"&budget_id=" + tg_plan_id + "&name=" + UrlEncode(name) + "&type=" + type + "&note=" + UrlEncode(note) + "&link_url=" + UrlEncode(link_url) +  "&cancelbtn=" + cancelbtn +
				    "&ad_type=" + ad_type + "&position=" + position + "&ad_size=" +UrlEncode(ad_size) + "&material_type=" + material_type + "&adv_text=" + UrlEncode(adv_text)+"&period_type=" + period_type + "&week1=" + week1 + "&week1h_str=" + UrlEncode(week1h_str) +  "&week2=" + week2 + "&week2h_str=" + UrlEncode(week2h_str) +
					"&week3=" + week3 + "&week3h_str=" + UrlEncode(week3h_str) + "&week4=" + week4 + "&week4h_str=" + UrlEncode(week4h_str) + "&week5=" + week5 + "&week5h_str=" + UrlEncode(week5h_str) +
					"&week6=" + week6 + "&week6h_str=" + UrlEncode(week6h_str) + "&week7=" + week7 + "&week7h_str=" + UrlEncode(week7h_str)+ "&end_time_type="+ end_time_type + "&end_time=" + UrlEncode(end_time)+ "&platform=" + platform+ "&pay_fee=" + pay_fee+ "&pay_type=" + pay_type;
		var mData="";
		
		if(ad_type!=5){	
			if(material_type==1){
				mData = "&material_1=" + UrlEncode(material_1) + "&material_2=" + UrlEncode(material_2)+"&material_3=" + UrlEncode(material_3) + "&material_4=" + UrlEncode(material_4)+ 
						"&material_5=" + UrlEncode(material_5) + "&material_6=" + UrlEncode(material_6)+"&material_7=" + UrlEncode(material_7) + "&material_8=" + UrlEncode(material_8)+
						"&material_9=" + UrlEncode(material_9) + "&material_10=" + UrlEncode(material_10);
			}else if(material_type==2){
				mData = "&netmaterial_1=" + UrlEncode(netmaterial_1) + "&netmaterial_2=" + UrlEncode(netmaterial_2)+"&netmaterial_3=" + UrlEncode(netmaterial_3) + "&netmaterial_4=" + UrlEncode(netmaterial_4)+
						"&netmaterial_5=" + UrlEncode(netmaterial_5) + "&netmaterial_6=" + UrlEncode(netmaterial_6)+"&netmaterial_7=" + UrlEncode(netmaterial_7) + "&netmaterial_8=" + UrlEncode(netmaterial_8)+
						"&netmaterial_9=" + UrlEncode(netmaterial_9) + "&netmaterial_10=" + UrlEncode(netmaterial_10);
			}else if(material_type==3){
				mData = "&htmlcode=" + UrlEncode(htmlcode);
			}
		}
		
		sData += mData;
		var id=$('.adv_id').val();
		var url="/adowner/ajax.php?mod=adv&act=create";
		if(id){
			sData+="&id=" + id;
			url="/adowner/ajax.php?mod=adv&act=modify";
		}
		$.ajax({   
			url:url,
			type:'post',
			data:sData,
			async : true, //默认为true 异步   
			error:function(){   
			   alert('error');   
			},
			success:function(data){
				var json = eval("("+data+")");
				if(json["Return"]=="True"){
					layer.closeAll();
					var strTips = json["Tips"];
					layer.alert(strTips, {
						title: '提示',
						skin: 'yourclass', //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
					},
					function(){
						 layer.closeAll();
						// var docObj = window.parent.document;
						// var newDiv = docObj.getElementById("fbggdiv");
						// var mhcDiv = docObj.getElementById("mhcfbgg");
						// $(mhcDiv).hide();
						// if(newDiv!=undefined){
						// 	$(newDiv).animate({width:"0%"},700,"",function(){$(newDiv).hide();});			
						// }
						//parent.window.location.href="adlist3.php";
					});
				}else{
					var strErr = json["ErrMsg"];
					layer.alert(strErr, {
						title: '提示',			
						skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
					});
				}
			}
		});
	},function(){
		
	});		
})
</script>