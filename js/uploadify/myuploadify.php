<?php
/*上传by yang*/
$targetFolder = '/upload/tmp/'; //临时存放位置
$verifyToken = md5('juhepen' . $_POST['timestamp']);//验证码
$allowtype = $_POST['allowtype'];//允许格式
$maxsize = $_POST['maxsize'];//最大限制

//取得文件扩展名
function GetFiletype($filename){
	$filer=explode(".",$filename);
	$count=count($filer)-1;
	return strtolower(RepGetFiletype($filer[$count]));
}

function RepGetFiletype($filetype){
	$filetype=str_replace('|','_',$filetype);
	$filetype=str_replace(',','_',$filetype);
	$filetype=str_replace('.','_',$filetype);
	return $filetype;
}

$fileExt = explode(",",$allowtype);


if ( !empty($_FILES) && $_POST['token'] == $verifyToken ) {
	$filetype = GetFiletype($_FILES['Filedata']["name"]);	
	if( !in_array($filetype,$fileExt) ){//非要求的文件格式
		echo 1;
	}else{
		$filesize = ceil($_FILES['Filedata']['']/1024);//$filesize单位KB		
		if( $filesize>$maxsize ){//非要求的文件大小
			echo 2;
		}else{
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$newfilename = md5(uniqid(microtime())).".".$filetype;
			$targetFile = $targetPath.$newfilename;	
			if( move_uploaded_file($tempFile,$targetFile) ){
				echo $targetFolder.$newfilename."##".$_FILES['Filedata']['name'];
			}else{
				echo 4;
			}
		}
	}
}else{
	echo 3;
}

?>