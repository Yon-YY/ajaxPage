<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="./css/public.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/index.css?version=<?echo $version; ?>"/>
		<link rel="stylesheet" type="text/css" href="./css/head_poster.css?version=<?echo $version; ?>"/>
	</head>
	<body>
		<!-- 发布广告弹层 -->
		<div class="head_poster_main">
			<span class="close_direct_btn">×</span>
			<div class="release3_head_tit">定向计划</div>
			<div class="cont_mian">
				<form name="releaseForm3">
					<ul class="release3_cont">
						<li>
							<span class="release3_name">定向名称：</span>
							<input class="release3_input1" type="text" value="<?php echo $list['name']; if($copy_id)echo "_副本";?> ">
							<span class="release3__input1_exp">该名称仅方便您在我们的广告系统中识别！</span>
							<input type="hidden" class="plan_id" value="<?php echo $id; ?>"/>
						</li>
						<li>
							<ol class="custom_ol">
								<li class="media_name_txt">
									<span class="release3_name">投放媒体类型：</span>
								</li>
								<li>
									<span class="media_btn1 media_choose_btn1 media_active" data="0">不限</span>
									<span class="media_btn1 media_choose_btn1" data="1">自定义</span>
									<div class="classify_main">
										<span class="classify_btn media_active" data="1">软件分类</span>
										<span class="classify_btn" data="2">游戏分类</span>
										<span class="classify_btn" data="3">网站分类</span>
										<table class="classify_tab" id="classify_tab1">
											<tbody>
											<?php $i=1;foreach($soft_type as $k=>$v){
											?>
												<?php if($i%8==1){ 
												?>	
												<tr>
												<?php }
												?>
													<td>
														<label>
															<input type="checkbox" name="classifyRow1" 
															value="<?php echo $k; ?>" class="classify_input class_str1"   <?php if( itemIsExistExplode($list['web_class'],$k) && $list['web_class_type']==1) { echo 'checked="checked"';}?> >
															<span class="classify_txt"><?php echo $v; ?></span>
														</label>
													</td>
												<?php if($i%8==0||$i==count($soft_type)){ 
												?>	
												</tr>
												<?php }
												?>
												<?php $i++;}
												?>
											</tbody>
										</table>
										<table class="classify_tab" id="classify_tab2">
											<tbody>
												<?php $i=1;foreach($game_type as $k=>$v){
												?>
												<?php if($i%6==1){ 
												?>	
												<tr>
												<?php }
												?>
													<td>
														<label>
															<input type="checkbox" name="classifyRow1"  value="<?php echo $k; ?>" class="classify_input class_str2" <?php if( itemIsExistExplode($list['web_class'],$k) && $list['web_class_type']==2) { echo 'checked="checked"';}?> >
															<span class="classify_txt"><?php echo $v; ?></span>
														</label>
													</td>
												<?php if($i%6==0||$i==count($soft_type)){ 
												?>	
												</tr>
												<?php }
												?>
												<?php $i++;}
												?>
											</tbody>
										</table>
										<table class="classify_tab" id="classify_tab3">
											<tbody>
												<?php $i=1;foreach($web_type as $k=>$v){
												?>
												<?php if($i%6==1){ 
												?>	
												<tr>
												<?php }
												?>
													<td>
														<label>
															<input type="checkbox" name="classifyRow1"   value="<?php echo $k; ?>" class="classify_input class_str3" <?php if( itemIsExistExplode($list['web_class'],$k) && $list['web_class_type']==3) { echo 'checked="checked"';}?> >
															<span class="classify_txt"><?php echo $v; ?></span>
														</label>
													</td>
													<?php if($i%6==0||$i==count($soft_type)){ 
													?>	
													</tr>
													<?php }
													?>
													<?php $i++;}
													?>
												
											</tbody>
										</table>
									</div>
								</li>
							</ol>
						</li>
						<li>
							<span class="release3_name">投放人群：</span>
							<span class="media_choose_btn2 media_active" data="0">不限</span>
							<span class="media_choose_btn2" data="1">自定义</span>
							<div class="media_age">
								<input type="text" placeholder="0" class="media_input_age age1" value="<?php echo $age['0']; ?>">
								<span class="media_age_txt">岁 —</span>
								<input type="text" placeholder="99" class="media_input_age age2" value="<?php echo $age['1']; ?>">
								<span class="media_age_txt">岁</span>
							</div>
						</li>
						<li>
							<span class="release3_name">性别：</span>
							<span class="media_choose_btn3 media_active" data="0">不限</span>
							<span class="media_choose_btn3" data="1">男</span>
							<span class="media_choose_btn3" data="2">女</span>
						</li>
						<li>
							<span class="release3_name">投放地域：</span>
							<span class="media_choose_btn4 media_active" data="0">不限</span>
							<span class="media_choose_btn4" data="1">自定义</span>
							<div class="media_area">
								<div class="media_area_l">
									<ul class="area_choose">
										<?php foreach($area_info as $k=>$v){
										?>
											<li>
											<input type="checkbox" name="area_prov" class="area_prov" value="<?php echo $v['code']; ?>" <?php if( itemIsExistExplode($list['area_prov'],$v["code"])) { echo 'checked="checked"';} ?> /><span class="pro_name"><?php echo $v['name']; ?></span>
											</li>

											
										<?php } ?>	
										
										
									</ul>
								</div>
								
								<?php foreach($area_info as $k2=>$v2){
								?>
								<div class="media_area_r "  <?php if($k2>0) echo ' style="display:none;"'; ?> >
									<?php foreach($v2['sun'] as $k1=>$v1){
									?>
									<label class="city_choose"><input type="checkbox" name="area_city" class="area_city" value="<?php echo $v1['code']; ?>" <?php if( itemIsExistExplode($list['area_city'],$v1["code"])) { echo 'checked="checked"';} ?> /><?php echo $v1['name']; ?></label>
									
									<?php } ?>
								</div>
								<?php } ?>	

							</div>
						</li>
						<li>
							<span class="release3_name">消费能力：</span>
							<select class="consume_choose">
							<?php foreach($spend as $k=>$v){
							?>
								<option value="<?php echo $k;?>" <? if($list['spend']==$k) echo 'selected="true"'; ?> ><?php echo $v;?></option>
							<?php }
							?>
							</select>
						</li>
						<li>
							<span class="release3_name">上网场景：</span>
							<span class="internet_checkbox">
								<label>
									<input type="checkbox" name="internet" value="1" class="internet" id="internet1" <?php if( itemIsExistExplode($list['network'],1) ||!$list) { echo 'checked="checked"';} ?>>
									<span class="internet_txt">移动网络</span>
								</label>
								<label>
									<input type="checkbox" name="internet" value="2" class="internet" id="internet2" <?php if( itemIsExistExplode($list['network'],2) ||!$list) { echo 'checked="checked"';} ?>>
									<span class="internet_txt">WIFI</span>
								</label>
							</span>
						</li>
						<li>
							<div class="demo" class="col-md-12">
								<div class="plus-tag tagbtn clearfix" id="myTags">
								<?php foreach($list['user_keyword'] as $k=>$v){
								?>
								<a value="<?php echo $k; ?>" title="<?php echo $v; ?>" href="javascript:void(0);"><span><?php echo $v; ?></span><em onclick="aEmClick(this)"></em></a>
								<?php }
								?>
								</div>
								<div class="plus-tag-add">
									<ul class="Form FancyForm">
										<li>
											<span class="release3_name">个性化：</span>
											<input id="" name="" type="text" class="bardian stext" maxlength="20" placeholder="输入新标签"/>
										</li>
										<li>
											<span class="add_bardian Button RedButton Button18">添加标签</span>
											<a class="bardian_label_txt" href="javascript:void(0);">展开推荐标签</a>
										</li>
									</ul>
								</div>
								<div class="bardian_label_list" id="mycard-plus">
									<div class="default-tag tagbtn">
										<div class="clearfix">
											<?php $i=1;foreach($keyword as $k=>$v){
											?>
											<a value="<?php echo $k; ?>" title="<?php echo $v; ?>" href="javascript:void(0);" <?php if( itemIsExistExplode($list['keyword'],$k)) { echo 'class="selected"';} ?>><span><?php echo $v; ?></span><em></em></a>
											<?php if($i%5==0)echo '<br/>';$i++;} ?>              
										</div>
									</div>
								</div>
									
							</div>
						</li>
					</ul>
					<span class="release2_submit" id="release3_save">保存</span>
				</form>
			</div>
		</div>
