<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>我的好友</title>
		<link rel="icon" href="http://www.tuling123.com/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/chat/reset.css">
		<link rel="stylesheet" href="css/chat/proexp.css">
		<!--<link rel="stylesheet" href="css/chat/top.css">
		<link rel="stylesheet" href="css/chat/footer.css">-->
		<link rel="stylesheet" type="text/css" href="js/chat/css/chat.css" />
		<script type="text/javascript" src="js/chat/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/chat/js/chat.js"></script>


		<link href="./css/base.js_aio_0cb90d5.css" media="screen" rel="stylesheet" type="text/css">
		<link href="./css/common.js_aio_9210fe5.css" media="screen" rel="stylesheet" type="text/css">
		<link href="./css/vdayu_v3_common-aa2f062855761829c69f2e416e9c00d6.css" media="all" rel="stylesheet" type="text/css">
		<link href="./css/vdayu_v3-a8dd63511d5c6524f118aaf71c13076f.css" media="all" rel="stylesheet" type="text/css">
		<link href="css/chat/base.css" rel="stylesheet" type="text/css">
		<style>
			.modal{position: fixed;top: 0;left: 0;width: 100%;height: 100%;overflow: auto;z-index: 20;display: none;}.modal .bg{width: 100%;position: fixed;top: 0;right: 0;bottom: 0;left: 0;z-index: 15;background: #000;filter: alpha(opacity=50);opacity: 0.5;}.modal .modal_text{width:600px;position:absolute;z-index:20;left:50%;top:150px;margin-left:-300px;background:#fff;border-radius:6px;box-shadow:0 5px 15px rgba(0, 0, 0, .5);}.modal .modal_text .head{padding: 15px;border-bottom: 1px solid #e5e5e5;}.modal .modal_text .head h1{text-align:center;height:25px;line-height:25px;font-size:18px;}.modal .modal_text .head button{float: right;border: 0;width: 25px;height: 25px;cursor:pointer;background: none;}.modal .modal_text .text{padding: 15px;}.modal .modal_text .text p{height:20px;font-size:14px;color:#428bca;cursor:pointer;text-align:center;margin:0 0 10px;}.modal .modal_text .text p a{color:#428bca;text-decoration: none;}.modal .modal_text .text p a:hover{text-decoration: underline;}
		</style>
		<script type="text/javascript" src="js/chat/jquery-1.js"></script>
		<script type="text/javascript" src="js/chat/base.js"></script>
	<style>
		#header{
			width: 100%;
			height: 85px;
			position: static;
			background: #FFF none repeat scroll 0% 0%;
			box-shadow: 0px 0px 5px #CCC;
		}
	</style>
	</head>

	<body onload="setfocus()">
		<script type="text/javascript" src="js/chat/browser.js"></script>
<!--头部包含开始-->
<?php
	include('common/head.php');
?>
<!---头部包含结束-->
<!-- 意见反馈 -->
<div class="sideFeedback_z"></div>
<!-- 意见反馈弹出层 -->
<div class="bgFeedback_z" style="display:none">
    <div class="opinion opinion1">
        <span class="delet"></span>
        <h3>意见反馈</h3>
        <textarea placeholder="需登录后才可提交意见反馈..." maxlength="600"></textarea>
        <span class="sub">提 交</span>
    </div>
    <div class="opinion opinion2" style="display:none">
        您的意见已收到，感谢您的关注。
    </div>
    <div class="opinion opinion3" style="display:none">
        请5分钟之后再提哦~
    </div>
