<?php exit;?>a:3:{s:8:"template";a:12:{i:0;s:65:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/index.dwt";i:1;s:79:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/page_header.lbi";i:2;s:76:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/index_ad.lbi";i:3;s:80:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/new_articles.lbi";i:4;s:79:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/ad_position.lbi";i:5;s:87:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/recommend_promotion.lbi";i:6;s:81:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/recommend_new.lbi";i:7;s:77:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/cat_goods.lbi";i:8;s:81:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/recommend_hot.lbi";i:9;s:82:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/recommend_best.lbi";i:10;s:72:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/help.lbi";i:11;s:79:"F:/tools/xampp/htdocs/ecshop/themes/ecmoban_tianmao2016/library/page_footer.lbi";}s:7:"expires";i:1463925165;s:8:"maketime";i:1463921565;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="我社演示站" />
<meta name="Description" content="我社演示站" />
<title>我社演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_tianmao2016/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|我社演示站 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header-nav">
    <div class="block">
        <a href="index.php" class="fl gotoindex" style="margin-right:15px;"><i class="iconfont">&#xe624;</i> 天猫首页</a>
        
        <p class="header-login-info">
            554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca        </p>
        
        <ul class="ul-quick-menu">
            <li class="li-my menu-item">
                <a href="user.php"  class="menu-hd my_user">我的天猫<b></b></a>
                <div class="menu-bd">
                    <a href="user.php?act=order_list">我的订单</a>
                    <a href="user.php?act=account_log">我的余额</a>
                    <a href="user.php?act=collection_list" >我的收藏</a>
                    <a href="user.php?act=bonus">我的红包</a>
                </div>
            </li>
            <li class="li-cart" id="ECS_CARTINFO">
                <a href="flow.php">购物车</a>&nbsp;554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca            </li>
            <li class="li-sep"></li>
            <li class="li-mobile">
                <i class="iconfont">&#xe615;</i>
                <a href="">手机版</a>
                <div class="mobile-qr">
                    <div class="qrcode-bg"></div>
                    <p>扫一扫，访问手机版</p>
                    <b></b>
                </div>
            </li>
                        <li class="li-sitemap menu-item">
                <h3 class="menu-hd"><i class="iconfont">&#xe607;</i><span>网站导航</span><b></b></h3>
                <div class="menu-bd block">
                    <div class="site-cate site-hot">
                        <h2>热点推荐<span>Hot</span></h2>
                        <ul>
                            <li><a href="group_buy.php" target="_blank">最新团购</a></li>
                            <li><a href="auction.php" target="_blank">拍卖会</a></li>
                            <li><a href="snatch.php" target="_blank">夺宝岛<i class="sitemap-icon sitemap-icon-new"></i></a></li>
                            <li><a href="activity.php" target="_blank">优惠活动<i class="sitemap-icon sitemap-icon-hot"></i></a></li>
                            <li><a href="package.php" target="_blank">超值礼包</a></li>
                            <li><a href="brand.php" target="_blank">品牌街<i class="sitemap-icon sitemap-icon-hot"></i></a></li>
                            <li><a href="search.php" target="_blank">随便看看</a></li>
                            <li><a href="message.php" target="_blank">喵言喵语</a></li>
                            <li><a href="user.php" target="_blank">会员中心</a></li>
                            <li><a href="" target="_blank">商创国际</a></li>
                        </ul>
                    </div>
                    <div class="site-cate site-market">
                        <h2>行业市场<span>Market</span></h2>
                        <ul>
                                                    <li><a href="category.php?id=1">生活用品</a></li>
                                                    <li><a href="category.php?id=2">程序员</a></li>
                                                </ul>
                    </div>
                    <div class="site-cate site-brand">
                        <h2>品牌风尚<span>Brand</span></h2>
                        <ul>
                            <li><a href="">尚天猫</a></li>
                            <li><a href="">大牌街</a></li>
                            <li><a href="">潮牌街</a></li>
                            <li><a href="">天猫原创</a></li>
                            <li><a href="">什么牌子好</a></li>
                        </ul>
                    </div>
                    <div class="site-cate site-help">
                        <h2>服务指南<span>Help</span></h2>
                        <ul>
                            <li><a href="">帮助中心</a></li>
                            <li><a href="">品质保障</a></li>
                            <li><a href="">特色服务</a></li>
                            <li><a href="">7天退换货</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="header-main">
    <div class="block">
        <div class="header-logo header-logo-index">
            <a href="index.php"><img src="themes/ecmoban_tianmao2016/images/logo.gif" alt=""></a>
        </div>
        <div class="header-banner">
            554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:3:"163";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca        </div>
        
        <div class="mall-search">
            <form method="get" action="search.php" onSubmit="return checkSearchForm(this)" class="mallSearch-form">
                <div class="mallSearch-input-wp">
                    <input type="text" name="keywords" id="mq" class="mallSearch-input" value="春到焕新一见倾心" onfocus="javascript:if(this.value=='春到焕新一见倾心'){this.value=''}" onblur="javascript:if(this.value==''){this.value='春到焕新一见倾心'}" >
                    <label for="mq"></label>
                </div>
                <button type="submit">搜索</button>
                <script type="text/javascript">
                    
                    <!--
                    function checkSearchForm()
                    {
                    if(document.getElementById('keyword').value)
                    {
                    return true;
                    }
                    else
                    {
                    alert("请输入搜索关键词！");
                    return false;
                    }
                    }
                    -->
                    
                </script>
            </form>
                    </div>
    </div>
</div>
<div class="header-menu">
    
    <div class="main-nav clearfix block">
        <div class="logo-content">
            <a href="javascript:;" class="cate-tree-all"><i class="iconfont">&#xe607;</i>商品分类</a>
        </div>
        
        <div class="main-nav-list">
                        <a href="category.php?id=2">
                程序员                <div class="hover-pic"></div>
            </a>
                        <a href="category.php?id=1">
                生活用品                <div class="hover-pic"></div>
            </a>
                    </div>
        
        <div class="cate-tree none">
            <div class="cate-tree-bg"></div>
            <ul class="ul-cate-tree">
                                                <li class="cate-tree-item">
                    <i class="iconfont">&#xe603;</i>                                                                                                                                                                                                                                                                                                                                <a href="category.php?id=1" title="生活用品">生活用品</a>
                </li>
                                                                <li class="cate-tree-item">
                                        <i class="iconfont">&#xe604;</i>                                                                                                                                                                                                                                                                                                            <a href="category.php?id=2" title="程序员">程序员</a>
                </li>
                                            </ul>
            <ul class="cate-panel-wp">
                                                <li class="cate-panel panel-1">
                    <div class="left-part">
                                            </div>
                    <div class="right-part">
                        <h3 class="panel-title">
                            <a href="">特色品牌</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告1";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告2";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </li>
                                                                <li class="cate-panel panel-2">
                    <div class="left-part">
                                            </div>
                    <div class="right-part">
                        <h3 class="panel-title">
                            <a href="">特色品牌</a>
                        </h3>
                        <div class="panel-list">
                            <p class="clearfix">
                                                            </p>
                        </div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告1";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                        <div class="ad-pic-1">554fcae493e564ee0dc75bdf2ebf94caads|a:2:{s:4:"name";s:3:"ads";s:4:"type";s:22:"分类树面板广告2";}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </li>
                                            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(function(){
    $(".cate-tree-item,.menu-item").hover(function(){
      $(this).addClass("hover");
    },function(){
      $(this).removeClass("hover");
    });
    //鼠标经过离开分类
      $(".cate-tree-item").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //鼠标经过离开分类面板
      $(".cate-panel").on("mouseenter mouseleave",function(e){
        var index = $(this).index();
        if(e.type == "mouseenter"){
          toggleCatePanel(index, true);
        }else if(e.type == "mouseleave"){
          toggleCatePanel(index, false);
        }
      });
      //显示隐藏分类树方法
      function toggleCatePanel(i, show){
        var $panel = $(".cate-panel").eq(i);
        if(show){
          $panel.show();
        }else{
          $panel.hide();
        }
      }
      //首页之外其它页面分类树显示
      $(".cate-tree-all,.cate-tree").hover(function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
            if($.trim($(".ul-cate-tree").html()).length != 0){//如果分类里有内容
                $(".cate-tree").removeClass("none");
            }
        }
      },function(){
        if(!$(".cate-tree").hasClass("cate-tree-index")){//如果是首页不做任何反应
          $(".cate-tree").addClass("none");
        }
      });
    });
  //禁止鼠标滚动事件冒泡
  $.fn.extend({
    "preventScroll":function(){
        $(this).each(function(){
            var _this = this;
            if(navigator.userAgent.indexOf('Firefox') >= 0){   //firefox
                _this.addEventListener('DOMMouseScroll',function(e){
                    _this.scrollTop += e.detail > 0 ? 60 : -60;
                    e.preventDefault();
                },false);
            }else{
                _this.onmousewheel = function(e){
                    e = e || window.event;
                    _this.scrollTop += e.wheelDelta > 0 ? -60 : 60;
                    return false;
                };
            }
        })
    }
});
$(".cate-panel .left-part").preventScroll();
</script>
<script type="text/javascript">
  $(function(){
      //如果是首页，让分类树直接显示
      $(".cate-tree").each(function(){
        var _this = $(this);
        _this.removeClass("none").addClass("cate-tree-index");
      });
  });
