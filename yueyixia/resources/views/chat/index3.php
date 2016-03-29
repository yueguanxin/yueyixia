<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>产品体验</title>
		<link rel="icon" href="http://www.tuling123.com/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/chat/reset.css">
		<link rel="stylesheet" href="css/chat/proexp.css">
		<link rel="stylesheet" href="css/chat/top.css">
		<link rel="stylesheet" href="css/chat/footer.css">
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
<div style="background: rgba(255, 255, 255, 0.95) none repeat scroll 0% 0%;" id="header">
    <div class="header row">
        <div class="header_logo">
            <a href="http://www.tuling123.com/"><img src="js/chat/logo.png"></a>
        </div>
        <div class="header_nav">
            <ul>
                    <li>
                        <h1>
                            <a href="#">接入
                            </a>
                        </h1>
                    <ul class="uls"><li><a href="http://www.tuling123.com/html/doc/virtual_robot.html" class="icon1">虚拟机器人</a></li><li><a href="http://www.tuling123.com/html/doc/intelligent_robot.html" class="icon2">智能硬件机器人</a></li></ul></li>
                    <li>
                        <h1>
                            <a href="http://www.tuling123.com/plugin/proexp.html">产品体验
                            </a>
                        </h1>
                    </li>
                    <li>
                        <h1>
                            <a href="http://www.tuling123.com/html/doc/docs.html">文档&amp;下载
                            </a>
                        </h1>
                    </li>
                    <li>
                        <h1>
                            <a href="http://www.tuling123.com/web/member%21bbsing.action" target="_blank">社区
                            </a>
                        </h1>
                    </li>
            </ul>


            <div class="login" style="">
                <a href="http://www.tuling123.com/login.htm">登录</a>
            </div>
            <div class="zhuce" style="">
                <a href="http://www.tuling123.com/web/member%21registerFromPhone.action">注册</a>
            </div>

            <div class="gerenzhongxin" style="display:none;">
                <li class="news">
                    <h1></h1>
                    <div class="uls">
                        <ul class="geren">
                            <li>
                                <a href="http://www.tuling123.com/web/data_overview%21index.action">个人中心</a>
                            </li>
                            <li>
                                <a href="http://www.tuling123.com/web/member%21logout.action">退出登录</a>
                            </li>
                        </ul>
							<span class="pos">
								<div><img src="img/chat/icon118.png"></div>
							</span>
                    </div>
                </li>
            </div>
        </div>
    </div>
</div>
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
		<div id="wrap1" class="wrap">
			<div class="m-pro-exp">
				<h1>图灵机器人</h1>
				<div class="exp_left">
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
				</div>
				<div class="exp_right">
					<ul>
						<li>
							<img src="img/chat/icon146.png">
							<p>聊天</p>
						</li>
						<li>
							<img src="img/chat/icon147.png">
							<p>笑话</p>
						</li>
						<li>
							<img src="img/chat/icon148.png">
							<p>图片</p>
						</li>
						<li>
							<img src="img/chat/icon149.png">
							<p>天气</p>
						</li>
						<li>
							<img src="img/chat/icon150.png">
							<p>问答</p>
						</li>
						<li>
							<img src="img/chat/icon151.png">
							<p>百科</p>
						</li>
						<li>
							<img src="img/chat/icon152.png">
							<p>故事</p>
						</li>
						<li>
							<img src="img/chat/icon153.png">
							<p>新闻</p>
						</li>
						<li>
							<img src="img/chat/icon154.png">
							<p>菜谱</p>
						</li>
						<li>
							<img src="img/chat/icon155.png">
							<p>星座</p>
						</li>
						<li>
							<img src="img/chat/icon156.png">
							<p>凶吉</p>
						</li>
						<li>
							<img src="img/chat/icon157.png">
							<p>成语接龙</p>
						</li>
						<li>
							<img src="img/chat/icon158.png">
							<p>快递</p>
						</li>
						<li>
							<img src="img/chat/icon159.png">
							<p>飞机</p>
						</li>
						<li>
							<img src="img/chat/icon160.png">
							<p>列车</p>
						</li>
						<li>
							<img src="img/chat/icon161.png">
							<p>计算</p>
						</li>
					</ul>
				</div>
			</div>