</div>
<script>
    $(function () {
        $('.header_nav li').eq(0).append(
                $('<ul>').addClass('uls')
                        .append(
                                $('<li>').append(
                                        $('<a>').addClass('icon1').attr('href', '/html/doc/virtual_robot.html').html('虚拟机器人')
                                )
                        ).append(
                        $('<li>').append(
                                $('<a>').addClass('icon2').attr('href', '/html/doc/intelligent_robot.html').html('智能硬件机器人')
                        )
                )
        );

        //判断会员是否登录
        /*$.ajax({
            url: "
        /web/member!ajaxMemberVerify.action",
                    type: "POST",
                    dataType: "json",
                    //async: false,
                    cache: false,
                    success: function(data) {
                        if (data.status) {
                            //已登录
                            $('.login').remove();
                            $('.zhuce').remove();
                            $('.gerenzhongxin').show();
                        } else {
                            //未登录
                            $('.gerenzhongxin').hide();
                        }
                    }
                });*/

        $(window).scroll(function () {
            top = $('body').scrollTop();
            if (top >= '110') {
                $('#header').css({
                    'background': 'rgba(255,255,255,0.95)'
                });
            } else {
                $('#header').css({
                    'background': 'rgba(255,255,255,1)'
                });
            }
        })

    });
    var webtuling = {
        header: function () {
            $('.header .header_nav li').on('mouseover', function () {
                $(this).addClass('on');
                $(this).children('.uls').show();
            });
            $('.header .header_nav li').on('mouseout', function () {
                $(this).removeClass('on');
                $(this).children('.uls').hide();
            });
            return this;
        }
    }
    webtuling.header();

    // 意见反馈
    if (typeof(variableName) == "undefined") {
        //变量loginStatus未定义
        $.ajax({
            url: "/web/member!ajaxMemberVerify.action",
            type: "POST",
            dataType: "json",
            //async: false,
            cache: false,
            success: function (data) {
                loginStatus = data.status;
                if (data.status) {
                    //已登录
                    $('.login').hide();
                    $('.zhuce').hide();
                    $('.gerenzhongxin').show();
                } else {
                    //未登录
                    $('.gerenzhongxin').hide();
                    $('.login').show();
                    $('.zhuce').show();
                }
            }
        });
    }
    function sideFeedback_z() {
        //意见反馈按钮，点击弹出
        $('.sideFeedback_z').click(function () {
            $('.bgFeedback_z').show();
            $('.opinion1').show();
            $('.opinion1 textarea').val('');
            $('.opinion2').hide();
            $('.opinion3').hide();
            if (loginStatus) {
                $('.sub').css('background', '#3cb1e7');
                $('.opinion1 textarea').attr('disabled', false);
                $('.opinion1 textarea').attr('placeholder', '请随意吐槽...');
                $('.sub').on('mouseover',function(){
                    $(this).css('background','#54c4f8')
                })
                $('.sub').on('mouseout',function(){
                    $(this).css('background','#3cb1e7')
                })
            } else {
                /*未登录*/
                $('.sub').css('background', '#cbcdce');
                $('.opinion1 textarea').attr('disabled', true);
                $('.opinion1 textarea').attr('placeholder', '需登录后才可提交意见反馈...');
            }
        })
        //弹出层右上角关闭按钮
        $('.opinion1 .delet').click(function () {
            $('.bgFeedback_z').hide();
        })
        //弹出层登录按钮
        var onOff = true;
        $('.sub').click(function () {
            if (loginStatus && onOff) {
                var $val = $('.opinion1 textarea').val();
                val = $.trim($val);
                //发送反馈
                if (val != '') {
                    onOff = false;
                    var feedbackSendStatus = false;//发送成功标识
                    $.ajax({//同步ajax方法
                        url: "/web/feedback!ajaxAddFeedback.action",
                        type: "POST",
                        dataType: "json",
                        data: {"feedback.info": val},
                        async: true,
                        cache: false,
                        success: function (data) {
                            feedbackSendStatus = data.status;
                            if (data.status) {
                                $('.opinion2').show();
                                $('.opinion1').hide();
                                $('.opinion3').hide();
                                setTimeout(function () {
                                    $('.bgFeedback_z').hide();
                                    $('.opinion2').hide();
                                }, 2000)
                            } else {
                                $('.opinion3').show();
                                $('.opinion1').hide();
                                $('.opinion2').hide();
                                setTimeout(function () {
                                    $('.bgFeedback_z').hide();
                                    $('.opinion3').hide();
                                }, 2000)
                            }
                            onOff = true;
                        }
                    });


                }
            }

        })
    }
    ;
    sideFeedback_z();