<!--底部-->
<script type="text/javascript" src="./js/jquery.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/label.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/public.js?version=<?echo $version; ?>"></script>
<script type="text/javascript" src="./js/js_date/WdatePicker.js?version=<?echo $version; ?>"></script>
<script type="text/javascript">
//初始化页面显示
<?php if($list){ ?>
	<?php if($list['web_class_type']>0){ ?>
		$('.media_btn1').eq(1).click();
		var web_type1=<?php echo $list['web_class_type'] ?>;
		if(web_type1){
			web_type1=parseInt(web_type1)-1;
			$('.classify_btn').eq(web_type1).click();
		}
	<?php } ?>

	<?php if(strlen($list['age'])>1){ ?>
		$('.media_choose_btn2').eq(1).click();
	<?php } ?>
	<?php if($list['area_type']==1){  ?>
		var obj=$('input[name="area_prov"]:checked').eq(0);
		var a=obj.parent().index();
		$('.media_area_r').hide().eq(a).show();
	<?php } ?>

	var sex1=<?php echo $list['sex'] ?>;
	$('.media_choose_btn3').eq(sex1).click();

	var area_type1=<?php echo $list['area_type'] ?>;
	$('.media_choose_btn4').eq(area_type1).click();
	
<?php } ?>
</script>
<script type="text/javascript">
//城市切换
$(".area_prov").click(function(){
	var a=$(this).parent().index();
	$('.media_area_r').hide().eq(a).show();
	
	if(this.checked){
		$('.media_area_r').eq(a).children().children("input").prop("checked","checked");
	}else{
		$('.media_area_r').eq(a).children().children("input").removeAttr("checked");
	}
	
})
$(".pro_name").click(function(){
	var a=$(this).parent().index();
	$('.media_area_r').hide().eq(a).show();
	})
