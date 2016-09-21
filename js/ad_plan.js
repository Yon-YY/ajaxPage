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
//点击全选
$("#effect1").click(function(){
//	if($("#effect1").attr("checked","checked")){
//		console.log(111);
//		$(".exposure input").attr("checked","checked");
//	}else if($("#effect1").attr("checked","")){
//		$(".exposure input").removeAttr("checked");
//		console.log(222);
//	}
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
$(".preview1").mouseover(function(){
	$(this).attr('src','./img/right/img9_8.png');
	$(this).next().css("display","inline-block");
})
$(".preview1").mouseout(function(){
	$(this).attr('src','./img/right/img9_7.png');
	$(this).next().css("display","none");
})
//关闭或审核 
$(".audit1").click(function(){
	$(this).hide();
	$(this).next().css("display","inline-block");
	var id=$(this).attr("data-id");
	$.ajax({		
		url: '/adowner/ajax.php?mod=adv&act=close',
		type:'post',
		data:'id='+id,
		async : true, //默认为true 异步  
		success: function(data){	
			var json = eval("("+data+")");
			if(json["Return"]=="False")			                                       
			{
				alert('修改失败');	
					
			}
		}
		});
})
//关闭或审核
$(".audit2").click(function(){
	$(this).hide();
	$(this).prev().css("display","inline-block");
	var id=$(this).attr("data-id");
	$.ajax({		
		url: '/adowner/ajax.php?mod=adv&act=check',
		type:'post',
		data:'id='+id,
		async : true, //默认为true 异步  
		success: function(data){	
			var json = eval("("+data+")");
			if(json["Return"]=="False")			                                       
			{
				alert('修改失败');	
				
			}
		}
	});
})
//预览
function onAdvDisplay(id){
		var url = './displayadv.php?id='+id;
		layer.open({
			type: 2,
			title: '广告位预览',
			closeBtn: true,
			shadeClose: true,
			skin: 'yourclass',
			area: ['286px', '527px'],
			content: [url, 'no'], //iframe的url，no代表不显示滚动条
			end: function(){
			}
		})
	}
//下载
$(".generalize_download").click(function(){
	$("#downloadmes").submit();
		
});
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
				url:'/adowner/ajax.php?mod=adv&act=del',
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
  $('label input[type=checkbox]').change(function(){
    $('#columns').val($('label input[type=checkbox]:checked').map(function(){return this.value}).get().join(','))
  })