</script>






	<script>
	$(function(){
		
		//判断会员是否登录
		$.ajax({
			url: "/web/member!ajaxProexpMemberVerify.action",
			type: "POST",
			dataType: "json",
			//async: false,
			cache: false,
			success: function(data) {
				if (data.status == 'success') {
					//已登录
					$('.login').hide();
					$('.zhuce').hide();
					$('.gerenzhongxin').show();
					if(data.message == ""){
						apd =  	"<div class='left''><div class='text'><i></i><span>和图灵机器人来聊聊吧~</span></div></div>";
						$("#kefu_text").append(apd);
					}else{
						apd =  	"<div class='left''><div class='text'><i></i><span>和"+ data.message +"来聊聊吧~</span></div></div>";
						$("#kefu_text").append(apd);
					}					
				} else {
					//未登录
					$('.gerenzhongxin').hide();
					$('.login').show();
					$('.zhuce').show();
					apd =  	"<div class='left''><div class='text'><i></i><span>和图灵机器人来聊聊吧~</span></div></div>";
					$("#kefu_text").append(apd);
				}
			}
		});
	});
	</script>
		<div class="modal">
			<div class="modal_text">
				<div class="head">
					<button>×</button>
					<h1>你可以这样问我</h1>
				</div>
				<div class="text" id="modal">
					<p><a href="#">1</a></p>
					<p><a href="#">1</a></p>
				</div>
			</div>
			<div class="bg"></div>
		</div>
		<input type="hidden" class="username" value="<?php echo $uname?>"/>
		<div id="wrap1" class="wrap">
			<div class="m-pro-exp">
				<h1>交友聊天平台</h1>
				<!--<div class="exp_left">
					<div class="box" id="box">
						<div id="kefu_text">
							
						<div class="left" '=""><div class="text"><i></i><span>和图灵机器人来聊聊吧~</span></div></div></div>
					</div>
					<div class="text_btn">
					<div class="textareaWapper_z">
						<textarea id="text"></textarea>
					</div>
						<input id="btn" value="发送" type="button">
					</div>
				</div>-->
				<!--左侧聊天-->
				<div class="chatLeft">
                <div class="chat01">
                    <div class="chat01_title">
                        <ul class="talkTo">
                            <li><a href="javascript:;"></a></li></ul>
                        <a class="close_btn" href="javascript:;"></a>
                    </div>
                    <div class="chat01_content">
                        <div class="message_box mes1">
                        </div>
                        <div class="message_box mes2">
                        </div>
                        <div class="message_box mes3" style="display: block;">
                        </div>
                        <div class="message_box mes4">
                        </div>
                        <div class="message_box mes5">
                        </div>
                        <div class="message_box mes6">
                        </div>
                        <div class="message_box mes7">
                        </div>
                        <div class="message_box mes8">
                        </div>
                        <div class="message_box mes9">
                        </div>
                        <div class="message_box mes10">
                        </div>
                    </div>
                </div>
                <div class="chat02">
                    <div class="chat02_title">
                        <a class="chat02_title_btn ctb01" href="javascript:;"></a><a class="chat02_title_btn ctb02"
                            href="javascript:;" title="选择文件">
                            <embed width="15" height="16" flashvars="swfid=2556975203&amp;maxSumSize=50&amp;maxFileSize=50&amp;maxFileNum=1&amp;multiSelect=0&amp;uploadAPI=http%3A%2F%2Fupload.api.weibo.com%2F2%2Fmss%2Fupload.json%3Fsource%3D209678993%26tuid%3D1887188824&amp;initFun=STK.webim.ui.chatWindow.msgToolBar.upload.initFun&amp;sucFun=STK.webim.ui.chatWindow.msgToolBar.upload.sucFun&amp;errFun=STK.webim.ui.chatWindow.msgToolBar.upload.errFun&amp;beginFun=STK.webim.ui.chatWindow.msgToolBar.upload.beginFun&amp;showTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.showTipFun&amp;hiddenTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.hiddenTipFun&amp;areaInfo=0-16|12-16&amp;fExt=*.jpg;*.gif;*.jpeg;*.png|*&amp;fExtDec=选择图片|选择文件"
                                data="upload.swf" wmode="transparent" bgcolor="" allowscriptaccess="always" allowfullscreen="true"
                                scale="noScale" menu="false" type="application/x-shockwave-flash" src="http://service.weibo.com/staticjs/tools/upload.swf?v=36c9997f1313d1c4"
                                id="swf_3140">
                        </a><a class="chat02_title_btn ctb03" href="javascript:;" title="选择附件">
                            <embed width="15" height="16" flashvars="swfid=2556975203&amp;maxSumSize=50&amp;maxFileSize=50&amp;maxFileNum=1&amp;multiSelect=0&amp;uploadAPI=http%3A%2F%2Fupload.api.weibo.com%2F2%2Fmss%2Fupload.json%3Fsource%3D209678993%26tuid%3D1887188824&amp;initFun=STK.webim.ui.chatWindow.msgToolBar.upload.initFun&amp;sucFun=STK.webim.ui.chatWindow.msgToolBar.upload.sucFun&amp;errFun=STK.webim.ui.chatWindow.msgToolBar.upload.errFun&amp;beginFun=STK.webim.ui.chatWindow.msgToolBar.upload.beginFun&amp;showTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.showTipFun&amp;hiddenTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.hiddenTipFun&amp;areaInfo=0-16|12-16&amp;fExt=*.jpg;*.gif;*.jpeg;*.png|*&amp;fExtDec=选择图片|选择文件"
                                data="upload.swf" wmode="transparent" bgcolor="" allowscriptaccess="always" allowfullscreen="true"
                                scale="noScale" menu="false" type="application/x-shockwave-flash" src="http://service.weibo.com/staticjs/tools/upload.swf?v=36c9997f1313d1c4"
                                id="swf_3140">
                        </a>
                        <label class="chat02_title_t">
                            <a href="chat.htm" target="_blank">聊天记录</a></label>
                        <div class="wl_faces_box">
                            <div class="wl_faces_content">
                                <div class="title">
                                    <ul>
                                        <li class="title_name">常用表情</li><li class="wl_faces_close"><span>&nbsp;</span></li></ul>
                                </div>
                                <div class="wl_faces_main">
                                    <ul>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_01.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_02.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_03.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_04.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_05.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_06.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_07.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_08.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_09.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_10.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_11.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_12.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_13.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_14.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_15.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_16.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_17.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_18.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_19.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_20.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_21.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_22.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_23.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_24.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_25.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_26.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_27.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_28.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_29.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_30.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_31.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_32.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_33.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_34.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_35.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_36.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_37.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_38.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_39.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_40.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_41.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_42.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_43.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_44.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_45.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_46.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_47.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_48.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_49.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_50.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_51.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_52.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_53.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_54.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_55.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_56.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_57.gif" /></a></li>
                                        <li><a href="javascript:;">
                                            <img src="img/userlogo/img/emo_58.gif" /></a></li><li><a href="javascript:;">
                                                <img src="img/userlogo/img/emo_59.gif" /></a></li><li><a href="javascript:;">
                                                    <img src="img/userlogo/img/emo_60.gif" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wlf_icon">
                            </div>
                        </div>
                    </div>
                    <div class="chat02_content">
                        <textarea id="textarea"></textarea>
                    </div>
                    <div class="chat02_bar">
                        <ul>
                            <li style="left: 20px; top: 10px; padding-left: 30px;">聊天桌面，24小时在线为您服务！</li>
                            <li style="right: 5px; top: 5px;"><a href="javascript:;">
                                <img src="img/userlogo/img/send_btn.jpg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
				<!--左侧聊天结束
				<div class="exp_right">
					<ul>
						<li height="40px">我的好友</li>
					</ul>
				</div>-->
				<!--右侧好友栏-->
				<div class="chatRight">
                <div class="chat03">
				<div class="chat03_title">
					<label class="chat03_title_t">
						好友列表</label>
				</div>
				<div class="chat03_content">
                        <ul>
						<?php foreach($friend as $fk=>$fv){?>
                            <li>
                                <label class="online">
                                </label>
                                <a href="javascript:;"><img src="img/userlogo/<?php echo $fv['uimg']?>"></a>
								<a href="javascript:;" class="chat03_name">
								<?php 
									echo $fv['uname'];
								?>
								</a>
								<?php
									$i=0;
									foreach($chat as $ck=>$cv){
										if($fv['uid']==$cv['uid']){
											$i++;
										}
									}
									if($i!=0){
								?>
									<span class="unread" value="1" style='margin-left:50px;line-height:29px;color:#33ccff'>(未读消息：<?php echo $i?>)</span>		
								<?php
									}
									echo "<span style='margin-left:50px;line-height:29px;color:#33ccff'></span>";
								?>
								<!--<span class="unread" value="1" style='margin-left:50px;line-height:29px;color:#33ccff'>(未读消息：<?php echo $fv['uid']?>)</span>-->
                            </li>
						<?php }?>
                        </ul>
                    </div>
					</div>
            </div>
			<div style="clear: both;">
            </div>
				<!--右侧好友栏结束-->
			</div>
