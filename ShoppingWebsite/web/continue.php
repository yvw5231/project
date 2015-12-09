<?php
session_start();
$conn=mysql_connect("localhost", "root", "")or die("数据库连接错误");
mysql_select_db("league") or die("数据库名字错误");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<script type="text/javascript"><!--
  var t0_date=new Date();
  window.ue_t0 = t0_date.getTime();
  window.ue = new Object;
  ue.id='0596VPXJ19MVJY25FH4M';
  ue.url='/gp/buy/signin/handlers/continue.html/uedata/478-0742699-8928049';
  function uet(b){
      var a=new Date;
      a=a.getTime();
      if(b){
          ue.t[b]=a
      }
      return a
  }
  if(window.ue){
      if(!window.ueinit){
          window.ueinit=1
      }else{
          window.ueinit++
      }
      ue.t=[];
      ue.h=[];
      ue.t0=uet();
      ue.e="";
      ue.ec=0;
      ue.s=1;
      ue.r={};
      ue.r.ld=0;
      ue.r.ul=0;
      ue.r.oe=0
  }
  function ueh(d,g,b,c){
      var h=g["on"+b];
      if(typeof h=="function"){
          ue.h[d]=h
      }
      if(g.addEventListener){
          g.addEventListener(b,c,null)
      }else{
          if(g.attachEvent){
              g.attachEvent("on"+b,c)
          }else{
              g["on"+b]=c
          }
      }
  }
  function uei(){
      var a=function(){
          if(!ue.r.ld){
              ue.r.ld=1;
              if(ue.h&&ue.h.ld){
                  ue.h.ld()
              }
              uex("ld")
          }
      };
      var c=function(){
          if(!ue.r.ul){
              ue.r.ul=1;
              if(ue.h&&ue.h.ul){
                  ue.h.ul()
              }
              uex("ul")
          }
      };
      var b=function(e,g,f){
          var h=false;
          ue.ec++;
          if(!ue.r.oe){
              ue.r.oe=1;
              if(ue.h.oe){
                  h=ue.h.oe(e,g,f)
              }
              ue.e+="&em="+escape(e)+"&eu="+escape(g)+"&el="+f
          }
          return h
      };
      var d=function(){
          if(ue.s&&ue.h&&ue.h.os){
              ue.h.os();
              uex("os")
          }
      };

      ueh("ld",window,"load",a);
      ueh("ul",window,"beforeunload",c);
      ueh("oe",window,"error",b);
      ueh("os",window,"stop",d)
  }
  if(window.ue&&ue.t){
      uei();
      ue.t0=window.ue_t0;
      uet("ue")
  };
//  if(window.ue&&ue.t) { uei(); ue.t0 = window.ue_t0; uet('ue'); }
//--></script>





<link type="text/css" href="../image/continue/site-wide-6004574592.css" rel="stylesheet"/>
<style type="text/css">

/* non-sprited */
.ap_popover_unsprited .ap_body   .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_left_17._V248144977_.png); }
.ap_popover_unsprited .ap_body   .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_right_17._V248144978_.png); }
.ap_popover_unsprited .ap_header .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_left._V265110087_.png); }
.ap_popover_unsprited .ap_header .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_right._V265110087_.png); }
.ap_popover_unsprited .ap_header .ap_middle { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top._V265110086_.png); }
.ap_popover_unsprited .ap_footer .ap_left   { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_left._V265110084_.png); }
.ap_popover_unsprited .ap_footer .ap_right  { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_right._V265110087_.png); }
.ap_popover_unsprited .ap_footer .ap_middle { background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom._V265110084_.png); }

/* Everything else -- sprited */
.ap_popover_sprited .ap_body .ap_left,
.ap_popover_sprited .ap_body .ap_right {
    background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-v._V219326282_.png);
}


.ap_popover_sprited .ap_header .ap_left,
.ap_popover_sprited .ap_header .ap_right,
.ap_popover_sprited .ap_header .ap_middle,
.ap_popover_sprited .ap_footer .ap_left,
.ap_popover_sprited .ap_footer .ap_right,
.ap_popover_sprited .ap_footer .ap_middle,
.ap_popover_sprited .ap_closebutton {
    background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-h._V219326280_.png);
}

.ap_popover_sprited .ap_body .ap_right-arrow, .ap_popover_sprited .ap_body .ap_left-arrow {
    background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-arrow-v._V219326281_.png);
}

</style>


<script type="text/javascript">

var amznJQ,jQueryPatchIPadOffset=false;
(function() {
  function f(x) {return function(){x.push(arguments);}}
  function ch(y) {return String.fromCharCode(y);}
  var a=[],c=[],cs=[],d=[],l=[],o=[],s=[],p=[];
  amznJQ={
    _a:a,_c:c,_cs:cs,_d:d,_l:l,_o:o,_s:s,_pl:p,
    addLogical:f(l),
    addStyle:f(s),
    addPL:f(p),
    available:f(a),
    chars:{EOL:ch(10), SQUOTE:ch(39), DQUOTE:ch(34), BACKSLASH:ch(92), YEN:ch(165)},
    completedStage:f(cs),
    declareAvailable:f(d),
    onCompletion:f(c),
    onReady:f(o),
    strings:{}
  };
}());


</script>




<title>选择一个配送地址- 亚马逊订单确认</title>

<link href="../image/continue/shipaddressselect.css" rel="stylesheet" type="text/css"/>

<!--[if IE 6]>
<link href="https://images-na.ssl-images-amazon.com/images/G/28/orderApplication/css/addresses/ie6._V168856110_.css" rel="stylesheet" type="text/css"></link>
<![endif]-->


<style type="text/css"><!--