//添加计划
$("#release3_save").click(function(){
	var plan_name=$('.release3_input1').val();
	if(plan_name.length<=0 || name.length>64){
		alert('名称20字以内');
		return false;
	}
	var web_class=0;
	$('.media_btn1').each(function(){ 
		if($(this).hasClass('media_active')){
			var data=$(this).attr('data');
			
			web_class=data;
				
		}
			
	});
	if(web_class==1){
		$('.classify_btn').each(function(){
					if($(this).hasClass('media_active')){
						web_class=$(this).attr('data');	
					}
		})
	}
	var class_str="";
	if(web_class==1){
		$('.class_str1:checked').each(function(){ 
			if(class_str){
				class_str=class_str+","+$(this).val(); 
			}else{
				class_str=$(this).val(); 
			}
			
		});
	}
	if(web_class==2){
		$('.class_str2:checked').each(function(){ 
			if(class_str){
				class_str=class_str+","+$(this).val(); 
			}else{
				class_str=$(this).val(); 
			}
		});
	}
	if(web_class==3){
	$('.class_str3:checked').each(function(){ 
			if(class_str){
				class_str=class_str+","+$(this).val(); 
			}else{
				class_str=$(this).val(); 
			} 
		});
	}
	if(web_class>0&&!class_str){
		alert('请选择媒体类型');
		return false;
	}
	var age="0";
	
	$('.media_choose_btn2').each(function(){ 
		if($(this).hasClass('media_active')){
			age=$(this).attr('data');
			
			if(age>0){
				var age1=$('.age1').val();
				var age2=$('.age2').val();
				if(isNaN(age2)||!age1){
					alert('填写正确的年龄');
					return false;
				}
				if(isNaN(age1) || age1>age2||!age1){
					alert('填写正确的年龄');
					return false;
				}
				age=age1+"-"+age2;
				
			}
		}
			
	});

	var sex=0;
	$('.media_choose_btn3').each(function(){ 
		if($(this).hasClass('media_active')){
			sex=$(this).attr('data');
		}		
	});
	
	var spend=$('.consume_choose').val();
	var area_type=0;
	$('.media_choose_btn4').each(function(){ 
		if($(this).hasClass('media_active')){
			area_type=$(this).attr('data');
		}		
	});
	var id=$('.plan_id').val();
	
	
	
	var city="0";
	var area_prov="0";
	var keyword="";
	var network="0";
	if(area_type==1){
		
		$('input[name="area_city"]:checked').each(function(){ 

			city=city+","+$(this).val(); 
		});
		$('input[name="area_prov"]:checked').each(function(){ 

			area_prov=area_prov+","+$(this).val(); 
		}); 
	}
	alert(area_prov);
	$('.nowtips a.selected').each(function(){ 
		if(!keyword){keyword=$(this).attr('value');
		}
		else{
			keyword=keyword+","+$(this).attr('value'); 
		}

			
	});
	$('.internet:checked').each(function(){ 
			network=network+","+$(this).val(); 
	});

	var user_keyword="";
	$('#myTags a').each(function(){ 
			if(!user_keyword){
				user_keyword=$(this).attr('title'); 
			}else{
				user_keyword=user_keyword+","+$(this).attr('title');
			}		 
	});

	
	var url='/adowner/ajax.php?mod=plan&act=create';
	var mes='name='+plan_name+"&area_type="+area_type+"&area_city="+city+"&area_prov="+area_prov+"&sex="+sex+"&age="+age+"&spend="+spend+"&network="+network+"&keyword="+keyword+"&class_str="+class_str+"&web_class="+web_class+"&web_class="+web_class+"&user_keyword="+user_keyword;
	if(id>0){
		url='/adowner/ajax.php?mod=plan&act=modify';
		mes='name='+plan_name+"&area_type="+area_type+"&area_city="+city+"&area_prov="+area_prov+"&sex="+sex+"&age="+age+"&spend="+spend+"&network="+network+"&keyword="+keyword+"&class_str="+class_str+"&web_class="+web_class+"&id="+id+"&user_keyword="+user_keyword;
	}
	$.ajax({		
		url: url,
		type:'post',
		data:mes,
		async : true, //默认为true 异步  
		error: function(){
				alert('服务器忙，请稍候再试！');　
		},
		success: function(data){	
			var json = eval("("+data+")");
			if(json["Return"]=="True")			                                       
			{
					alert('成功');	
					//window.parent.addPlanSuccess(json["insert_id"],plan_name); 
			}else{
				alert(json["ErrMsg"]);
			}
		}
	});
})
</script>