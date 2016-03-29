<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
<script src="" charset="utf-8"></script><script src="js/ec.js" async="" type="text/javascript"></script><script src="js/tracker_ex.js" async=""></script><script src="js/tracker.js" async=""></script><script src="js/analytics.js" async=""></script><script src="js/hm.js"></script><script type="text/javascript">window.BWEUM||(BWEUM={});BWEUM.info={"beacon":"bi-collector.oneapm.com/beacon/rum/ruby","errorBeacon":"bi-collector.oneapm.com/beacon/error/ruby","licenseKey":"J6YrM~vV2VrFaRj3","applicationID":2279631,"transactionName":"ExIBGTAnXyQgDzpeXCpYCyI3NVQILh4qUkE3WA0oNQ==","queueTime":0,"applicationTime":278,"agent":"//bi-collector.oneapm.com/static/js/bw-send-411.4.5.js"}</script>
<script type="text/javascript" src="js/bw-loader-411.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="author" content="webmaster@fishtrip.cn">
    <title>订单详情页</title>
    <link href="css/base.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/common.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/vdayu_ng_3rd-1280220e736dba2af9c4b5968cbea72d.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/vdayu_ng_base-f2b53f096b50d835e26668570ded24bb.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/vdayu_ng-021b3f0f8dbf9f2bf5806d836ea1f3f5.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/vdayu_v3_header-1eb11b2a4dda7fd4b43a1fea5fd30f85.css" media="all" rel="stylesheet" type="text/css">
    <meta content="authenticity_token" name="csrf-param">
<meta content="10AAkGWeD3MG+P1bZUHU7V16kleKGhoKZc+lBXGBQnc=" name="csrf-token">
    <!--[if lte IE 8]>
      <link href="http://static04.fishtrip.cn/assets/ng/vdayu_ie-d2ceb5b6da55e49dfd3724d1479d219b.css" media="screen" rel="stylesheet" type="text/css" />
      <script src="js/assets/ng/3rd/html5-083899362ed59cc279451ac430aa737d.js" type="text/javascript"></script>
      <script src="js/4.4.1/es5-shim.min.js"></script>
      <script src="js/4.4.1/es5-sham.min.js"></script>
    <![endif]-->
 <?php
  include('common/head.php');
 ?>

  </head>

  <body class="">

  <div class="hoform__aside">
  </div>
<div class="order-overview order-detail-page"></div>
  <div class="ooverview__container">
    <div class="ooverview__thumb" style="width: 900px">
      <a href="http://www.fishtrip.cn/houses/yTxO28u95mM"><img alt="House-145145423661176069" src="img/img/<?php echo $arr[0]['vimg']?>" width="450px" height="250px" style="margin-left: 50px;margin-right: 30px;margin-top: 50px"></a>
        <div class="house-order-info" style="float: right;margin-top: 50px">
            <dl class="hoinfo__list hoinfo-dl" >
                <dt class="hoinfo-dl__dt">景点名称</dt>
                <dd class="hoinfo-dl__dd"><?php echo $arr[0]['vname']; ?></dd>
                <dt class="hoinfo-dl__dt">订单号</dt>
                <dd class="hoinfo-dl__dd"><?php echo $arr[0]['oname']; ?></dd>
                <dt class="hoinfo-dl__dt"> 票价类型 </dt>
                <dd class="hoinfo-dl__dd"> <?php echo $arr[0]['tname']; ?>  </dd>
                <dt class="hoinfo-dl__dt"> 入住日期 </dt>
                <dd class="hoinfo-dl__dd"><?php echo $arr[0]['otime']; ?></dd>
                <dt class="hoinfo-dl__dt"> 购票人数 </dt>
                <dd class="hoinfo-dl__dd"> <?php echo $arr[0]['onum']; ?> </dd>
                <dt class="hoinfo-dl__dt"> 景点地址 </dt>
                <dd class="hoinfo-dl__dd"> <?php echo $arr[0]['vplace']; ?> </dd>
            </dl>





            <div class="order-detail-order-price">

                <div class="odoprice__selling-amount order-detail-selling-amount">
                    <span class="odsamount__title">总金额 </span>
                    <span class="odsamount__number"> ￥<strong><font color="red"> <?php echo $arr[0]['omoney']; ?> 元</font> </strong> </span>
                </div>

            </div>

            <div class="order-detail-order-submit">
                @if($arr[0]['ostate'] == 1)
                <button class="yu-btn yu-btn--buy oform-sumbit__submit js-house-order-submit" data-house-id="yTxO28u95mM" data-disable-with="提交中..." onclick="fun(<?php echo $arr[0]['oid']; ?>);">
                    去支付
                </button>
                    @elseif($arr[0]['ostate'] == 0)
                    <button class="yu-btn yu-btn--buy oform-sumbit__submit js-house-order-submit" data-house-id="yTxO28u95mM" data-disable-with="提交中..." >
                        等待发货中...
                    </button>
                @elseif($arr[0]['ostate'] == 2)
                    <button class="yu-btn yu-btn--buy oform-sumbit__submit js-house-order-submit" data-house-id="yTxO28u95mM" data-disable-with="提交中..." >
                        确定收货
                    </button>
                @elseif($arr[0]['ostate'] == 3)
                    <button class="yu-btn yu-btn--buy oform-sumbit__submit js-house-order-submit" data-house-id="yTxO28u95mM" data-disable-with="提交中..." onclick="gocon(<?php echo $arr[0]['oid']; ?>)">
                        去评论
                    </button>
                    @endif
            </div>
        </div>
    </div>
  </div></div>
    <div class="ooverview__info">
  
  <input id="utm" name="utm" type="hidden">
  <input id="room_rate_plan_id" name="room_rate_plan_id" value="155318" type="hidden">
  <input id="room_id" name="room_id" value="ZwCAIwt5GYo" type="hidden">
  <input id="start_day" name="start_day" value="2016-03-23" type="hidden">
  <input id="end_day" name="end_day" value="2016-03-24" type="hidden">
  <input id="room_number" name="room_number" value="1" type="hidden">

  <div class="js-show-image-captcha"> </div>

</form>
<div class="modal fade daily-discount-failed-modal js-daily-discount-faild-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="ddfmodal__title">特惠已抢光</p>
        <p class="ddfmodal__content js-daily-discount-faild-content">
          
        </p>
        <div class="ddfmodal__button js-daily-discount-failed-modal-button">
          我知道了
        </div>

      </div>
    </div>
  </div>
</div>

    
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
          <img alt="Logo-app" src="%E9%A2%84%E8%AE%A2%E6%9C%8D%E5%8A%A1%20-%20%E5%A4%A7%E9%B1%BC%E8%87%AA%E5%8A%A9%E6%B8%B8_files/logo-app.png" height="85" width="85">
        </div>
        <div class="famodal__qrcode" style="text-align: center">
          <img alt="Qr-v4" src="img/qr-v4.png" height="130" width="130">
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
  include('common/footer.php');
?>
  </body>
</html>
<script type="text/javascript">
    function fun(id){
        location.href="/pay?id="+id;
    }
    function gocon(id){
        location.href="/details?oid="+id+"&test="+1;
    }

</script>

