<!DOCTYPE html>
<html xmlns="\&quot;http://www.w3.org/1999/xhtml\&quot;"><head>

        <script language="JavaScript"  type="text/javascript">
   function link(fom)
{
  if(fom.username.value=="")
  {
      alert("请输出用户名！"); fom.username.focus();return false;
  }
  if(fom.email.value=="")
  {
       alert("请输入邮件地址！"); fom.email.focus();return false;
  }
  if(fom.emailCheck.value=="")
  {
       alert("请重复输入邮件地址！"); fom.emailCheck.focus();return false;
  }
   if(fom.email.value!=fom.emailCheck.value)
   {
          alert("两次邮件输入不一致，请重新输入！");fom.password.focus(); return false;
   }
    if(fom.password.value=="")
  {
       alert("请输入密码！"); fom.password.focus();return false;
  }
  if(fom.passwordCheck.value==""){
      alert("请重复输入密码！");fom.passwordCheck.focus();return false;
  }
  if(fom.password.value!=fom.passwordCheck.value)
  {
      alert("两次密码输入不一致，请重新输入！");fom.passwordCheck.focus();return false;
  }
      if(fom.adders.value=="")
  {
       alert("请输入地址信息！"); fom.adders.focus();return false;
  }
        if(fom.postalcode.value=="")
  {
       alert("请输入邮政编码！"); fom.postalcode.focus();return false;
  }
        if(fom.tel.value=="")
  {
       alert("请输入联系电话！"); fom.tel.focus();return false;
  }
      if(fom.email.value!=fom.emailCheck.value){
          alert("两次邮件输入不一致，请重新输入！");fom.password.focus(); return false;
      }

}
</script>




<script type="text/javascript">/* <![CDATA[ */
var t0_date = new Date();
var ue_t0 = t0_date.getTime();
var ue_id = '0JGWW6RJ0FX22ZYZDAYB';
var ue_url = '/ap/uedata';
var ue_pr  = 0, ue_wl_on = 1;
var ueinit=(ueinit||0)+1;var ue={t0:ue_t0,id:ue_id,url:ue_url,a:"",b:"",e:"",ec:0,h:{},r:{ld:0,oe:0,ul:0},s:1,t:{},sc:{},iel:[]};function uet(b,e,g){var f=(new Date()).getTime();var a=!e&&typeof g!="undefined";if(a){return}if(b){var c=e?ues("t",e)||ues("t",e,{}):ue.t;c[b]=f;for(var d in g){ues(d,e,g[d])}}return f}function ues(b,c,d){var e,a;if(b){e=a=ue;if(c&&c!=e.id){a=e.sc[c];if(!a){a={};d?(e.sc[c]=a):a}}e=d?(a[b]=d):a[b]}return e}function ueh(d,b,c,a,f){var e="on"+c;var g=b[e];if(typeof(g)=="function"){if(d){ue.h[d]=g}}else{g=function(){}}b[e]=f?function(h){a(h);g(h)}:function(h){g(h);a(h)};b[e].isUeh=1}function uex(i,o,g){function e(B,z){var x=[B],v=0,y={};if(z){x.push("m=1");y[z]=1}else{y=ue.sc}var q;for(var r in y){var t=ues("wb",r),w=ues("t",r)||{},u=ues("t0",r)||ue.t0;if(z||t==2){var A=t?v++:"";x.push("sc"+A+"="+r);for(var s in w){if(s.length<=2&&w[s]){x.push(s+A+"="+(w[s]-u))}}x.push("t"+A+"="+w[i]);if(ues("ctb",r)||ues("wb",r)){q=1}}}if(!l&&q){x.push("ctb=1")}return x.join("&")}function j(r){var q=new Image();if(ue.b){q.onload=function(){var s=ue.b;ue.b="";j(s)}}else{q.onload=function(){if(window.ue_err&&ue_err._publishJsErrorsLog){ue_err._publishJsErrorsLog()}}}ue.iel.push(q);q.src=r;if(window.ue_err&&!ue_err.ts){ue_err.startTimer()}}var c=!o&&typeof g!="undefined";if(c){return}for(var h in g){ues(h,o,g[h])}uet("pc",o,g);var k=ues("id",o)||ue.id;var b=ue.url+"?"+i+"&v=17&id="+k;var l=ues("ctb",o)||ues("wb",o);if(l){b+="&ctb="+l}if(ueinit>1){b+="&ic="+ueinit}var n;if(document.ue_backdetect&&document.ue_backdetect.ue_back){n=document.ue_backdetect.ue_back;if(n.value>1){b+="&bf="+(n.value-1)}}var p;if(i=="ld"&&(!o||o==k)){if(window.onbeforeunload&&window.onbeforeunload.isUeh){window.onbeforeunload=null}if(n){n.value++}if(window._uess){p=_uess()}}uet(i,o,g);var f=(i=="ld"&&o&&ues("wb",o));if(f){ues("wb",o,2)}var m=1;for(var a in ue.sc){if(ues("wb",a)==1){m=0;break}}if(f){if(ue.s!=0||!m){return}b=e(b,null)}else{if(m){var d=e(b,null);if(d!=b){ue.b=d}}if(p){b+=p}b=e(b,o||ue.id)}if(ue.b||f){for(var a in ue.sc){if(ues("wb",a)==2){delete ue.sc[a]}}}if(!f){ue.s=0;if(!window.ue_wl_jserr&&ue.e){b+="&ec="+ue.ec+ue.e;ue.e="";ue.ec=0}if(window.ue_wl_jserr){if(window.ue_err&&ue_err.buf.length>0){b+="&ec="+ue_err.buf.length}}ues("t",o,{})}ue.a=b;j(b)}function uei(){var c=ue.r;function a(e){return function(){if(!c[e]){c[e]=1;uex(e)}}}window.onLd=a("ld");if(ue_wl_on){window.onLdEnd=a("ld")}var b={beforeunload:a("ul"),error:function(j,h,i){ue.ec++;if(!ue.r.oe){ue.r.oe=1;ue.e+="&em="+escape(j)+"&eu="+escape(h)+"&el="+i}return false},stop:function(){uex("os")}};for(var d in b){ueh(0,window,d,b[d])}if(ue_wl_on){if(window.addEventListener){window.addEventListener("load",window.onLd,false)}else{if(window.attachEvent){window.attachEvent("onload",window.onLd)}}}ue._uep=function(){new Image().src="http://uedata.amazon.com/uedata/?tp="+(+new Date)};if(ue_pr==2||ue_pr==4){ue._uep()}if(window.ue_wl_jserr){window.onerror=window.ueLogError}uet("ue")}uei();
/* ]]> */</script>




