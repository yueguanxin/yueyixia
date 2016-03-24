<?php
	include('common/shezhi_header.php');
?>


  <div class="span10">
    <div class="right-container">
      <h4 class="right-title">绑定邮箱</h4>
      <p class="user-weixin-connection-desc">
        绑定后，我们可以更加方便的告知您好玩的景点，接受订单通知，查看订单详情以及提交新订单。<br>
        如果绑定失败，说明此邮箱登录过或绑定过其它账号，请先用邮箱登录，解绑后，再绑定此账号。
      </p>
	<?php
		if($arr['is_yanzheng']==0){
	?>
        <div class="user-binding-weixin-desc">
          <span class="yicon-binding-weixin"> </span>
          未绑定
        </div>


          <div class="controls">
              <font size="4" color="">请输入您的邮箱号：</font>
            <input class="span2"  name="email" id='email' placeholder="请输入您的邮箱号" size="30" type="text">
          </div>
       
        <a href="javascript:void(0)" class="user-binding-weixin-link" onclick='dianji()'>点击绑定</a> 
		<script type="text/javascript">
			function dianji(){
			email=$('#email').attr('value');
			$.get('/send',{email:email},function(data){
				alert(data);
			});
		}
		</script>
    </div>
  </div>
</div>
<?php
  }else if($arr['is_yanzheng']==1){
	?>
	<div class="user-binding-weixin-desc">
          未验证，已经绑定
        </div>
		<div class="user-binding-weixin-desc">
		邮箱号为：<?php echo $arr['u_email']?>
		<a href='/send?email=<?php echo $arr['u_email']?>'>点击验证</a>
		  </div>
	<?php
	}else if($arr['is_yanzheng']==2){
	?>
	<div id='updata_list'>
		<div class="user-binding-weixin-desc">
         已经验证
        </div>
		<div class="user-binding-weixin-desc">
		邮箱号为：<?php echo $arr['u_email']?>
		<a href='javascript:void(0)' id='email_updata'>点击修改</a>
		  </div>
		  </div>
	<?php
	
	}?>
<script type="text/javascript">
	$('#email_updata').click(function(){
		$('#updata_list').html('  <div class="user-binding-weixin-desc"></div><div class="controls">   <font size="4" color="">请输入您的邮箱号：</font> <input class="span2"  name="email" id="email" placeholder="请输入您的邮箱号" size="30" type="text">   </div> <a href="javascript:void(0)" class="user-binding-weixin-link" onclick="dianji()">点击绑定</a> ');
	});



		function dianji(){
			email=$('#email').attr('value');
			$.get('/send',{email:email},function(data){
				alert(data);
			});
		}
</script>
    </div>


    
<div class="footer print-hide">
  <div class="footer__wrap">
    <div class="footer__video">
      <a href="http://www.fishtrip.cn/about_dayu">
        <img alt="大鱼自助游" src="img/shouye/footer-video.jpg" title="鱼行天下（北京）旅行社有限公司" height="170" width="270">
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
          <img alt="Logo-app" src="img/shouye/logo-app.png" height="85" width="85">
        </div>
        <div class="famodal__qrcode" style="text-align: center">
          <img alt="Qr-v4" src="img/shouye/qr-v4.png" height="130" width="130">
        </div>
        <div class="famodal__tips">
          <a href="https://itunes.apple.com/cn/app/da-yu-tai-wan-min-su-ri-ben/id975030554?mt=8" class="fwmodal__iOS">iPhone</a>
          <a href="http://www.fishtrip.cn/app/hunter_fishtrip_v2.6.1.apk" class="fwmodal__android">Android</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
	include('common/shezhi_footer.php');
?>