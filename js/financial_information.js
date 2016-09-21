$('.save').click(function(){
	var account_name = $('#account_name').val();
	var bank_full_name = $('#bank_full_name').val();
	var bank_name = $('#bank_name').val();	
	var bank_account = $('#bank_account').val();		
	var re_bank_account = $('#re_bank_account').val();	
	if(account_name.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入收款方！");
		$('#account_name').focus();
		return false;
	}
	if(bank_full_name.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入所在地！");
		$('#bank_full_name').focus();
		return false;
	}
	if(bank_name.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入支行名称！");
		$('#bank_name').focus();
		return false;
	}if(bank_account.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入银行账户！");
		$('#account_name').focus();
		return false;
	}
	
	
	if(re_bank_account.replace(/(^\s*)|(\s*$)/g,"")==""){
		alert("请输入确认银行账户！");
		$('#re_bank_account').focus();
		return false;
	}
	
	if(re_bank_account!=bank_account){
		alert("银行账户与确认银行账户不一致！");
		$('#re_pwd').focus();
		return false;
	}
	$.ajax({		
		url: 'ajaxpwd.php',
		type: 'post',
		data: 'mod=bank&account_name='+account_name+"&bank_full_name="+bank_full_name+"&bank_name="+bank_name+"&bank_account="+bank_account,
		async: false,
		timeout: 60000,
		success: function(data){	
			var json = eval("("+data+")");
			if(json['Return']){
				alert('修改成功');
			}else{
				alert(json['ErrMsg']);
			}			                                       	
		}
	});
})