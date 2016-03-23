<?php
/*require_once("../../API/qqConnectAPI.php");
$qc = new QC();
echo $qc->qq_callback();
echo $qc->get_openid();*/


header("content-type:text/html;charset=utf8");
require_once("../../API/qqConnectAPI.php");
$qc = new QC();
//echo $qc->qq_callback();
//echo $qc->get_openid();die;
 $acs = $qc->qq_callback();
$oid = $qc->get_openid();
$qc = new QC($acs,$oid); 
$arr = $qc->get_user_info();
//print_r($arr);die;
$_SESSION['nickname']=$arr["nickname"];
$_SESSION['open']=$oid;

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

    <link rel="dns-prefetch" href="//s0.meituan.net">

    <link rel="apple-touch-icon" href="https://s0.meituan.net/img/apple-touch-icon-ipad.png">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico" sizes="16x16 32x32">

    <link rel="alternate" href="http://www.meituan.com/feed" title="订阅更新" type="application/rss+xml">

    <link rel="canonical" href="/account/callback/tencent?code&#x3D;28B0DF316ED0D50BE5B1208B44675CE4">
    

    <title>登录 | 统一登录成功</title>

    <link rel="stylesheet" type="text/css" href="//s0.meituan.net/bs/css/?f=fs:fe-sso-fs/build/page/autologin/index.ff71eb5.css">


    <script>
        !function(e,t,n){function s(){var e=t.createElement("script");e.async=!0,e.src="//s0.meituan."+(-1===t.location.protocol.indexOf("https")?"net":"com")+"/bs/js/?f=mta-js:mta.min.js";var n=t.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)}if(e.MeituanAnalyticsObject=n,e[n]=e[n]||function(){(e[n].q=e[n].q||[]).push(arguments)},"complete"===t.readyState)s();else{var i="addEventListener",r="attachEvent";if(e[i])e[i]("load",s,!1);else if(e[r])e[r]("onload",s);else{var a=e.onload;e.onload=function(){s(),a&&a()}}}}(window,document,"mta"),function(e,t,n){if(t&&!("_mta"in t)){t._mta=!0;var s=e.location.protocol;if("file:"!==s){var i=e.location.host,r=t.prototype.open;t.prototype.open=function(t,n,a,o,l){if(this._method="string"==typeof t?t.toUpperCase():null,n){if(0===n.indexOf("http://")||0===n.indexOf("https://")||0===n.indexOf("//"))this._url=n;else if(0===n.indexOf("/"))this._url=s+"//"+i+n;else{var h=s+"//"+i+e.location.pathname;h=h.substring(0,h.lastIndexOf("/")+1),this._url=h+n}var u=this._url.indexOf("?");-1!==u?(this._searchLength=this._url.length-1-u,this._url=this._url.substring(0,u)):this._searchLength=0}else this._url=null,this._searchLength=0;return this._startTime=(new Date).getTime(),r.apply(this,arguments)};var a="onreadystatechange",o="addEventListener",l=t.prototype.send;t.prototype.send=function(t){function n(n,i){if(0!==n._url.indexOf(s+"//frep.meituan.net/_.gif")){var r;if(n.response)switch(n.responseType){case"json":r=JSON&&JSON.stringify(n.response).length;break;case"blob":case"moz-blob":r=n.response.size;break;case"arraybuffer":r=n.response.byteLength;case"document":r=n.response.documentElement&&n.response.documentElement.innerHTML&&n.response.documentElement.innerHTML.length+28;break;default:r=n.response.length}e.mta("send","browser.ajax",{url:n._url,method:n._method,error:!(0===n.status.toString().indexOf("2")||304===n.status),responseTime:(new Date).getTime()-n._startTime,requestSize:n._searchLength+(t?t.length:0),responseSize:r||0})}}if(o in this){var i=function(e){n(this,e)};this[o]("load",i),this[o]("error",i),this[o]("abort",i)}else{var r=this[a];this[a]=function(t){r&&r.apply(this,arguments),4===this.readyState&&e.mta&&n(this,t)}}return l.apply(this,arguments)}}}}(window,window.XMLHttpRequest,"mta");

        mta("create","56b169118135d3e3104fdd0f");
        mta("send","page");
    </script>
    
</head>

<body class="pg-unitive-loginok theme--www">
<header class="header--mini">
    <div class="wrapper cf">
        <a class="site-logo" href="http://www.yueyixia.com">约一下 </a>
        <div class="login-block">
        </div>
    </div>
</header>


<div class="content">
    <div class="mainbox">
        <div class="mainbox__head">
            <label class="icon tip-status tip-status--large tip-status--large--success"></label>
            <h3 class="title f4">登录中...</h3>
            <p class="tips f2">您可使用<?php echo $arr["nickname"]?>账号登录约一下所有产品</p>
        </div>
        <form class="J-form mainbox__content" method="POST" action="http://www.yueyixia.com">
            <p class="submit-wrapper">
            <span class="color-highlight"><span class="J-timer" data-time="3" id='time'>3</span>秒</span>后自动跳转&nbsp;或&nbsp;</span><input type="submit" class="link" value="点击这里立即跳转" />
            </p>
        </form>
    </div>
</div>


<footer class="footer--mini">
    <p class="copyright">
        ©<a class="f1" href="http://www.meituan.com">meituan.com</a>&nbsp;
        <a class="f1" target="_blank" href="http://www.miibeian.gov.cn/">京ICP证070791号</a>&nbsp;
        <span class="f1">京公网安备11010502025545号</span>
    </p>
</footer>

<script type="text/javascript">
    function delayURL(url) {
        var delay = document.getElementById("time").innerHTML;
        if(delay > 0) {
            delay--;
            document.getElementById("time").innerHTML = delay;
        } else {
            window.top.location.href = url;
        }
       setTimeout("delayURL('" + url + "')", 1000);
    }
	
	delayURL("http://www.yueyixia.com/index.php");
</script>