</script>
<script type="text/javascript" src="js/jquery.SuperSlide.js"></script><div class="main-banner-wp">
  <div class="block">
    <div class="main-banner" id="slideBox">
        <ul class="main-banner-hd hd">
                    </ul>
        <div class="bd">
            <ul class="main-banner-bd">
                            </ul>
        </div>
    </div>
    <div class="main-banner-extra">
        <div class="small-banner">
            554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:3:"161";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca            554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:3:"162";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#slideBox").slide({
    effect : "fold",
    autoPlay : true,
    mainCell : ".bd ul"
  });
</script><div class="indexw_content">
<div class="block clearfix" >
<div class="AreaL">
 
<div id="mallNews"    class="  box_1">
    <h3><span>站内快讯</span></h3>
    <div class="NewsList tc  " style="border-top:none">
        <ul>
                </ul>
    </div>
</div>
<div  class="blank"></div>  
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}554fcae493e564ee0dc75bdf2ebf94ca
</div>
<div class="Arear">
 
</div> 
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
  <h4 class="title"><a class="more" href="search.php?intro=best">更多</a><em></em> </h4>
  <div id="show_hot_area" class="clearfix body">
      </div>
</div>
<div class="blank"></div>
</div> 
</div>
  
 </div>
<div class="bottom_ad">
            
