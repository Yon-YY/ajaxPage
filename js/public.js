function UrlEncode(str){ 
	return encodeURIComponent(str);
}
function UrlDecode(str){
	return decodeURIComponent(str);
} 
// 调用页面
$(function(){  
    $.get("./default.php",function(data){  
        $("#midland").html(data);//初始化加载界面  
    });  
    $('.left_menu a').click(function(){//点击li加载界面  
        var current = $(this),  
        target = current.attr('target'); // 找到链接a中的targer的值  
        $.get(target,function(data){  
            $("#midland").html(data);   
        });  
    });  
});  


//移入移除效果
$(".header_li7_img1").mouseover(function(){
	$(".header_li7_img1").hide();
	$(".header_li7_img2").css('display','inline-block');
	$(".header_li7_img3").show();
})
$(".header_li7_img2").mouseout(function(){
	if($(".header_li7_img4").css('display')=="none"){
		$(".header_li7_img1").show();
		$(".header_li7_img2").hide();
		$(".header_li7_img3").hide();
	}
})
$(".header_li8_img1").mouseover(function(){
	$(".header_li8_img1").hide();
	$(".header_li8_img2").css('display','inline-block');
	$(".header_li8_img3").show();
})
$(".header_li8_img2").mouseout(function(){
	if($(".header_li8_img4").css('display')=="none"){
		$(".header_li8_img1").show();
		$(".header_li8_img2").hide();
		$(".header_li8_img3").hide();
	}
})
$(".header_li9_img1").mouseover(function(){
	$(".header_li9_img1").hide();
	$(".header_li9_img2").css('display','inline-block');
	$(".header_li9_img3").show();
})
$(".header_li9_img2").mouseout(function(){
	if($(".header_li9_img4").css('display')=="none"){
		$(".header_li9_img1").show();
		$(".header_li9_img2").hide();
		$(".header_li9_img3").hide();
	}
})
//点击三个咨询按钮
$(".header_li7").click(function(){
	$(".header_li7_img1,.header_li7_img2,.header_li7_img3,.header_li8_img2,.header_li8_img3,.header_li8_img4,.header_li9_img2,.header_li9_img3,.header_li9_img4").hide();
	$(".header_li7_img4,.header_li8_img1,.header_li9_img1,.relation").show();
})
$(".header_li8").click(function(){
	$(".header_li7_img1,.header_li8_img4,.header_li9_img1").show();
	$(".header_li7_img2,.header_li7_img3,.header_li7_img4,.header_li8_img1,.header_li8_img2,.header_li8_img3,.header_li9_img2,.header_li9_img3,.header_li9_img4").hide();
})
$(".header_li9").click(function(){
	$(".header_li7_img1,.header_li8_img1,.header_li9_img4,.problem").show();
	$(".header_li7_img2,.header_li7_img3,.header_li7_img4,.header_li8_img2,.header_li8_img3,.header_li8_img4,.header_li9_img1,.header_li9_img2,.header_li9_img3").hide();
})
//点击空白处弹窗隐藏
$("body").bind("click",function(evt){ 
	if($(evt.target).parent(".header_li7").length==0&& !$(evt.target).hasClass('header_li7')) 
	{
		$('.relation').hide(); 
		$(".header_li7_img1").show();
		$(".header_li7_img2,.header_li7_img3,.header_li7_img4").hide();
	};
	if($(evt.target).parent(".header_li8").length==0&& !$(evt.target).hasClass('header_li8')) 
	{
		$(".header_li8_img1").show();
		$(".header_li8_img2,.header_li8_img3,.header_li8_img4").hide();
	};
	if($(evt.target).parent(".header_li9").length==0 && !$(evt.target).hasClass('header_li9') && !$(evt.target).hasClass('problem_p2')&& !$(evt.target).hasClass('suggest_div2_ipt')&& !$(evt.target).hasClass('suggest_div3_txt')&& !$(evt.target).hasClass('sug_d4_d1_input')&& !$(evt.target).hasClass('sug_d4_d1_img')&& !$(evt.target).hasClass('suggest_div4_div3')) 
	{
		$('.problem').hide(); 
		$('.problem_p2').css('color','#333');
		$(".header_li9_img1").show();
		$(".header_li9_img2,.header_li9_img3,.header_li9_img4,.suggest").hide();
		$(".suggest_div3_1").hide();
	};
});
//点击退出
function logout(){
		$.ajax({		
			url: '/adowner/logout.php',
			type:'post',
			async : true, //默认为true 异步  
			error: function(){
					alert('服务器忙，请稍候再试！');　
			},
			success: function(data){
				alert('退出成功！');	
				top.location.href='/index.php';
			}
		});
}
//点击系统消息出现layer窗口
function showLayer(){
				var url ="/adowner/systemmessages.php";
				layer.open({
					type: 2,
					title: false,
					closeBtn: 0,
					shadeClose: true,
					skin: 'yourclass',
					area: ['650px', '500px'],
					offset: ['60px', '250px'],
					content: [url, 'no'], //iframe的url，no代表不显示滚动条
					end: function(){
					}
				});
			}
