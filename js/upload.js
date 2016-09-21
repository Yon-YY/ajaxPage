$(function() {	
$(".upload_img_main").each(function(){
var $this = $(this);								
	$this.uploadify({
		'formData'     : {
			'timestamp': document.releaseForm1.timestamp.value,
			'token'    : document.releaseForm1.token.value,												
			'allowtype' :'jpg,jpeg,png,gif',
			'maxsize'  :'80000000'
		},
		'swf'      : './js/uploadify/uploadify.swf',
		'uploader' : './js/uploadify/myuploadify.php',											
		'removeCompleted':true,
		'removeTimeout':1,
		'fileTypeExts' : '*.jpg; *.jpeg; *.png; *.gif',
		'fileSizeLimit' : '4096KB',
		'buttonText':'',
		// 'queueSizeLimit':1,
		// 'uploadLimit':1,
		'onSelect': function (file) {},
		onUploadSuccess:function(file,data,response){	
			var num=$this.attr('data');
		   
		    //$this.uploadify( 'settings' ,'uploadLimit' ,++this.settings.uploadLimit);	
		    
			if(data==1){
				alert("上传失败，请检查文件类型是否符合要求！");
				$('#material_'+num).val("");
				//
			}else if(data==2){
				alert("上传失败，请检查文件大小是否符合要求！");
				$('#material_'+num).val("");
				//
			}else if(data==3){
				alert("参数出错，上传失败！");
				$('#material_'+num).val("");
				//
			}else if(data==4){
				alert("上传失败！");
				$('#material_'+num).val("");
				//
			}else if( data.indexOf("/tmp/")>=0 ){													
				var files = data.split("##");
				
				//判断图片宽高
				var img = new Image();
				img.src = files[0];
				var judgeImgSize = false;
				
				img.onload = function(){
					if(1) // img.width==640 && img.height==100 )
					{													
						$('#material_'+num).val(files[0]);	
						$('#show_img'+num).attr('src',files[0]).addClass('show_active').css('zIndex','20');		
						// $this.parent('.upload_wrap_show').next('.upload_wrap_show');	
						$('.upload_wrap_show').eq(num).addClass('upload_show');
					}else{
						$('#material_'+num).val("");
						alert("图片尺寸不符合640*100像素！");
						//
					}
				}
			}
		}
	});		
});
});