BODY { font-family: verdana,arial,helvetica,sans-serif; font-size: small; background-color: #FFFFFF; color: #000000; margin-top: 0px; }
TD, TH { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }


.serif { font-family: times,serif; font-size: medium; }
.sans { font-family: verdana,arial,helvetica,sans-serif; font-size: medium; }
.small { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }
.h1 { font-family: verdana,arial,helvetica,sans-serif; color: #E47911; font-size: medium; }
.h3color { font-family: verdana,arial,helvetica,sans-serif; color: #E47911; font-size: small; }
h2.small {margin-bottom: 0em; }
h2.h1 { margin-bottom: 0em; }
h2.h3color { margin-bottom: 0em; }
.tiny { font-family: verdana,arial,helvetica,sans-serif; font-size: small; }
.tinyprice { font-family: verdana,arial,helvetica,sans-serif; color: #990000; font-size: small; }
.highlight { font-family: verdana,arial,helvetica,sans-serif; color: #990000; font-size: small; }
.listprice { font-family: arial,verdana,helvetica,sans-serif; text-decoration: line-through; }
.price { font-family: arial,verdana,helvetica,sans-serif; color: #990000; }
.popover-tiny { font-size: small; font-family: verdana,arial,helvetica,sans-serif; }
.horizontal-search { font-weight: bold; font-size: small; color: #FFFFFF; font-family: verdana,arial,helvetica,sans-serif; }
.horizontal-websearch { font-size: small; font-family: verdana,arial,helvetica,sans-serif; padding-left: 12px; }
.big { font-size: xx-large; font-family: verdana,arial,helvetica,sans-serif; }
.amabot_widget .headline { color: #E47911; font-size: medium; display: block; font-weight: bold; }
div.unified_widget .headline { color: #E47911; font-size: medium; display: block; font-weight: bold; }




div#page-wrap { min-width:980px;}
* html div#page-wrap { border-right: 980px solid #fff; width: 100%; margin-right: 25px;}
* html div#content { float: left; position:relative; margin-right: -980px; }
div#leftcol, div#leftcolhidden { float: left; width: 180px; margin:5px 0px 0px 5px; display: inline;}
div#rightcol, div#rightcolhidden { float: right; width: 300px; margin-top:5px;}
div#leftcolhidden { clear:left;}
div#rightcolhidden { clear:right; }
  div#centercol, div#centerrightspancol { overflow:hidden; }
* html div#centercol { width:100%; }
* html div#centerrightspancol { width: 100%; }
div#page-footer { clear: both; }

a:link { font-family: verdana,arial,helvetica,sans-serif; color: #004B91; }
a:visited { font-family: verdana,arial,helvetica,sans-serif; color: #996633; }
a:active { font-family: verdana,arial,helvetica,sans-serif; color: #FF9933; }

a.dynamic, a.dynamic:visited { color: #004B91; text-decoration: none; border-bottom: 1px dashed; }
a.noclick, a.noclick:visited { color: #000000; text-decoration: none; border-bottom: 1px dashed; }

.noLinkDecoration a { text-decoration: none; border-bottom: none; }
.noLinkDecoration a:hover { text-decoration: underline; }
.noLinkDecoration a.dynamic:hover { text-decoration: none; border-bottom: 1px dashed; }
.noLinkDecoration a.noclick:hover { color: #000000; text-decoration: none; border-bottom: 1px dashed; }

.attention { background-color: #FFFFD5; }
.alertgreen { color: #009900; font-weight: bold; }
.alert { color: #FF0000; font-weight: bold; }
.topnav { font-family: verdana,arial,helvetica,sans-serif; font-size: 12px; text-decoration: none; }
.topnav a:link, .topnav a:visited { text-decoration: none; color: #003399; }
.topnav a:hover { text-decoration: none; color: #E47911; }
.topnav-active a:link, .topnav-active a:visited { font-family: verdana,arial,helvetica,sans-serif; font-size: 12px; color: #E47911; text-decoration: none; }
.eyebrow { font-family: verdana,arial,helvetica,sans-serif; font-size: 10px; font-weight: bold;text-transform: uppercase; text-decoration: none; color: #FFFFFF; }
.eyebrow a:link { text-decoration: none; }
.popover-tiny a, .popover-tiny a:visited { text-decoration: none; color: #003399; }
.popover-tiny a:hover { text-decoration: none; color: #E47911; }
.tabon a:hover, .taboff a:hover { text-decoration: underline; }
.tabon div, .taboff div { margin-top: 7px; margin-left: 9px; margin-bottom: 5px; }
.tabon a, .tabon a:visited  { font-size: 10px; color: #FFCC66; font-family: verdana,arial,helvetica,sans-serif; text-decoration: none; text-transform: uppercase; font-weight: bold; line-height: 10px; }
.taboff a, .taboff a:visited { font-size: 10px; color: #000000; font-family: verdana,arial,helvetica,sans-serif; text-decoration: none; text-transform: uppercase; font-weight: bold; line-height: 10px; }
.indent { margin-left: 1em; }
.half { font-size: .5em; }
.list div { margin-bottom: 0.25em; text-decoration: none; }
.hr-center { margin: 15px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: dotted; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-color: #999999; border-right-color: #999999; border-bottom-color: #999999; border-left-color: #999999; }
.amabot_right .h1 { color: #E47911; font-size: .92em; }
.amabot_right .amabot_widget .headline, .amabot_left .amabot_widget .headline { color: #E47911; font-size: .92em; display: block; font-weight: bold; }
.amabot_left .h1 { color: #E47911; font-size: .92em; }
.amabot_left .amabot_widget, .amabot_right .amabot_widget, .tigerbox {  padding-top: 8px;  padding-bottom: 8px;  padding-left: 8px;  padding-right: 8px;  border-bottom: 1px solid #C9E1F4;   border-left: 1px solid #C9E1F4;  border-right: 1px solid #C9E1F4;  border-top: 1px solid #C9E1F4; }
.amabot_center div.unified_widget, .amabot_center .amabot_widget {  font-size: 12px; }
.amabot_right div.unified_widget, .amabot_right .amabot_widget {  font-size: 12px; }
.amabot_left div.unified_widget, .amabot_left .amabot_widget {  font-size: 12px; }
.rightArrow { color: #E47911; font-weight: bold; padding-right: 6px; }
.nobullet { list-style-type: none }
.homepageTitle { font-size: 28pt; font-family: 'Arial Bold', Arial; font-weight: 800; font-variant: normal; font-style: bold; color: #80B6CE; line-height:1em; }
div.unified_widget p { margin:0 0 0.5em 0; line-height:1.4em; }
div.unified_widget h2 { color:#E47911; padding:0; }
.amabot_right div.unified_widget .headline, .amabot_left div.unified_widget .headline { color: #E47911; font-size: .92em; display: block; font-weight: bold; }
div.unified_widget sup { font-weight:normal; font-size: 75%; }
div.unified_widget h2 sup { font-size: 50%; }
td.amabot_left div.unified_widget h2, td.amabot_right div.unified_widget h2, div.amabot_left div.unified_widget h2, div.amabot_right div.unified_widget h2 { font-size:100%; margin:0 0 0.5em 0; }
td.amabot_center div.unified_widget h2, div.amabot_center div.unified_widget h2 { font-size:135%; font-weight:bold; margin:0 0 0.35em -10px; }
td.amabot_center div.unified_widget, div.amabot_center div.unified_widget { margin-left:10px; }
td.amabot_center, div.amabot_center { padding:5px; }
div.unified_widget ul { margin: 1em 0; padding: 0 0 0 15px; list-style-position:inside; }
div.unified_widget ol { margin:0; padding:0 0 0 2.5em; }
div.unified_widget a:link, div.unified_widget a:visited { text-decoration:underline; }
div.unified_widget a:hover { text-decoration:underline; }
div.unified_widget p.seeMore { clear:both; font-family:verdana,arial,helvetica,sans-serif; margin:0; padding-left:1.15em; text-indent: -1.15em; font-size:100%; font-weight:normal; }
div.unified_widget p.seeMore a:link, div.unified_widget p.seeMore a:visited { text-decoration:underline; }
div.unified_widget p.seeMore a:hover { text-decoration: underline; }
div.unified_widget .carat, div.left_nav .carat { font-weight:bold; font-size:120%; font-family: verdana,arial,helvetica,sans-serif; color:#E47911; margin-right:0.20em; }
div.unified_widget a img { border:0; }
div.h_rule { clear:both; }
div#centerrightspancol div.h_rule { clear:right; }
div.unified_widget { margin-bottom:2em; clear:both; }
div.unified_widget div.col1 { width: 100%; }
div.unified_widget div.col2 { width: 49%; }
div.unified_widget div.col3 { width: 32%; }
div.unified_widget div.col4 { width: 24%; }
div.unified_widget div.col5 { width: 19%; }
div.unified_widget table { border:0; border-collapse:collapse; width:100%; }
div.unified_widget td { padding:0 8px 8px 0; vertical-align:top; }
div.unified_widget table.col1 td { width:100%; }
div.unified_widget table.col2 td { width:49%; }
div.unified_widget table.col3 td { width:32%; }
div.unified_widget table.col4 td { width:24%; }
div.unified_widget table.col5 td { width:19%; }
div.unified_widget td.bottom { vertical-align:baseline; }
div.unified_widget table h4, div.unified_widget h4 { color:#000; font-size:100%; font-weight:normal; margin:0; padding:0; }
div.rcmBody div.prodImage, amabot_widget div.prodImage {float:left; margin:0px 0.5em 0.25em 0px;}
td.amabot_right div.unified_widget, td.amabot_left div.unified_widget, div.amabot_right div.unified_widget, div.amabot_left div.unified_widget { border: 1px solid #C9E1F4; padding: 8px; margin-bottom:20px; }
* html td.amabot_right div.unified_widget, * html div.amabot_right div.unified_widget { height:100%; }
* html td.amabot_left div.unified_widget, * html div.amabot_left div.unified_widget { height:100%; }
div.rcmBody, amabot_widget div.rcmBody { line-height:1.4em; }
div.rcmBody a:link, div.rcmBody a:visited { text-decoration: underline; }
div.rcmBody p.seeMore, amabot_widget div.rcmBody p.seeMore { margin-top:0.5em; }
div.rcmBody div.bannerImage { text-align:center; }
div.rcmBody h2 span.homepageTitle { display:block; margin-bottom:-0.3em; margin-top:-0.12em; line-height:1em; }
div.rcmBody h2 img { float:none; }
table.coopTable div.rcmBody .headline { font-size: 110%; }
table.coopTable div.rcmBody h2 { font-size: 110%; font-weight:bold; }
table.promo div.rcmBody h2 { font-size: 100%; font-weight:bold; }
div.left_nav { font-family: Arial, sans-serif; font-size:100%; margin:0; line-height:1.05em; width:100%; border: 1px solid #C9E1F4; padding-bottom:10px; }
div.left_nav h2 { margin:0 0 0 0; color: #000000; font-weight: bold; line-height: 1.25em; font-size: 100%; font-family: verdana,arial,helvetica,sans-serif; padding: 3px 6px; background-color: #EAF3FE; }
div.left_nav h3 { font-family: verdana,arial,helvetica,sans-serif; margin:0.5em 0 0.4em 0.5em; color: #E47911; font-weight: bold; line-height: 1em; font-size:100%; padding-right:0.5em; }
div.left_nav ul { margin:0; padding:0; }
div.left_nav li, div.left_nav p { list-style: none; margin:0.5em 0.5em 0 1em; line-height:1.2em; }
div.left_nav hr { margin: 1em 0.5em; border-top:0; border-left:0; border-right:0; border-bottom: 1px dashed #cccccc; }
div.left_nav a:link, div.left_nav a:visited { color: #003399; text-decoration: none; font-family: Arial, sans-serif; }
div.left_nav a:hover { color: #2a70fc; text-decoration: underline; }
div.left_nav p.seeMore { padding-left:0.9em; text-indent:-0.9em; margin-top: 0.35em; margin-bottom: 1em; }
div.left_nav p.seeMore a:link, div.left_nav p.seeMore a:visited { text-decoration:none; }
div.left_nav p.seeMore a:hover { text-decoration:underline; }
div.seller_central li { font-size:95%; }
div.leftnav_popover { width:35em; border:3px solid #ededd3; padding:10px; }
div.leftnav_popover li { font-size: 100%; }
div.leftnav_popover h2 { font-family:verdana,arial,helvetica,sans-serif; margin:0 0 0.5em 0; color:#E47911; line-height: 1em; font-size:100%; padding-right:0.5em; background-color: #FFFFFF; padding-left:0; }
div.leftnav_popover ul.popover_col { float:left; width:33%; margin:0; padding:0; }
div.leftnav_popover ul.popover_col li { list-style:none; font-size:90%; line-height:1.5em; line-height:1.2em; margin: 0 5px 0.7em 0 }
div.leftnav_popover ul.popover_col li a { text-decoration:none; }
div.leftnav_popover ul.popover_col li a:hover { text-decoration:underline; }
div.leftnav_popover p.seeMore { margin-left:0; }
div.leftnav_popover div.h_rule_popup { clear:left; margin-bottom: 5px; border-bottom:1px dashed #cccccc; }
div.asinItem { float:left; margin-bottom:1em; width:32%; }
div.asinTextBlock { padding:0 8px 8px 0; }
div.asinItem div.prodImage { height:121px; display:table-cell; vertical-align:bottom; }
div.asinItem div.localImage { display:table-cell; vertical-align:bottom; }
div.asinItem span { margin: 0.5em 0 0.25em 0; }
div.asinItem ul { margin:0; padding:0 0 0.5em 1.3em; text-indent: -1.3em; font-size:90%; }
div.asinTitle {padding-top:3px; padding-bottom:2px;}
div.row { clear:both; }
body.dp {}
body.dp div.h_rule { clear:none; }
body.dp div.unified_widget { clear:none; }
div.asinCoop div.asinItem { float:none; width:100%;}
div.asinCoop_header {}
div.asinCoop_footer {}
div.newAndFuture div.asinItem ul { font-size:100%; }
div.newAndFuture div.asinItem li { list-style-position: outside; margin:0 0 0.35em 20px; padding:0; text-indent: 0; }
div.newAndFuture h3 { font-size:100%; margin:1em 0 ; }
div.newAndFuture a:link, div.newAndFuture a:visited { text-decoration:underline; }
div.newAndFuture a:hover { text-decoration:underline; }
div.newAndFuture p.seeMore { margin:-0.75em 0 0 35px; }
div.unified_widget ol.topList { margin: 0; padding: 0; list-style: none; }
div.unified_widget ol.topList li { list-style: none; clear: both; display: list-item; padding-top: 6px; }
div.unified_widget ol.topList .productImage { display: block; float: left;vertical-align: top;text-align: center;width:60px; }
div.unified_widget ol.topList .productText { display: block; float: left; padding-left:10px; vertical-align: top; }
:root div.unified_widget span.productImage { display: table-cell; float: none; }
:root div.unified_widget span.productText { display: table-cell; float: none; }
div.unified_widget dl.priceBlock {margin:0 0 0.45em 0;}
div.unified_widget dl.priceBlock dt {clear:left; font-weight:bold; float:left; margin:0 0.3em 0 0;}
div.unified_widget dl.priceBlock dd {margin:0 0 0.2em 0;}
div.unified_widget .bold {font-weight:bold;}
div.unified_widget .byline { font-size: 95%; font-weight: normal; }
table.thirdLvlNavContent div.blurb { margin:10px; }
div.pageBanner h1 { font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:225%; color: #e47911; letter-spacing:-0.03em; margin:0 0 0 -10; }
div.pageBanner p { font-size:90%; color:#888888; margin:0 0 0 -10; }
div.pageBanner h1.bkgnd { background-repeat:no-repeat; background-color:#FFFFFF; overflow:hidden; text-indent:-100em; }

div.blurb div.title
{
    font-weight:bold; padding-top:5px; padding-bottom:2px;
}


--></style>
<!--[if IE]>
<style type="text/css">
BODY {
        font-size: 12px;
}
TD, TH {
        font-size: 12px;
}
.small {
        font-size: 12px;
}
.h3color {
        font-size: 12px;
}
.tiny {
        font-size: 12px;
}
.tinyprice {
        font-size: 12px;
}
.highlight {
        font-size: 12px;
}
.popover-tiny {
        font-size: 12px;
}
.horizontal-search {
        font-size: 12px;
}
.horizontal-websearch {
        font-size: 12px;
}
</style>
<![endif]-->

<style type="text/css">
<!--
.headerCell {
        padding: 4px;
        background-color: #EEEECC;
        border-color: #FFFFFF;
        border-top-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 1px;
        border-left-style: solid;
        border-right-width: 1px;
        border-right-style: solid;
}
.confirmGlobalHeaderCell { background-color: #4480DD; }
.confirmGlobalBorderCell { background-color: #D5D5B5; }
.confirmHeaderCell { background-color: #BBBB9E; }
.importantMessage { background-color: #FFFFCC;}
.errorMessage {color: #990000;}
.h1blue { font-family: verdana,helvetica,sans-serif; font-size: medium; color: #4480DD}
.clear { font-family: verdana,helvetica,sans-serif; color: #FFFFFF}
.blueboxmid {
	padding: 5px;
	padding-bottom: 0px;
	border-right-width: 2px;
	border-right-style: solid;
	border-right-color: #334477;
	background-color: #e2eef2;
	}
.blueboxtop {
	padding: 5px;
	padding-bottom: 0px;
	border-top-width: 2px;
	border-top-style: solid;
	border-top-color: #334477;
	border-right-width: 2px;
	border-right-style: solid;
	border-right-color: #334477;
	background-color: #e2eef2;
	}
.blueboxbottom {
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #334477;
	border-right-width: 2px;
	border-right-style: solid;
	border-right-color: #334477;
	background-color: #e2eef2;
	height: 15px;
	}
.customizedList {
        margin: 0px;
        padding: 0px;
        list-style-type: none;
}
.customizedEntry {
        width: 180px;
        margin: 5px 10px 2px 0px;
        text-indent: -1.2em;
        padding-left: 3em;
        float: left;
}
.bold {
       font-weight:bold;
}

.highlight {
       font-weight:bold,
       font-color DD9988,
}

.chinaInvoicePopoverTable td {
    padding: 2px;
}

.chinaInvoicePopoverInputError {
    background-color: #FFE4B5;
}

.chinaInvoicePopoverFieldError {
    display: none;
    text-align: left;
    font-size: .8em;
    color: red;
    clear: both;
}
-->
</style>


<style type="text/css">

.displayAddressDiv .displayAddressUL {
  list-style-type: none;
  padding: 0%;
  margin-left: 0%;
  margin-top: 0%;
  margin-bottom: 0%;
  text-align: left;
  vertical-align:top;
}

.displayAddressDiv .displayAddressLI {
 width: 100%;
}

.displayAddressDiv {
  vertical-align: top;
  padding-bottom: 0.5em;
}

.displayAddressDiv h2 {
  font-size: 1em;
  display: inline;
}

#chooseAddressDiv table {
  width: 100%;
}

#chooseAddressDiv td {
  vertical-align: top;
}

.enterAddressFieldLabel {
  text-align: right;
}

.enterAddressFormTable td {
    padding: 2px;
}

#enterAddressFormDiv input {
  text-align: left;
}

#enterAddressFormDiv select {
  text-align: left;
  overflow: auto;
}

div#enterAddressFormDiv {
  text-align: left;
}

.enterAddressFieldError {
  display: block;
  text-align: left;
  font-size: .8em;
  color: red;
  clear: both;
}

#enterAddressFormDiv .enterAddressFieldSeparatorDiv {
  clear: both;
}

.enterAddressFormInputError {
  background-color: #FFE4B5;
}

#chooseAddressDiv .chooseAddressEditThisAddressButton {
  margin : 0em .5em;
}

#chooseAddressDiv .chooseAddressDeleteThisAddressButton {
  margin : 0em .5em;
}

#chooseAddressDiv .chooseAddressChooseThisAddressRadioButton {
  vertical-align: -4em;
}

#chooseAddressDiv .chooseAddressChooseThisAddressRadioButtonDiv {
  float : left;
  height: 100%;
}

#chooseAddressDiv td {
 width: 33%;
}

#chooseAddressDiv .chooseAddressSeparator {
  margin-top : 1em;
}

#deleteAddressDiv {
  color: #a00000;
  padding-left: 3em;
}

.enterDeliveryPrefsLabel {
  text-align: right;
  vertical-align: middle;
}

#deliveryPreferences {
 color: #E47911;
 text-decoration: none;
}

#whatsThisLink a {
 color: #004B91;
 text-decoration: none;
}

#whatsThisLink a:hover, #whatsThisLink a:active, #whatsThisLink a:hover span, #whatsThisLink a:active span {
 color: #E47911;
 text-decoration: underline;
}

</style>


<style type="text/css">
body,td,.h3color,.small,.highlight {font-size: small;}
</style>


<script type="text/javascript"><!--
if(window.ue&&ue.t) { uet('bb'); }
//--></script>

</head>
<body><div id="ap_container"><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe></div>


<script type="text/javascript">

window.AmazonPopoverImages = {
  snake: 'https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/snake._V192571611_.gif',
  btnClose: 'https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/btn_close._V192188154_.gif',
  closeTan: 'https://images-na.ssl-images-amazon.com/images/G/28/nav2/images/close-tan-sm._V151548633_.gif',
  closeTanDown: 'https://images-na.ssl-images-amazon.com/images/G/28/nav2/images/close-tan-sm-dn._V151548638_.gif',
  loadingBar: 'https://images-na.ssl-images-amazon.com/images/G/01/javascripts/lib/popover/images/loading-bar-small._V192188122_.gif',
  pixel: 'https://images-na.ssl-images-amazon.com/images/G/01/icons/blank-pixel._V192192429_.gif'
};
var container = document.createElement("DIV");
container.id = "ap_container";
if (document.body.childNodes.length) {
    document.body.insertBefore(container, document.body.childNodes[0]);
} else {
    document.body.appendChild(container);
}

</script>

    <script type="text/javascript" src="../image/continue/site-wide-9157543102.js"></script>
<script type="text/javascript">
    amznJQ.addLogical('popover', []);
</script>


  <div id="doc">

    <div id="hd">
      <div id="progressbar">
        <img src="../image/continue/checkout-spc-address-banner.gif" alt="选择一个配送地址- 亚马逊订单确认" border="0" height="36" width="563"/>
      </div>
    </div>


    <div id="bd">
      <div id="wrapper">



<div id="instructionswrapper">

<div id="instructions">

    <form method="post" action="/gp/buy/address/static-display/new-intl-address.html">
       或输入<input src="../image/continue/new-address-international.gif" alt="国际（美国以外）" name="newIntlAddress" border="0" height="16" type="image" width="58"/>
    <input name="hasWorkingJavascript" id="hasWorkingJavascript" value="1" type="hidden"/></form>


</div><!--instructions-->
</div><!--instructionswrapper-->

        <div>
        <table class="newaddressestable">
           <tbody><tr>
           <td class="newhomeaddress">
                     <div class="newaddressheading">
        <div><h1><a name="new-address">输入新配送地址.</a></h1></div>
        完成后，请点击"继续"按钮。<br/>
        </div>
  <form action="/gp/buy/shipaddressselect/handlers/continue.html/ref=ox_shipaddress_add_new_addr" method="post">
    <input name="__mk_zh_CN" value="亚马逊网站" type="hidden"/>
    <input name="numberOfDistinctItems" value="1" type="hidden"/>
            <noscript>
              <input type="hidden" name="javascriptEnabled" value="0" />
            </noscript>










<script type="text/javascript">
      var cnProvincialData = [{"北京":[{"北京市":["东城区","西城区","崇文区","宣武区","朝阳区","丰台区","石景山区","海淀区","门头沟区","房山区","通州区","顺义区","昌平区","大兴区","怀柔区","平谷区","密云县","延庆县"]}]},{"天津":[{"天津市":["和平区","河东区","河西区","南开区","河北区","红桥区","塘沽区","汉沽区","大港区","东丽区","西青区","津南区","北辰区","武清区","宝坻区","宁河县","静海县","蓟县"]}]},{"河北":[{"石家庄市":["长安区","桥东区","桥西区","新华区","井陉矿区","裕华区","辛集市","藁城市","晋州市","新乐市","鹿泉市","井陉县","正定县","栾城县","行唐县","灵寿县","高邑县","深泽县","赞皇县","无极县","平山县","元氏县","赵县"]},{"唐山市":["路北区","路南区","古冶区","开平区","丰南区","丰润区","遵化市","迁安市","滦县","滦南县","乐亭县","迁西县","玉田县","唐海县"]},{"秦皇岛市":["海港区","山海关区","北戴河区","昌黎县","抚宁县","卢龙县","青龙满族自治县","开发区"]},{"邯郸市":["丛台区","邯山区","复兴区","峰峰矿区","武安市","邯郸县","临漳县","成安县","大名县","涉县","磁县","肥乡县","永年县","邱县","鸡泽县","广平县","馆陶县","魏县","曲周县"]},{"邢台市":["桥东区","桥西区","南宫市","沙河市","邢台县","临城县","内丘县","柏乡县","隆尧县","任县","南和县","宁晋县","巨鹿县","新河县","广宗县","平乡县","威县","清河县","临西县"]},{"保定市":["新市区","北市区","南市区","涿州市","定州市","安国市","高碑店市","满城县","清苑县","涞水县","阜平县","徐水县","定兴县","唐县","高阳县","容城县","涞源县","望都县","安新县","易县","曲阳县","蠡县","顺平县","博野县","雄县"]},{"张家口市":["桥西区","桥东区","宣化区","下花园区","宣化县","张北县","康保县","沽源县","尚义县","蔚县","阳原县","怀安县","万全县","怀来县","涿鹿县","赤城县","崇礼县"]},{"承德市":["双桥区","双滦区","鹰手营子矿区","承德县","兴隆县","平泉县","滦平县","隆化县","丰宁满族自治县","宽城满族自治县","围场满族蒙古族自治县"]},{"沧州市":["运河区","新华区","泊头市","任丘市","黄骅市","河间市","沧县","青县","东光县","海兴县","盐山县","肃宁县","南皮县","吴桥县","献县","孟村回族自治县"]},{"廊坊市":["安次区","广阳区","霸州市","三河市","固安县","永清县","香河县","大城县","文安县","大厂回族自治县"]},{"衡水市":["桃城区","冀州市","深州市","枣强县","武邑县","武强县","饶阳县","安平县","故城县","景县","阜城县"]}]},{"山西":[{"太原市":["迎泽区","小店区","万柏林区","杏花岭区","尖草坪区","古交市","晋源区","阳曲县","清徐县","娄烦县"]},{"大同市":["城区","矿区","南郊区","大同县","浑源县","广灵县","阳高县","左云县","灵丘县","天镇县","新荣区"]},{"阳泉市":["城区","郊区","矿区","平定县","盂县"]},{"长治市":["城区","郊区","潞城市","长治县","长子县","壶关县","黎城县","平顺县","沁县","沁源县","屯留县","武乡县","襄垣县"]},{"晋城市":["城区","高平市","陵川县","沁水县","阳城县","泽州县"]},{"朔州市":["朔城区","平鲁区","怀仁县","山阴县","应县","右玉县"]},{"晋中市":["榆次区","太谷县","介休市","平遥县","祁县","和顺县","灵石县","寿阳县","昔阳县","榆社县","左权县"]},{"运城市":["盐湖区","河津市","稷山县","绛县","临猗县","平陆县","芮城县","万荣县","闻喜县","夏县","新绛县","永济市","垣曲县"]},{"忻州市":["忻府区","原平市","保德县","代县","定襄县","繁峙县","河曲县","静乐县","岢岚县","宁武县","偏关县","神池县","五台县","五寨县"]},{"临汾市":["尧都区","洪洞县","安泽县","大宁县","汾西县","浮山县","古县","侯马市","霍州市","吉县","蒲县","曲沃县","隰县","乡宁县","襄汾县","翼城县","永和县"]},{"吕梁市":["离石区","孝义市","汾阳市","交城县","文水县","方山县","交口县","岚县","临县","柳林县","石楼县","兴县","中阳县"]}]},{"内蒙古":[{"呼和浩特市":["赛罕区","新城区","回民区","玉泉区","和林格尔县","清水河县","土默特左旗","托克托县","武川县"]},{"包头市":["白云矿区","达尔罕茂明安联合旗","东河区","固阳县","九原区","昆都仑区","青山区","石拐区","土默特右旗"]},{"乌海市":["海勃湾区","海南区","乌达区"]},{"赤峰市":["红山区","松山区","元宝山区","阿鲁科尔沁旗","敖汉旗","巴林右旗","巴林左旗","喀喇沁旗","克什克腾旗","林西县","宁城县","翁牛特旗"]},{"通辽市":["科尔沁区","霍林郭勒市","开鲁县","科尔沁左翼后旗","科尔沁左翼中旗","库伦旗","奈曼旗","扎鲁特旗"]},{"鄂尔多斯市":["东胜区","准格尔旗","达拉特旗","鄂托克旗","鄂托克前旗","杭锦旗","乌审旗","伊金霍洛旗"]},{"呼伦贝尔市":["海拉尔区","满洲里市","阿荣旗","陈巴尔虎旗","额尔古纳市","鄂伦春自治旗","鄂温克族自治旗","根河市","莫力达瓦达斡尔族自治旗","新巴尔虎右旗","新巴尔虎左旗","牙克石市","扎兰屯市"]},{"巴彦淖尔市":["临河区","磴口县","杭锦后旗","乌拉特后旗","乌拉特前旗","乌拉特中旗","五原县"]},{"乌兰察布市":["集宁区","察哈尔右翼后旗","察哈尔右翼前旗","察哈尔右翼中旗","丰镇市","化德县","凉城县","商都县","四子王旗","兴和县","卓资县"]},{"兴安盟":["乌兰浩特市","突泉县","阿尔山市","科尔沁右翼前旗","科尔沁右翼中旗","扎赉特旗"]},{"锡林郭勒盟":["锡林浩特市","阿巴嘎旗","东乌珠穆沁旗","多伦县","二连浩特市","苏尼特右旗","苏尼特左旗","太仆寺旗","西乌珠穆沁旗","镶黄旗","正蓝旗","正镶白旗"]},{"阿拉善盟":["阿拉善左旗","阿拉善右旗","额济纳旗"]}]},{"辽宁":[{"沈阳市":["沈河区","和平区","皇姑区","铁西区","大东区","东陵区","于洪区","辽中县","苏家屯区","沈北新区","浑南新区","新民市","法库县","康平县"]},{"大连市":["西岗区","中山区","沙河口区","甘井子区","旅顺口区","金州区","瓦房店市","普兰店市","庄河市","长海县","长兴岛市"]},{"鞍山市":["铁东区","铁西区","立山区","千山区","海城市","台安县","岫岩满族自治县"]},{"抚顺市":["顺城区","新抚区","东洲区","望花区","抚顺县","清原满族自治县","新宾满族自治县"]},{"本溪市":["平山区","明山区","溪湖区","南芬区","本溪满族自治县","桓仁满族自治县"]},{"丹东市":["振兴区","元宝区","振安区","东港市","凤城市","宽甸满族自治县"]},{"锦州市":["太和区","古塔区","凌河区","凌海市","北镇市","黑山县","义县"]},{"营口市":["站前区","西市区","鲅鱼圈区","老边区","大石桥市","盖州市"]},{"阜新市":["海州区","新邱区","太平区","清河门区","细河区","阜新蒙古族自治县","彰武县"]},{"辽阳市":["白塔区","文圣区","宏伟区","弓长岭区","太子河区","灯塔市","辽阳县"]},{"盘锦市":["兴隆台区","双台子区","大洼县","盘山县"]},{"铁岭市":["银州区","清河区","调兵山市","开原市","铁岭县","西丰县","昌图县"]},{"朝阳市":["双塔区","龙城区","北票市","凌源市","朝阳县","建平县","喀喇沁左翼蒙古族自治县"]},{"葫芦岛市":["龙港区","连山区","建昌县","南票区","绥中县","兴城市"]}]},{"吉林":[{"长春市":["朝阳区","南关区","宽城区","二道区","绿园区","双阳区","德惠市","九台市","榆树市","农安县"]},{"吉林市":["船营区","昌邑区","龙潭区","丰满区","蛟河市","桦甸市","舒兰市","磐石市","永吉县"]},{"四平市":["铁东区","铁西区","公主岭市","梨树县","双辽市","伊通满族自治县"]},{"辽源市":["龙山区","东辽县","东丰县","西安区"]},{"通化市":["东昌区","二道江区","梅河口市","集安市","通化县","辉南县","柳河县"]},{"白山市":["八道江区","江源县","临江市","抚松县","靖宇县","长白朝鲜族自治县"]},{"松原市":["宁江区","长岭县","乾安县","扶余县","前郭尔罗斯蒙古族自治县"]},{"白城市":["洮北区","洮南市","大安市","镇赉县","通榆县"]},{"延边朝鲜族自治州":["延吉市","图们市","敦化市","珲春市","龙井市","和龙市","汪清县","安图县"]}]},{"黑龙江":[{"哈尔滨市":["松北新区","道里区","南岗区","道外区","平房区","香坊区","呼兰区","阿城市","双城市","尚志市","五常市","依兰县","方正县","宾县","巴彦县","木兰县","通河县","延寿县"]},{"齐齐哈尔市":["龙沙区","建华区","铁锋区","昂昂溪区","富拉尔基区","碾子山区","梅里斯达斡尔族区","讷河市","龙江县","依安县","泰来县","甘南县","富裕县","克山县","克东县","拜泉县"]},{"鸡西市":["鸡冠区","恒山区","滴道区","梨树区","城子河区","麻山区","虎林市","密山市","鸡东县"]},{"鹤岗市":["兴山区","向阳区","工农区","南山区","兴安区","东山区","萝北县","绥滨县"]},{"双鸭山市":["尖山区","岭东区","四方台区","宝山区","集贤县","友谊县","宝清县","饶河县"]},{"大庆市":["萨尔图区","龙凤区","让胡路区","红岗区","大同区","肇州县","肇源县","林甸县","杜尔伯特蒙古族自治县"]},{"伊春市":["伊春区","南岔区","友好区","西林区","翠峦区","新青区","美溪区","金山屯区","五营区","乌马河区","汤旺河区","带岭区","乌伊岭区","红星区","上甘岭区","铁力市","嘉荫县"]},{"佳木斯市":["前进区","向阳区","东风区","郊区","同江市","富锦市","桦南县","桦川县","汤原县","抚远县"]},{"七台河市":["桃山区","新兴区","茄子河区","勃利县"]},{"牡丹江市":["爱民区","东安区","阳明区","西安区","绥芬河市","海林市","宁安市","穆棱市","东宁县","林口县"]},{"黑河市":["爱辉区","北安市","五大连池市","嫩江县","逊克县","孙吴县"]},{"绥化市":["北林区","安达市","肇东市","海伦市","望奎县","兰西县","青冈县","庆安县","明水县","绥棱县"]},{"大兴安岭地区":["呼玛县","呼中区","加格达奇区","漠河县","松岭区","塔河县","新林区"]}]},{"上海":[{"上海市":["黄浦区","卢湾区","徐汇区","长宁区","静安区","普陀区","闸北区","虹口区","杨浦区","闵行区","宝山区","嘉定区","浦东新区","金山区","松江区","青浦区","南汇区","奉贤区","崇明县"]}]},{"江苏":[{"南京市":["玄武区","白下区","秦淮区","建邺区","鼓楼区","下关区","浦口区","栖霞区","雨花台区","江宁区","六合区","溧水县","高淳县"]},{"无锡市":["崇安区","南长区","北塘区","滨湖区","锡山区","惠山区","江阴市","宜兴市","新区"]},{"徐州市":["鼓楼区","云龙区","九里区","贾汪区","泉山区","丰县","沛县","铜山县","铜山新区","睢宁县","新沂市","邳州市"]},{"常州市":["天宁区","钟楼区","戚墅堰区","新北区","武进区","溧阳市","金坛市"]},{"苏州市":["沧浪区","平江区","金阊区","虎丘区","吴中区","相城区","常熟市","张家港市","昆山市","吴江市","太仓市","高新区","工业园区"]},{"南通市":["崇川区","港闸区","海安县","如东县","启东市","如皋市","通州市","海门市","经济开发区"]},{"连云港市":["新浦区","连云区","海州区","赣榆县","东海县","灌云县","灌南县"]},{"淮安市":["清河区","清浦区","楚州区","淮阴区","涟水县","洪泽县","盱眙县","金湖县"]},{"盐城市":["亭湖区","盐都区","响水县","滨海县","阜宁县","射阳县","建湖县","东台市","大丰市"]},{"扬州市":["广陵区","邗江区","维扬区","宝应县","仪征市","高邮市","江都市","开发区"]},{"镇江市":["京口区","润州区","丹徒区","丹阳市","大港开发区","丁卯开发区","句容市","扬中市"]},{"泰州市":["海陵区","高港区","兴化市","靖江市","泰兴市","姜堰市"]},{"宿迁市":["宿城区","宿豫区","沭阳县","泗洪县","泗阳县"]}]},{"浙江":[{"杭州市":["上城区","下城区","江干区","拱墅区","西湖区","滨江区","萧山区","余杭区","桐庐县","淳安县","建德市","富阳市","临安市"]},{"宁波市":["海曙区","江东区","江北区","北仑区","镇海区","鄞州区","象山县","宁海县","余姚市","慈溪市","奉化市"]},{"温州市":["鹿城区","瓯海区","龙湾区","洞头县","永嘉县","平阳县","苍南县","文成县","泰顺县","瑞安市","乐清市"]},{"嘉兴市":["南湖区","秀洲区","嘉善县","海盐县","海宁市","平湖市","桐乡市"]},{"湖州市":["吴兴区","南浔区","德清县","长兴县","安吉县"]},{"绍兴市":["越城区","绍兴县","新昌县","诸暨市","上虞市","嵊州市"]},{"金华市":["婺城区","金东区","武义县","浦江县","磐安县","兰溪市","义乌市","东阳市","永康市"]},{"衢州市":["柯城区","衢江区","常山县","开化县","龙游县","江山市"]},{"舟山市":["定海区","普陀区","岱山县","嵊泗县"]},{"台州市":["椒江区","黄岩区","路桥区","玉环县","三门县","天台县","仙居县","温岭市","临海市"]},{"丽水市":["莲都区","青田县","缙云县","遂昌县","松阳县","云和县","庆元县","景宁畲族自治县","龙泉市"]}]},{"安徽":[{"合肥市":["庐阳区","瑶海区","蜀山区","包河区","长丰县","肥东县","肥西县","居巢区","庐江县"]},{"芜湖市":["镜湖区","弋江区","鸠江区","三山区","芜湖县","繁昌县","南陵县","经济开发区","高新区","无为县"]},{"马鞍山市":["含山县","和县","雨山区","金家庄区","花山区","当涂县","经济开发区"]},{"蚌埠市":["蚌山区","龙子湖区","禹会区","淮上区","怀远县","五河县","固镇县","高新区"]},{"淮南市":["田家庵区","大通区","谢家集区","八公山区","潘集区","凤台县"]},{"淮北市":["相山区","杜集区","烈山区","濉溪县"]},{"铜陵市":["铜官山区","狮子山区","郊区","铜陵县"]},{"安庆市":["迎江区","大观区","宜秀区","桐城市","怀宁县","枞阳县","潜山县","太湖县","宿松县","望江县","岳西县"]},{"黄山市":["屯溪区","黄山区","徽州区","歙县","休宁县","黟县","祁门县"]},{"滁州市":["琅琊区","南谯区","天长市","明光市","来安县","全椒县","定远县","凤阳县"]},{"阜阳市":["颍州区","颍东区","颍泉区","界首市","临泉县","太和县","阜南县","颍上县","经济开发区"]},{"宿州市":["埇桥区","砀山县","萧县","灵璧县","泗县"]},{"巢湖市":["居巢区","庐江县","无为县","含山县","和县"]},{"六安市":["金安区","裕安区","寿县","霍邱县","舒城县","金寨县","霍山县"]},{"亳州市":["谯城区","涡阳县","蒙城县","利辛县"]},{"池州市":["贵池区","东至县","石台县","青阳县"]},{"宣城市":["宣州区","宁国市","郎溪县","广德县","泾县","绩溪县","旌德县"]}]},{"福建":[{"福州市":["鼓楼区","台江区","仓山区","马尾区","晋安区","闽侯县","连江县","罗源县","闽清县","永泰县","平潭县","福清市","长乐市","金山开发区"]},{"厦门市":["思明区","海沧区","湖里区","集美区","同安区","翔安区"]},{"莆田市":["城厢区","涵江区","荔城区","秀屿区","仙游县"]},{"三明市":["梅列区","三元区","明溪县","清流县","宁化县","大田县","尤溪县","沙县","将乐县","泰宁县","建宁县","永安市"]},{"泉州市":["鲤城区","丰泽区","洛江区","泉港区","惠安县","安溪县","永春县","德化县","金门县","石狮市","晋江市","南安市"]},{"漳州市":["芗城区","龙文区","云霄县","漳浦县","诏安县","长泰县","东山县","南靖县","平和县","华安县","龙海市"]},{"南平市":["延平区","顺昌县","浦城县","光泽县","松溪县","政和县","邵武市","武夷山市","建瓯市","建阳市"]},{"龙岩市":["新罗区","长汀县","永定县","上杭县","武平县","连城县","漳平市"]},{"宁德市":["蕉城区","霞浦县","古田县","屏南县","寿宁县","周宁县","柘荣县","福安市","福鼎市"]}]},{"江西":[{"南昌市":["东湖区","西湖区","青云谱区","湾里区","青山湖区","南昌县","新建县","安义县","进贤县","昌北经济开发区","红谷滩新区","高新区"]},{"景德镇市":["珠山区","昌江区","乐平市","浮梁县"]},{"萍乡市":["安源区","湘东区","莲花县","芦溪县","上栗县"]},{"九江市":["浔阳区","庐山区","瑞昌市","九江县","武宁县","修水县","永修县","德安县","共青城市","星子县","都昌县","湖口县","彭泽县"]},{"新余市":["渝水区","分宜县"]},{"鹰潭市":["月湖区","贵溪市","余江县"]},{"赣州市":["章贡区","瑞金市","南康市","赣县","信丰县","大余县","上犹县","崇义县","安远县","龙南县","定南县","全南县","宁都县","于都县","兴国县","会昌县","寻乌县","石城县","黄金开发区"]},{"吉安市":["吉州区","青原区","井冈山市","吉安县","吉水县","峡江县","新干县","永丰县","泰和县","遂川县","万安县","安福县","永新县"]},{"宜春市":["袁州区","丰城市","樟树市","高安市","奉新县","万载县","上高县","宜丰县","靖安县","铜鼓县"]},{"抚州市":["临川区","南城县","黎川县","南丰县","崇仁县","乐安县","宜黄县","金溪县","资溪县","东乡县","广昌县"]},{"上饶市":["信州区","德兴市","上饶县","广丰县","玉山县","铅山县","横峰县","弋阳县","余干县","鄱阳县","万年县","婺源县"]}]},{"山东":[{"济南市":["历下区","市中区","槐荫区","天桥区","历城区","长清区","章丘市","平阴县","济阳县","商河县"]},{"青岛市":["市南区","市北区","四方区","黄岛区","崂山区","李沧区","城阳区","胶州市","即墨市","平度市","胶南市","莱西市"]},{"淄博市":["张店区","高新区","淄川区","博山区","临淄区","周村区","桓台县","高青县","沂源县"]},{"枣庄市":["市中区","薛城区","峄城区","台儿庄区","山亭区","滕州市"]},{"东营市":["东营区","河口区","垦利县","利津县","广饶县"]},{"烟台市":["芝罘区","福山区","牟平区","莱山区","开发区","龙口市","莱阳市","莱州市","蓬莱市","招远市","栖霞市","海阳市","长岛县"]},{"潍坊市":["潍城区","开发区","寒亭区","坊子区","奎文区","青州市","诸城市","寿光市","安丘市","高密市","昌邑市","临朐县","昌乐县"]},{"威海市":["环翠区","经济技术开发区","高新技术开发区","文登市","荣成市","乳山市"]},{"济宁市":["市中区","任城区","曲阜市","兖州市","邹城市","微山县","鱼台县","金乡县","嘉祥县","汶上县","泗水县","梁山县"]},{"泰安市":["泰山区","岱岳区","新泰市","肥城市","宁阳县","东平县"]},{"日照市":["东港区","岚山区","五莲县","莒县"]},{"莱芜市":["莱城区","钢城区"]},{"临沂市":["兰山区","罗庄区","河东区","沂南县","郯城县","沂水县","苍山县","费县","平邑县","莒南县","蒙阴县","临沭县"]},{"德州市":["德城区","乐陵市","禹城市","陵县","宁津县","庆云县","临邑县","齐河县","平原县","夏津县","武城县"]},{"聊城市":["东昌府区","临清市","阳谷县","莘县","茌平县","东阿县","冠县","高唐县"]},{"滨州市":["滨城区","惠民县","阳信县","无棣县","沾化县","博兴县","邹平县"]},{"菏泽市":["牡丹区","曹县","单县","成武县","巨野县","郓城县","鄄城县","定陶县","东明县"]}]},{"河南":[{"郑州市":["中原区","二七区","管城回族区","金水区","西北高新区","东南经济区","郑东新区","上街区","惠济区","中牟县","巩义市","荥阳市","新密市","新郑市","登封市"]},{"开封市":["龙亭区","顺河回族区","鼓楼区","禹王台区","金明区","杞县","通许县","尉氏县","开封县","兰考县"]},{"洛阳市":["老城区","西工区","瀍河回族区","涧西区","吉利区","洛龙区","孟津县","新安县","栾川县","嵩县","汝阳县","宜阳县","洛宁县","伊川县","偃师市"]},{"平顶山市":["新华区","卫东区","石龙区","湛河区","宝丰县","叶县","鲁山县","郏县","舞钢市","汝州市"]},{"安阳市":["文峰区","北关区","殷都区","龙安区","安阳县","汤阴县","滑县","内黄县","林州市"]},{"鹤壁市":["鹤山区","山城区","淇滨区","浚县","淇县"]},{"新乡市":["红旗区","卫滨区","凤泉区","牧野区","新乡县","获嘉县","原阳县","延津县","封丘县","长垣县","卫辉市","辉县市"]},{"焦作市":["解放区","中站区","马村区","山阳区","修武县","博爱县","武陟县","温县","沁阳市","孟州市"]},{"濮阳市":["华龙区","清丰县","南乐县","范县","台前县","濮阳县"]},{"许昌市":["魏都区","许昌县","鄢陵县","襄城县","禹州市","长葛市"]},{"漯河市":["源汇区","郾城区","召陵区","舞阳县","临颍县"]},{"三门峡市":["湖滨区","渑池县","陕县","卢氏县","义马市","灵宝市"]},{"南阳市":["宛城区","卧龙区","南召县","方城县","西峡县","镇平县","内乡县","淅川县","社旗县","唐河县","新野县","桐柏县","邓州市"]},{"商丘市":["梁园区","睢阳区","民权县","睢县","宁陵县","柘城县","虞城县","夏邑县","永城市"]},{"信阳市":["浉河区","平桥区","罗山县","光山县","新县","商城县","固始县","潢川县","淮滨县","息县"]},{"周口市":["川汇区","扶沟县","西华县","商水县","沈丘县","郸城县","淮阳县","太康县","鹿邑县","项城市"]},{"驻马店市":["驿城区","西平县","上蔡县","平舆县","正阳县","确山县","泌阳县","汝南县","遂平县","新蔡县"]},{"济源市":["济源市"]}]},{"湖北":[{"武汉市":["江岸区","江汉区","硚口区","汉阳区","武昌区","青山区","洪山区","东西湖区","汉南区","蔡甸区","江夏区","黄陂区","新洲区"]},{"黄石市":["黄石港区","西塞山区","下陆区","铁山区","大冶市","阳新县"]},{"襄樊市":["襄城区","樊城区","襄阳区","老河口市","枣阳市","宜城市","南漳县","谷城县","保康县"]},{"十堰市":["茅箭区","张湾区","丹江口市","郧县","郧西县","竹山县","竹溪县","房县"]},{"荆州市":["沙市区","荆州区","石首市","洪湖市","松滋市","公安县","监利县","江陵县"]},{"宜昌市":["西陵区","伍家岗区","东山开发区","点军区","虢亭区","夷陵区","宜都市","当阳市","枝江市","远安县","兴山县","秭归县","长阳土家族自治县","五峰土家族自治县"]},{"荆门市":["东宝区","掇刀区","钟祥市","京山县","沙洋县"]},{"鄂州市":["鄂城区","梁子湖区","华容区"]},{"孝感市":["孝南区","应城市","安陆市","汉川市","孝昌县","大悟县","云梦县"]},{"黄冈市":["黄州区","麻城市","武穴市","团风县","红安县","罗田县","英山县","浠水县","蕲春县","黄梅县"]},{"咸宁市":["咸安区","赤壁市","嘉鱼县","通城县","崇阳县","通山县"]},{"随州市":["曾都区","广水市"]},{"恩施土家族苗族自治州":["恩施市","利川市","建始县","巴东县","宣恩县","咸丰县","来凤县","鹤峰县"]},{"仙桃市":["仙桃市"]},{"潜江市":["潜江市"]},{"天门市":["天门市"]},{"神农架林区":["神农架林区"]}]},{"湖南":[{"长沙市":["芙蓉区","天心区","岳麓区","开福区","雨花区","长沙县","望城区","宁乡县","浏阳市"]},{"株洲市":["天元区","荷塘区","芦淞区","石峰区","株洲县","攸县","茶陵县","炎陵县","醴陵市"]},{"湘潭市":["雨湖区","岳塘区","湘潭县","湘乡市","韶山市"]},{"衡阳市":["雁峰区","珠晖区","石鼓区","蒸湘区","南岳区","衡阳县","衡南县","衡山县","衡东县","祁东县","耒阳市","常宁市"]},{"邵阳市":["双清区","大祥区","北塔区","邵东县","新邵县","邵阳县","隆回县","洞口县","绥宁县","新宁县","城步苗族自治县","武冈市"]},{"岳阳市":["岳阳楼区","君山区","云溪区","岳阳县","华容县","湘阴县","平江县","汨罗市","临湘市"]},{"常德市":["武陵区","鼎城区","安乡县","汉寿县","澧县","临澧县","桃源县","石门县","津市市"]},{"张家界市":["永定区","武陵源区","慈利县","桑植县"]},{"益阳市":["赫山区","资阳区","南县","桃江县","安化县","沅江市"]},{"郴州市":["北湖区","苏仙区","桂阳县","宜章县","永兴县","嘉禾县","临武县","汝城县","桂东县","安仁县","资兴市"]},{"永州市":["芝山区","冷水滩区","祁阳县","东安县","双牌县","道县","江永县","宁远县","蓝山县","新田县","江华瑶族自治县"]},{"怀化市":["鹤城区","中方县","沅陵县","辰溪县","溆浦县","会同县","麻阳苗族自治县","新晃侗族自治县","芷江侗族自治县","靖州苗族侗族自治县","通道侗族自治县","洪江市"]},{"娄底市":["娄星区","双峰县","新化县","冷水江市","涟源市"]},{"湘西土家族苗族自治州":["吉首市","泸溪县","凤凰县","花垣县","保靖县","古丈县","永顺县","龙山县"]}]},{"广东":[{"广州市":["天河区","越秀区","海珠区","白云区","番禺区","广州大学城","荔湾区","增城市","花都区","萝岗区","黄埔区","从化市","南沙区"]},{"深圳市":["福田区","南山区","宝安区","罗湖区","龙岗区","盐田区"]},{"东莞市":["东莞市"]},{"佛山市":["南海区","顺德区","禅城区","三水区","高明区"]},{"中山市":["中山市"]},{"珠海市":["香洲区","金湾区","斗门区"]},{"惠州市":["惠城区","惠阳区","博罗县","惠东县","龙门县"]},{"江门市":["蓬江区","新会区","开平市","鹤山市","台山市","江海区","恩平市"]},{"汕头市":["潮南区","南澳县","金平区","龙湖区","澄海区","潮阳区","濠江区"]},{"肇庆市":["端州区","四会市","高要市","鼎湖区","怀集县","广宁县","德庆县","封开县"]},{"湛江市":["麻章区","坡头区","赤坎区","霞山区","开发区","雷州市","遂溪县","廉江市","吴川市","徐闻县"]},{"韶关市":["浈江区","武江区","曲江区","乐昌市","南雄市","始兴县","仁化县","乳源瑶族自治县","翁源县","新丰县"]},{"茂名市":["茂南区","高州市","电白县","化州市","信宜市","茂港区"]},{"清远市":["清城区","英德市","清新县","佛冈县","阳山县","连州市","连山壮族瑶族自治县","连南瑶族自治县"]},{"潮州市":["湘桥区","潮安县","饶平县"]},{"梅州市":["梅江区","梅县","兴宁市","五华县","蕉岭县","丰顺县","平远县","大埔县"]},{"河源市":["源城区","龙川县","连平县","东源县","紫金县","和平县"]},{"揭阳市":["普宁市","榕城区","东山区","揭东县","揭西县","惠来县"]},{"阳江市":["江城区","阳春市","阳东县","阳西县"]},{"云浮市":["云城区","新兴县","罗定市","郁南县","云安县"]},{"汕尾市":["城区","海丰县","陆丰市","陆河县"]}]},{"广西":[{"南宁市":["良庆区","邕宁区","武鸣县","隆安县","马山县","上林县","宾阳县","横县","兴宁区","青秀区","江南区","西乡塘区"]},{"柳州市":["柳江县","柳城县","鹿寨县","融安县","融水苗族自治县","三江侗族自治县","城中区","鱼峰区","柳南区","柳北区","高新区"]},{"桂林市":["阳朔县","临桂县","灵川县","全州县","兴安县","灌阳县","荔浦县","资源县","平乐县","永福县","龙胜各族自治县","恭城瑶族自治县","秀峰区","叠彩区","象山区","七星区","雁山区"]},{"梧州市":["万秀区","蝶山区","长洲区","苍梧县","藤县","蒙山县","岑溪市"]},{"北海市":["海城区","银海区","铁山港区","合浦县"]},{"防城港市":["港口区","防城区","上思县","东兴市"]},{"钦州市":["钦南区","钦北区","灵山县","浦北县"]},{"贵港市":["港北区","港南区","覃塘区","平南县","桂平市"]},{"玉林市":["北流市","容县","陆川县","博白县","兴业县","玉州区"]},{"百色市":["右江区","田阳县","田东县","平果县","德保县","靖西县","那坡县","凌云县","乐业县","田林县","西林县","隆林各族自治县"]},{"贺州市":["八步区","昭平县","钟山县","富川瑶族自治县"]},{"河池市":["金城江区","南丹县","天峨县","凤山县","东兰县","罗城仫佬族自治县","环江毛南族自治县","巴马瑶族自治县","都安瑶族自治县","大化瑶族自治县","宜州市"]},{"来宾市":["兴宾区","忻城县","象州县","武宣县","金秀瑶族自治县","合山市"]},{"崇左市":["江洲区","扶绥县","宁明县","龙州县","大新县","天等县","凭祥市"]}]},{"海南":[{"海口市":["龙华区","秀英区","琼山区","美兰区"]},{"三亚市":["三亚市"]},{"五指山市":["五指山市"]},{"琼海市":["琼海市"]},{"儋州市":["儋州市"]},{"文昌市":["文昌市"]},{"万宁市":["万宁市"]},{"东方市":["东方市"]},{"定安县":["定安县"]},{"屯昌县":["屯昌县"]},{"澄迈县":["澄迈县"]},{"临高县":["临高县"]},{"西南中沙群岛办事处":["西南中沙群岛办事处"]},{"白沙黎族自治县":["白沙黎族自治县"]},{"昌江黎族自治县":["昌江黎族自治县"]},{"乐东黎族自治县":["乐东黎族自治县"]},{"陵水黎族自治县":["陵水黎族自治县"]},{"保亭黎族苗族自治县":["保亭黎族苗族自治县"]},{"琼中黎族苗族自治县":["琼中黎族苗族自治县"]}]},{"重庆":[{"重庆市":["渝中区","大渡口区","江北区","沙坪坝区","九龙坡区","南岸区","高新区","北碚区","万盛区","双桥区","渝北区","巴南区","万州区","涪陵区","黔江区","长寿区","江津市","合川市","永川市","南川市","綦江县","潼南县","铜梁县","大足县","荣昌县","璧山县","梁平县","城口县","丰都县","垫江县","武隆县","忠县","开县","云阳县","奉节县","巫山县","巫溪县","石柱土家族自治县","秀山土家族苗族自治县","酉阳土家族苗族自治县","彭水苗族土家族自治县"]}]},{"四川":[{"成都市":["锦江区","青羊区","金牛区","武侯区","成华区","高新南区","高新西区","龙泉驿区","青白江区","新都区","温江区","都江堰市","彭州市","邛崃市","崇州市","金堂县","双流县","郫县","大邑县","蒲江县","新津县"]},{"自贡市":["自流井区","贡井区","大安区","沿滩区","荣县","富顺县"]},{"攀枝花市":["东区","西区","仁和区","米易县","盐边县"]},{"泸州市":["江阳区","纳溪区","龙马潭区","泸县","合江县","叙永县","古蔺县"]},{"德阳市":["旌阳区","广汉市","什邡市","绵竹市","高新区","罗江县","中江县"]},{"绵阳市":["涪城区","游仙区","高新区","科学城区","西南科技大学","江油市","三台县","盐亭县","安县","梓潼县","平武县","北川羌族自治县"]},{"广元市":["市中区","元坝区","朝天区","旺苍县","青川县","剑阁县","苍溪县"]},{"遂宁市":["船山区","安居区","蓬溪县","射洪县","大英县"]},{"内江市":["市中区","东兴区","威远县","资中县","隆昌县"]},{"乐山市":["市中区","沙湾区","五通桥区","金口河区","峨眉山市","犍为县","井研县","夹江县","沐川县","峨边彝族自治县","马边彝族自治县"]},{"南充市":["顺庆区","高坪区","嘉陵区","阆中市","南部县","营山县","蓬安县","仪陇县","西充县"]},{"宜宾市":["翠屏区","宜宾县","南溪县","江安县","长宁县","高县","珙县","筠连县","兴文县","屏山县"]},{"广安市":["广安区","华蓥市","岳池县","武胜县","邻水县"]},{"达州市":["通川区","万源市","达县","宣汉县","开江县","大竹县","渠县"]},{"眉山市":["东坡区","仁寿县","彭山县","洪雅县","丹棱县","青神县"]},{"雅安市":["雨城区","名山县","荥经县","汉源县","石棉县","天全县","芦山县","宝兴县"]},{"巴中市":["巴州区","通江县","南江县","平昌县"]},{"资阳市":["雁江区","简阳市","安岳县","乐至县"]},{"阿坝藏族羌族自治州":["马尔康县","汶川县","理县","茂县","松潘县","九寨沟县","金川县","小金县","黑水县","壤塘县","阿坝县","若尔盖县","红原县"]},{"甘孜藏族自治州":["康定县","泸定县","丹巴县","九龙县","雅江县","道孚县","炉霍县","甘孜县","新龙县","德格县","白玉县","石渠县","色达县","理塘县","巴塘县","乡城县","稻城县","得荣县"]},{"凉山彝族自治州":["西昌市","盐源县","德昌县","会理县","会东县","宁南县","普格县","布拖县","金阳县","昭觉县","喜德县","冕宁县","越西县","甘洛县","美姑县","雷波县","木里藏族自治县"]}]},{"贵州":[{"贵阳市":["乌当区","云岩区","南明区","花溪区","白云区","小河区","清镇市","开阳县","息烽县","修文县","金阳新区"]},{"六盘水市":["钟山区","六枝特区","水城县","盘县"]},{"遵义市":["红花岗区","汇川区","赤水市","仁怀市","遵义县","绥阳县","桐梓县","正安县","凤冈县","湄潭县","习水县","余庆县","道真仡佬族苗族自治县","务川仡佬族苗族自治县"]},{"安顺市":["西秀区","平坝县","普定县","镇宁布依族苗族自治县","关岭布依族苗族自治县","紫云苗族布依族自治县"]},{"铜仁地区":["铜仁市","江口县","玉屏侗族自治县","石阡县","思南县","印江土家族苗族自治县","德江县","沿河土家族自治县","松桃苗族自治县","万山特区"]},{"毕节地区":["毕节市","大方县","黔西县","金沙县","织金县","纳雍县","威宁彝族回族苗族自治县","赫章县"]},{"黔西南布依族苗族自治州":["兴义市","兴仁县","普安县","晴隆县","贞丰县","望谟县","册亨县","安龙县"]},{"黔东南苗族侗族自治州":["凯里市","黄平县","施秉县","三穗县","镇远县","岑巩县","天柱县","锦屏县","剑河县","台江县","黎平县","榕江县","从江县","雷山县","麻江县","丹寨县"]},{"黔南布依族苗族自治州":["都匀市","福泉市","荔波县","贵定县","瓮安县","独山县","平塘县","罗甸县","长顺县","龙里县","惠水县","三都水族自治县"]}]},{"云南":[{"昆明市":["五华区","盘龙区","官渡区","西山区","东川区","安宁市","呈贡县","晋宁县","富民县","宜良县","嵩明县","石林彝族自治县","禄劝彝族苗族自治县","寻甸回族彝族自治县"]},{"曲靖市":["麒麟区","宣威市","马龙县","陆良县","师宗县","罗平县","富源县","会泽县","沾益县"]},{"玉溪市":["红塔区","江川县","澄江县","通海县","华宁县","易门县","峨山彝族自治县","新平彝族傣族自治县","元江哈尼族彝族傣族自治县"]},{"保山市":["隆阳区","施甸县","腾冲县","龙陵县","昌宁县"]},{"昭通市":["昭阳区","鲁甸县","巧家县","盐津县","大关县","永善县","绥江县","镇雄县","彝良县","威信县","水富县"]},{"丽江市":["古城区","永胜县","华坪县","玉龙纳西族自治县","宁蒗彝族自治县"]},{"普洱市":["思茅区","宁洱哈尼族彝族自治县","墨江哈尼族自治县","景东彝族自治县","景谷傣族彝族自治县","镇沅彝族哈尼族拉祜族自治县","江城哈尼族彝族自治县","孟连傣族拉祜族佤族自治县","澜沧拉祜族自治县","西盟佤族自治县"]},{"临沧市":["临翔区","凤庆县","云县","永德县","镇康县","双江拉祜族佤族布朗族傣族自治县","耿马傣族佤族自治县","沧源佤族自治县"]},{"文山壮族苗族自治州":["文山县","砚山县","西畴县","麻栗坡县","马关县","丘北县","广南县","富宁县"]},{"红河哈尼族彝族自治州":["蒙自县","个旧市","开远市","绿春县","建水县","石屏县","弥勒县","泸西县","元阳县","红河县","金平苗族瑶族傣族自治县","河口瑶族自治县","屏边苗族自治县"]},{"西双版纳傣族自治州":["景洪市","勐海县","勐腊县"]},{"楚雄彝族自治州":["楚雄市","双柏县","牟定县","南华县","姚安县","大姚县","永仁县","元谋县","武定县","禄丰县"]},{"大理白族自治州":["大理市","祥云县","宾川县","弥渡县","永平县","云龙县","洱源县","剑川县","鹤庆县","漾濞彝族自治县","南涧彝族自治县","巍山彝族回族自治县"]},{"德宏傣族景颇族自治州":["潞西市","瑞丽市","梁河县","盈江县","陇川县"]},{"怒江傈僳族自治州":["泸水县","福贡县","贡山独龙族怒族自治县","兰坪白族普米族自治县"]},{"迪庆藏族自治州":["香格里拉县","德钦县","维西傈僳族自治县"]}]},{"西藏":[{"拉萨市":["城关区","林周县","当雄县","尼木县","曲水县","堆龙德庆县","达孜县","墨竹工卡县"]},{"昌都地区":["昌都县","江达县","贡觉县","类乌齐县","丁青县","察雅县","八宿县","左贡县","芒康县","洛隆县","边坝县"]},{"山南地区":["乃东县","扎囊县","贡嘎县","桑日县","琼结县","曲松县","措美县","洛扎县","加查县","隆子县","错那县","浪卡子县"]},{"日喀则地区":["日喀则市","南木林县","江孜县","定日县","萨迦县","拉孜县","昂仁县","谢通门县","白朗县","仁布县","康马县","定结县","仲巴县","亚东县","吉隆县","聂拉木县","萨嘎县","岗巴县"]},{"那曲地区":["那曲县","嘉黎县","比如县","聂荣县","安多县","申扎县","索县","班戈县","巴青县","尼玛县"]},{"阿里地区":["普兰县","札达县","噶尔县","日土县","革吉县","改则县","措勤县"]},{"林芝地区":["林芝县","工布江达县","米林县","墨脱县","波密县","察隅县","朗县"]}]},{"陕西":[{"西安市":["新城区","未央区","碑林区","莲湖区","灞桥区","雁塔区","阎良区","临潼区","长安区","蓝田县","周至县","户县","高陵县"]},{"铜川市":["耀州区","王益区","印台区","宜君县","新区"]},{"宝鸡市":["渭滨区","金台区","陈仓区","凤翔县","岐山县","扶风县","眉县","陇县","千阳县","麟游县","凤县","太白县"]},{"咸阳市":["秦都区","杨陵区","渭城区","兴平市","三原县","泾阳县","乾县","礼泉县","永寿县","彬县","长武县","旬邑县","淳化县","武功县"]},{"渭南市":["临渭区","韩城市","华阴市","华县","潼关县","大荔县","合阳县","澄城县","蒲城县","白水县","富平县"]},{"延安市":["宝塔区","延长县","延川县","子长县","安塞县","志丹县","吴起县","甘泉县","富县","洛川县","宜川县","黄龙县","黄陵县"]},{"汉中市":["汉台区","南郑县","城固县","洋县","西乡县","勉县","宁强县","略阳县","镇巴县","留坝县","佛坪县"]},{"榆林市":["榆阳区","神木县","府谷县","横山县","靖边县","定边县","绥德县","米脂县","佳县","吴堡县","清涧县","子洲县"]},{"安康市":["汉滨区","汉阴县","石泉县","宁陕县","紫阳县","岚皋县","平利县","镇坪县","旬阳县","白河县"]},{"商洛市":["商州区","洛南县","丹凤县","商南县","山阳县","镇安县","柞水县"]}]},{"甘肃":[{"兰州市":["安宁区","城关区","七里河区","西固区","红古区","永登县","皋兰县","榆中县"]},{"嘉峪关市":["嘉峪关市"]},{"金昌市":["金川区","永昌县"]},{"白银市":["白银区","平川区","靖远县","会宁县","景泰县"]},{"天水市":["秦州区","麦积区","清水县","秦安县","甘谷县","武山县","张家川回族自治县"]},{"武威市":["凉州区","民勤县","古浪县","天祝藏族自治县"]},{"张掖市":["甘州区","民乐县","临泽县","高台县","山丹县","肃南裕固族自治县"]},{"平凉市":["崆峒区","泾川县","灵台县","崇信县","华亭县","庄浪县","静宁县"]},{"酒泉市":["肃州区","玉门市","敦煌市","金塔县","瓜州县","肃北蒙古族自治县","阿克塞哈萨克族自治县"]},{"庆阳市":["西峰区","庆城县","环县","华池县","合水县","正宁县","宁县","镇原县"]},{"定西市":["安定区","通渭县","陇西县","渭源县","临洮县","漳县","岷县"]},{"陇南市":["武都区","成县","文县","宕昌县","康县","西和县","礼县","徽县","两当县"]},{"临夏回族自治州":["临夏市","临夏县","康乐县","永靖县","广河县","和政县","东乡族自治县","积石山保安族东乡族撒拉族自治县"]},{"甘南藏族自治州":["合作市","临潭县","卓尼县","舟曲县","迭部县","玛曲县","碌曲县","夏河县"]}]},{"青海":[{"西宁市":["城西区","城东区","城中区","城北区","湟中县","湟源县","大通回族土族自治县"]},{"海东地区":["平安县","乐都县","民和回族土族自治县","互助土族自治县","化隆回族自治县","循化撒拉族自治县"]},{"海北藏族自治州":["海晏县","祁连县","刚察县","门源回族自治县"]},{"黄南藏族自治州":["同仁县","尖扎县","泽库县","河南蒙古族自治县"]},{"海南藏族自治州":["共和县","同德县","贵德县","兴海县","贵南县"]},{"果洛藏族自治州":["玛沁县","班玛县","甘德县","达日县","久治县","玛多县"]},{"玉树藏族自治州":["玉树县","杂多县","称多县","治多县","囊谦县","曲麻莱县"]},{"海西蒙古族藏族自治州":["德令哈市","格尔木市","乌兰县","都兰县","天峻县"]}]},{"宁夏":[{"银川市":["兴庆区","西夏区","金凤区","永宁县","贺兰县","灵武市"]},{"石嘴山市":["大武口区","惠农区","平罗县"]},{"吴忠市":["利通区","盐池县","同心县","青铜峡市"]},{"固原市":["原州区","西吉县","隆德县","泾源县","彭阳县"]},{"中卫市":["沙坡头区","中宁县","海原县"]}]},{"新疆":[{"乌鲁木齐市":["天山区","沙依巴克区","新市区","水磨沟区","头屯河区","达坂城区","米东区","乌鲁木齐县"]},{"克拉玛依市":["克拉玛依区","独山子区","白碱滩区","乌尔禾区"]},{"吐鲁番地区":["吐鲁番市","鄯善县","托克逊县"]},{"哈密地区":["哈密市","伊吾县","巴里坤哈萨克自治县"]},{"和田地区":["和田市","和田县","墨玉县","皮山县","洛浦县","策勒县","于田县","民丰县"]},{"阿克苏地区":["阿克苏市","温宿县","库车县","沙雅县","新和县","拜城县","乌什县","阿瓦提县","柯坪县"]},{"喀什地区":["喀什市","疏附县","疏勒县","英吉沙县","泽普县","莎车县","叶城县","麦盖提县","岳普湖县","伽师县","巴楚县","塔什库尔干塔吉克自治县"]},{"克孜勒苏柯尔克孜自治州":["阿图什市","阿克陶县","阿合奇县","乌恰县"]},{"巴音郭楞蒙古自治州":["库尔勒市","轮台县","尉犁县","若羌县","且末县","焉耆回族自治县","和静县","和硕县","博湖县"]},{"昌吉回族自治州":["昌吉市","阜康市","呼图壁县","玛纳斯县","奇台县","吉木萨尔县","木垒哈萨克自治县"]},{"博尔塔拉蒙古自治州":["博乐市","精河县","温泉县"]},{"伊犁哈萨克自治州":["伊宁市","奎屯市","伊宁县","霍城县","巩留县","新源县","昭苏县","特克斯县","尼勒克县","察布查尔锡伯自治县"]},{"塔城地区":["塔城市","乌苏市","额敏县","沙湾县","托里县","裕民县","和布克赛尔蒙古自治县"]},{"阿勒泰地区":["阿勒泰市","布尔津县","富蕴县","福海县","哈巴河县","青河县","吉木乃县"]},{"石河子市":["石河子市"]},{"阿拉尔市":["阿拉尔市"]},{"图木舒克市":["图木舒克市"]},{"五家渠市":["五家渠市"]}]}];
</script>









<script type="text/javascript">
var popoverState = null;
var popoverCity = null;
var popoverDistrict = null;

var stateResult = "";
var cityResult = "";
var districtResult = "";

var isEnableCity = false;
var isEnableDistrict = false;

var cssOptionDefault = {"color": "#004B91", "text-decoration": "none"};
var cssOptionHover = {"color": "#e47911", "text-decoration": "underline"};

amznJQ.onReady('popover', function(){
    jQuery(".enterAddressFormTable tr").attr("height", "35");
    jQuery(".enterAddressFormTable td").css("vertical-align", "middle").css("white-space", "nowrap");
    if (jQuery("#enterAddressAddressAreaError").length > 0) {
        jQuery("#enterAddressAddressAreaError").css("line-height", "22px");
    }
    var hiddenInput = jQuery(".enterAddressFormTable tr:last td:last span");
    if (hiddenInput != null && hiddenInput.html().indexOf("hidden") > 0) {
        jQuery(".enterAddressFormTable").append(hiddenInput.html());
        jQuery(".enterAddressFormTable tr:last").remove();
    }

    var continueButton = null;
    if (jQuery("input[name='shipToThisAddress']").length > 0) {
        continueButton = jQuery("input[name='shipToThisAddress']");
    } else {
        if (jQuery("input[name='newAddress']").length > 0) {
            continueButton = jQuery("input[name='newAddress']");
        } else if (jQuery("input[name='editAddress']").length > 0) {
            continueButton = jQuery("input[name='editAddress']");
        }
        if (continueButton != null) {
            continueButton
                .css("margin-left", "52px")
                .attr("src", "https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/buttons/save_and_continue_white._V162942409_.gif")
                .attr("width", "70");
        }
    }

    if (continueButton != null)
    {
        var margin = 50;
        while(continueButton.offset().left < jQuery(".enterAddressFormField").offset().left) {
            margin += 2;
            continueButton.css("margin-left", margin+"px");
        }
    }

    jQuery(".enterAddressFormField").focus(function(){
        jQuery(this).addClass("focus");
    }).blur(function(){
        jQuery(this).removeClass("focus");
    });

    stateResult = jQuery("input[name=enterAddressStateOrRegion]").val();
    if (typeof(stateResult) == "undefined") {
        stateResult = "";
    }
    cityResult = jQuery("input[name=enterAddressCity]").val();
    if (typeof(cityResult) == "undefined") {
        cityResult = "";
    }
    districtResult = jQuery("input[name=enterAddressDistrictOrCounty]").val();
    if (typeof(districtResult) == "undefined") {
        districtResult = "";
    }

    jQuery("#stateTrigger").amazonPopoverTrigger({
        width: 306,
        location: "auto",
        locationMargin: 0,
        showCloseButton: false,
        skin: null,
        group: "address",
        closeEventInclude: "CLICK_OUTSIDE",
        localContent: "#enterAddressState",
        onShow: function(popover, settings){
            if( popover != null){
                popoverState = popover;
            }
            this.addClass("focus");
        },
        onHide: function(popover) {
            this.removeClass("focus");
        }
    });

    jQuery("#cityTrigger").click(function(){
        var trigger = jQuery("#cityTrigger");
        if (popoverCity != null) {
            popoverCity.close();
        } else {
            window.setTimeout(function(){
                amznJQ.jQuery.AmazonPopover.displayPopover({
                    width: 306,
                    location: "auto",
                    locationMargin: 0,
                    showCloseButton: false,
                    skin: null,
                    group: "address",
                    closeEventInclude: ["CLICK_OUTSIDE"],
                    localContent: "#enterAddressCity",
                    locationElement: "#cityTrigger",
                    onShow: function(popover, settings){
                        if( popover != null){
                            popoverCity = popover;
                        }
                        trigger.addClass("focus");
                        if (!isEnableCity) {
                            popoverCity.close();
                        }
                    },
                    onHide: function(popover, settings) {
                        trigger.removeClass("focus");
                        popoverCity = null;
                    }
                });
            }, 10);
        }
    });

    jQuery("#districtTrigger").click(function(){
        var trigger = jQuery("#districtTrigger");
        if (popoverDistrict != null) {
            popoverDistrict.close();
        } else {
            window.setTimeout(function(){
                amznJQ.jQuery.AmazonPopover.displayPopover({
                    width: 306,
                    location: "auto",
                    locationMargin: 0,
                    showCloseButton: false,
                    skin: null,
                    group: "address",
                    closeEventInclude: ["CLICK_OUTSIDE"],
                    localContent: "#enterAddressDistrict",
                    locationElement: "#districtTrigger",
                    onShow: function(popover, settings){
                        if( popover != null){
                            popoverDistrict = popover;
                        }
                        trigger.addClass("focus");
                        if (!isEnableDistrict) {
                            popoverDistrict.close();
                        }
                    },
                    onHide: function(popover, settings) {
                        trigger.removeClass("focus");
                        popoverDistrict = null;
                    }
                });
            }, 10);
        }
    });

    createStateDialog();
    if (stateResult != "") {
        createCityDialog();
    }
    if (cityResult != "") {
        createDistrictDialog();
    }
    updateStateCityDistrict();
});

function createStateDialog() {
    var stateArray = new Array();
    for (var i = 0; i < cnProvincialData.length;  i++) {
        for (var item in cnProvincialData[i]) {
            stateArray[i] = item;
        }
    }
    generateTable("enterAddressState", stateArray);
    jQuery("#enterAddressState a").click(function(){
        jQuery("#enterAddressState").hide();
        jQuery(this).css(cssOptionDefault);
        clickState(jQuery(this).text());
    });
}

function createCityDialog() {
    var cityJson = findChildren(cnProvincialData, stateResult);
    var cityArray = new Array();
    for (var i = 0; i < cityJson.length; ++i) {
        for (var item in cityJson[i]) {
            cityArray[i] = item;
        }
    }
    generateTable("enterAddressCity", cityArray);
    jQuery("#enterAddressCity a").click(function() {
        jQuery("#enterAddressCity").hide();
        jQuery(this).css(cssOptionDefault);
        clickCity(jQuery(this).text());
    });
}

function createDistrictDialog() {
    var cityJson = findChildren(cnProvincialData, stateResult);
    var districtJson = findChildren(cityJson, cityResult);
    generateTable("enterAddressDistrict", districtJson);
    jQuery("#enterAddressDistrict table a").click(function() {
        jQuery("#enterAddressDistrict").hide();
        jQuery(this).css(cssOptionDefault);
        clickDistrict(jQuery(this).text());
    });
}

function clickState(state) {
    stateResult = state;
    cityResult = "";
    districtResult = "";
    updateStateCityDistrict();

    var cityJson = findChildren(cnProvincialData, stateResult);
    if (cityJson.length == 1) {
        for(var item in cityJson[0]) {
            clickCity(item);
            break;
        }
    } else {
        createCityDialog();
        jQuery("#cityTrigger").click();
    }
}

function clickCity(city) {
    cityResult = city;
    districtResult = "";
    var cityJson = findChildren(cnProvincialData, stateResult);
    var districtJson = findChildren(cityJson, cityResult);
    if (districtJson.length == 1) {
        clickDistrict(districtJson[0]);
        updateStateCityDistrict();
    } else {
        createDistrictDialog();
        updateStateCityDistrict();
        jQuery("#districtTrigger").click();
    }
}

function clickDistrict(district) {
    districtResult = district;
    updateStateCityDistrict();
}

function updateStateCityDistrict() {
    var stateText = "请选择省";
    var cityText = "请选择城市";
    var districtText = "请选择区县";

    if (stateResult != "") stateText = stateResult;
    if (cityResult != "") cityText = cityResult;
    if (districtResult != "") districtText = districtResult;
    jQuery("#stateTrigger").text(stateText);
    jQuery("#cityTrigger").text(cityText);
    jQuery("#districtTrigger").text(districtText);
    jQuery("input[name='enterAddressStateOrRegion']").val(stateResult);
    jQuery("input[name='enterAddressCity']").val(cityResult);
    jQuery("input[name='enterAddressDistrictOrCounty']").val(districtResult);

    var isVisibleDistrict = true;
    if (stateResult == "") {
        isEnableCity = false;
        isEnableDistrict = false;
        isVisibleDistrict = true;
    } else if (cityResult == "") {
        isEnableCity = true;
        isEnableDistrict = false;
        isVisibleDistrict = true;
    } else {
	    var cityJson = findChildren(cnProvincialData, stateResult);
	    var districtJson = findChildren(cityJson, cityResult);
        isEnableCity = cityJson.length > 1;
        isEnableDistrict = districtJson.length > 1;
        isVisibleDistrict = isEnableDistrict;
    }

    jQuery("#cityTrigger").css("color", isEnableCity ? "black" : "gray");
    jQuery("#districtTrigger").css("color", isEnableDistrict ? "black" : "gray");
    jQuery("#districtTrigger").css("display", isVisibleDistrict ? "inline" : "none");
}

function generateTable(divId, array) {
    // Move long names to the end of the list
    for (var i = 0; i < array.length-1; ++i) {
        for (var j = i+1; j< array.length; ++j) {
            if ( array[i].length > 5 ) {
                if (array[i].length > array[j].length) {
                    var temp = array[i];
                    array[i] = array[j];
                    array[j] = temp;
                }
            }
        }
    }

    var str = "<table class='table_list' border='0' cellspacing='0' cellpadding='0'>";
    str += "<tr height='0'><td></td><td></td><td></td><td></td></tr>";
    var col = 0;
    var idx = 0;
    var line = "";
    while(idx < array.length) {
        var colspan = Math.floor((array[idx].length - 1) / 5) + 1;
        if (col == 0) line = "<tr>"
        if (col + colspan > 4) {
            for (var i=0; i<4-col; ++i) {
                line += "<td></td>";
                col++;
            }
        } else {
            line += "<td colSpan='"+colspan+"'><a>"+array[idx]+"</a></td>";
            idx++;
            col += colspan;
        }
        if (col>=4) {
            line += "</tr>";
            str += line;
            col = 0;
        }
    }
    if (col > 0) {
        for (;col<4;++col) line += "<td></td>";
        line += "</tr>";
        str += line;
    }
    str += "</table>";
    jQuery("#" + divId).html(str);
    jQuery("#" + divId + " a").css(cssOptionDefault)
        .mouseover(function(){
            jQuery(this).css(cssOptionHover);
        })
        .mouseout(function(){
            jQuery(this).css(cssOptionDefault);
        });
}

function findChildren(json, name) {
    for (var i = 0; i < json.length; i++) {
        if (json[i][name]) {
            return json[i][name];
        }
    }
    return null;
}

</script>




<script type="text/javascript">



var errant = {};
errant.cnst = {
      fields :  {
                  "enterAddressFullName" : true,
                  "enterAddressAddressLine1" : true,
                  "enterAddressAddressLine2" : true,
                  "enterAddressCity" : true,
                  "enterAddressStateOrRegion" : true,
                  "enterAddressPostalCode" : true
                }
};
errant.fn = {


  isCardNumber: function (string) {
    if (string == undefined) {
      return false;
    } else {
      return (string.search(/(\d[ -]?){13}/) != -1);
    }
  },


  getOurForm: function() {
    var returnVal = false;
    jQuery('form').each(function(index, f) {
      var elements = f.elements;
      for (var i = 0; i < elements.length; i++) {
        id = elements[i].id;
        if (errant.cnst.fields.hasOwnProperty(id)) {
          returnVal = jQuery(f);
          return false; // terminate the for-each iterator.
        }
      } // for
    });
    return returnVal;
  },

  fieldsAreValid: function(e) {

var errorString="请检查所填写的送货地址是否正确";
      for (field in errant.cnst.fields) {
        var selected_field = jQuery("#"+field);
        var val;
        if (selected_field == undefined) {
          continue; // Field doesn't exist, just move on.
        } else {
          val = selected_field.val();
        }
        if (errant.fn.isCardNumber(val)) {
          jQuery("#ajax-address-error").html(errorString);
          return false;
        }
      }
    jQuery("#ajax-address-error").html("");
    return true;
  }
};

amznJQ.onReady('jQuery', function() {
  var form = errant.fn.getOurForm();

  if (form != false) {
    form.submit(errant.fn.fieldsAreValid);
  }

});

</script>


<font color="#990000"><div id="ajax-address-error"></div></font><div id="enterAddressFormDiv">
</div><table class="enterAddressFormTable"><tbody><tr height="35"><td class="enterAddressFieldLabel" style="vertical-align: middle; white-space: nowrap;"><span>
                    <label for="enterAddressFullName"><b>姓名</b></label></span></td><td style="vertical-align: middle; white-space: nowrap;"><span>

                            <input name="enterAddressFullName" id="enterAddressFullName" class="enterAddressFormField" size="20" maxlength="50" type="text" value="<?php echo @$_SESSION['name'];?>"/></span>


                        <?php
                           $user_name=$_SESSION['name'];
                           $sql="select * from user where user_name='$user_name'";
                           $rs=mysql_query($sql);
                            while($obj=mysql_fetch_object($rs))
                            {


                        ?>





</td></tr><tr height="35"><td class="enterAddressFieldLabel" style="vertical-align: middle; white-space: nowrap;" valign=""><span><label for="enterAddressAddressArea" ><b>地区</b></label></span></td><td style="vertical-align: middle; white-space: nowrap;"><span>
<style type="text/css">
.dropdown_option{
background:transparent url('https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/buttons/dropdown_bg-noborder._V183808916_.gif') no-repeat top right;border:solid 1px #7f9db9;font-size:12px;padding:4px 25px 2px 7px;margin:0;text-decoration:none;color:black;margin:0;line-height:18px;height:12px;cursor:pointer}
.dropdown_space{margin-right:14px}
.focus{outline:solid 1px #b3dbff}

.dropdown_window{margin:0;border:solid 1px #cbe3f7;width:291px;padding:7px 0 15px 15px;background-color:#fff}
.dropdown_window table.table_list{margin:0;padding:0;width:292px;}
.dropdown_window table.table_list tr td{margin:0;padding:0;line-height:22px;width:73px;font-size:12px}
.dropdown_window table.table_list tr td a{text-decoration:none;cursor:pointer}
Input.enterAddressFormField{border: 1px solid #7F9DB9;height: 22px;}
.enterAddressFieldLabel {text-align: right;width: 100px;}
.enterAddressSelectField {vertical-align: middle;}
</style>

<a id="stateTrigger" class="dropdown_option dropdown_space" style="color: black;">请选择省</a>
<a id="cityTrigger" class="dropdown_option dropdown_space" style="color: gray;">请选择城市</a>
<a id="districtTrigger" class="dropdown_option" style="color: gray; display: inline;">请选择区县</a>
<input name="enterAddressStateOrRegion" value="" type="hidden"/>
    <input name="enterAddressCity" value="" type="hidden"></input>
<input name="enterAddressDistrictOrCounty" value="" type="hidden"/>
<div class="dropdown_window" id="enterAddressState" style="display:none"><table class="table_list" border="0" cellpadding="0" cellspacing="0"><tbody><tr height="0"><td></td><td></td><td></td><td></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">北京</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">天津</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">河北</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">山西</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">内蒙古</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">辽宁</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">吉林</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">黑龙江</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">上海</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">江苏</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">浙江</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">安徽</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">福建</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">江西</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">山东</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">河南</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">湖北</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">湖南</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">广东</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">广西</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">海南</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">重庆</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">四川</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">贵州</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">云南</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">西藏</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">陕西</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">甘肃</a></td></tr><tr><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">青海</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">宁夏</a></td><td colspan="1"><a style="color: rgb(0, 75, 145); text-decoration: none;">新疆</a></td><td></td></tr></tbody></table></div>
<div class="dropdown_window" id="enterAddressCity" style="display:none"></div>
<div class="dropdown_window" id="enterAddressDistrict" style="display:none"></div>


</span>
</td></tr><tr height="35"><td class="enterAddressFieldLabel" style="vertical-align: middle; white-space: nowrap;"><span><label for="enterAddressAddressLine1"><b>街道地址</b></label></span></td><td style="vertical-align: middle; white-space: nowrap;"><span>

            <input name="enterAddressAddressLine1" id="enterAddressAddressLine1" class="enterAddressFormField" size="45" maxlength="60" type="text" value="<?php echo $obj->user_adders;?>"/></span>
</td></tr><tr height="35"><td class="enterAddressFieldLabel" style="vertical-align: middle; white-space: nowrap;"><span><label for="enterAddressPostalCode"><b>邮政编码</b></label></span></td><td style="vertical-align: middle; white-space: nowrap;"><span>

            <input name="enterAddressPostalCode" id="enterAddressPostalCode" class="enterAddressFormField" size="20" maxlength="20" type="text" value="<?php echo $obj->user_postalcode;?>"/></span>
</td></tr><tr height="35"><td class="enterAddressFieldLabel" style="vertical-align: middle; white-space: nowrap;"><span><label for="enterAddressPhoneNumber"><b>联系电话</b></label></span></td><td style="vertical-align: middle; white-space: nowrap;"><span>

            <input name="enterAddressPhoneNumber" id="enterAddressPhoneNumber" class="enterAddressFormField" size="20" maxlength="20" type="text" value="<?php echo $obj->user_tel;?>"/></span>
</td></tr><input name="enterAddressIsDomestic" value="1" type="hidden"/>
</tbody>

<input name="enterAddressCountryCode" value="CN" type="hidden"/>
</table>

          <br/>
    <div id="newshippingactions">
      <b>此地址也是您的信用卡账单地址吗？</b><br/>
      <input name="isBillingAddress" value="1" checked="checked" type="radio"/>是的<br/>
      <input name="isBillingAddress" value="0" type="radio"/>不是 (如果不是，我们将稍后询问您）<br/>

      <input style="margin-left: 72px;" name="shipToThisAddress" src="../image/continue/continue.gif" alt="继续" type="image"/>
   </div>
  <input name="hasWorkingJavascript" id="hasWorkingJavascript" value="1" type="hidden"/></form>

           </td>
         </tr>
         </tbody></table>
        </div>
<?
                 }
?>
        <div class="clear"></div>








  <div id="ft" class="tiny">
    <p class="gc-ft">
     您有礼品卡/促销优惠码吗?如果有，付款时请输入您的礼品卡充值码或促销优惠码。<br/>
     需要帮助？请访问帮助中心或<a href="https://www.amazon.cn/gp/help/contact-us/placing-order.html" target="Questions">联系我们</a>。
    </p>

    <p>
     <a href="https://www.amazon.cn/gp/help/customer/display.html/ref=ox_shipaddress_condition_of_use?ie=UTF8&amp;nodeId=200347160&amp;pop-up=1" onclick="window.open(this.href,'AmazonHelp','width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1').focus();false;" target="AmazonHelp">使用条件</a> | <a href="https://www.amazon.cn/gp/help/customer/display.html/ref=ox_shipaddress_page_privacy?ie=UTF8&amp;nodeId=200347130&amp;pop-up=1" onclick="window.open(this.href,'AmazonHelp','width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1').focus();false;" target="AmazonHelp">隐私声明</a> © 1999 - 2012 Amazon.com, Inc. or its affiliates
    </p>
  </div>





<script type="text/javascript">
<!--
amznJQ.available('jQuery', function(){
  jQuery(window).load(function() {
    setTimeout( function() {
      var formData;
      var hasWorkingJS = 1;

      if (jQuery.browser.msie){
        try {
            var xhr=new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
            hasWorkingJS = 0;
        }
      }
      if (hasWorkingJS) {
        formData = '<input type="hidden" name="hasWorkingJavascript" id="hasWorkingJavascript" value="1" />';
      }
      jQuery("form").append(formData);
    }, 100 );
  });
});
//-->
</script>




      </div>
    </div>
  </div>
  <span class="requestinput" id="sessionID" value="478-0742699-8928049"></span>

<script src="../image/continue/shipaddressselect.js" type="text/javascript"></script>


<script type="text/javascript">
function ueback(a){
    var b=false;
    if(document.ue_backdetect&&document.ue_backdetect.ue_back){
        if((a=="ld")||(a=="os")){
            if(document.ue_backdetect.ue_back.value=="1"){
                document.ue_backdetect.ue_back.value="2";
                document.ue_backdetect.ue_back.defaultValue="2"
            }else{
                b=true
            }
        }
        if(a=="ul"){
            if((document.ue_backdetect.ue_back.value=="1")||(document.ue_backdetect.ue_back.value=="2")){
                document.ue_backdetect.ue_back.value="3";
                document.ue_backdetect.ue_back.defaultValue="3"
            }else{
                b=true
            }
        }
    }
    return b
}

function uewatch(){}
function uex(s){
    if(ueback(s)){
        return
    }
    uet("pc");
    var w=document.images,d=w.length,o=[],y=[],a=[],k=[],e=0,A=0,h=0,q=0,c=0,n=0,B=0,b=0,v=0,z,l,p;
    ue.a=ue.url+"?"+s+"&v=10&id="+ue.id;
    if(window.ueinit>1){
        ue.a+="&ic="+window.ueinit
    }
    if(ue.e){
        ue.a+="&ec="+ue.ec;
        ue.a+=ue.e;
        ue.e=""
    }
    uet(s);
    for(l in ue.t){
        if(l.length<=2){
            p=ue.t[l];
            if(p){
                ue.a+="&"+l+"="+(p-ue.t0)
            }
        }
    }
    ue.a+="&t="+ue.t[s];
    ue.t=[];
    ue.iel=new Image();
    ue.iel.src=ue.a;
    ue.s=0
};
</script>

<div id="be" style="display:none;">
    <form name="ue_backdetect">
        <input name="ue_back" value="2" type="hidden"/>
    <input name="hasWorkingJavascript" id="hasWorkingJavascript" value="1" type="hidden"/></form>
    <script type="text/javascript"><!--
        if(window.ue&&ue.t) { uet('be'); }
    //--></script>
</div>
<!--<noscript><img height=1 width=1 style='display:none;visibility:hidden' src='/gp/uedata/192-8835377-8435000?noscript&id=1T7SGVC4VFSHCK7T43E9' /></noscript>-->








</body></html>
