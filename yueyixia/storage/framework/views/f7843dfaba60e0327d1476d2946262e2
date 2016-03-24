<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>我的收藏 - 大鱼自助游</title>
    <meta name="author" content="webmaster@fishtrip.cn">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width">
    
<link href="css/vdayu_3rd_base-e0b7972e86e0b60cde08ad047d4ab17b.css" media="all" rel="stylesheet" type="text/css">
<link href="css/vdayu_v3_header-734c59eb3ce217cd85f840f7640c18d7.css" media="all" rel="stylesheet" type="text/css">
<link href="css/vdayu_base-e904f229d19c7c69b1dc29ff23c6ca1b.css" media="all" rel="stylesheet" type="text/css">
<link href="css/application-6c38df514dc38801bf00f14777ec72d9.css" media="all" rel="stylesheet" type="text/css">

    <meta content="authenticity_token" name="csrf-param">
<meta content="CjZW29SQq7npkXabcwtJPS+pvYIqcZNg91aN0Q+5thE=" name="csrf-token">
    <link href="css/base.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/common.css" media="screen" rel="stylesheet" type="text/css">
    <!--[if lte IE 8]>
      <link href="http://static03.fishtrip.cn/assets/ng/vdayu_ie-d2ceb5b6da55e49dfd3724d1479d219b.css" media="screen" rel="stylesheet" type="text/css" />
      <script src="http://static04.fishtrip.cn/assets/ng/3rd/html5-083899362ed59cc279451ac430aa737d.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/es5.shim/4.4.1/es5-shim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/es5.shim/4.4.1/es5-sham.min.js"></script>
    <![endif]-->

    
    <script src="%E6%88%91%E7%9A%84%E6%94%B6%E8%97%8F%20-%20%E5%A4%A7%E9%B1%BC%E8%87%AA%E5%8A%A9%E6%B8%B8_files/v.htm" charset="utf-8"></script><script src="js/ec.js" async="" type="text/javascript"></script><script src="js/tracker_ex.js" async=""></script><script src="js/tracker.js" async=""></script><script src="js/analytics.js" async=""></script><script src="js/hm.js"></script><script type="text/javascript">
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?c150f692997ee7d711646dff27fbfcaf";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-33905412-1', {'userId': '260266'});

  ga('require', 'ec');
  ga('require', 'displayfeatures');
</script>

