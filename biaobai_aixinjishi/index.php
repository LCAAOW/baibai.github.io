﻿<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php include("../plugin/config2.php"); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>爱心计时表白网页_表白网页制作_<?php echo htmlspecialchars(urldecode($title)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，使用144G核心技术，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
<meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
<!-- Animate.css -->
<link rel="stylesheet" href="../css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="../css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="../css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="../css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="../css/bootstrap.css">
<!-- Bootstrap Date 
<link href="http://cdn.bootcss.com/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="../css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="../css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="logo.png" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <?php include("../header2.php"); ?>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(../images/nav-biaobai.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">爱心计时表白网页</h2>
          
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">填入网页信息</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
  <section id="fh5co-projects">
    <div class="container animate-box">
    <div class="row">
    <form method="post" action="../result.php">
      <div class="col-md-12">
        <div class="form-group">
          <input type="button" class="btn btn-outline btn-block" onclick="shuru()" value="使用默认文字">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input id="con1" name="con1" type="text" class="form-control" placeholder="请输入网页标题">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con2" name="con2" type="text" class="form-control" placeholder="请输入起首语">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea id="con3" name="con3" type="text" class="form-control textarea" rows="5" placeholder="请输入表白第一段话"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea id="con4" name="con4" type="text" class="form-control textarea" rows="5" placeholder="请输入表白第二段话"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea id="con5" name="con5" type="text" class="form-control textarea" rows="5" placeholder="请输入表白第三段话"></textarea>
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con6" name="con6" type="text" class="form-control" placeholder="请输入文章底部信息">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          	<div id="fh5co-subscribe" class="input-append date form_datetime" data-picker-position="bottom-left">
            	<input id="con7" name="con7" type="text" class="form-control" placeholder="请输入相识日期">
            	<span class="add-on"><i class="fh5co-icon icon-th"></i></span>
    		</div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div id="fh5co-subscribe">
            <input id="con8" name="con8" type="text" class="form-control" placeholder="请输入背景音乐URL地址">
            <input type="button" value="获取音乐" class="btn btn-primary" onclick="window.open('../yinyue.php','_blank')">
          </div>
        </div>
      </div>
      <div class="col-md-12">
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="立即制作">
          </div>
      </div>
      </form>
    </div>
  </section>
	<script>
        function shuru(){
            var con1=document.getElementById('con1');
            var con2=document.getElementById('con2');
            var con3=document.getElementById('con3');
            var con4=document.getElementById('con4');
			var con5=document.getElementById('con5');
			var con6=document.getElementById('con6');
			var con7=document.getElementById('con7');
			var con8=document.getElementById('con8');
            con1.value='爱心计时表白网页';
            con2.value='亲爱的宝贝：';
            con3.value='只有在你的微笑里，我才有呼吸，还贪恋着你的风情，诱惑着你的神秘，埋葬了我的爱情，脉脉之情如一溪春水，快刀难斩断，随着天各一方的时间越来越长，我的思念也越来越深，我很想找一个万籁俱寂的深夜或一个阳光明媚的早晨，把许多心底的惆怅、寂寞向你倾诉。某某，我们的故事是最感人，最真实的，早安，我永恒的爱人，虽然我尚未起床，但思想已经飞到你的身边来了，不管今世也好来世也好，我所要的只有你。我要与你同坐在有着月光的草坪上，一起遥望着繁星点缀的夜空，讲述那人间古老的爱情神话。人生不止，寂寞不已。寂寞人生爱无休，寂寞是爱永远的主题。';
            con4.value='某某，在这没有月的漆黑的夜里，我独自坐在窗前写着这封信，希望睡前可以吻你；希望睡时可以抱着你；希望醒来可以看到你，有你的日子，一切都是那么美好，风和日丽，鲜花遍地；没你的日子，白昼是那么的黯淡，黑夜是那么的漫长。你的话已经锁在我的记忆里了，那钥匙你就替我保管一辈子吧。';
			con5.value='某某，保留一个最浪漫的故事，给你一声祝福，一个kiss，爱你直到永远！某某，理解我吗？我不是弱智，但我会傻傻的爱你到永远。某某，我只想和你白头到老，美轮美奂的你编织着神话，创造着奇迹，只因让我遇到你。接受我，好吗？';
			con6.value='--某某某';
			con7.value='2017-01-01';
			con8.value='https://music.163.com/song/media/outer/url?id=35847037.mp3';
        }
    </script> 
  <!-- END #fh5co-projects -->
  <div id="fh5co-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="fh5co-lead animate-box"><?php echo htmlspecialchars(urldecode($tsbt)); ?></h2>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext1)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext2)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext3)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext4)); ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- END #fh5co-info --> <?php include("../footer.php"); ?>
  <!-- END #fh5co-footer --> 
</div>
<!-- END #fh5co-page --> 

<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="../js/vip.js"></script>
<!-- jQuery --> 
<script src="../js/jquery.min.js"></script> 
<!-- Bootstrap Date  -->
<script src="../js/bootstrap-datetimepicker.js"></script> 
<script src="../js/bootstrap-datetimepicker.zh-CN.js"></script> 
<script type="text/javascript">
 $(".form_datetime").datetimepicker({
      　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    })
</script> 

<!-- jQuery Easing --> 
<script src="../js/jquery.easing.1.3.js"></script> 
<!-- Bootstrap --> 
<script src="../js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="../js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="../js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="../js/jquery.magnific-popup.min.js"></script> 
<script src="../js/magnific-popup-options.js"></script> 

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="../js/jquery.style.switcher.js"></script> 


<!-- Main JS (Do not remove) --> 
<script src="../js/main.js"></script> 

<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	--> 
<script src="../js/jquery.cookie.js"></script> 
<script>
		$(function(){

			if ( $.cookie('layoutCookie') != '' ) {
				$('body').addClass($.cookie('layoutCookie'));
			}

			$('a[data-layout="boxed"]').click(function(event){
				event.preventDefault();
				$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
				$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
			});

			$('a[data-layout="wide"]').click(function(event){
				event.preventDefault();
				$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
				$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
			});
		});
	</script>
<!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog"> 
    <div class="modal-content logintc"> 
     <ul id="myTab" class="nav nav-tabs"> 
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
      <li class="active"> <a href="#gblogin" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>贵宾登录</a> </li> 
      <li><a href="#update" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>修改密码</a></li> 
     </ul> 
     <div id="myTabContent" class="tab-content"> 
      <div class="tab-pane fade in active" id="gblogin"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="login" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入登录账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入登录密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
			<label class="baoliu">
			<input type="checkbox" name="loginbl">登入保留一星期 
			</label>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="button" class="btn btn-default" onclick="window.open('../zhuce.php','_blank')" value="注册账户" /> 
            <input type="submit" class="btn btn-primary" value="立即登录" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
      <div class="tab-pane fade" id="update"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="update" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入旧密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="请输入新密码" maxlength="30" required /> 
			<span class="help-block text-center">（小提示：密码忘记将无法找回，请慎重设置。）</span>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="submit" class="btn btn-primary" value="立即修改" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button> 
     </div> 
    </div> 
   </div> 
  </div>
</body>
</html>
