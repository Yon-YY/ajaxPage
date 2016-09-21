function changePro(){
	var code=$('.province').val();
	getCity(code);
}

function changeCity(){
	var code=$('.city').val();
	getArea(code);
}

function getCity(code){
	$(".city option:gt(0)").remove();
	$(".area option:gt(0)").remove();
	$.ajax({//调取区域信息		
		url: 'city.php',
		type: 'post',
		data: 'mod=city&code='+code,
		async: false,
		timeout: 60000,
		success: function(data){	
			var json = eval("("+data+")");
			if(json['Return']){
				for (var i = 0; i < json['data'].length; i++) {
	                        $(".city").append("<option value=" + json['data'][i]['code'] + ">" + json['data'][i]['name'] + "</option>");
	            }
			}			                                       	
		}
	});
}

function getArea(code){
	$(".area option:gt(0)").remove();
	$.ajax({//调取区域信息		
		url: 'city.php',
		type: 'post',
		data: 'mod=area&code='+code,
		async: false,
		timeout: 60000,
		success: function(data){	
			var json = eval("("+data+")");
			if(json['Return']){
				for (var i = 0; i < json['data'].length; i++) {
	                        $(".area").append("<option value=" + json['data'][i]['code'] + ">" + json['data'][i]['name'] + "</option>");
	            }
			}			                                       	
		}
	});
}
function chk_account_set(){
	var obj = document.editaccount;
	if(obj.contacter.value.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入联系人！");
		obj.contact.focus();
		return false;
	}
	if(obj.company.value.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入公司！");
		obj.company.focus();
		return false;
	}
	
	// var pattern=/(^[0-9]{3,4}\-[0-9]{3,8}$)|(^[0-9]{3,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)|(^[0-9]{11}$)/;
	// if(obj.tel.value.replace(/(^\s*)|(\s*$)/g,"")!="" && !pattern.test(obj.tel.value)){ 
	// 	alert("电话格式不正确！");
	// 	obj.tel.focus();
	// 	return false;
	// } 
	
	if(obj.mobile.value.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入手机号！");
		obj.mobile.focus();
		return false;
	}
	var pattern=/^[0-9]{11}$/;
	if(!pattern.test(obj.mobile.value)){ 
		alert("手机号格式不正确！");
		obj.mobile.focus();
		return false;
	}
		
	if(obj.qq.value.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入QQ！");
		obj.qq.focus();
		return false;
	}
	var pattern1=/^[1-9]\d{4,8}$/;
	if(!pattern1.test(obj.qq.value)) 
	{ 
		alert("QQ格式不正确！");
		obj.qq.focus();
		return false;
	}
	// if(obj.email.value.replace(/(^\s*)|(\s*$)/g,"")==""){
	// 	alert("请输入邮箱！");
	// 	obj.email.focus();
	// 	return false;
	// }	
	// var pattern=/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	// if(!pattern.test(obj.email.value)) 
	// { 
	// 	alert("邮箱格式不正确！");
	// 	obj.email.focus();
	// 	return false;
	// }
	$.ajax({		
		url: 'ajaxpwd.php',
		type: 'post',
		data: 'mod=mes&contacter='+obj.contacter.value+"&mobile="+obj.mobile.value+"&qq="+obj.qq.value+"&company="+obj.company.value+"&province="+obj.province.value+"&city="+obj.city.value+"&area="+obj.area.value+"&addr="+obj.addr.value,
		async: false,
		timeout: 60000,
		success: function(data){	
			var json = eval("("+data+")");
			if(json['Return']){
				alert('修改成功');
			}else{
				alert('修改失败');
			}			                                       	
		}
	});
	return true;
}