<title>
    Amazon.cn 注册
</title>







<link type="text/css" href="../image/reg/error-styles-ssl.css" rel="stylesheet">








<link type="text/css" href="../image/reg/ap_global.css" rel="stylesheet">











  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<style type="text/css" charset="utf-8">/* See license.txt for terms of usage */
/** reset styling **/
.firebugResetStyles {
    z-index: 2147483646 !important;
    top: 0 !important;
    left: 0 !important;
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important;
    outline: 0 !important;
    min-width: 0 !important;
    max-width: none !important;
    min-height: 0 !important;
    max-height: none !important;
    position: fixed !important;
    -moz-transform: rotate(0deg) !important;
    -moz-transform-origin: 50% 50% !important;
    -moz-border-radius: 0 !important;
    -moz-box-shadow: none !important;
    background: transparent none !important;
    pointer-events: none !important;
}

.firebugBlockBackgroundColor {
    background-color: transparent !important;
}

.firebugResetStyles:before, .firebugResetStyles:after {
    content: "" !important;
}
/**actual styling to be modified by firebug theme**/
.firebugCanvas {
    display: none !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {
    width: auto !important;
    position: static !important;
}

.firebugLayoutBoxOffset {
    opacity: 0.8 !important;
    position: fixed !important;
}

.firebugLayoutLine {
    opacity: 0.4 !important;
    background-color: #000000 !important;
}

.firebugLayoutLineLeft, .firebugLayoutLineRight {
    width: 1px !important;
    height: 100% !important;
}

.firebugLayoutLineTop, .firebugLayoutLineBottom {
    width: 100% !important;
    height: 1px !important;
}

.firebugLayoutLineTop {
    margin-top: -1px !important;
    border-top: 1px solid #999999 !important;
}

.firebugLayoutLineRight {
    border-right: 1px solid #999999 !important;
}

.firebugLayoutLineBottom {
    border-bottom: 1px solid #999999 !important;
}

.firebugLayoutLineLeft {
    margin-left: -1px !important;
    border-left: 1px solid #999999 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {
    border-top: 0 none !important;
    border-right: 1px dashed #E00 !important;
    border-bottom: 1px dashed #E00 !important;
    border-left: 0 none !important;
    position: fixed !important;
    width: auto !important;
}

.firebugRuler{
    position: absolute !important;
}

.firebugRulerH {
    top: -15px !important;
    left: 0 !important;
    width: 100% !important;
    height: 14px !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
    border-top: 1px solid #BBBBBB !important;
    border-right: 1px dashed #BBBBBB !important;
    border-bottom: 1px solid #000000 !important;
}

.firebugRulerV {
    top: 0 !important;
    left: -15px !important;
    width: 14px !important;
    height: 100% !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
    border-left: 1px solid #BBBBBB !important;
    border-right: 1px solid #000000 !important;
    border-bottom: 1px dashed #BBBBBB !important;
}

.overflowRulerX > .firebugRulerV {
    left: 0 !important;
}

.overflowRulerY > .firebugRulerH {
    top: 0 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {
    position: fixed !important;
    pointer-events: auto !important;
}</style><style type="text/css" charset="utf-8">/* See license.txt for terms of usage */

/** reset styling **/

.firebugResetStyles {

    z-index: 2147483646 !important;

    top: 0 !important;

    left: 0 !important;

    display: block !important;

    border: 0 none !important;

    margin: 0 !important;

    padding: 0 !important;

    outline: 0 !important;

    min-width: 0 !important;

    max-width: none !important;

    min-height: 0 !important;

    max-height: none !important;

    position: fixed !important;

    -moz-transform: rotate(0deg) !important;

    -moz-transform-origin: 50% 50% !important;

    -moz-border-radius: 0 !important;

    -moz-box-shadow: none !important;

    background: transparent none !important;

    pointer-events: none !important;

}
.firebugBlockBackgroundColor {

    background-color: transparent !important;

}
.firebugResetStyles:before, .firebugResetStyles:after {

    content: "" !important;

}

/**actual styling to be modified by firebug theme**/
.firebugCanvas {

    display: none !important;

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {

    width: auto !important;

    position: static !important;

}
.firebugLayoutBoxOffset {

    opacity: 0.8 !important;

    position: fixed !important;

}
.firebugLayoutLine {

    opacity: 0.4 !important;

    background-color: #000000 !important;

}
.firebugLayoutLineLeft, .firebugLayoutLineRight {

    width: 1px !important;

    height: 100% !important;

}
.firebugLayoutLineTop, .firebugLayoutLineBottom {

    width: 100% !important;

    height: 1px !important;

}
.firebugLayoutLineTop {

    margin-top: -1px !important;

    border-top: 1px solid #999999 !important;

}
.firebugLayoutLineRight {

    border-right: 1px solid #999999 !important;

}
.firebugLayoutLineBottom {

    border-bottom: 1px solid #999999 !important;

}
.firebugLayoutLineLeft {

    margin-left: -1px !important;

    border-left: 1px solid #999999 !important;

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {

    border-top: 0 none !important;

    border-right: 1px dashed #E00 !important;

    border-bottom: 1px dashed #E00 !important;

    border-left: 0 none !important;

    position: fixed !important;

    width: auto !important;

}
.firebugRuler{

    position: absolute !important;

}
.firebugRulerH {

    top: -15px !important;

    left: 0 !important;

    width: 100% !important;

    height: 14px !important;

    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;

    border-top: 1px solid #BBBBBB !important;

    border-right: 1px dashed #BBBBBB !important;

    border-bottom: 1px solid #000000 !important;

}
.firebugRulerV {

    top: 0 !important;

    left: -15px !important;

    width: 14px !important;

    height: 100% !important;

    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;

    border-left: 1px solid #BBBBBB !important;

    border-right: 1px solid #000000 !important;

    border-bottom: 1px dashed #BBBBBB !important;

}
.overflowRulerX > .firebugRulerV {

    left: 0 !important;

}
.overflowRulerY > .firebugRulerH {

    top: 0 !important;

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {

    position: fixed !important;

    pointer-events: auto !important;

}</style></head>
<body id="cnflex">

<!-- empty pagelet -->


<!--[if lte IE 5]>
<div class="ie">
<![endif]-->

<!--[if IE 6]>
<div class="ie ie6">
<![endif]-->

<!--[if IE 7]>
<div class="ie ie7">
<![endif]-->

<!--[if IE 8]>
<div class="ie ie8">
<![endif]-->

<div id="headerbanner">

</div>

<div id="wrapper">

<div id="topSlots">
  <div id="top-0"></div>
  <div id="top-1">



<div id="ap_header" class="ap_header">
<img src="../image/reg/amazon-logo-tiny-new.jpg" alt="首页" border="0" height="33" width="94">
</div>
</div>
  <div id="top-2"></div>
  <div id="top-3"></div>
  <div id="top-4"></div>
  <div id="top-5"></div>
  <div id="top-6"></div>
  <div id="top-7"></div>
  <div id="top-8"></div>
  <div id="top-9"></div>
  <div id="top-10"></div>
</div>

<div id="leftSlots">
  <div id="left-0"></div>
  <div id="left-1"></div>
  <div id="left-2"></div>
  <div id="left-3"></div>
  <div id="left-4"></div>
  <div id="left-5"></div>
  <div id="left-6"></div>
  <div id="left-7"></div>
  <div id="left-8"></div>
  <div id="left-9"></div>
  <div id="left-10"></div>
</div>
<div id="centerSlots">
  <div id="center-0"></div>

    <div id="title-slot">



<!--[if lte IE 5]>
<div class="ie">
<![endif]-->

<!--[if IE 6]>
<div class="ie ie6">
<![endif]-->

<!--[if IE 7]>
<div class="ie ie7">
<![endif]-->

<!--[if IE 8]>
<div class="ie ie8">
<![endif]-->
    <div id="ap_title_pagelet">
    </div>
<!--[if lte IE 8]>
</div>
<![endif]-->

</div>

    <div id="message-box-slot">

		<div id="message_warning" class="message warning" style="display:none">
		    <span></span>
		    <h6>请激活Cookies以继续</h6>
		    <p>
				为了可继续在亚马逊网站购物，请激活您的网页cookies
			</p>
			<p>
				<a href="https://www.amazon.cn/gp/help/customer/display.html/ref=ap_cookie_error_help??ie=UTF8&amp;nodeId=200345580" target="AmazonHelp" onclick="return amz_js_PopWin(this.href,'AmazonHelp','width=700,height=800,resizable=1,scrollbars=1,toolbar=1,status=1');return false;">
					了解更多信息
				</a>
		    	关于cookies 和如何激活cookies
		    </p>
		</div>
		<script type="text/javascript">

			function setCookie(c_name,value,expiredays)
			{
				var exdate=new Date();
				exdate.setDate(exdate.getDate()+expiredays);
				document.cookie=c_name+ "=" +escape(value)+
				((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
			}

			function getCookie(c_name)
			{
				if (document.cookie.length>0)
				{
					c_start=document.cookie.indexOf(c_name + "=");
					if (c_start!=-1)
					{
						c_start=c_start + c_name.length+1;
						c_end=document.cookie.indexOf(";",c_start);
						if (c_end==-1) c_end=document.cookie.length;
						return unescape(document.cookie.substring(c_start,c_end));
					}
				}
				return "";
			}
			function deleteCookie ( cookie_name )
			{
			  var cookie_date = new Date ( );  // current date & time
			  cookie_date.setTime ( cookie_date.getTime() - 1 );
			  document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
			}

			function checkCookieEnabled(nodeId)
			{
				setCookie('amznTest','1',null);
				if(getCookie('amznTest')){
					deleteCookie('amznTest');
				}else{
					document.getElementById(nodeId).style.display = 'block';
				}
			}
			checkCookieEnabled('message_warning');
		</script>


</div>

    <div id="center-1"></div>
  	  <div id="register-slot">
<div id="ap_register1a_pagelet" class="ap_pagelet">


<div id="ap_register1a_pagelet_title" class="ap_pagelet_title h1 left">
    <h1>注册新用户</h1>
</div>

    <form method="post" id="ap_register_form" novalidate="novalidate" action="../manage/doReg.php" onsubmit="" name="fom">


    <input name="appActionToken" value="h5WFOdHnGXoEE1uMOW9DtRlMHr0j3D" type="hidden"><input name="appAction" value="REGISTER" type="hidden">
		<input name="openid.pape.max_auth_age" value="ape:MA==" type="hidden">

		<input name="openid.ns" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjA=" type="hidden">

		<input name="openid.ns.pape" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvZXh0ZW5zaW9ucy9wYXBlLzEuMA==" type="hidden">

		<input name="pageId" value="ape:Y25mbGV4" type="hidden">

		<input name="openid.identity" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjAvaWRlbnRpZmllcl9zZWxlY3Q=" type="hidden">

		<input name="openid.claimed_id" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjAvaWRlbnRpZmllcl9zZWxlY3Q=" type="hidden">

		<input name="openid.mode" value="ape:Y2hlY2tpZF9zZXR1cA==" type="hidden">

		<input name="openid.assoc_handle" value="ape:Y25mbGV4" type="hidden">

		<input name="openid.return_to" value="ape:aHR0cHM6Ly93d3cuYW1hem9uLmNuL2dwL3lvdXJzdG9yZS9ob21lP2llPVVURjgmcmVmXz1nbm9fc2lnbmlu" type="hidden">




    <div id="ap_register_signin_form_table_wrapper" class="fixed_width_form">
    <table id="ap_signin_form_table" class="ap_form_table">

        <tbody><tr><td colspan="2">
            <div id="ap_register_section_1_title" class="ap_section_title">
                <h2></h2>
        </div></td></tr>


        <tr><td></td><td>
            <div id="ap_customer_name_alert" class="form_alert" style="display:none;">
            输入您名字
            </div>
        </td></tr>

        <tr><td>
            <div class="right">
            <div id="ap_customer_name_label" class="ap_input_label">
                <label for="ap_customer_name">请输入姓名：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_register_name_input">
                <input id="ap_customer_name" name="username" maxlength="50" size="30" tabindex="1" autocomplete="off" type="text">
            </div>
            </td>
        </tr>




        <tr><td></td><td>
            <div id="ap_email_alert" class="form_alert" style="display:none;">
                输入您的电子邮件地址
            </div>
        </td></tr>
        <tr><td></td><td>
            <div id="ap_email_malformed_alert" class="form_alert" style="display:none;">
                电子邮件地址无效。
            </div>
        </td></tr>
        <tr><td></td><td>
            <div id="ap_email_mismatch_alert" class="form_alert" style="display:none;">
                电子邮件不符
            </div>
        </td></tr>

        <tr><td>
            <div class="right">
            <div id="ap_email_label" class="ap_input_label">
                <label for="ap_email">请输入E-mail地址：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_email_input">
                <input id="ap_email" name="email" maxlength="64" size="30" tabindex="3" value="" autocorrect="off" autocapitalize="off" type="email">
            </div>
            </td>
        </tr>


        <tr><td></td><td>
            <div id="ap_email_check_alert" class="form_alert" style="display:none;">
                再次键入您的电子邮件地址
            </div>
        </td></tr>

        <tr><td>
            <div class="right">
            <div id="ap_email_check_label" class="ap_input_label">
                <label for="ap_email_check">再次输入：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_email_check_input">
                <input id="ap_email_check" name="emailCheck" maxlength="64" size="30" tabindex="4" autocomplete="off" autocorrect="off" autocapitalize="off" type="email">
            </div>
            </td>
        </tr>


        <tr>
            <td colspan="2">
                <div id="ap_register_custom_message" class="center">



                </div>
            </td>
        </tr>




        <tr><td colspan="2">
            <h2>  </h2>
            <div id="ap_register_section_2_title" class="h2 ap_section_title">
                <h2> 使用密码保护您的信息 </h2>
            </div>
            <div id="ap_register_section_2_subtitle" class="ap_small_text">
                   这是您登录Amazon.cn的唯一密码
            </div>
        </td>
        </tr>


        <tr><td></td><td>
            <div id="ap_password_missing_alert" class="form_alert" style="display:none;">
                   请输入您的密码
            </div>
        </td></tr>
        <tr><td></td><td>
            <div id="ap_password_mismatch_alert" class="form_alert" style="display:none;">
                   密码不符
            </div>
        </td></tr>
        <tr><td></td><td>
            <div id="ap_password_length_alert" class="form_alert" style="display:none;">
                   密码不符
            </div>
        </td></tr>

        <tr><td></td><td>
        </td></tr><tr><td>
            <div class="right">
            <div class="ap_input_label" id="ap_password_label">
                <label for="ap_password">请输入密码：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_password_input">
                <input autocomplete="off" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" value="" tabindex="6" size="20" maxlength="128" name="password" id="ap_password" type="password">
            </div>
        </td>
        <td rowspan="2">







<div style="visibility:hidden;" class="ap_caps_warn ap_caps_warn_shared_table" id="ap_caps_warning">
  <!--[if lt IE 7]>
  <style type="text/css">
  .ap_caps_warn {
    display: none;
  }
  </style>
  <![endif]-->
  <b>大写锁定键已开启。</b> <font color="black">这可能导致<br>您所输入的密码不正确。</font>
</div>

        </td>
        </tr>



        <tr><td>
            <div class="right">
            <div class="ap_input_label" id="ap_password_check_label">
                <label for="ap_password_check">再次输入：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_password_check_input">
                <input autocomplete="off" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" value="" tabindex="7" size="20" maxlength="128" name="passwordCheck" id="ap_password_check" type="password">
            </div>
            </td>
        </tr>


<tr><td>
            <div class="right">
            <div class="ap_input_label" id="ap_password_check_label">
                <label for="ap_password_check">街道地址：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_password_check_input">
                <input style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" autocomplete="off" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" tabindex="7" size="20" maxlength="128" name="adders" id="ap_password_check" type="adders">
            </div>
            </td>
        </tr>
<tr><td>
            <div class="right">
            <div class="ap_input_label" id="ap_password_check_label">
                <label for="ap_password_check">邮政编码：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_password_check_input">
                <input autocomplete="off" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" tabindex="7" size="20" maxlength="128" name="postalcode" id="ap_password_check" type="postalcode">
            </div>
            </td>
        </tr>
<tr><td>
            <div class="right">
            <div class="ap_input_label" id="ap_password_check_label">
                <label for="ap_password_check">联系电话：</label>
            </div>
            </div>
            </td>
            <td>
            <div id="ap_password_check_input">
                <input autocomplete="off" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" tabindex="7" size="20" maxlength="128" name="tel" id="ap_password_check" type="tel">
            </div>
            </td>
        </tr>














        <tr><td>&nbsp;</td>
        <td>




        <div id="ap_register_buttons">
            <input src="../image/reg/create-account-md-yellow.gif" id="continue"  onclick="return link(fom);" alt="创建帐户" name="continue" tabindex="8" border="0" height="22" type="image" width="76">
            <div class="ap_csm_marker" style="display:none;">
                <script type="text/javascript">if (typeof uet == 'function') { uet('af'); }</script>
            </div>
        </div>

        </td>
        </tr>
    </tbody>
    </table>
    </div>

<input value="qM1hXDrhqR1nAicsNIslH/1Mx9+aSLcyR1TALfx0MQ6Ts053/DYSU1PAHrZU9E13/7ehgi2HDIU1bUKClR0lKc38vBpTqAW2zCl3ZHTNH/1cc/EkpMQGOUn73EfR2/7T9Vpg6wlxOEckFXHj83laEHVyghCTCl7tdAXG/opl6ahBZ5S8+NI22B12R7ikL15vb18lla8vn9uS3x+dnUSg8hdtygh/Z6JYi4AydJuMrV6oiSCcPTq+PxZOt8GySSVNb+mET8kqX0Pf+ApYcFH2wweLF8uArMilTC1cV9JQKgFyeWWtz/nlSIoFA5oxU+GPIYP2gMzFnfcGYlMYjUt5y6E6BvCBCk2qAGaPftIjTfMQ+kuIKg5saxElrx3iJ1O91r4GYaWeiATzcK7sxoU9hCItQOP5jUw/7eI0dfsBUZVO0wxjWUqb3y5ODuoGmL1MbrtoIvr3hqonlBoDJ2mMi2iFVetD+DnvnZaFuj1N7hV6isTQFn2DPMScmVQeJhMnJBXG6zKA5QZsO8Q8WuEcu2GJsz/K92EuYuhKP0i6814iipMLQjg+xeFZy6PmNWgBQA38hOZebeMBsbnXixNdmndO5O3qABUSbY73rTbUeRhmOAAap7WVLuI5CcsTNaPF4CUxWxLA5yJsL0fLrNnK/lRBav28pwZwLLRF5LHyL9b5wOzHwdE5QrHPQJUaZDyAee2TgDJbLxivOlNUjx09UI6CvUYPJWnd6VChyYNd6JlhF+jcOOTgQkUEwrz3nFZ1WS4Z8iigFWeqDXwm/2fVM08rd3FlGK+c8Hak1lxWwQkfAwd0M3UgE3uhI6o+lzzEVM0Ce0S2Egm0zIvd" name="metadata1" type="hidden"><input value="/MEEtxFlD/KmW3lwSxfOdwTeFoCN9x8n1D9tDVU9qjAA4lkkoD9+4sfpUMeddtPTONHS5tbCc6IAUkG224jd9EV/xSxvPM/Wz9DdZ2GKUhZNX14js2bQYKy7AvmAIensfRqTfKm5qEu0vMCGUcvNw9je/vSgUGLezdgN1/DxKBQbqiD4rTod4iqisNOfulL8fcpaI/pccig2FutLrNANFRuI0xiivVEg6RoGOJQhWxt3nBbyH4k3yTA57YWekVlQaaN1BgYlTCgUHKND+BIBxYoHw0UQoPKb3L9avox7AA1rQMHQYw7lQlY8xAWe+z1Op66/lE+0jH3RriI3b6+KiILyuHNpd4yh5QDY08gsa3VN2SbhyEGrKzLFXPuhXZngTGsUk6IMOvStU088Bm77DRF5pqVmtKZL/ATBk01+zYjyiT7qM13cIjHtksom/2/RQ9GFx5patLgdJB2IXO7R1VXI4H/d0xE4gTKAp/psdLEl7vjMh+UgaZIYhM4DWOKx7Dri35/WM/z5bl8+4wu2rPJQrdu6I5U0lMM73GSopvB05oADdhnrCY6F4R9WmZ7uMHB1lr2FoOHSatL1IaYmml+HSJYnADR+oJhKJjRHFLpwYXdjGzGuS0a27myNS+HfoBeXxUPX2/hpXBsgtsM7RGJineWOyFVanTzdCwv16V0uK2WCz7FrqNUMYa+zBmX9pyQcKQ1U4esepXzfcLNDo4vpr3lsXQwPCX6ZHlbl2zax2jabI3laQ1briGv+JnepKD9u2Iqs7OwQkfDUi8g0YcGeaiQncpMxkKZF8CkA42VDqm/BllQLG8l4mG36qqOGq0EH4/yB49Y41bgp" name="metadata1" type="hidden"><input value="bXC/59lZffHm2Ju6BnP785sB/bNAAWWD+QNqC6PlUo6aAmJk39DguHeDHlsHXBNLUi2eAGLV78f4qatyGsHBBz9OH0AKyf3bkpp3BBegmVDjuK09nMVQc6u28DCmPFvm2f0UocJvq8AIZJp3+Dt33vUPLWCjyps9UeJqoXnNUrqMms0tnSk1H1Q0fYkEyNlvvbnKjFg6CHOdLe178WZPLRbyW9dG7VfQP5FAkxn30GLsRwBrEgjxzV5PKXBUy6e4n7IzCq2sEpWYhFvZCsezBhJAu/uW8+bcvi/zQHojt+oUKbQ4npEcQ4GpqaD64EJqmRDtm1T4yySLIwFRC0vWH5p7n/oiNg5zf5q0E8nAyvr5PlOh8OeB+MGKVv0453jw+YKC7pKpqO37yh1+5S8+aoanKwq8MnT7vyO2IiVH6G23ELc2kYJrdrusv0EHk03rLWs/UWz/cjJNvtVPUtdWoD0jD5DW8TdZ8927QV+JfoQ+x5xU8e+kkzAWW5T/OS6jqcND8YqurFBBpsemQkofCVF+HkNcDgDtdyGzW/RBGdwI2FwC+A86fZfbmcVdT2JJOxVm9rM+Z3sEKiGvMAi0bJNcpu2Goq3Jl1nVB9ec9ggBd8DKufvzsYhA8iblgne7n1gvovF2qPRWyicAQAWliCKJ3qeinbYmhJPII89//GoWAFJHJJ5tDzkTfz3wdd6y9XOyUS1fpOMh+ViNCD71FtZkYw7TdWFwOrKx6+4lUcOsakndVxMaWOS9C/07GCWV6KeLiy7JgRsTj8ndhcweokTEdxxC72Wtgme+KxikoBgEDESDNkEZ6QSmtaquxOpZ3Vp2SZNcG0ZmpBNF" name="metadata1" type="hidden"></form>
</div>
</div>







    <div id="center-2"></div>



  <div id="center-3"></div>
  <div id="center-4"></div>
  <div id="center-5"></div>
  <div id="center-6"></div>
  <div id="center-7"></div>
  <div id="center-8"></div>
  <div id="center-9"></div>
  <div id="center-10"></div>
</div>

<div id="rightSlots">
  <div id="right-0"></div>
  <div id="right-1"></div>
  <div id="right-2"></div>
  <div id="right-3"></div>
  <div id="right-4"></div>
  <div id="right-5"></div>
  <div id="right-6"></div>
  <div id="right-7"></div>
  <div id="right-8"></div>
  <div id="right-9"></div>
  <div id="right-10"></div>
</div>



<div id="bottomSlots">
  <div id="bottom-1">

<div id="ap_privacy" class="ap_privacy_footer">
<p class="tiny" align="center">
<a onclick="return amz_js_PopWin('/static/claim.asp?uid=480-6082399-6640543&amp;pop-up=1','AmazonHelp','width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1');" target="AmazonHelp" href="https://www.amazon.cn/static/claim.asp?uid=480-6082399-6640543">使用条件</a>
  <a onclick="return amz_js_PopWin('/static/privacy.asp?uid=480-6082399-6640543&amp;pop-up=1','AmazonHelp','width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1');" target="AmazonHelp" href="https://www.amazon.cn/static/privacy.asp?uid=480-6082399-6640543">隐私声明</a>
© 1999-2012 Amazon.com, Inc. or its affiliates
</p>
</div>
</div>
  <div id="bottom-2"></div>
  <div id="bottom-3"></div>
  <div id="bottom-4"></div>
  <div id="bottom-5"></div>
  <div id="bottom-6"></div>
  <div id="bottom-7"></div>
  <div id="bottom-8"></div>
  <div id="bottom-9"></div>
  <div id="bottom-10"></div>
</div>

<div id="footerSlots">
  <div id="footer-1"></div><!-- footer-1 -->
  <div id="footer-2"></div><!-- footer-2 -->
  <div id="footer-3"></div><!-- footer-3 -->
  <div id="footer-4"></div><!-- footer-4 -->
  <div id="footer-5"></div><!-- footer-5 -->
  <div id="footer-6"></div><!-- footer-6 -->
  <div id="footer-7"></div><!-- footer-7 -->
  <div id="footer-8"></div><!-- footer-8 -->
  <div id="footer-9"></div><!-- footer-9 -->
  <div id="footer-10"></div><!-- footer-10 -->

</div><!-- footerSlots -->

<div id="javascriptSlots">

<div id="javascript-slot-0">





    <script type="text/javascript" src="../image/reg/jquery-1.js"></script>






</div>
<div id="javascript-slot-1"></div>
<div id="javascript-slot-2"></div>
<div id="javascript-slot-3"></div>
<div id="javascript-slot-4"></div>

<div id="javascript-identity">





    <script type="text/javascript" src="../image/reg/ap_global-1.js"></script>






</div>
<div id="javascript-slot-5"></div>

<div id="js-trms">





<script type="text/javascript" src="../image/reg/fwcim.js"></script><div id="fwcim-container"><div style="visibility:hidden" id="mercury"><param name="movie" value="https://images-na.ssl-images-amazon.com/images/G/01/x-locale/common/login/mercury9.swf?value1=X46-7477494-2526001:1338031946&amp;vip=1"><param name="bgcolor" value="#ffffff"><param name="AllowScriptAccess" value="always"><embed src="../image/reg/mercury9.swf" bgcolor="#ffffff" allowscriptaccess="always" height="0" width="0"></div></div>
<div id="fwcim-container"><div style="visibility:hidden" id="mercury"><param name="movie" value="https://images-na.ssl-images-amazon.com/images/G/01/x-locale/common/login/mercury9.swf?value1=X46-7477494-2526001:1338031946&amp;vip=1"><param name="bgcolor" value="#ffffff"><param name="AllowScriptAccess" value="always"><embed src="../image/reg/mercury9_002.swf" bgcolor="#ffffff" allowscriptaccess="always" height="0" width="0"></div></div>
<div id="fwcim-container"><div style="visibility:hidden" id="mercury"><param name="movie" value="https://images-na.ssl-images-amazon.com/images/G/01/x-locale/common/login/mercury9.swf?value1=X46-7477494-2526001:1338031946&amp;vip=4"><param name="bgcolor" value="#ffffff"><param name="AllowScriptAccess" value="always"><embed src="../image/reg/mercury9_002.htm" bgcolor="#ffffff" allowscriptaccess="always" height="0" width="0"></div></div>

<script type="text/javascript">
	fwcim.profile('')

	fwcim.prepareMercury('https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/login/mercury9._V159018330_.swf', '475-7368288-8097830:1338033026')

</script>

</div>

<div id="cache-1"></div>
<div id="cache-2"></div>
</div><!-- javascriptSlots -->

</div> <!-- end  div  wrapper -->
<!--[if lte IE 8]>
</div>
<![endif]-->

<div id="be" style="display:none;"><form name="ue_backdetect" action="get"><input name="ue_back" value="4" type="hidden"></form><script type="text/javascript"> /* <![CDATA[ */
if(ue&&ue.t) { uet('be'); }
if (window.onLoadDelegate) {ueh(0, window, "load", window.onLoadDelegate, 1);}
if (ue_wl_on) {
    if (window.addEventListener) {
        window.addEventListener('load',window.onLdEnd,false);
    } else if (window.attachEvent) {
        window.attachEvent('onload',window.onLdEnd);
    }
}
/* ]]> */ </script></div>
<noscript><img height="1" width="1" style='display:none;visibility:hidden;' src='/ap/uedata?noscript&amp;id=0JGWW6RJ0FX22ZYZDAYB' alt=""/></noscript>


<div style="left: 642.767px ! important; top: 183.3px ! important;" class="firebugResetStyles firebugBlockBackgroundColor firebugLayoutBox firebugLayoutBoxOffset"><div style="padding: 0px ! important; background-color: rgb(237, 255, 100) ! important;" class="firebugResetStyles firebugLayoutBox"><div style="padding: 0px ! important; background-color: rgb(68, 68, 68) ! important;" class="firebugResetStyles firebugLayoutBox"><div style="padding: 0px ! important; background-color: SlateBlue ! important;" class="firebugResetStyles firebugLayoutBox"><div style="width: 306.733px ! important; height: 28px ! important; background-color: SkyBlue ! important;" class="firebugResetStyles firebugLayoutBox"></div></div></div></div></div></body></html>