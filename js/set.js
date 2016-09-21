$('.mid_div5').click(function(){
	var old_pwd = $('#old_pwd').val();
	var new_pwd = $('#new_pwd').val();
	var re_pwd = $('#re_pwd').val();		
	if(old_pwd.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入旧密码！");
		$('#old_pwd').focus();
		return false;
	}
	
	if(new_pwd.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入新密码！");
		$('#new_pwd').focus();
		return false;
	}
	var pattern=/^[a-zA-z]\w{5,17}$/;
	if(!pattern.test(new_pwd)){ 
		alert("新密码以字母开头长度为6-18位之间！");
		$('#new_pwd').focus();
		return false;
	}
	
	if(re_pwd.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入确认密码！");
		$('#re_pwd').focus();
		return false;
	}
	
	if(re_pwd!=new_pwd){
		alert("新密码与确认密码不一致！");
		$('#re_pwd').focus();
		return false;
	}
	$.ajax({		
		url: 'ajaxpwd.php',
		type: 'post',
		data: 'mod=pwd&new_password='+new_pwd+"&old_password="+old_pwd,
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
})