</div>
<div class="resetClear"></div>
    <a href="http://www.ecmoban.com" class="ecmoban">ecshop模板堂</a>
 
<div class="blank"></div>
<div class="footer">
    <div class="footer-ensure">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
    <div class="footer-desc clearfix">
                <dl class="qr-code">
            <dt><span class="on">ECjia</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>ECtouch</span></dt>
            <dd>
                <img src="themes/ecmoban_tianmao2016/images/ECJia_code.png" alt="">
                <img class="none" src="themes/ecmoban_tianmao2016/images/ECtouch_code.png">
            </dd>
        </dl>
    </div>
    <div class="footer-copyright">
        <div class="container">
                                    <p class="footer-link">
                                <a href="http://www.maifou.net/" target="_blank" title="买否网">买否网</a>
                 
                | 
                 
                                <a href="http://www.wdwd.com/" target="_blank" title="免费开独立网店">免费开独立网店</a>
                 
                            </p>
                        <span style="color:#909090;">
             
            玉兰香苑四期                         
             
                        </span>
            <div class="d-copyright">
                <p></p>
                <b>
                    &copy; 2005-2016 东华五人组 版权所有，并保留所有权利。                                    </b>
                <p class="pc-copyright">
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_1.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_2.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_3.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_4.jpg"></a>
                    <a href="#" target="_blank"><img src="themes/ecmoban_tianmao2016/images/banquan_5.jpg"></a>
                </p>
            </div>
            <div style="text-align:center; padding:0 0 20px 0;"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_tianmao2016/images/ecmoban.gif" alt="ECShop模板" /></a></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".qr-code dt span").hover(function(){
            var index = $(this).index();
            $(this).addClass("on").siblings().removeClass("on");
            $(".qr-code dd img").eq(index).removeClass("none").siblings().addClass("none");
        });
    })
</script>
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>
      9:00-18:00</div>
    <div class="con">
      <ul>
        
         
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=523609919&amp;Site=东华五人组&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:523609919:4" height="16" border="0" alt="QQ" /> 523609919</a> </li>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        
              </ul>
    </div>
    <div class="b"></div>
  </div>
  <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="themes/ecmoban_tianmao2016/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script> 
</body>
</html>