<div id="wrap" class="wrap">
<!--底部包含-->
<div class="footer print-hide">
  <div class="footer__wrap">
    <div class="footer__video">
      <a href="http://www.fishtrip.cn/about_dayu">
        <img alt="大鱼自助游" src="img/footer-video.jpg" title="鱼行天下（北京）旅行社有限公司" height="170" width="270">
</a>    </div>
    <div class="footer__lists">
        <div class="footer__list  footer-list">
          <div class="flist__title">
            公司
          </div>
          <div class="flist__content fishui-list--horizontal">
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/about_dayu/" target="_blank">关于我们</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/about_us/" target="_blank">团队成员</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/jobs/" target="_blank">加入大鱼</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/contact/" target="_blank">联系我们</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/news/" target="_blank">媒体报道</a>
              </div>
          </div>
        </div>
        <div class="footer__list  footer-list">
          <div class="flist__title">
            服务
          </div>
          <div class="flist__content fishui-list--horizontal">
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/activities/V-80P_8ejs8" target="_blank">入台证办理</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/services/#consult" target="_blank">免费推荐</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/services/#vip" target="_blank">私人定制</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/services/#group" target="_blank">团体客户</a>
              </div>
          </div>
        </div>
        <div class="footer__list  footer-list">
          <div class="flist__title">
            特色
          </div>
          <div class="flist__content fishui-list--horizontal">
              <div class="flist__item">
                <a href="javascript:;" class="js-show-app-modal" rel="nofollow">大鱼APP</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/app/" target="_blank">入台证神器</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/hunter/" target="_blank">大鱼旅行猎人计划</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/shareholder/" target="_blank">大鱼股东计划</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/articles/" target="_blank">大鱼出品</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/fishcafe/" target="_blank">大鱼咖啡</a>
              </div>
          </div>
        </div>
        <div class="footer__list  footer-list">
          <div class="flist__title">
            帮助中心
          </div>
          <div class="flist__content fishui-list--horizontal">
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/help_centers/user/" target="_blank">旅行预订相关</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/help_centers/retailer/" target="_blank">供应商相关</a>
              </div>
              <div class="flist__item">
                <a href="http://www.fishtrip.cn/tos/" target="_blank">服务条款</a>
              </div>
              <div class="flist__item">
                <a href="tel:4001851616" target="_blank">400-185-1616</a>
              </div>
          </div>
        </div>
        <div class="footer__list footer__list--last footer-list">
          <div class="flist__title">
            关注
          </div>
          <div class="flist__content fishui-list--horizontal">
              <div class="flist__item">
                <a title="" data-original-title="" href="javascript:;" class="js-show-weixin-popover" rel="nofollow">大鱼自助游@微信</a>
              </div>
              <div class="flist__item">
                <a href="http://weibo.com/fishtripcn" rel="nofollow" target="_blank">大鱼@weibo</a>
              </div>
              <div class="flist__item">
                <a href="http://site.douban.com/209352/" rel="nofollow" target="_blank">大鱼@豆瓣</a>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<a href="javascript:;" class="footer-backtop js-backtop"><i class="iconfont icon-backtop"></i></a>


