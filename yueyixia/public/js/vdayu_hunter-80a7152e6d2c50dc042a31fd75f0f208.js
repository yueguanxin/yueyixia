$(function(){var b=$(".js-footer-advertise-close"),c=$(".js-footer-advertise");b.on("click",function(){c.addClass("is-active");$.ajax({url:$(this).data("url"),type:"get",dataType:"json",context:this,success:function(a,d){console.log(a)}})})});
$(function(){$(".js-backtop").affix({offset:{top:200}}).on("click",function(){$("html,body").animate({scrollTop:"0px"},300,"swing")});(function(){$("body").on("click",".js-city-selector-tabs a",function(b){b.preventDefault();$(this).tab("show");return!1});$(".js-navbar-search").on("focus",".jnsearch__input",function(b){var c=$(this),a=c.data("placeholder");$(".js-city-selector").addClass("is-open");b.stopPropagation();c.val()==a&&c.val("");0<$(".home-search").size()&&$.scrollTo(150,600);$("body").on("click",
function(a){0<$(a.target).parents(".js-navbar-search").size()||0<$(a.target).parents(".js-city-selector").size()||$(".js-city-selector").hasClass("is-open")&&$(".js-city-selector").removeClass("is-open")})});$(".js-navbar-search").on("blur",".jnsearch__input",function(b){b=$(this);var c=b.data("placeholder");""==b.val()&&b.val(c)});$(".js-navbar-search").on("click",".jnsearch__popup",function(b){if($(".jnsearch__input").val()==$(".jnsearch__input").data("placeholder"))return $(".jnsearch__input").focus(),
!1});$(".js-search-buton").click(function(){if($(".jnsearch__input").val()==$(".jnsearch__input").data("placeholder"))return $(".jnsearch__input").focus(),!1})})();(function(){var b;$(".js-footer-agent").hover(function(){b=setTimeout(function(){$(".js-footer-agent-popover").addClass("is-active")},500)},function(){clearTimeout(b)});$(".js-footer-agent-popover").on("mouseleave",function(b){$(".js-footer-agent-popover").removeClass("is-active")})})();0<$("body.body-home").size()&&$(".js-footer-affix").affix({offset:{top:200}});
(function(){var b=$(".js-footer-agent-popover");$(".js-footer-app-popover");$(".js-show-weixin-popover").popover({html:!0,placement:"top",trigger:"hover",title:"",content:function(){return b.html()},container:"body"});$(".js-show-app-modal").click(function(){$(".js-footer-app-modal").modal("show")});$(".js-close-footer-modal").click(function(){$(".js-footer-app-modal").modal("hide")})})();(function(){$(".resume_admin_cmd").live("ajax:success",function(b,c,a,d){"success"==c.status?$(c.html).appendTo("body").modal("show"):
show_simple_alert("\u64cd\u4f5c\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5")})})()});
$(function(){0<$("#hunter_home_page_hhptabnav__nav").length&&($("#hunter_home_page_hhptabnav__nav").affix({offset:{top:$("#hunter_home_page_hhptabnav__nav").offset().top-80}}),$(".link_to_hunter_bbs").tooltip(),$("body").scrollspy({target:"#hunter_home_page_hhptabnav__nav"}),$("#hunter_home_page_hhptabnav__nav").on("activate.bs.scrollspy",function(){$("body").each(function(){$(this).scrollspy("refresh")})}));0<$("#mobile_hunter_home_page_hhptabnav__nav").length&&($("#mobile_hunter_home_page_hhptabnav__nav").affix({offset:{top:210}}),
$("body").scrollspy({target:"#mobile_hunter_home_page_hhptabnav__nav"}),$("#mobile_hunter_home_page_hhptabnav__nav").on("activate.bs.scrollspy",function(){$("body").each(function(){$(this).scrollspy("refresh")})}));$(".js_hunter_images_show").slick({slidesToShow:3,slidesToScroll:1,arrows:!1});$(".js_tsearch_course_images_slick_prev").click(function(b){$(this).parent().slickPrev()});$(".js_tsearch_course_images_slick_next").click(function(b){$(this).parent().slickNext()});0<$("#what_are_hunters").length&&
$("html,body").animate({scrollTop:$("#what_are_hunters").offset().top},500)});
!function(b){"function"==typeof define&&define.amd?define(["jquery"],b):b(jQuery)}(function(b){var c=window.Slick||{},c=function(){var a=0;return function(d,h){var e,c;if(this.defaults={accessibility:!0,arrows:!0,autoplay:!1,autoplaySpeed:3E3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(a,d){return'<button type="button">'+(d+1)+"</button>"},dots:!1,draggable:!0,easing:"linear",fade:!1,infinite:!0,lazyLoad:"ondemand",onBeforeChange:null,onAfterChange:null,onInit:null,onReInit:null,
pauseOnHover:!0,responsive:null,slide:"div",slidesToShow:1,slidesToScroll:1,speed:300,swipe:!0,touchMove:!0,touchThreshold:5,useCSS:!0,vertical:!1},this.initials={animating:!1,autoPlayTimer:null,currentSlide:0,currentLeft:null,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,$list:null,touchObject:{},transformsEnabled:!1},b.extend(this,this.initials),
this.activeBreakpoint=null,this.animType=null,this.animProp=null,this.breakpoints=[],this.breakpointSettings=[],this.cssTransitions=!1,this.paused=!1,this.positionProp=null,this.$slider=b(d),this.$slidesCache=null,this.transformType=null,this.transitionType=null,this.windowWidth=0,this.windowTimer=null,this.options=b.extend({},this.defaults,h),this.originalSettings=this.options,e=this.options.responsive||null,e&&-1<e.length){for(c in e)e.hasOwnProperty(c)&&(this.breakpoints.push(e[c].breakpoint),
this.breakpointSettings[e[c].breakpoint]=e[c].settings);this.breakpoints.sort(function(a,d){return d-a})}this.autoPlay=b.proxy(this.autoPlay,this);this.autoPlayClear=b.proxy(this.autoPlayClear,this);this.changeSlide=b.proxy(this.changeSlide,this);this.setPosition=b.proxy(this.setPosition,this);this.swipeHandler=b.proxy(this.swipeHandler,this);this.dragHandler=b.proxy(this.dragHandler,this);this.keyHandler=b.proxy(this.keyHandler,this);this.autoPlayIterator=b.proxy(this.autoPlayIterator,this);this.instanceUid=
a++;this.init()}}();c.prototype.addSlide=function(a,d,h){if("boolean"==typeof d)h=d,d=null;else if(0>d||d>=this.slideCount)return!1;this.unload();"number"==typeof d?0===d&&0===this.$slides.length?b(a).appendTo(this.$slideTrack):h?b(a).insertBefore(this.$slides.eq(d)):b(a).insertAfter(this.$slides.eq(d)):!0===h?b(a).prependTo(this.$slideTrack):b(a).appendTo(this.$slideTrack);this.$slides=this.$slideTrack.children(this.options.slide);this.$slideTrack.children(this.options.slide).remove();this.$slideTrack.append(this.$slides);
this.$slidesCache=this.$slides;this.reinit()};c.prototype.animateSlide=function(a,d){var h={},e=this;!1===e.transformsEnabled?!1===e.options.vertical?e.$slideTrack.animate({left:a},e.options.speed,e.options.easing,d):e.$slideTrack.animate({top:a},e.options.speed,e.options.easing,d):!1===e.cssTransitions?b({animStart:e.currentLeft}).animate({animStart:a},{duration:e.options.speed,easing:e.options.easing,step:function(a){!1===e.options.vertical?(h[e.animType]="translate("+a+"px, 0px)",e.$slideTrack.css(h)):
(h[e.animType]="translate(0px,"+a+"px)",e.$slideTrack.css(h))},complete:function(){d&&d.call()}}):(e.applyTransition(),h[e.animType]=!1===e.options.vertical?"translate3d("+a+"px, 0px, 0px)":"translate3d(0px,"+a+"px, 0px)",e.$slideTrack.css(h),d&&setTimeout(function(){e.disableTransition();d.call()},e.options.speed))};c.prototype.applyTransition=function(a){var d={};d[this.transitionType]=!1===this.options.fade?this.transformType+" "+this.options.speed+"ms "+this.options.cssEase:"opacity "+this.options.speed+
"ms "+this.options.cssEase;!1===this.options.fade?this.$slideTrack.css(d):this.$slides.eq(a).css(d)};c.prototype.autoPlay=function(){this.autoPlayTimer&&clearInterval(this.autoPlayTimer);this.slideCount>this.options.slidesToShow&&!0!==this.paused&&(this.autoPlayTimer=setInterval(this.autoPlayIterator,this.options.autoplaySpeed))};c.prototype.autoPlayClear=function(){this.autoPlayTimer&&clearInterval(this.autoPlayTimer)};c.prototype.autoPlayIterator=function(){!1===this.options.infinite?1===this.direction?
(this.currentSlide+1===this.slideCount-1&&(this.direction=0),this.slideHandler(this.currentSlide+this.options.slidesToScroll)):(0===this.currentSlide-1&&(this.direction=1),this.slideHandler(this.currentSlide-this.options.slidesToScroll)):this.slideHandler(this.currentSlide+this.options.slidesToScroll)};c.prototype.buildArrows=function(){!0===this.options.arrows&&this.slideCount>this.options.slidesToShow&&(this.$prevArrow=b('<button type="button" class="slick-prev">Previous</button>').appendTo(this.$slider),
this.$nextArrow=b('<button type="button" class="slick-next">Next</button>').appendTo(this.$slider),!0!==this.options.infinite&&this.$prevArrow.addClass("slick-disabled"))};c.prototype.buildDots=function(){var a,d;if(!0===this.options.dots&&this.slideCount>this.options.slidesToShow){d='<ul class="slick-dots">';for(a=0;a<=this.getDotCount();a+=1)d+="<li>"+this.options.customPaging.call(this,this,a)+"</li>";this.$dots=b(d+"</ul>").appendTo(this.$slider);this.$dots.find("li").first().addClass("slick-active")}};
c.prototype.buildOut=function(){this.$slides=this.$slider.children(this.options.slide+":not(.slick-cloned)").addClass("slick-slide");this.slideCount=this.$slides.length;this.$slidesCache=this.$slides;this.$slider.addClass("slick-slider");this.$slideTrack=0===this.slideCount?b('<div class="slick-track"/>').appendTo(this.$slider):this.$slides.wrapAll('<div class="slick-track"/>').parent();this.$list=this.$slideTrack.wrap('<div class="slick-list"/>').parent();this.$slideTrack.css("opacity",0);!0===this.options.centerMode&&
(this.options.infinite=!0,this.options.slidesToScroll=1,0===this.options.slidesToShow%2&&(this.options.slidesToShow=3));b("img[data-lazy]",this.$slider).not("[src]").addClass("slick-loading");this.setupInfinite();this.buildArrows();this.buildDots();!0===this.options.accessibility&&this.$list.prop("tabIndex",0);this.setSlideClasses(0);!0===this.options.draggable&&this.$list.addClass("draggable")};c.prototype.checkResponsive=function(){var a,d;if(this.originalSettings.responsive&&-1<this.originalSettings.responsive.length&&
null!==this.originalSettings.responsive){d=null;for(a in this.breakpoints)this.breakpoints.hasOwnProperty(a)&&b(window).width()<this.breakpoints[a]&&(d=this.breakpoints[a]);null!==d?null!==this.activeBreakpoint?d!==this.activeBreakpoint&&(this.activeBreakpoint=d,this.options=b.extend({},this.defaults,this.breakpointSettings[d]),this.refresh()):(this.activeBreakpoint=d,this.options=b.extend({},this.defaults,this.breakpointSettings[d]),this.refresh()):null!==this.activeBreakpoint&&(this.activeBreakpoint=
null,this.options=b.extend({},this.defaults,this.originalSettings),this.refresh())}};c.prototype.changeSlide=function(a){switch(a.data.message){case "previous":this.slideHandler(this.currentSlide-this.options.slidesToScroll);break;case "next":this.slideHandler(this.currentSlide+this.options.slidesToScroll);break;case "index":this.slideHandler(b(a.target).parent().index()*this.options.slidesToScroll);break;default:return!1}};c.prototype.destroy=function(){this.autoPlayClear();this.touchObject={};b(".slick-cloned",
this.$slider).remove();this.$dots&&this.$dots.remove();this.$prevArrow&&(this.$prevArrow.remove(),this.$nextArrow.remove());this.$slides.unwrap().unwrap();this.$slides.removeClass("slick-slide slick-active slick-visible").removeAttr("style");this.$slider.removeClass("slick-slider");this.$slider.removeClass("slick-initialized");this.$list.off(".slick");b(window).off(".slick-"+this.instanceUid)};c.prototype.disableTransition=function(a){var d={};d[this.transitionType]="";!1===this.options.fade?this.$slideTrack.css(d):
this.$slides.eq(a).css(d)};c.prototype.fadeSlide=function(a,d){var b=this;!1===b.cssTransitions?(b.$slides.eq(a).css({zIndex:1E3}),b.$slides.eq(a).animate({opacity:1},b.options.speed,b.options.easing,d)):(b.applyTransition(a),b.$slides.eq(a).css({opacity:1,zIndex:1E3}),d&&setTimeout(function(){b.disableTransition(a);d.call()},b.options.speed))};c.prototype.filterSlides=function(a){null!==a&&(this.unload(),this.$slideTrack.children(this.options.slide).remove(),this.$slidesCache.filter(a).appendTo(this.$slideTrack),
this.reinit())};c.prototype.getCurrent=function(){return this.currentSlide};c.prototype.getDotCount=function(){var a,d=0,b=0,e=0;for(a=!0===this.options.infinite?this.slideCount+this.options.slidesToShow-this.options.slidesToScroll:this.slideCount;a>d;)e++,b+=this.options.slidesToScroll,d=b+this.options.slidesToShow;return e};c.prototype.getLeft=function(a){var d,b=0;return this.slideOffset=0,d=this.$slides.first().outerHeight(),!0===this.options.infinite?(this.slideCount>this.options.slidesToShow&&
(this.slideOffset=-1*this.slideWidth*this.options.slidesToShow,b=-1*d*this.options.slidesToShow),0!==this.slideCount%this.options.slidesToScroll&&a+this.options.slidesToScroll>this.slideCount&&this.slideCount>this.options.slidesToShow&&(this.slideOffset=-1*this.slideCount%this.options.slidesToShow*this.slideWidth,b=-1*this.slideCount%this.options.slidesToShow*d)):0!==this.slideCount%this.options.slidesToShow&&a+this.options.slidesToScroll>this.slideCount&&this.slideCount>this.options.slidesToShow&&
(this.slideOffset=this.options.slidesToShow*this.slideWidth-this.slideCount%this.options.slidesToShow*this.slideWidth,b=this.slideCount%this.options.slidesToShow*d),!0===this.options.centerMode&&(this.slideOffset+=this.slideWidth*Math.floor(this.options.slidesToShow/2)-this.slideWidth),!1===this.options.vertical?-1*a*this.slideWidth+this.slideOffset:-1*a*d+b};c.prototype.init=function(){b(this.$slider).hasClass("slick-initialized")||(b(this.$slider).addClass("slick-initialized"),this.buildOut(),this.setProps(),
this.startLoad(),this.loadSlider(),this.initializeEvents(),this.checkResponsive());null!==this.options.onInit&&this.options.onInit.call(this,this)};c.prototype.initArrowEvents=function(){!0===this.options.arrows&&this.slideCount>this.options.slidesToShow&&(this.$prevArrow.on("click.slick",{message:"previous"},this.changeSlide),this.$nextArrow.on("click.slick",{message:"next"},this.changeSlide))};c.prototype.initDotEvents=function(){!0===this.options.dots&&this.slideCount>this.options.slidesToShow&&
b("li",this.$dots).on("click.slick",{message:"index"},this.changeSlide)};c.prototype.initializeEvents=function(){var a=this;a.initArrowEvents();a.initDotEvents();a.$list.on("touchstart.slick mousedown.slick",{action:"start"},a.swipeHandler);a.$list.on("touchmove.slick mousemove.slick",{action:"move"},a.swipeHandler);a.$list.on("touchend.slick mouseup.slick",{action:"end"},a.swipeHandler);a.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},a.swipeHandler);!0===a.options.pauseOnHover&&!0===
a.options.autoplay&&(a.$list.on("mouseenter.slick",a.autoPlayClear),a.$list.on("mouseleave.slick",a.autoPlay));!0===a.options.accessibility&&a.$list.on("keydown.slick",a.keyHandler);b(window).on("orientationchange.slick.slick-"+a.instanceUid,function(){a.checkResponsive();a.setPosition()});b(window).on("resize.slick.slick-"+a.instanceUid,function(){b(window).width!==a.windowWidth&&(clearTimeout(a.windowDelay),a.windowDelay=window.setTimeout(function(){a.windowWidth=b(window).width();a.checkResponsive();
a.setPosition()},50))});b(window).on("load.slick.slick-"+a.instanceUid,a.setPosition)};c.prototype.initUI=function(){!0===this.options.arrows&&this.slideCount>this.options.slidesToShow&&(this.$prevArrow.show(),this.$nextArrow.show());!0===this.options.dots&&this.slideCount>this.options.slidesToShow&&this.$dots.show();!0===this.options.autoplay&&this.autoPlay()};c.prototype.keyHandler=function(a){37===a.keyCode?this.changeSlide({data:{message:"previous"}}):39===a.keyCode&&this.changeSlide({data:{message:"next"}})};
c.prototype.lazyLoad=function(){var a,d,c;!0===this.options.centerMode?(a=this.options.slidesToShow+this.currentSlide-1,c=a+this.options.slidesToShow+2):(a=this.options.infinite?this.options.slidesToShow+this.currentSlide:this.currentSlide,c=a+this.options.slidesToShow);a=this.$slider.find(".slick-slide").slice(a,c);b("img[data-lazy]",a).not("[src]").each(function(){b(this).css({opacity:0}).attr("src",b(this).attr("data-lazy")).removeClass("slick-loading").load(function(){b(this).animate({opacity:1},
200)})});this.currentSlide>=this.slideCount-this.options.slidesToShow?(d=this.$slider.find(".slick-cloned").slice(0,this.options.slidesToShow),b("img[data-lazy]",d).not("[src]").each(function(){b(this).css({opacity:0}).attr("src",b(this).attr("data-lazy")).removeClass("slick-loading").load(function(){b(this).animate({opacity:1},200)})})):0===this.currentSlide&&(d=this.$slider.find(".slick-cloned").slice(-1*this.options.slidesToShow),b("img[data-lazy]",d).not("[src]").each(function(){b(this).css({opacity:0}).attr("src",
b(this).attr("data-lazy")).removeClass("slick-loading").load(function(){b(this).animate({opacity:1},200)})}))};c.prototype.loadSlider=function(){this.setPosition();this.$slideTrack.css({opacity:1});this.$slider.removeClass("slick-loading");this.initUI();"progressive"===this.options.lazyLoad&&this.progressiveLazyLoad()};c.prototype.postSlide=function(a){null!==this.options.onAfterChange&&this.options.onAfterChange.call(this,this,a);this.animating=!1;this.setPosition();this.swipeLeft=null;!0===this.options.autoplay&&
!1===this.paused&&this.autoPlay()};c.prototype.progressiveLazyLoad=function(){var a,d=this;0<b("img[data-lazy]").not("[src]").length&&(a=b(b("img[data-lazy]",d.$slider).not("[src]").get(0)),a.attr("src",a.attr("data-lazy")).removeClass("slick-loading").load(function(){d.progressiveLazyLoad()}))};c.prototype.refresh=function(){this.destroy();b.extend(this,this.initials);this.init()};c.prototype.reinit=function(){this.$slides=this.$slideTrack.children(this.options.slide).addClass("slick-slide");this.slideCount=
this.$slides.length;this.currentSlide>=this.slideCount&&0!==this.currentSlide&&(this.currentSlide-=this.options.slidesToScroll);this.setProps();this.setupInfinite();this.buildArrows();this.updateArrows();this.initArrowEvents();this.buildDots();this.updateDots();this.initDotEvents();this.setSlideClasses(0);this.setPosition();null!==this.options.onReInit&&this.options.onReInit.call(this,this)};c.prototype.removeSlide=function(a,d){return"boolean"==typeof a?(d=a,a=!0===d?0:this.slideCount-1):a=!0===
d?--a:a,1>this.slideCount||0>a||a>this.slideCount-1?!1:(this.unload(),this.$slideTrack.children(this.options.slide).eq(a).remove(),this.$slides=this.$slideTrack.children(this.options.slide),this.$slideTrack.children(this.options.slide).remove(),this.$slideTrack.append(this.$slides),this.$slidesCache=this.$slides,this.reinit(),void 0)};c.prototype.setCSS=function(a){var d,b,e={};d="left"==this.positionProp?a+"px":"0px";b="top"==this.positionProp?a+"px":"0px";e[this.positionProp]=a;!1===this.transformsEnabled?
this.$slideTrack.css(e):(e={},!1===this.cssTransitions?(e[this.animType]="translate("+d+", "+b+")",this.$slideTrack.css(e)):(e[this.animType]="translate3d("+d+", "+b+", 0px)",this.$slideTrack.css(e)))};c.prototype.setDimensions=function(){this.$slideTrack.children(".slick-slide").width(this.slideWidth);!1===this.options.vertical?(this.$slideTrack.width(Math.ceil(this.slideWidth*this.$slideTrack.children(".slick-slide").length)),!0===this.options.centerMode&&this.$list.css({padding:"0px "+this.options.centerPadding})):
(this.$list.height(this.$slides.first().outerHeight()*this.options.slidesToShow),this.$slideTrack.height(Math.ceil(this.$slides.first().outerHeight()*this.$slideTrack.children(".slick-slide").length)),!0===this.options.centerMode&&this.$list.css({padding:this.options.centerPadding+" 0px"}))};c.prototype.setFade=function(){var a,d=this;d.$slides.each(function(c,e){a=-1*d.slideWidth*c;b(e).css({position:"relative",left:a,top:0,zIndex:800,opacity:0})});d.$slides.eq(d.currentSlide).css({zIndex:900,opacity:1})};
c.prototype.setPosition=function(){this.setValues();this.setDimensions();!1===this.options.fade?this.setCSS(this.getLeft(this.currentSlide)):this.setFade()};c.prototype.setProps=function(){this.positionProp=!0===this.options.vertical?"top":"left";"top"===this.positionProp?this.$slider.addClass("slick-vertical"):this.$slider.removeClass("slick-vertical");void 0===document.body.style.WebkitTransition&&void 0===document.body.style.MozTransition&&void 0===document.body.style.msTransition||!0!==this.options.useCSS||
(this.cssTransitions=!0);void 0!==document.body.style.MozTransform&&(this.animType="MozTransform",this.transformType="-moz-transform",this.transitionType="MozTransition");void 0!==document.body.style.webkitTransform&&(this.animType="webkitTransform",this.transformType="-webkit-transform",this.transitionType="webkitTransition");void 0!==document.body.style.msTransform&&(this.animType="transform",this.transformType="transform",this.transitionType="transition");this.transformsEnabled=null!==this.animType};
c.prototype.setValues=function(){this.listWidth=this.$list.width();this.listHeight=this.$list.height();this.slideWidth=!1===this.options.vertical?Math.ceil(this.listWidth/this.options.slidesToShow):Math.ceil(this.listWidth)};c.prototype.setSlideClasses=function(a){var d,b,c;this.$slider.find(".slick-slide").removeClass("slick-active").removeClass("slick-center");b=this.$slider.find(".slick-slide");!0===this.options.centerMode?(d=Math.floor(this.options.slidesToShow/2),a>=d&&a<=this.slideCount-1-d?
this.$slides.slice(a-d,a+d+1).addClass("slick-active"):(c=this.options.slidesToShow+a,b.slice(c-d+1,c+d+2).addClass("slick-active")),0===a?b.eq(b.length-1-this.options.slidesToShow).addClass("slick-center"):a===this.slideCount-1&&b.eq(this.options.slidesToShow).addClass("slick-center"),this.$slides.eq(a).addClass("slick-center")):0<a&&a<this.slideCount-this.options.slidesToShow?this.$slides.slice(a,a+this.options.slidesToShow).addClass("slick-active"):(c=!0===this.options.infinite?this.options.slidesToShow+
a:a,b.slice(c,c+this.options.slidesToShow).addClass("slick-active"));"ondemand"===this.options.lazyLoad&&this.lazyLoad()};c.prototype.setupInfinite=function(){var a,d,c;if((!0===this.options.fade||!0===this.options.vertical)&&(this.options.centerMode=!1),!0===this.options.infinite&&!1===this.options.fade&&(d=null,this.slideCount>this.options.slidesToShow)){c=!0===this.options.centerMode?this.options.slidesToShow+1:this.options.slidesToShow;for(a=this.slideCount;a>this.slideCount-c;a-=1)d=a-1,b(this.$slides[d]).clone().attr("id",
"").prependTo(this.$slideTrack).addClass("slick-cloned");for(a=0;c>a;a+=1)d=a,b(this.$slides[d]).clone().attr("id","").appendTo(this.$slideTrack).addClass("slick-cloned");this.$slideTrack.find(".slick-cloned").find("[id]").each(function(){b(this).attr("id","")})}};c.prototype.slideHandler=function(a){var d,b,c,g,k=null,f=this;return!0===f.animating?!1:(d=a,k=f.getLeft(d),c=f.getLeft(f.currentSlide),g=0!==f.slideCount%f.options.slidesToScroll?f.options.slidesToScroll:0,f.currentLeft=null===f.swipeLeft?
c:f.swipeLeft,!1===f.options.infinite&&(0>a||a>f.slideCount-f.options.slidesToShow+g)?(!1===f.options.fade&&(d=f.currentSlide,f.animateSlide(c,function(){f.postSlide(d)})),!1):(!0===f.options.autoplay&&clearInterval(f.autoPlayTimer),b=0>d?0!==f.slideCount%f.options.slidesToScroll?f.slideCount-f.slideCount%f.options.slidesToScroll:f.slideCount-f.options.slidesToScroll:d>f.slideCount-1?0:d,f.animating=!0,null!==f.options.onBeforeChange&&a!==f.currentSlide&&f.options.onBeforeChange.call(this,f,f.currentSlide,
b),f.currentSlide=b,f.setSlideClasses(f.currentSlide),f.updateDots(),f.updateArrows(),!0===f.options.fade?(f.fadeSlide(b,function(){f.postSlide(b)}),!1):(f.animateSlide(k,function(){f.postSlide(b)}),void 0)))};c.prototype.startLoad=function(){!0===this.options.arrows&&this.slideCount>this.options.slidesToShow&&(this.$prevArrow.hide(),this.$nextArrow.hide());!0===this.options.dots&&this.slideCount>this.options.slidesToShow&&this.$dots.hide();this.$slider.addClass("slick-loading")};c.prototype.swipeDirection=
function(){var a,d,b,c;return a=this.touchObject.startX-this.touchObject.curX,d=this.touchObject.startY-this.touchObject.curY,b=Math.atan2(d,a),c=Math.round(180*b/Math.PI),0>c&&(c=360-Math.abs(c)),45>=c&&0<=c?"left":360>=c&&315<=c?"left":135<=c&&225>=c?"right":"vertical"};c.prototype.swipeEnd=function(a){if(this.$list.removeClass("dragging"),void 0===this.touchObject.curX)return!1;if(this.touchObject.swipeLength>=this.touchObject.minSwipe)switch(b(a.target).on("click.slick",function(a){a.stopImmediatePropagation();
a.stopPropagation();a.preventDefault();b(a.target).off("click.slick")}),this.swipeDirection()){case "left":this.slideHandler(this.currentSlide+this.options.slidesToScroll);this.touchObject={};break;case "right":this.slideHandler(this.currentSlide-this.options.slidesToScroll),this.touchObject={}}else this.touchObject.startX!==this.touchObject.curX&&(this.slideHandler(this.currentSlide),this.touchObject={})};c.prototype.swipeHandler=function(a){if("ontouchend"in document&&!1===this.options.swipe)return!1;
if(!1===this.options.draggable&&!a.originalEvent.touches)return!0;switch(this.touchObject.fingerCount=a.originalEvent&&void 0!==a.originalEvent.touches?a.originalEvent.touches.length:1,this.touchObject.minSwipe=this.listWidth/this.options.touchThreshold,a.data.action){case "start":this.swipeStart(a);break;case "move":this.swipeMove(a);break;case "end":this.swipeEnd(a)}};c.prototype.swipeMove=function(a){var d,b,c,g;return g=void 0!==a.originalEvent?a.originalEvent.touches:null,d=this.getLeft(this.currentSlide),
!this.$list.hasClass("dragging")||g&&1!==g.length?!1:(this.touchObject.curX=void 0!==g?g[0].pageX:a.clientX,this.touchObject.curY=void 0!==g?g[0].pageY:a.clientY,this.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(this.touchObject.curX-this.touchObject.startX,2))),b=this.swipeDirection(),"vertical"!==b?(void 0!==a.originalEvent&&4<this.touchObject.swipeLength&&a.preventDefault(),c=this.touchObject.curX>this.touchObject.startX?1:-1,this.swipeLeft=!1===this.options.vertical?d+this.touchObject.swipeLength*
c:d+this.touchObject.swipeLength*(this.$list.height()/this.listWidth)*c,!0===this.options.fade||!1===this.options.touchMove?!1:!0===this.animating?(this.swipeLeft=null,!1):(this.setCSS(this.swipeLeft),void 0)):void 0)};c.prototype.swipeStart=function(a){var b;return 1!==this.touchObject.fingerCount||this.slideCount<=this.options.slidesToShow?(this.touchObject={},!1):(void 0!==a.originalEvent&&void 0!==a.originalEvent.touches&&(b=a.originalEvent.touches[0]),this.touchObject.startX=this.touchObject.curX=
void 0!==b?b.pageX:a.clientX,this.touchObject.startY=this.touchObject.curY=void 0!==b?b.pageY:a.clientY,this.$list.addClass("dragging"),void 0)};c.prototype.unfilterSlides=function(){null!==this.$slidesCache&&(this.unload(),this.$slideTrack.children(this.options.slide).remove(),this.$slidesCache.appendTo(this.$slideTrack),this.reinit())};c.prototype.unload=function(){b(".slick-cloned",this.$slider).remove();this.$dots&&this.$dots.remove();this.$prevArrow&&(this.$prevArrow.remove(),this.$nextArrow.remove());
this.$slides.removeClass("slick-slide slick-active slick-visible").removeAttr("style")};c.prototype.updateArrows=function(){!0===this.options.arrows&&!0!==this.options.infinite&&this.slideCount>this.options.slidesToShow&&(this.$prevArrow.removeClass("slick-disabled"),this.$nextArrow.removeClass("slick-disabled"),0===this.currentSlide?(this.$prevArrow.addClass("slick-disabled"),this.$nextArrow.removeClass("slick-disabled")):this.currentSlide>=this.slideCount-this.options.slidesToShow&&(this.$nextArrow.addClass("slick-disabled"),
this.$prevArrow.removeClass("slick-disabled")))};c.prototype.updateDots=function(){null!==this.$dots&&(this.$dots.find("li").removeClass("slick-active"),this.$dots.find("li").eq(this.currentSlide/this.options.slidesToScroll).addClass("slick-active"))};b.fn.slick=function(a){return this.each(function(b,h){h.slick=new c(h,a)})};b.fn.slickAdd=function(a,b,c){return this.each(function(e,g){g.slick.addSlide(a,b,c)})};b.fn.slickCurrentSlide=function(){return this.get(0).slick.getCurrent()};b.fn.slickFilter=
function(a){return this.each(function(b,c){c.slick.filterSlides(a)})};b.fn.slickGoTo=function(a){return this.each(function(b,c){c.slick.slideHandler(a)})};b.fn.slickNext=function(){return this.each(function(a,b){b.slick.changeSlide({data:{message:"next"}})})};b.fn.slickPause=function(){return this.each(function(a,b){b.slick.autoPlayClear();b.slick.paused=!0})};b.fn.slickPlay=function(){return this.each(function(a,b){b.slick.paused=!1;b.slick.autoPlay()})};b.fn.slickPrev=function(){return this.each(function(a,
b){b.slick.changeSlide({data:{message:"previous"}})})};b.fn.slickRemove=function(a,b){return this.each(function(c,e){e.slick.removeSlide(a,b)})};b.fn.slickSetOption=function(a,b,c){return this.each(function(e,g){g.slick.options[a]=b;!0===c&&(g.slick.unload(),g.slick.reinit())})};b.fn.slickUnfilter=function(){return this.each(function(a,b){b.slick.unfilterSlides()})};b.fn.unslick=function(){return this.each(function(a,b){b.slick.destroy()})}});