<script>
  (function(i,s,o,g,r,a,m){
    i['fishTrackerObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//analytics.fishtrip.cn/tracker.js','fa');

    fa('set', 'user_id', 260266);
</script>


  </head>

  <body class=""><div id="loading" class="message" style="display:none"> <div class="message-inside"> <span class="message-text">加载中, 请稍后...</span> </div> </div>

 <?php
	include('common/head.php');
 ?>

    <div class="container page-container">
      
<div class="my-favorites-page">
  <h1>我的订单</h1>
  <div class="row">
    <div class="span12 favorites-list my_favorites_list">
      <div class="status">
        收藏(<?php echo count($arr);?>)
      </div>
      <div class="list">

<!--收藏循环开始--->
<?php
	foreach($arr as $ck=>$cv){
?>
	<div class="item clearfix favorite_194348">

<!-- 参数 category, photo_path, target -->

<div class="photo house favorite-photo-item">
    <a href="http://www.fishtrip.cn/houses/NM00LEqd5ms" class="fpitem__link" target="_blank"><img alt="2a35bd421b3a918ed1135046321fef5b4cf382ca" src="img/img/<?php echo $cv['vimg']?>"></a>
</div>



<!-- 参数： target, title, price, (location或path) desc_topic, desc_content -->

<div class="info">
    <div class="price">
      <span class="num">¥ <?php echo $cv['omoney']?></span>
      <span class="unit">元</span>
    </div>

    <div class="title">
        <a href="http://www.fishtrip.cn/houses/NM00LEqd5ms" target="_blank"><?php echo $cv['oname']?></a>
    </div>

    <div class="loc">
      <span class="yicon yicon-search-position"></span>
      <?php echo $cv['vplace']?>
    </div>


    <div class="description">
      <span class="topic"></span>

    </div>
    <a href="/lists?oname=<?php echo $cv['oname'];?>" style="float: right">查看详情</a>
    <a href="javascript:(void)" onclick="fun(<?php echo $cv['oid'];?>);" class="my_favorite_delete_cmd" style="float: right;margin-right: 20px" >删除</a>
</div>


        </div>
<?php
	}
?>

<!--收藏循环结尾--->
      </div>

    </div>

    <div class="span4 pull-right">
      <div class="weixin_bar_code">
        
<div class="wechat-qrcode">
  <div class="wqrcode__title">
    <p>获取更多专业又贴心的住宿推荐，马上扫码关注微信</p>
  </div>
  <div class="wqrcode__pic">
    <img alt="大鱼自助旅行顾问" src="img/collection/wechat-qr-code.jpg" title="大鱼自助旅行顾问" height="150" width="150">
  </div>
  <div class="wqrcode__title">
    大鱼自助旅行顾问
  </div>

  <div class="wqrcode__text">
    <p>任何预订相关疑问、选择住宿的建议、旅途中遇紧急情况需支援，或免费规划行程，大鱼君都可以帮你！</p>
  </div>
</div>


      </div>
    </div>
  </div>
</div>

    </div>


    
<div class="footer print-hide">
  <div class="footer__wrap">
    <div class="footer__video">
      <a href="http://www.fishtrip.cn/about_dayu">
        <img alt="大鱼自助游" src="img/collection/footer-video.jpg" title="鱼行天下（北京）旅行社有限公司" height="170" width="270">
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
          <img alt="Logo-app" src="img/collection/logo-app.png" height="85" width="85">
        </div>
        <div class="famodal__qrcode" style="text-align: center">
          <img alt="Qr-v4" src="img/collection/qr-v4.png" height="130" width="130">
        </div>
        <div class="famodal__tips">
          <a href="https://itunes.apple.com/cn/app/da-yu-tai-wan-min-su-ri-ben/id975030554?mt=8" class="fwmodal__iOS">iPhone</a>
          <a href="http://www.fishtrip.cn/app/hunter_fishtrip_v2.5.0.apk" class="fwmodal__android">Android</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
	include('common/footer.php');
?>

<a title="" data-original-title="" class="footer-agent js-footer-affix js-footer-agent affix-top">
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
    <img alt="大鱼微信客服" src="img/collection/footer-weixin-qrcode.png" title="大鱼微信客服" height="106" width="106">
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
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>


<script src="js/vdayu_3rd_base-254927da95f1b294f479d73a07e2fb2c.js" type="text/javascript"></script>
<script src="js/vdayu_base-55e8c2df2183ff33b615f22debe576af.js" type="text/javascript"></script>
<script src="js/vdayu_v3_header-4c405c6541bd51efeb6b09f0bb88a99c.js" type="text/javascript"></script>
<script src="js/application-71f852e38ee417232c4c74e75cd260af.js" type="text/javascript"></script>

    <script src="js/base.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script><div id="react-sessions-modal" style="display: none"><div class="react-sessions react-sessions-modal" id="sessions-modal-root" data-reactid=".0"></div></div>

<div id="ui-timepicker-div" class="ui-timepicker ui-widget ui-helper-clearfix ui-corner-all " style="display: none"></div><div id="vdayu_tip_limit_widget" class="input-limit-info"></div>
  </body>
<script type="text/javascript">
    function fun(id) {
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4)
            {
                //接收数据
                alert(ajax.responseText);
                window.location.href="/myorder";
                //document.getElementById("sppwd").innerHTML = ajax.responseText;
            }
        }
        //与服务器建立连接
        ajax.open("get","/dorder?oname="+id);
        //处理请求
        ajax.send(null);
    }
</script>
</html>