<div class="modal fade footer-app-modal js-footer-app-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <i class="famodal__close js-close-footer-modal"></i>
        <p class="famodal__title">下载大鱼APP，下单立减20元</p>
        <div class="famodal__icon">
          <img alt="Logo-app" src="img/logo-app.png" height="85" width="85">
        </div>
        <div class="famodal__qrcode" style="text-align: center">
          <img alt="Qr-v4" src="img/qr-v4.png" height="130" width="130">
        </div>
        <div class="famodal__tips">
          <a href="https://itunes.apple.com/cn/app/da-yu-tai-wan-min-su-ri-ben/id975030554?mt=8" class="fwmodal__iOS">iPhone</a>
          <a href="http://www.fishtrip.cn/app/hunter_fishtrip_v2.5.0.apk" class="fwmodal__android">Android</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer-misc-group">
  <div class="fmgroup__wrap">
    <div class="fmgroup__item">
        <div class="footer-sitemap">
    <div class="fsitemap__item footer-sitemap-item">
      <div class="fsitem__label">
        大鱼导航
      </div>
      <div class="fsitem__content">
          <a href="http://www.fishtrip.cn/taiwan/" class="fsitem__link" target="_blank">台湾民宿</a>
          <a href="http://www.fishtrip.cn/japan/" class="fsitem__link" target="_blank">日本民宿</a>
          <a href="http://www.fishtrip.cn/thailand/" class="fsitem__link" target="_blank">泰国民宿</a>
          <a href="http://www.fishtrip.cn/korea/" class="fsitem__link" target="_blank">韩国民宿</a>
      </div>
    </div>

      <div class="fsitemap__item footer-sitemap-item">
        <div class="fsitem__label">
          台湾民宿
        </div>
        <div class="fsitem__content">
            <a href="http://www.fishtrip.cn/taiwan/taibei/" class="fsitem__link" target="_blank">台北民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/nantou/" class="fsitem__link" target="_blank">南投民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/xinbei/" class="fsitem__link" target="_blank">新北民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/yilan/" class="fsitem__link" target="_blank">宜兰民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/hualian/" class="fsitem__link" target="_blank">花莲民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/gaoxiong/" class="fsitem__link" target="_blank">高雄民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/taizhong/" class="fsitem__link" target="_blank">台中民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/jiayi/" class="fsitem__link" target="_blank">嘉义民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/taidong/" class="fsitem__link" target="_blank">台东民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/taoyuan/" class="fsitem__link" target="_blank">桃园民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/tainan/" class="fsitem__link" target="_blank">台南民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/xinzhu/" class="fsitem__link" target="_blank">新竹民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/miaoli/" class="fsitem__link" target="_blank">苗栗民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/zhanghua/" class="fsitem__link" target="_blank">彰化民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/kending/" class="fsitem__link" target="_blank">垦丁民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/jiufen/" class="fsitem__link" target="_blank">九份民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/qingjingnongchang/" class="fsitem__link" target="_blank">清境农场民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/riyuetan/" class="fsitem__link" target="_blank">日月潭民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/alishan/" class="fsitem__link" target="_blank">阿里山民宿</a>
            <a href="http://www.fishtrip.cn/taiwan/outer-island/" class="fsitem__link" target="_blank">离岛民宿</a>
        </div>
      </div>
      <div class="fsitemap__item footer-sitemap-item">
        <div class="fsitem__label">
          泰国民宿
        </div>
        <div class="fsitem__content">
            <a href="http://www.fishtrip.cn/thailand/bangkok/" class="fsitem__link" target="_blank">曼谷民宿</a>
            <a href="http://www.fishtrip.cn/thailand/chiang-mai/" class="fsitem__link" target="_blank">清迈民宿</a>
            <a href="http://www.fishtrip.cn/thailand/krabi/" class="fsitem__link" target="_blank">甲米民宿</a>
            <a href="http://www.fishtrip.cn/thailand/phuket/" class="fsitem__link" target="_blank">普吉岛民宿</a>
            <a href="http://www.fishtrip.cn/thailand/pattaya/" class="fsitem__link" target="_blank">芭提雅民宿</a>
            <a href="http://www.fishtrip.cn/thailand/pai/" class="fsitem__link" target="_blank">拜县民宿</a>
            <a href="http://www.fishtrip.cn/thailand/koh-samui/" class="fsitem__link" target="_blank">苏梅岛民宿</a>
        </div>
      </div>
      <div class="fsitemap__item footer-sitemap-item">
        <div class="fsitem__label">
          韩国民宿
        </div>
        <div class="fsitem__content">
            <a href="http://www.fishtrip.cn/korea/seoul/" class="fsitem__link" target="_blank">首尔民宿</a>
            <a href="http://www.fishtrip.cn/korea/busan/" class="fsitem__link" target="_blank">釜山民宿</a>
        </div>
      </div>
    
    <div class="fsitemap__item footer-sitemap-item">
      <div class="fsitem__label">
        快速入口
      </div>
      <div class="fsitem__content">
        <a href="http://www.fishtrip.cn/collections/" class="fsitem__link" target="_blank">大家喜欢</a>
        <a href="http://www.fishtrip.cn/hunter/" class="fsitem__link" target="_blank">大鱼旅行猎人</a>
        <a href="http://www.fishtrip.cn/shareholder/" class="fsitem__link" target="_blank">大鱼股东计划</a>
      </div>
    </div>
  </div>

    </div>
    <div class="fmgroup__item fmgroup__item--last">
      <div class="footer-copyright print-hide">
  <div class="fcopyright__container">
    <span>Copyright © fishtrip.cn 2013 All Rights Reserved </span>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <span>京ICP备12028711号</span>
    &nbsp;&nbsp;
    <span>京公安网备11010702000590</span>
    &nbsp;&nbsp;
    <span>鱼行天下（北京）旅行社有限公司</span>

      <a href="http://www.fishtrip.cn/search" class="fcopyright__logo">
        <span class="yicon-logo-gray"></span>
