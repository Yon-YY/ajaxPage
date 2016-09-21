<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			html, body, ul, li, ol, dl, dd, dt, p, h1, h2, h3, h4, h5, h6, form, fieldset, legend, img { margin:0; padding:0; }
			fieldset, img { border:none; }
			img{display: block;}
			ul,ol,li{ list-style:none; }
			a { color:#666; text-decoration:none; }
			html, body{width:100%;height:100%;}
			.left{float:left;}
			.right{float:right;}
			.clear{clear: both;}
			.on{
				background:#f2f3f4;
			}
			.ul_top{
				width:100%;
				height:51px;
				border-bottom:1px solid #ccc;
			}
			.ul_top li{
				float:left;
				font-size:12px;
				color:#333;
				text-align:center;
				line-height:52px;
			}
			.ul_top .li1{
				margin-left:16px;
				margin-right:6px;
				color:#2b7ed1;
			}
			.ul_top .li2{
				margin-top:18px;
				margin-right:56px;
			}
			.ul_top .li3{
				width:54px;
				height:28px;
				border:1px solid #ccc;
				margin-top:10px;
				line-height:28px;
			}
			.ul_top .li4,.ul_top .li5,.ul_top .li6,.ul_top .li7{
				width:78px;
				height:28px;
				border:1px solid #ccc;
				border-left:none;
				margin-top:10px;
				line-height:28px;
			}
			.ul_top .li8 select{
				width:68px;
				height:28px;
				border:1px solid #ccc;
				margin-left:56px;
				text-indent:10px;
			}
		</style>
	</head>
	<body>
		<ul class="ul_top">
			<li class="li1">消息设置</li>
			<li class="li2"><img src="./img/top/img10_1.png"/></li>
			<li class="li3">全部</li>
			<li class="li4">系统消息</li>
			<li class="li5">审核消息</li>
			<li class="li6">账户消息</li>
			<li class="li7">财务消息</li>
			<li class="li8">
				<select name="">
					<option value="">全部</option>
					<option value="">未读</option>
					<option value="">已读</option>
				</select>
			</li>
		</ul>
		<div class="clear"></div>
		<div class="">222</div>
		<div class="">333</div>
	</body>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript">
		$(".ul_top li").click(function(){
			$(".ul_top li").eq($(this).index()).addClass("on").siblings().removeClass('on');
		})
	</script>
</html>













