//点击自定义出现自定义选框
$("body").click(function(){
　　$(".generalize_custom_child").hide();
});
$(".generalize_custom").click(function(e){
	$(".generalize_custom_child").show();
	e.stopPropagation();
})
$(".generalize_custom_child").click(function(e){
　　e.stopPropagation();
});
//点击确定取消按钮隐藏自定义框
$(".cancelsure_span1").click(function(){
	$(".generalize_custom_child").hide();
})
$(".cancelsure_span2").click(function(){
	$(".generalize_custom_child").hide();
})

//表格操作
$(".copy1").mouseover(function(){
	$(this).attr('src','./img/right/img9_2.png');
	$(this).next().css("display","inline-block");
})
$(".copy1").mouseout(function(){
	$(this).attr('src','./img/right/img9_1.png');
	$(this).next().css("display","none");
})
$(".amend1").mouseover(function(){
	$(this).attr('src','./img/right/img9_4.png');
	$(this).next().css("display","inline-block");
})
$(".amend1").mouseout(function(){
	$(this).attr('src','./img/right/img9_3.png');
	$(this).next().css("display","none");
})
$(".delete1").mouseover(function(){
	$(this).attr('src','./img/right/img9_6.png');
	$(this).next().css("display","inline-block");
})
$(".delete1").mouseout(function(){
	$(this).attr('src','./img/right/img9_5.png');
	$(this).next().css("display","none");
})
//删除
$('.delete1').click(function(){			
	var id =$(this).attr('data-id');
	var obj=$(this).parent().parent();
	layer.confirm('您是否确定删除该信息？', {
			title: '提示',
			skin: 'yourclass' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
		},function(){
			var sData = "id=" + id;

			$.ajax({   
				url:'/adowner/ajax.php?mod=budget&act=del',
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
						obj.remove();		
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
$(".generalize_download").click(function(){
	$("#downloadmes").submit();
		
});

$('label input[type=checkbox]').change(function(){
	$('#columns').val($('label input[type=checkbox]:checked').map(function(){return this.value}).get().join(','))
});

// 新建推广计划
$('#generalize_addposter1').click(function(){
	release21Layer();
});
function release21Layer(){
	$('.release_main').show();
	var tH = ($(window).innerHeight() - $('.release21_layer_bd').innerHeight())/2 + 'px';
	var rW = ($(window).innerWidth() - $('.release21_layer_bd').innerWidth())/2 + 'px';
	$('.release21_layer_main').css({'top':tH,'right':rW});
	$('body').css('overflow','hidden');
	// 关闭
	$('.close_release21_btn').click(function(){
		$('.release_main').hide();
		$('body').css('overflow-y','auto');
	});
}