//点击反馈问题
$(".problem_p2").click(function(){
	$(".problem_p2").css("color","#49bfff");
	$(".suggest").show();
})

$(".suggest_div4_div3").click(function(){
	$(".suggest_div3_1").show();
})
//左侧点击
function midland_l_li1(){
	$(".midland_l_li1 .img1").css("display","inline-block");
	$(".img2").css("display","inline-block");
	$(".img3").hide();
	$(".midland_l_li2 .img1").css("display","none");
	$(".img5").css("display","inline-block");
	$(".img4").hide();
	$(".midland_l_li3 .img1").css("display","none");
	$(".img7").css("display","inline-block");
	$(".img6").hide();
	$(".midland_l_li4 .img1").css("display","none");
	$(".img9").css("display","inline-block");
	$(".img8").hide();
}
function midland_l_li2(){
	$(".midland_l_li1 .img1").css("display","none");
	$(".img3").css("display","inline-block");
	$(".img2").hide();
	$(".midland_l_li2 .img1").css("display","inline-block");
	$(".img4").css("display","inline-block");
	$(".img5").hide();
	$(".midland_l_li3 .img1").css("display","none");
	$(".img7").css("display","inline-block");
	$(".img6").hide();
	$(".midland_l_li4 .img1").css("display","none");
	$(".img9").css("display","inline-block");
	$(".img8").hide();
}
function midland_l_li3(){
	$(".midland_l_li1 .img1").css("display","none");
	$(".img3").css("display","inline-block");
	$(".img2").hide();
	$(".midland_l_li2 .img1").css("display","none");
	$(".img5").css("display","inline-block");
	$(".img4").hide();
	$(".midland_l_li3 .img1").css("display","inline-block");
	$(".img6").css("display","inline-block");
	$(".img7").hide();
	$(".midland_l_li4 .img1").css("display","none");
	$(".img9").css("display","inline-block");
	$(".img8").hide();
}
function midland_l_li4(){
	$(".midland_l_li1 .img1").css("display","none");
	$(".img3").css("display","inline-block");
	$(".img2").hide();
	$(".midland_l_li2 .img1").css("display","none");
	$(".img5").css("display","inline-block");
	$(".img4").hide();
	$(".midland_l_li3 .img1").css("display","none");
	$(".img7").css("display","inline-block");
	$(".img6").hide();
	$(".midland_l_li4 .img1").css("display","inline-block");
	$(".img8").css("display","inline-block");
	$(".img9").hide();
}
var left_choose=$(".left_choose").val();
if(left_choose==2)	
	midland_l_li2();
else if(left_choose==3)
    midland_l_li3();
else if(left_choose==4)
    midland_l_li4();
else
	midland_l_li1();

// 计划   -------------------------
// 推广计划自定义列
$('#effect1').click(function(){
	if(this.checked){
		$(this).parents('.effect').siblings('.exposure').find('input').prop('checked','checked');
	}else {
		$(this).parents('.effect').siblings('.exposure').find('input').removeAttr('checked');
	}
});
// 定向计划自定义列
$('#rest1').click(function(){
	if(this.checked){
		$(this).parents('.effect').siblings('.sex').find('input').prop('checked','checked');
	}else {
		$(this).parents('.effect').siblings('.sex').find('input').removeAttr('checked');
	}
});
// 广告计划自定义列
$('#rest11').click(function(){
	if(this.checked){
		$(this).parents('.effect').siblings('.attribute').find('input').prop('checked','checked');
	}else {
		$(this).parents('.effect').siblings('.attribute').find('input').removeAttr('checked');
	}
});