<div id="wrap" class="wrap">
	<div class="footer">
		<div class="footer_box">
			<div class="left">
				<div class="left_l">
					<h1>关注我们</h1>
					<p class="margin">
						<a title="Facebook" href="https://www.facebook.com/turingrobot/"><img src="img/chat/icon198.png"></a>
						<a style="margin-left:13px;margin-right:13px;" title="Twitter" href="https://twitter.com/turing2016"><img src="img/chat/icon199.png"></a>
						<a title="LinkedIn" href="http://www.linkedin.com/company/10366133"><img src="img/chat/icon200.png"></a>
					</p>
					<p>QQ群: 431939098</p>
					<p>邮件: tuling123@uzoo.cn</p>
					<p><a style="margin-right:15px;" href="http://www.tuling123.com/html/doc/contact_us.html" target="_blank">联系我们</a><a href="http://www.tuling123.com/html/doc/About_us.html" target="_blank">关于我们</a></p>
				</div>
				<div class="left_r">
					<div class="b">
						<img src="img/chat/erweima.png">
						官方微信号
					</div>
				</div>
			</div>
			<div class="left">
				<h1>友情链接</h1>
				<div class="uls">
					<ul>

								<li>
									<a href="http://bbs.tuling123.com/" title="图灵机器人论坛" target="_blank">图灵机器人论坛</a>
								</li>
								<li>
									<a href="http://www.xiaoweirobot.com/" title="微信机器人" target="_blank">微信机器人</a>
								</li>
								<li>
									<a href="http://xfyun.cn/" title="讯飞开放平台" target="_blank">讯飞开放平台</a>
								</li>
								<li>
									<a href="http://www.weixinyunduan.com/" title="微讯云端" target="_blank">微讯云端</a>
								</li>
								<li>
									<a href="http://bbs.htc.com/" title="HTC论坛" target="_blank">HTC论坛</a>
								</li>
								<li>
									<a href="http://apistore.baidu.com/" title="API  Store" target="_blank">API  Store</a>
								</li>
								<li>
									<a href="http://www.rongcloud.cn/" title="融云即时通讯云" target="_blank">融云即时通讯云</a>
								</li>
								<li>
									<a href="http://cqp.cc/forum.php" title="酷Q社区" target="_blank">酷Q社区</a>
								</li>
								<li>
									<a href="http://www.apicloud.com/" title="APICloud" target="_blank">APICloud</a>
								</li>
								<li>
									<a href="http://www.javaapk.com/" title="JavaApk" target="_blank">JavaApk</a>
								</li>
								<li>
									<a href="http://yuyin.baidu.com/" title="百度语音" target="_blank">百度语音</a>
								</li>
								<li>
									<a href="http://www.jikexueyuan.com/" title="安卓开发" target="_blank">安卓开发</a>
								</li>
						
					</ul>
				</div>
			</div>
			<div class="left" style="margin-right:0;">
				<h1>联系电话</h1>
				<p>客服：010-56123776</p>
				<p>商务：010-58349447</p>
				<p>周一至周五 9:00-18:00</p>
				<p><a href="http://www.tuling123.com/web/applicant%21index.action" target="_blank">面试结果查询</a></p>
			</div>
		</div>
			<!-- <p>Powered by <a class="systemName" href="http://www.tuling123.com" target="_blank">TURING</a></p> -->
			<div class="foter_btn">
				<p>许可证号：京ICP备14018272号 &nbsp;&nbsp; 备案编号：京公网安备110108020115812号&nbsp;&nbsp;Copyright © 2015 图灵机器人 All rights Reserved <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000214860'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1000214860%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1000214860"><a href="http://www.cnzz.com/stat/website.php?web_id=1000214860" target="_blank" title="站长统计"><img src="img/chat/pic.gif" hspace="0" border="0" vspace="0"></a></span><script src="img/chat/z_stat.php" type="text/javascript"></script><script src="css/chat/core.php" charset="utf-8" type="text/javascript"></script></p>
			</div>
		</div>
		<script>
            //<![CDATA[
		$( function(){
			var showkey = [
			    {
			        "id": "聊天",
			        "value": ["你好，你是美女么？","挖掘机技术哪家强？"]
			    },
			    {
			        "id": "笑话",
			        "value": ["讲个笑话","冷笑话"]
			    },
			    {
			        "id": "图片",
			        "value": ["刘亦菲的图片"]
			    },
			    {
			        "id": "天气",
			        "value": ["北京今天的天气","北京今天的空气质量"]
			    },
			    {
			        "id": "问答",
			        "value": ["地球到月球的距离","感冒应该怎么办","虎皮鹦鹉吃什么"]
			    },
			    {
			        "id": "百科",
			        "value": ["百科周杰伦","李连杰的介绍"]
			    },
			    {
			        "id": "故事",
			        "value": ["讲个故事","讲个白雪公主的故事"]
			    },
			    {
			        "id": "新闻",
			        "value": ["我要看新闻","体育新闻","科技新闻","周杰伦的新闻"]
			    },
			    {
			        "id": "菜谱",
			        "value": ["红烧肉怎么做","辣子鸡丁的菜谱"]
			    },
			    {
			        "id": "星座",
			        "value": ["天蝎座明天的运势","现在是什么星座","今年属牛的运势"]
			    },
			    {
			        "id": "吉凶",
			        "value": ["解梦：梦到桃花怎么回事","周杰伦这个名字好不好","10086凶吉"]
			    },
			    {
			        "id": "成语接龙",
			        "value": ["开始成语接龙"]
			    },
			    {
			        "id": "快递",
			        "value": ["顺丰快递"]
			    },
			    {
			        "id": "飞机",
			        "value": ["明天从北京到上海的航班"]
			    },
			    {
			        "id": "列车",
			        "value": ["明天从北京到石家庄的火车"]
			    },
			    {
			        "id": "计算",
			        "value": ["3乘以5等于多少","25*25等多少"]
			    }
			];
			
			var str = "";
			$(".exp_right li").on("click", function(){
				var index = $(this).index();
				var len = showkey[index].value.length;
				for( var i = 0;i<len;i++ ){
					str +="<p><a onclick='subtest(this)' href='javascript:void(0)'>"+ showkey[index].value[i] +"</a></p>"
				}
				$("#modal").html( str );
				$(".modal").show().children(".bg").show();
				str = "";
			});
			$(".modal .head button").on("click", function(){
				$(".modal").hide();
			});
			
			//这里是点击确定
			$("#btn").on("click", function(){
				var test = $("#text").val();
				if( test == "" ){
					return false;
				};
				apd =  	"<div class='right''>\
							<div class='text'>\
								<i></i><span>"+ test +"</span>\
							</div>\
						</div>";
				$("#kefu_text").append(apd);
				//这里请求后台获取返回值
				submitvalues(test);
				$("#text").val("");
				//这个是获取高度让它一直在底部
				var height = $("#kefu_text").height();
				$("#box").scrollTop( height);
			});
			$("#text").on("keydown", function(e){
				var button = $("#btn");//新加
				e = e || window.event;
				var keys = e.keyCode;
				if( keys == "13" ){
					 button.click();
					 return false;
				};
			});
				
		});
	var a = $("#kefu_text");//信息展示框
	var b = $("#text");//输入框
	//设置光标默认在输入框内
	function setfocus() {
		var textarea = $('#text');
		textarea.focus();
	}
		
	function subtest(dom){
		var test = $(dom).html();
		apd =  	"<div class='right''>\
					<div class='text'>\
						<i></i><span>"+ test +"</span>\
					</div>\
				</div>";
		$("#kefu_text").append(apd);
	
		submitvalues(test);
		//这个是获取高度让它一直在底部
		var height = $("#kefu_text").height();
		$("#box").scrollTop( height);
		$('.modal').hide();
	}
		
	
	String.prototype.trim = function () { // 重写
		return this .replace(/^\s\s*/, '' ).replace(/\s\s*$/, '' );
	}
	
	function submitvalues(content){

		content = content.replace('+', "%2B");
	    content = content.replace('&', "%26");
	    content = content.replace('%', "%25");
		$.ajax({
			url: "/web/product_exp_new!result.action",
			data: {"info":content,"monitor": "monitor"},
			type: "POST",
			dataType: "xml",
			cache: false,
			success: function(data) {
				var xml = data;
				var type =  $(xml).find("MsgType").text();
				if("text" == type){
					getResult( xml, content, 0);
					var height = $("#kefu_text").height();
					$("#box").scrollTop( height);
				}else if("news" == type){
					getResult( xml, content, 1);
					var height = $("#kefu_text").height();
					$("#box").scrollTop( height);
				}else{
					errorresult();
					//$.dialog({type: "warn", content: "长时间未使用页面，请刷新后重新尝试", ok: "确 定", cancel: "取 消", modal: true, okCallback: reloads});
				}
			},
			error:function(){
				   errorresult();
                   //$.dialog({type: "warn", content: "长时间未使用页面，请刷新后重新尝试", ok: "确 定", cancel: "取 消", modal: true, okCallback: reloads});
			}
		});
	}
	//刷新页面
	function reloads(){
		location.reload();
	}
	//当ajax出错的时候
	function errorresult(){
		var li = $("<div/>").appendTo(a);
		li.attr({
			"class": "left",
		});
		var  div = $("<div/>").appendTo(li).attr({
			"class": "text"
		});
		$("<i/>").appendTo(div);
		var span = $("<span/>").appendTo(div);
		span.html("图灵机器人被外星人抓走了，请稍后再试~");
	}
	
	function getResult( xml, content, msgType){
		var text = $(xml).find("Content").text();
		var li = $("<div/>").appendTo(a);
		if(0 == msgType){// text类型的返回消息
			li.attr({
				"class": "left",
			});
			var  div = $("<div/>").appendTo(li).attr({
				"class": "text"
			});
			$("<i/>").appendTo(div);
			var span = $("<span/>").appendTo(div);
			span.html(text);
		}else if(1 == msgType){// news类型的返回消息
			li.attr({
				"class": "center_box"
			});
			$("<i/>").appendTo(li);
			getNews(xml, content, li);
		}
	}
	function getNews(xml, content, li){ // 拼接图文类的返回消息
		var robot_news = $("<div/>").appendTo(li).attr({
			"class": "center"
		});
		var articleCount = parseInt($(xml).find("ArticleCount").text());
		var items = $(xml).find("item");
		items.each(function(i, value){
			if(i<3){				
				var item = [ $(value).find("Title").text(), $(value).find("Description").text(),
				             $(value).find("PicUrl").text(), $(value).find("Url").text() ];
				var root = null;
			   getMoreNews(robot_news, i, articleCount, item);
			}
		});
	
	}
	
	function getMoreNews(robot_news, i, articleCount, item){
		var root = null;
		if(0==i){
			root = $("<a/>").appendTo(robot_news).attr({
				"href" : item[3],
				"style"  : "text-decoration:none;",
				"target" : "_blank"
			});
			var div_head = $("<div/>").appendTo(root).attr({
				"class" : "head"
			});
			var div_img = $("<div/>").appendTo(div_head).attr({
				"class" : "head_img"
			});
			$("<img/>").appendTo(div_img).attr({
				"src"   : item[2]||"..images/defaultFirst.jpg"
			});
			var div_text =$("<div/>").appendTo(div_head).attr({
				"class" : "head_text"
			});
			div_text.html(item[0]);			
		}else{
			root = $("<div/>").appendTo(robot_news).attr({
				"class" : "center_text"
			});
			var ab = $("<a/>").appendTo(root);
			if(item[3].length==0){
				ab.attr({
					"href" : "javascript:void(0);",
					"style"  : "text-decoration:none;"
				})
			}else{
				ab.attr({
					"href" : item[3],
					"target" : "_blank",
					"style"  : "text-decoration:none;"
				})
			}
			var div_desc = $("<div/>").appendTo(ab).attr({
				"class" : "center_lf"
			});
			div_desc.html(item[0]);
			var div_pic = $("<div/>").appendTo(root).attr({
				"class" : "center_rt"
			});
			$("<img/>").appendTo(div_pic).attr({
				"src"   : item[2]||"../images/default.jpg",
			});
		}
	}

		$('#text').on('scroll',function(){
			return false;
		})
            //]]>
		</script>
	
</div></div></body></html>