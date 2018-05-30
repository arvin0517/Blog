<?php

?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<title>个人博客</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/myanimate.css"/>
		<script src="js/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		   $(document).ready(function(){
   
              //轮播图片start
              var now = $(".pic li").length - 1;
              $(".pic li").addClass('beforeim');
              $(".pic li").eq(now).removeClass('beforeim');
              function lunbo(){          	   
          	        $(".pic li").removeClass('imgin');
          	        $(".pic li").removeClass('imgout');

              	  	$(".pic li").addClass('beforeim');
                    $(".pic li").eq(now).removeClass('beforeim');
              	  	setTimeout(function(){ //这里使用setTimeout的作用是为了让代码停一段时间，再往下执行。不然会有bug        	  		
		              	if(now >= 0){
		              	  if(now != 0){
		              	  	$(".pic li").eq(now).addClass('imgout');
		              		$(".pic li").eq(now-1).addClass('imgin');
		              		now--;
		              	  }
		              	  else{
		              	  	$(".pic li").eq(0).addClass('imgout');
		              	  	$(".pic li").eq($(".pic li").length - 1).addClass('imgin');
		              	  	now = $(".pic li").length - 1;
		              	  }
		              	    
		              	}
              	  	},10)
                }
             //setInterval(lunbo,8000); //循环轮播
              //轮播图片end              
			});
		</script>		
		<style type="text/css">
			
		</style>
		
	</head>
	<body>
		<script color="243,142,40" opacity='0.7' zIndex="-1" count="59" src="js/canvas-nest.js" type="text/javascript" charset="utf-8"></script>
		<div id="container" class="container">
			<div class="header">
			   <img class="header_logo float-l leftInto" src="img/my/logo.png"/>
			   <div class="header_text float-l rightInto" id="">
				   <div id="" class="title">本的个人博客</div>
				   <div id="" class="description">一个懒人不想做但不得不做的博客</div>			   	
			   </div>
			</div>
			<nav class="bounceInto">
				<ul>
					<li><a class="active" href="">技术博文</a></li>
					<li><a href="">前端作品</a></li>
					<li><a href="">碎碎念</a></li>
					<li><a href="">留言板</a></li>
					<li><a href="">关于我</a></li>
					<li><a href="">测试</a></li>
				</ul>
			</nav>
			<div class="lunbo marTop">
				 <ul class="pic lunboIn">
		            <li><a href="javascript:;"><img src="img/my/lunbo1.jpg" alt="pic1"></a></li>
		            <li><a href="javascript:;"><img src="img/my/lunbo2.jpg" alt="pic1"></a></li>
		            <li><a href="javascript:;"><img src="img/my/lunbo3.jpg" alt="pic1"></a></li>
		            <li><a href="javascript:;"><img src="img/my/lunbo4.jpg" alt="pic1"></a></li>
		            <li><a href="javascript:;"><img src="img/my/lunbo5.jpg" alt="pic1"></a></li>
		        </ul>
			</div>
			<div class="barAndcale marTop">
				<form class="search-form">
					    <div class="search-bg search-bg-hover"></div>
						<input type="text" class="search-text" name="" id="" value="" placeholder="请输入你需要的内容"/>
					    <input type="submit" class="search-btn" name="" id="" value="" />
				</form>
			</div>
		</div>
	</body>
</html>