// 点击发布广告
function layerHead(){
	var lHeight = ($(window).innerHeight() - 60) +'px';
	var lWidth = ($(window).innerWidth() - 100) + 'px';
	$('.poster_layer_wrap,.head_poster_shade').css({'height':lHeight,'width':lWidth});
}
function leftLayer(){
	var iframeUrl = './poster_layers.php';
	$('.poster_layer_wrap').fadeIn();
	$('#poster_layer').attr('src',iframeUrl);
	$('.head_poster_main1').animate({'right':'0'},500);
	$('body').css('overflow-y','hidden');
}
$('.header_li17').click(function(){
	leftLayer();
});
// 关闭
$('.head_poster_btn,.head_poster_shade').click(function(){
	$('.head_poster_main1').animate({'right':'-100%'},500,function(){
		$('.poster_layer_wrap').hide();
		$('body').css('overflow-y','auto');
	});
});
// 新增推广计划
$('#generalize3').on('click',function(){
	leftLayer();
});
// 点击新建推广
$('#hierarchy_btn').click(function(){
	window.parent.release2Layer();
});
function release2Layer(){
	$('.release2_layer_main,.release_layer2_shade').show();
	var tH = ($(window).innerHeight() - $('.release2_layer_bd').innerHeight())/2 + 'px';
	var rW = ($(window).innerWidth() - $('.release2_layer_bd').innerWidth())/2 + 'px';
	$('.release2_layer_main').css({'top':tH,'right':rW});
	$('body').css('overflow','hidden');
	window.parent.hideLeftBtn();
	$('.close_release2_btn').click(function(){
		$('.release2_layer_main,.release_layer2_shade').hide();
		$('body').css('overflow-y','auto');
		window.parent.showLeftBtn();
	});
}
function hideLeftBtn(){
	$('.head_poster_btn').fadeOut();
}
function showLeftBtn(){
	$('.head_poster_btn').fadeIn();
}

// 点击新建定向
$('#direct_btn').click(function(){
	window.parent.direct();
	window.parent.hideLeftBtn();
});
// 关闭
$('.close_direct_btn').click(function(){
	window.parent.CloseDirect();
	window.parent.showLeftBtn();
});
function direct(){
	var iframeUrl2 = './add_orient.php';
	$('#poster_layer2').attr('src',iframeUrl2).animate({'right':'0'},500);
}
function CloseDirect(){
	$('#poster_layer2').animate({'right':'-100%'},500);
}

// 投放媒体类型
$('.media_btn1').click(function(){
	var that = $(this), i = $(this).index(), list = $('.classify_main'), cTime = '';
	clearInterval(cTime);
	cTime = setTimeout(function(){
		that.addClass('media_active').siblings().removeClass('media_active');
	},200);
	if(i == 1){
		list.slideDown("slow");
	}else{
		list.slideUp();
	}  
});
// 投放媒体类型——软件分类
$('.classify_btn').click(function(){
	var i = $(this).index();
	$(this).addClass('media_active').siblings().removeClass('media_active');
	if(i == 0){
		$('.classify_tab').hide();
		$('#classify_tab1').show();
	}else if(i == 1){
		$('.classify_tab').hide();
		$('#classify_tab2').show();
	}else if(i == 2){
		$('.classify_tab').hide();
		$('#classify_tab3').show();
	}
});
// 投放人群
$('.media_choose_btn2').click(function(){
	var that = $(this), i = $(this).index(), list = $('.media_age'), cTime = '';
	clearInterval(cTime);
	cTime = setTimeout(function(){
		that.addClass('media_active').siblings().removeClass('media_active');
	},200);
	console.log(i);
	if(i == 2){
		list.slideDown("slow");
	}else{
		list.slideUp();
	}  
});
// 性别
$('.media_choose_btn3').click(function(){
	$(this).addClass('media_active').siblings().removeClass('media_active');
});
// 投放地域
$('.media_choose_btn4').click(function(){
	var that = $(this), i = $(this).index(), list = $('.media_area'), cTime = '';
	clearInterval(cTime);
	cTime = setTimeout(function(){
		that.addClass('media_active').siblings().removeClass('media_active');
	},200);
	if(i == 2){
		list.slideDown("slow");
	}else{
		list.slideUp();
	}  
});
// 广告类型
$('.poster_type_btn').click(function(){
	$(this).addClass('type_btn_active').siblings().removeClass('type_btn_active');
});