</a>  </div>
</div>

    </div>
  </div>
</div>

<a class="footer-agent js-footer-affix js-footer-agent">
  <div class="fagent__icon-block">
    <span class="yicon-help-weixin"></span>
  </div>
</a>

<div class="footer-agent-popover js-footer-agent-popover print-hide">
  <!--<a class="fapopover__close js-close-footer-agent">
    <span class="yicon-slide-right-blue"></span>
  </a>-->
  <div class="fapopover__title">
    大鱼微信客服
  </div>
  <div class="fapopover__qrcode">
    <img alt="大鱼微信客服" src="img/footer-weixin-qrcode.png" title="大鱼微信客服" height="106" width="106">
  </div>
  <div class="fapopover__tips">
    每日9:00~21:00
  </div>
</div>






<div class="footer-advertise js-footer-advertise is-active">
  <a href="http://www.fishtrip.cn/articles/157-new-year-coupon" class="gtm-ad fadvertise__image" target="_blank"></a>
  <a href="javascript:void(0);" class="fadvertise__close js-footer-advertise-close gtm-ad-close" data-url="http://www.fishtrip.cn/hide_footer_advertise">
    <span> × </span>
</a></div>



    <script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

    <script src="js/base.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script><div id="react-sessions-modal" style="display: none"><div class="react-sessions react-sessions-modal" id="sessions-modal-root" data-reactid=".0"></div></div>

    <script src="js/vdayu_v3-e6850c4b2d6cf420d92facf4a168e173.js" type="text/javascript"></script>
    <!--[if lte IE 9]>
      <script src="http://static04.fishtrip.cn/assets/ng/vdayu_ie-556e92d829dd48645eadf5768227720b.js" type="text/javascript"></script>
    <![endif]-->

      <script type="text/javascript">
  $(function(){
    HouseList.init();
  })
  </script>
<!--底部包含结束-->
<script type="text/javascript">
$(document).ready(function(){
	//alert(uname);
	setInterval("startRequest()",10000);
	//setInterval这个函数会根据后面定义的1000既每隔1秒执行一次前面那个函数
	//如果你用局部刷新，要用AJAX技术
});

	function startRequest(){
		$.get('/chat_unread',function(date){
			//alert(date);
			$(".chat03_content").html(date);
		})
	}
</script>
	
</div></div></body></html>