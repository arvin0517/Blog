<?php

?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<title>个人博客</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/myanimate.css"/>
		<link rel="stylesheet" type="text/css" href="css/schedule.css"/>
		<link rel="stylesheet" href="https://at.alicdn.com/t/font_234130_nem7eskcrkpdgqfr.css">		
		<script src="js/schedule.js" type="text/javascript" charset="utf-8"></script>
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
             setInterval(lunbo,8000); //循环轮播
              //轮播图片end    
              
             //添加日历 
//        	var mySchedule = new Schedule({
//				el: '#schedule-box',
//				//date: '2018-9-20',
//				clickCb: function (y,m,d) {
//					//document.querySelector('#h3Ele').innerHTML = '日期：'+y+'-'+m+'-'+d	
//				},
//				nextMonthCb: function (y,m,d) {
//					//document.querySelector('#h3Ele').innerHTML = '日期：'+y+'-'+m+'-'+d	
//				},
//				nextYeayCb: function (y,m,d) {
//					//document.querySelector('#h3Ele').innerHTML = '日期：'+y+'-'+m+'-'+d	
//				},
//				prevMonthCb: function (y,m,d) {
//					//document.querySelector('#h3Ele').innerHTML = '日期：'+y+'-'+m+'-'+d	
//				},
//				prevYearCb: function (y,m,d) {
//					//document.querySelector('#h3Ele').innerHTML = '日期：'+y+'-'+m+'-'+d	
//				}
//			});          
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
			<div class="searchAndQuotes marTop">
				<form class="search-form">
					    <div class="search-bg search-bg-hover"></div>
						<input type="text" class="search-text" name="" id="" value="" placeholder="请输入你需要的内容"/>
					    <input type="submit" class="search-btn" name="" id="" value="" />
				</form>
				<div class="quotes" id="">
					<div class="quotes-all" id="">
						<div id="quotes-all2">
							<span class="quotes-text" id="">
						   	   有时候,你需要出去走一走,呼吸一下新鲜空气,然后提醒自己,你是谁,你要成为什么样的人。
						    </span>
							<span class="quotes-name" id="">
							   	    ---- by Arvin
							</span>
						</div>
					</div>		  
				</div>
				<!--<div class="schedule">
					<div id='schedule-box' class="boxshaw"> </div>
				</div>-->
			</div>
			<div class="quotesClear marTop" id=""></div>
			<div class="bottom marTop">
				<div class="articles">
					<div class="articles-title">
						文章推荐
					</div>
					<ul class="article-list">
						<li>
							<img src="img/my/article1.jpg"/>
							<div class="article-main">
								<h3><a href="">阿里巴巴iconfont怎么是正确的使用方式？</a></h3>
								<div class="article-info">
									<span class="info-author" id=""><a href=""><em>郑玮</em></a></span>
									<span class="info-time"  id=""><a href="">发布时间:&nbsp;<em>2018-06-01 20:36:00</em></a></span>
									<span class="info-type" id=""><a href="">分类:&nbsp;<em>web前端</em></a></span>
								</div>
								<a href=""><p class="article-p clear">Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录，新建font文件夹用来存放字体文件（可自定义存放）Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录</p></a>
							</div>
						</li>
						<li>
							<img src="img/my/article2.jpg"/>
							<div class="article-main">
								<h3><a href="">阿里巴巴iconfont怎么是正确的使用方式？</a></h3>
								<div class="article-info">
									<span class="info-author" id=""><a href=""><em>郑玮</em></a></span>
									<span class="info-time"  id=""><a href="">发布时间:&nbsp;<em>2018-06-01 20:36:00</em></a></span>
									<span class="info-type" id=""><a href="">分类:&nbsp;<em>web前端</em></a></span>
								</div>
								<a href=""><p class="article-p clear">Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录，新建font文件夹用来存放字体文件（可自定义存放）Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录</p></a>
							</div>
						</li>
						<li>
							<img src="img/my/article3.jpg"/>
							<div class="article-main">
								<h3><a href="">阿里巴巴iconfont怎么是正确的使用方式？</a></h3>
								<div class="article-info">
									<span class="info-author" id=""><a href=""><em>郑玮</em></a></span>
									<span class="info-time"  id=""><a href="">发布时间:&nbsp;<em>2018-06-01 20:36:00</em></a></span>
									<span class="info-type" id=""><a href="">分类:&nbsp;<em>web前端</em></a></span>
								</div>
								<a href=""><p class="article-p clear">Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录，新建font文件夹用来存放字体文件（可自定义存放）Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录</p></a>
							</div>
						</li>
						<li>
							<img src="img/my/article4.jpg"/>
							<div class="article-main">
								<h3><a href="">阿里巴巴iconfont怎么是正确的使用方式？</a></h3>
								<div class="article-info">
									<span class="info-author" id=""><a href=""><em>郑玮</em></a></span>
									<span class="info-time"  id=""><a href="">发布时间:&nbsp;<em>2018-06-01 20:36:00</em></a></span>
									<span class="info-type" id=""><a href="">分类:&nbsp;<em>web前端</em></a></span>
								</div>
								<a href=""><p class="article-p clear">Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录，新建font文件夹用来存放字体文件（可自定义存放）Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录</p></a>
							</div>
						</li>
						<li>
							<img src="img/my/article5.jpg"/>
							<div class="article-main">
								<h3><a href="">阿里巴巴iconfont怎么是正确的使用方式？</a></h3>
								<div class="article-info">
									<span class="info-author" id=""><a href=""><em>郑玮</em></a></span>
									<span class="info-time"  id=""><a href="">发布时间:&nbsp;<em>2018-06-01 20:36:00</em></a></span>
									<span class="info-type" id=""><a href="">分类:&nbsp;<em>web前端</em></a></span>
								</div>
								<a href=""><p class="article-p clear">Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录，新建font文件夹用来存放字体文件（可自定义存放）Ionic有个自己的图标库，但是有些需要的图标还是没有，下面介绍一下阿里巴巴的矢量图标库，在Ionic中如何使用.静态文件存放目录</p></a>
							</div>
						</li>
					</ul>					
				</div>
			</div>
			
		</div>
	</body>
</html>