// 广告计费
$('.poster_biling_btn').click(function(){
	var str = ['按每千次展示量收费 如：1元=1000次展示','按点击次数计费'];
	var index = $(this).index();
	if(index == 0){
		$('.consult_exp_txt').text(str[0]);
	}else if(index == 1){
		$('.consult_exp_txt').text(str[1]);
	}
	$(this).addClass('billing_btn_active').siblings().removeClass('billing_btn_active');
});
// 投放周期
$('.cycle_choose_btn').click(function(){
	var i = $(this).index();
	if(i == 1){
		$('.cycle_choose_main').slideDown("slow");
	}else{
		$('.cycle_choose_main').slideUp();
	}
});
$('.checkbox_all input').click(function(){
	if(this.checked){
		$(this).parents('.checkbox_all').siblings('td').find('input').prop("checked","checked");
	}else{
		$(this).parents('.checkbox_all').siblings('td').find('input').removeAttr("checked");
	}	
});

// 广告形式——固定横幅
$('.exp_radio_main').click(function(){
	$(this).children('label').addClass('exp_active_cl');
	$(this).siblings().children('label').removeClass('exp_active_cl');
	$(this).find('.exp_radio_img').attr('src','./img/top/radio_bg2.png');
	$(this).siblings().find('.exp_radio_img').attr('src','./img/top/radio_bg1.png');
	$(this).find('input').attr('checked','checked');
	$(this).siblings().find('input').removeAttr('checked');
});

// 广告形式
function posterImg(){
	var i=0, piclen=$(".pic_ol li").length-1;
	function i_change(){
		if(i > piclen){
			i = 0;
		}else if(i < 0){
			i = piclen;
		}
	}
	function show_pic(){
		$(".pic_ol li").eq(i).animate({opacity:1}).siblings().animate({opacity:0});
		$(".num_ol li").siblings().children('span').removeClass("change_active");
		$(".num_ol li span").eq(i).addClass("change_active");
		$(".change_exp_txt").parent('li').siblings().children('.change_exp_txt').removeClass("exp_active");
		$(".change_exp_txt").eq(i).addClass("exp_active");
		if(i == 4){
			$('.poster_alert').slideDown("slow");
			$('.cont_hide').slideUp();
		}else{
			$('.poster_alert').slideUp();
			$('.cont_hide').slideDown("slow");
		}
	}
	show_pic();
	function chage_myown(){
		i++;
		i_change();
		show_pic();
	}
	$(".num_ol li").click(function(){
		var myindex=$(this).index();
		i=myindex;
		show_pic();

	})
	$(".poster_img_pre").click(function(){
		i-=1;
		i_change();
		show_pic();
    })
	$(".poster_img_next").click(function(){
		i+=1;
		i_change();
		show_pic();
	})
}
	posterImg();

// 素材来源
$('.upload_btn .matter_mg_r').click(function(){
	var index = $(this).index() + 1;
	if(index == 1){
		$('#cont_tab1').addClass('cont_tab_show').siblings().removeClass('cont_tab_show');
	}else if(index == 2){
		$('#cont_tab2').addClass('cont_tab_show').siblings().removeClass('cont_tab_show');
	}else if(index == 3){
		$('#cont_tab3').addClass('cont_tab_show').siblings().removeClass('cont_tab_show');
	}
});

// 新增素材
function addMatter(){
	var i = 1;
	$('.add_matter_btn').click(function(){
		if(i < 11){
			i = i+1;
			$('#long_input' + i).slideDown('slow');
		}
	});
}


$(function(){
	// 新建推广遮罩层
	var wHeight = $(window).innerHeight() + 'px';
	$('.release_layer2_shade').css('height',wHeight);
	layerHead();

	addMatter();

	// 上传图片
	$('.uploadify .uploadify-queue').click(function(){
		var aChilid = 0;
		var i=0
		if(!$(this).parents('.upload_wrap_show').children('.data_src').val()){
			return false;
		}
		$('.upload_wrap_show').each(function(){ 
			if($('.upload_wrap_show').eq(i).hasClass('upload_show')){
				aChilid=aChilid+1;
			}	
			i++;
		});
		if(aChilid <= 1){
			$('.show_img').attr('src','').css('zIndex','-1');
			$('.upload_wrap_show').eq(0).addClass('upload_show').siblings().removeClass('upload_show');
			return false;
		}else{
			$(this).parents('.upload_wrap_show').removeClass('upload_show');
		}
	});
})





