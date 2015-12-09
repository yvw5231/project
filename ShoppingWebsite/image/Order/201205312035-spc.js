var spchtml = $(' \
<div pagecontent="copy" class="pagecontent" pageurl="/gp/buy/pipeline/spc.html" id="spcpagecontent" style="display: none">\
\
\
\
\
\
\
\
\
\
\
\
\
\
\
\
\
\
\
<!--[if IE 6]>\
  <style>\
    #spcpagecontent div.asin {\
      padding-bottom: 15px;\
    }\
    #spcpagecontent .yui-gc div.ship-options {\
      width: 300px;\
    }\
  </style>\
<![endif]--> \
\
\
<div id="custom-doc" class="yui-t4">\
\
<div id="hd">\
  <div class="navigation" style="text-align: center; margin-bottom: 20px;">\
  \
  <a name="top">\
    <img src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/confirm-banner._V140223016_.gif" width="563" alt="提交订单-亚马逊订单确认" height="36" border="0" />\
  </a>\
  </div>\
  <h1>检查订单</h1>\
\
    <div id="csphone-app-order" class="csphone-app-add" style="display:none">\
      <div class="csphone-app-sub" ><table class="csphone-app-table"><tr><td class="left">\
      <strong class="csphone-app-add-text"> </strong> </td></tr></table></div>\
    </div>\
\
  <div id="legalagreement">\
    <span id="legalagreementT1" style="display:none">\
    \
</span>\
    <span id="legalagreementC">当您选择了我们的商品和服务，即表示您已经接受了亚马逊的隐私声明和使用条件。</span>\
  </div>\
</div>\
\
\
\
\
\
<div id="global-error" class="message warning" style="display: none;">\
  <span></span>  \
  <h6 id="global-error-title-singular" style="display: none;">重要消息</h6>\
  <h6 id="global-error-title-plural" style="display: none;">重要讯息</h6>\
  <p message="template" style="display: none;"></p>\
</div>\
\
<div id="message-box" class="message" style="display: none;">\
  <span></span>\
  <div id="save-defaults-box" style="display: none;">\
    <h6>重要消息</h6>\
    <p>\
      <input type="checkbox"  id="defCheckbox" name="setOrderingPrefs" value="1" />&nbsp;<label for="defCheckbox">您在下次订购商品时，将默认使用此订单的送货地址、送货方式及付款方式。</label>\
      <input type="hidden" name="isfirsttimecustomer">\
    </p>\
  </div>\
  <div id="confirm-age-statement" style="display: none;">\
    <h6>请确认您的年龄</h6>\
    <p>\
      <input type="checkbox"  id="confirmAgeCheckbox" name="confirmAge" value="1" />&nbsp;<label for="confirmAgeCheckbox"></label>&nbsp;<a href="/gp/help/customer/display.html/ref=ox_spc_confirm_age_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_confirm_age_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');"></a>\
    </p>\
  </div>\
  <div id="using-points" style="display: none;">\
    <h6>在您下单之前：</h6>\
    <p>\
      您可以通过点击该页面收费信息部分的“更改”，来为此次购买更改“积分”用途设置。\
    </p>\
  </div>\
  <div id="using-amex-points" style="display: none;">\
    <h6>在您下单之前：</h6>\
    <p>\
      您可以通过<a class="changelink" href="#">更改您的付款方式</a>来改变此购买的会员奖励点用法设置。\
    </p>\
  </div>\
            \
  <p nullpromo="page" style="display: none;"></p>\
</div>\
\
<div id="digitaldelivery" style="display: none;">\
  <span datafield="delivery">数位递送：</span><span datafield="downloaditem">要在订单完成之时进行下载</span>\
</div>\
\
<div id="bd" class="bluebox">\
  <div class="bluebox_corner bluebox_TR"></div>\
  <div class="bluebox_corner bluebox_BR"></div>\
  <div class="bluebox_corner bluebox_BL"></div>\
  <div class="bluebox_corner bluebox_TL"></div>\
<div id="yui-main">\
\
<div id="spinner">\
  <img src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/spc/loading-large._V172251822_.gif" alt="Loading" />\
</div>\
  \
<div class="yui-b">\
\
<div id="dashboard" class="yui-g whitebox" style="display: none;">\
  <div class="whitebox_corner whitebox_TR"></div>\
  <div class="whitebox_corner whitebox_BR"></div>\
  <div class="whitebox_corner whitebox_BL"></div>\
  <div class="whitebox_corner whitebox_TL"></div>\
  \
  <div id="purchase-shipping-address" class="dashboard-element">\
    <div id="csphone-app-order-1" class="csphone-app-add" style="display:none">\
      <strong class="csphone-app-add-text"></strong>\
      <div class="csphone-app-sub"><table class="csphone-app-tab"><tr><td class="left">&#8220;</td><td class="middle">  </td><td class="right">&#8221;</td></tr></table>\
      </div>\
    </div>\
\
    <h3>送货地址：</h3>\
    <span class="single-address" style="display: none;">\
      <span datafield="address"></span>\
      <a class="changelink" testid="change-shipping" href="/gp/ordering/checkout/address/select.html/ref=ox_spc_change_ship_addr/833-6451368-0102751" style="display: none;">更改</a>\
    </span>\
    <p id="multiple-addresses" class="caption" style="display: none;">\
      您要将商品送至多个地址,详情如下。\
    </p>\
    <a id="ship-to-multiple-address-link" class="changelink" href="/gp/ordering/checkout/item/select.html/ref=ox_spc_ship_multi_addr/833-6451368-0102751?ie=UTF8&useCase=multiAddress" style="display: none;">发送至多个地址</a>\
    <a id="multiple-address-change-link" class="changelink" href="/gp/ordering/checkout/item/select.html/ref=ox_spc_ship_multi_addr/833-6451368-0102751?ie=UTF8&useCase=multiAddress" style="display: none;">更改</a>\
    <form id="stores-promo-form" action="/gp/buy/storeaddress/handlers/search.html/ref=locker_spc_search/833-6451368-0102751" method="post">\
      <input type="hidden" name="storeIds" id="store-ids" value="" />\
      <input type="hidden" name="storeZip" id="store-zip" value="" />\
      <input type="hidden" name="hasWorkingJavascript" value="1" />\
      <input type="hidden" name="searchCriterion" id="store-search-criterion" value="" />\
      <input type="hidden" name="storeCountry" id="store-country" value="" />\
      <div id="locker-promo-content-t1" style="display: none;" class="stores-promo">\
        <div class="stores-promo-title">\
          \
        </div>\
        \
      </div>\
      <div id="locker-promo-t1" style="display: none;" class="stores-promo stores-promo-large stores-promo-top">\
      <table>\
      <tr>\
        <td class="stores-promo-table">\
          <img src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/transparent-pixel._V192562247_.gif" id="locker-logo" class="stores-promo-img"/>\
        </td>\
        <td class="stores-promo-table">\
          <br/>\
          <a href="#" onclick="spcpage.submitStoresPromoForm();" class="changelink">\
          <span id="store-location-counter-t1"></span> </a>\
          <img src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/assets/carrot._V192194608_.gif" id="locker-promo-carrot-t1"/>\
        </td>\
      </tr>\
      </table>\
      </div>\
      \
      <div id="locker-promo-t2" class="stores-promo stores-promo-top" style="display: none">\
        <span class="stores-promo-title"></span>\
        <br>\
        <b><span id="store-location-counter-t2"></span> </b>\
        \
        <a href="#" onclick="spcpage.submitStoresPromoForm();" class="changelink"></a>\
      </div>\
      \
      <div id="locker-promo-t3" class="stores-promo stores-promo-top" style="display: none">\
        <span class="stores-promo-title"></span>\
        <br>\
        \
        <a href="#" onclick="spcpage.submitStoresPromoForm();" class="changelink"></a>\
      </div>\
      \
    </form>\
  </div>\
\
  <div id="spc-cobrand-ad" style="display: none;">\
    <p class="msg"></p>\
    <div class="change-payment"><a href="#" id="cobrand-change" class="ap_custom_close"></a></div>\
  </div>\
\
  <div id="billing-information" class="dashboard-element">\
    <h3>付款方式：</h3>\
    <div id="payment-method">\
      <p id="rewardsaccount" class="payment-instrument" style="display: none;"></p>\
      <p id="creditcard" class="payment-instrument" style="display: none;"> \
        <!-- These all must be on one line to prevent extraneous space from showing up in IE6  -->\
        <span datafield="cclogo"><img\
          cclogo="amzn" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/amzn._V244838556_.gif" style="display:none;" alt="" /><img\
          cclogo="plcc" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/plcc._V181047830_.gif" style="display:none;" alt="" /><img\
          cclogo="visa" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/visa._V185527282_.gif" style="display:none;" alt="" /><img\
          cclogo="mc" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/mc._V185527245_.gif" style="display:none;" alt="" /><img\
          cclogo="amex" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/amex._V185527059_.gif" style="display:none;" alt="" /><img\
          cclogo="discover" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/discover._V181047830_.gif" style="display:none;" alt="" /><img\
          cclogo="diners" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/diners._V181047831_.gif" style="display:none;" alt="" /><img\
          cclogo="jcb" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/jcb._V197280060_.gif" style="display:none;" alt="" /><img\
          cclogo="carte-bancaire" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/transparent-pixel._V192562247_.gif" style="display:none;" alt="" /><img\
          cclogo="carte-aurore" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/carte-aurore._V181047831_.gif" style="display:none;" alt="" /><img\
          cclogo="cartasi-visa" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/cartasi-visa._V181047830_.gif" style="display:none;" alt="" /><img\
          cclogo="cartasi-mastercard" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/cartasi-mastercard._V181047831_.gif" style="display:none;" alt="" /><img\
          cclogo="postepay-visa" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/postepay-visa._V181047830_.gif" style="display:none;" alt="" /><img\
          cclogo="none" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/card-logos-small/blank._V247344599_.gif" style="display:none;" alt="" /></span>\
        &nbsp;末尾号码<span datafield="tail"></span><span datafield="changelink">&nbsp;<a class="changelink" testid="change-credit-card">更改</a></span>\
      </p>\
      <p id="lineofcredit" class="payment-instrument" style="display: none;"> \
        <span datafield="type"></span>\
        末尾号码<span\
        datafield="tail"></span><span datafield="changelink">&nbsp;<a\
        class="changelink">更改</a></span><span\
        class="ponumber" style="display:none"><br/>核准后订单号码： \
        <span datafield="ponumber"></span></span>\
      </p>\
\
      <p id="giftcertificate" class="payment-instrument" style="display: none;">礼品卡<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="amazonpayments" class="payment-instrument" style="display: none;">亚马逊支付账户<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="bankaccount" class="payment-instrument" style="display: none;">银行账户:&nbsp;<span datafield="backaccounttail"></span><span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="cashondelivery-mpos" class="payment-instrument" style="display: none;">货到付款（POS机刷卡）<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="cashondelivery-cash" class="payment-instrument" style="display: none;">货到付款（现金）<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="cashondelivery" class="payment-instrument" style="display: none;">货到付款<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="conveniencestore" class="payment-instrument" style="display: none;">CVS<span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="invoice2" class="payment-instrument" style="display: none;"><span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="externalpayment" class="payment-instrument" style="display: none;"><span datafield="externalpaymentname"></span><span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="spc_netbanking" class="payment-instrument" style="display: none;"><strong style="font-size:95%;font-weight: bold;"></strong><br><span datafield="netbankingname"></span><span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p id="spc_debitcardbank" class="payment-instrument" style="display: none;"><strong style="font-size:95%;font-weight: bold;"></strong><br><span datafield="debitcardbankname"></span><span datafield="changelink">&nbsp;<a class="changelink">更改</a></span></p>\
      <p class="payment-instrument single-line-changelink" style="display: none;"><a class="changelink" testid="change-payment-method">更改</a></p>\
    </div>\
\
    <span id="pointsreminder" style="display: none;">\
      <div class="message mini">\
        <span class="mini"></span>\
        <p class="points-reminder"> <a class="changelink" ></a></p>\
      </div>    \
    </span>\
\
    <span class="single-address" style="display: none;">\
      <h3>信用卡账单地址：</h3>\
      <span datafield="address"></span>\
      <a id="single-billing-address-change" class="changelink" testid="change-billing-address" href="/gp/ordering/checkout/billing/select.html/ref=ox_spc_change_billing/833-6451368-0102751" style="display: none;">更改</a>\
    </span>\
\
\
    <span class="duplicate-address" style="display: none;">\
      <h3>信用卡账单地址：</h3>\
      <span class="duplicate-address-text">与配送地址相同</span>\
      <a id="duplicate-billing-address-change" class="changelink" testid="change-billing-address" href="/gp/ordering/checkout/billing/select.html/ref=ox_spc_change_billing/833-6451368-0102751" style="display: none;">更改</a>\
    </span>\
\
  </div>\
                        \
  <div id="spc-gc_entry" class="dashboard-element">\
     <div id="csphone-app-order-2" class="csphone-app-add" style="display:none">\
       <strong class="csphone-app-add-text"></strong>\
       <div class="csphone-app-sub"><table class="csphone-app-tab"><tr><td class="left">&#8220;</td><td class="middle">  </td><td class="right">&#8221;</td></tr></table>\
       </div>\
     </div>\
    <h3>礼品卡充值码或促销优惠码：</h3>\
   \
    <div class="errorblock message error mini" style="display:none" id="spc-gcpromoerrorblock">\
      <span class="mini"></span>\
      <h6>对不起，出现错误。</h6>\
      <ul>\
        <li error="addGiftCardOrPromo_Unknown" style="display:none">对不起，我们无法保存您的礼品卡或促销代码信息。请重新输入或尝试使用另一种支付方式。</li>\
        <li error="addGiftCardOrPromo_NoCode" style="display:none">需要提供礼品卡或促销代码。</li>\
        <li error="addPromo_InvalidForPurchase" style="display:none">您输入的促销代码不能用于您的此次采购。</li>\
        <li error="addPromo_BadCode" style="display:none">充值码输入错误， 请重试。请注意大小写及充值码间的连续横线。</li>\
        <li error="addPromo_ExpiredCode" style="display:none">您输入的促销代码已经过期。</li>\
        <li error="addPromo_InvalidForOrgUnit" style="display:none">您输入的促销代码不能用于此次采购。请参阅促销资料获取关于商品或店铺限制的信息。</li>\
        <li error="addPromo_OfferNotYetBegun" style="display:none">您输入的促销代码是针对一项尚未开始的优惠。</li>\
        <li error="addPromo_AlreadyRedeemed" style="display:none">您输入的促销代码已被兑现。</li>\
        <li error="addGiftCard_AlreadyRedeemedByAnotherAccount" style="display:none">您输入的礼品卡代码已被兑现。</li>\
        <li error="addGiftCard_AlreadyRedeemedByThisAccount" style="display:none">您输入的礼品卡代码已被用于您的帐户。</li>\
        <li error="addGiftCard_BadCode" style="display:none">充值码输入错误， 请重试。请注意大小写及充值码间的连续横线。</li>\
        <li error="addGiftCard_ExpiredCode" style="display:none">您的礼品卡暂时不能使用，请注意查看生效日期及有效期。</li>\
        <li error="addGiftCard_Cancelled" style="display:none">您输入的礼品卡代码已被取消。</li>\
      </ul>               \
    </div>  \
    <div class="offer" id="spc-gcpromo">\
      <p>\
        <input type="text" name="giftCertificateID" maxlength="25" id="spc-gcpromoinput"/> \
        <input type="image" class="apply action_link" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/apply._V192562578_.gif" alt="使用礼品卡" ref="ox_pay_page_gc_add" />\
        <img class="loading-small" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/loading/loading-small._V192276520_.gif" alt=""/>\
      </p>\
    </div>\
  </div>\
<!--We dont want to show the warning as it is shown for Kiala as you dont need any identity for ADP-->\
\
  <div class="storeaddress-remind-message" style="display: none;">\
    <div id="storeaddress-reminder" class="message warning" style="display: none;">\
      <span></span>\
      <p>\
        <a class="changelink" href="/gp/buy/storeaddress/static-display/customer-name.html/833-6451368-0102751">更改</a>\
      </p>   \
    </div>\
  </div>\
\
<!-- dashboard -->\
</div>\
\
<div id="purchase-context">\
\
    <div id="csphone-app-order-3" class="csphone-app-add" style="display: none;">\
      <strong class="csphone-app-add-text"> </strong>\
      <div class="csphone-app-sub"><table class="csphone-app-tab"><tr><td class="left">&#8220;</td><td class="middle">  </td><td class="right">&#8221;</td></tr></table>\
      </div>\
      <span class="csphone-app-span">  \
      </span>\
    </div>\
\
  <div id="addon-wrapper" style="display: none;">\
  </div>\
<div id="orders">\
  <span style="display: none;" fasttrack="hour">小时</span>\
  <span style="display: none;" fasttrack="hours">小时</span>\
  <span style="display: none;" fasttrack="and"> </span>\
  <span style="display: none;" fasttrack="minute">分钟</span>\
  <span style="display: none;" fasttrack="minutes">分钟</span>\
  <span style="display: none;" fasttrack="second">秒</span>\
  <span style="display: none;" fasttrack="seconds">秒</span>\
  <span ftguaranteedatelanguage="en_US" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="en_GB" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="de_DE" style="display: none;">\
    <span datafield="fasttrackday"></span>.&nbsp;<span datafield="fasttrackmonth"></span>\
  </span>\
  <span ftguaranteedatelanguage="fr_FR" style="display: none;">\
    <span datafield="fasttrackday"></span>&nbsp;<span datafield="fasttrackmonth"></span>\
  </span>\
  <span ftguaranteedatelanguage="en_CA" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="fr_CA" style="display: none;">\
    <span datafield="fasttrackday"></span>&nbsp;<span datafield="fasttrackmonth"></span>\
  </span>\
  <span ftguaranteedatelanguage="it_IT" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="es_ES" style="display: none;">\
    <span datafield="fasttrackday"></span>&nbsp;<span datafield="fasttrackmonth"></span>\
  </span>\
  <span ftguaranteedatelanguage="zh_CN" style="display: none;">\
    <span datafield="fasttrackmonth"></span><span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="ja_JP" style="display: none;">\
    <span datafield="fasttrackmonth"></span><span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="en_JP" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
  <span ftguaranteedatelanguage="en_IN" style="display: none;">\
    <span datafield="fasttrackmonth"></span>&nbsp;<span datafield="fasttrackday"></span>\
  </span>\
\
\
  <div class="vendor-group" order="template" orderid="" style="display: none;">\
  \
    <img class="order-spinner" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/spc/loading-large._V172251822_.gif" />\
  \
    <div class="yui-gc whitebox" >\
      <div class="whitebox_corner whitebox_TR"></div>\
      <div class="whitebox_corner whitebox_BR"></div>\
      <div class="whitebox_corner whitebox_BL"></div>\
      <div class="whitebox_corner whitebox_TL"></div>  \
    \
      <div wrapper="order">\
        <!-- HAM order template -->\
        <div hamorder="template" style="display: none;">\
          <table class="holiday-message">\
            <tr>\
              <td class="left">\
              </td>\
              <td>\
                <p class="shipheader">\
                  为<span datafield="holidayname"></span>订购吗?\
                </p>\
                <p style="display: none;" class="shipmessage" message="merchant-late">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品将于<span style="color:#990000"></span><span class="date" datafield="date"></span>之后送达。 如果您是为订购，您可以选择一种更快捷的送货方式（如果提供）。。</p>\
                <p style="display: none;" class="shipmessage" message="merchant-maybe">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品可能无法在<span class="date" datafield="date"></span>之前送达。 如果您是为订购，您可以选择一种更快捷的送货方式（如果提供）。。</p>\
                <p style="display: none;" class="shipmessage" message="amazon-ontime">您的商品将不迟于<span class="date" datafield="date"></span>送达。</p>\
                <p style="display: none;" class="shipmessage" message="merchant-ontime">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品将不迟于<span class="date" datafield="date"></span>送达。</p>\
                <p style="display: none;" class="shipmessage" message="amazon-late">部分商品的送达日期将<span>晚于</span> <span class="date" datafield="date"></span>。查看是否有更快捷的配送方式。</p>\
              </td>\
              <td class="right">\
              </td>\
            </tr>\
          </table>\
        </div>\
        <!-- End HAM order template -->\
\
        <span class="primebannerslot">\
        </span>\
        <h2>\
          商品来自 \
          <span datafield="shipsfrom">亚马逊</span>\
        </h2> \
\
        <h4 class="shipping-group-recipient" style="display: none;">\
          <b>送货地址：</b>\
          <span datafield="address"></span>\
          <a class="changelink" href="/gp/ordering/checkout/item/select.html/ref=ox_spc_ship_multi_addr/833-6451368-0102751?ie=UTF8&useCase=multiAddress" style="display: none;">更改</a>\
        </h4>\
\
        <input type="hidden" name="currentshippingspeed" value="" />\
        <input type="hidden" name="currentshipsplitpreference" value="" />\
        <input type="hidden" name="orderlineitemids" value="" />\
\
        <div class="yui-u ship-options" shipoptions="template">\
          <h4 class="shipping-speeds-header" name="nondigital-order" style="display: none;">选择送货方式：</h4>\
          <h4 class="shipping-speeds-header" name="digital-order" style="display: none;"></h4>\
          <table style="border-width: 0px; width: 100%;"> \
            <tbody class="shipping-speeds"></tbody>\
          </table>\
          <div name="ship-split-preferences" style="display: none;">\
            <h4>选择货物拆分：</h4>\
            <table name="shipment-splitting">\
              <tr name="ship-together">\
                <td style="width: 14px; vertical-align: top;">\
                  <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/radio-off._V192562278_.gif" name="shipsplit" value="shipWhenComplete" alt="等待所有商品到货一起发货"/>\
                </td>\
                <td>\
                  等待所有商品到货一起发货\
                </td>             \
              </tr>\
              <tr name="ship-separately">\
                <td style="width: 14px; vertical-align: top;">\
                  <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/radio-off._V192562278_.gif" name="shipsplit" value="shipWhenever" alt="用最快方式拆分订单发货"/>\
                </td>\
                <td>\
                  用最快方式拆分订单发货<span class="helplink">&nbsp;(<a href="/gp/help/customer/display.html/ref=ox_spc_ship_as_avail/833-6451368-0102751?ie=UTF8&nodeId=200347530&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_ship_as_avail/833-6451368-0102751?ie=UTF8&nodeId=200347530&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">将产生额外费用</a>)</span>\
                </td>             \
              </tr>\
            </table>\
          </div>\
          <div class="delivery-instructions" style="display: none;">\
            <div class="delivery-time-preferences" style="display: none;">\
              <h4>请选择希望送货的时间：</h4>\
              <div class="delivery-time-preferences-options"></div>\
            </div>\
            <div class="delivery-instruction-remark" style="display: none;">\
              <h4>配送相关特殊说明（配送公司会尽量协调）：</h4>\
              <input type="text" value="" maxlength="15" size="30">&nbsp;\
              <span class="small">\
                最多15个字 \
              </span>\
            </div>\
            <br />\
          </div>\
          <div heavybulky="template" style="display: none;">\
            <span class="withphone" style="display: none;">承运人将拨打 <span datafield="phonenumber"></span>，与您联络。</span> \
            <span class="withphonelink" style="display: none;"><a class="change-phone" href="/gp/buy/address/static-display/edit-address.html/ref=ox_spc_edit_addr_enternumber/833-6451368-0102751">更改</a></span> \
            <span class="withoutphonelink" style="display: none;"><a class="add-phone" href="/gp/buy/address/static-display/edit-address.html/ref=ox_spc_edit_addr_nonumber/833-6451368-0102751">新增电话号码</a></span> \
          </div>\
\
        </div>\
\
\
\
        <div class="shipping-group">\
\
\
          <div shipment="template" style="display: none;">\
            <div promisedisplay="template" class="shipment-promise" style="display: none;">\
              <div class="shipment-promise-div">\
                <span promisequality="normal" style="display: none;">\
                  <!-- This needs to be on a single line to be IE6 compatible. -->\
                  <span\
                  promisetype="delivery" style="display: none;">预计送达：&nbsp;</span><span\
                  promisetype="ship" style="display: none;">预计发货日期：&nbsp;</span><span\
                  promisetype="scheduled" style="display: none;">计划送达：&nbsp;</span><span\
                  promisetype=\'"release"\' style="display: none;">预计送达：&nbsp;</span><span\
                  promisetype="prime" style="display: none;">预计送达：&nbsp;</span><span\
                  promiselanguage="en_US" style="display: none;"><span\
                      datafield="promisemonth"></span>&nbsp;<span datafield="promiseday"></span>,&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="en_CA" style="display: none;"><span\
                      datafield="promisemonth"></span>&nbsp;<span datafield="promiseday"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="fr_CA" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="en_GB" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="de_DE" style="display: none;"><span\
                      datafield="promiseday"></span>.&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="fr_FR" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="it_IT" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="es_ES" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="en_IN" style="display: none;"><span\
                      datafield="promiseday"></span>&nbsp;<span datafield="promisemonth"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="en_JP" style="display: none;"><span\
                      datafield="promisemonth"></span>&nbsp;<span datafield="promiseday"></span>&nbsp;<span datafield="promiseyear"></span></span><span\
                  promiselanguage="ja_JP" style="display: none;"><span\
                      datafield="promiseyear"></span>年<span datafield="promisemonth"></span><span datafield="promiseday"></span>日</span><span\
                  promiselanguage="zh_CN" style="display: none;"><span\
                      datafield="promiseyear"></span>年<span datafield="promisemonth"></span><span datafield="promiseday"></span>日</span><span\
                  datafield="deliverytime" style="display: none;">&nbsp;<span datafield="starttime"></span>&nbsp;-&nbsp;<span datafield="endtime"></span></span><span\
                  promisetype="release" style="display: none;">（其发行当日）</span>\
                  <span promisetype="scheduleddelivery" style="display: none;"></span>\
                </span>\
                <span promisequality="businessunknown" style="display: none;">以下商品的预计发货日期尚未确定，确定后将通过电子邮件通知您。</span>\
                <span promisequality="systemunknown" style="display: none;">以下商品的预计发货日期尚未确定，确定后将通过电子邮件通知您。</span>\
                <span promisequality="notyetavailable" style="display: none;">预计发货日期：&nbsp;暂不可用</span>\
              </div>\
              <div class="fasttrack-div" style="display: none;">\
                <span class="fasttrackexpired" style="display: none;">\
                  对不起，今天的担保快递已过最后期限。请重新选择配送速度以查看更新后的配送信息。 \
                  <span class="details">（<a href="/gp/help/customer/display.html/ref=ox_fast_track_details/833-6451368-0102751?ie=UTF8&nodeId=200347380&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_fast_track_details/833-6451368-0102751?ie=UTF8&nodeId=200347380&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">详情</a>）</span>\
                </span>\
                <span class="fasttrackavailable" style="display: none;">\
                  <span class="guaranteed-delivery-date">\
                    预计送达日期：<span datafield="deliveryGuaranteeYear"></span> 年 <span datafield="deliveryGuaranteeDate"></span>日 \
                  </span>\
                  <span class="ftcountdown">\
                    <br />\
                    如果您在接下来的 <span datafield="ftcountdown"></span>内订购\
                    <span class="details">（<a href="/gp/help/customer/display.html/ref=ox_fast_track_details/833-6451368-0102751?ie=UTF8&nodeId=200347380&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_fast_track_details/833-6451368-0102751?ie=UTF8&nodeId=200347380&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">详情</a>）</span>\
                  </span>\
                </span>\
              </div>\
              <!-- HAM item template -->\
              <div class="hamitem" hamitem="template" style="display: none;">\
                <table class="holiday-message">\
                  <tr>\
                    <td class="left">\
                    </td>\
                    <td>\
                      <p style="display: none;" class="shipmessage" message="ship-amazon-ontime-plural">这些商品将于 <span class="date" datafield="date"></span> 之前送达。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-amazon-ontime-singular">这件商品将于 <span class="date" datafield="date"></span> 之前送达。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-amazon-late-singular">这件商品的送达日期将<span>晚于</span> <span class="date" datafield="date"></span>。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-amazon-late-plural">这些商品的送达日期将<span>晚于</span> <span class="date" datafield="date"></span>。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-merchant-ontime">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品将不迟于<span class="date" datafield="date"></span>送达。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-merchant-maybe">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品可能无法在<span class="date" datafield="date"></span>之前送达。 如果您是为订购，您可以选择一种更快捷的送货方式（如果提供）。。</p>\
                      <p style="display: none;" class="shipmessage" message="ship-merchant-late">根据<span class="merchantname" datafield="merchantname"></span>的送货安排，您的商品将于<span style="color:#990000"></span><span class="date" datafield="date"></span>之后送达。 如果您是为订购，您可以选择一种更快捷的送货方式（如果提供）。。</p>\
                    </td>\
                  </tr>\
                </table>\
              </div>\
              <!-- End HAM item template -->              \
            </div>\
\
            <div class="yui-u first asins">\
              <div itemdisplay="template" class="asin" style="display: none;">\
                <img src="https://images-na.ssl-images-amazon.com/images/G/28/x-site/icons/no-img-sm._V192562229_.gif" class="asin" alt="" />\
                <h4 datafield="title"></h4>\
                <p class="creator" datafield="creator" style="display: none;"><span style="display: none;"></span></p>\
                <p><span class="price" datafield="price"></span></p>\
                <p class="primeitemupsell" primeitemupsell="" style="display:none;">具备 Amazon Prime 资格&nbsp;<a class="primeAdLauncher primeEvent" href="javascript:;" name="evtst|he|primeAdContent" rel="lm3" style="font-weight: normal;"></a></p>\
                <p class="prime" style="display: none;">\
                   <span prime="eligible" style="display: none;">\
                     <img src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/prime-check._V149675220_.gif" />\
                   </span>\
                   <span prime="ineligible" style="display: none;">不具备参与 Amazon Prime 的资格&nbsp;<span class="helplink">(<a href="/gp/help/customer/display.html/ref=ox_spc_item_prime-elg/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#eligibility" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_item_prime-elg/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#eligibility\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">为什么？</a>)</span></span>\
                </p>\
                <ul datafield="refdata" class="refdata" style="display: none;">\
                  <li refdata="template" style="display: none;"><span class="refkey"></span>:&nbsp;<span class="refvalue"></span></li>\
                </ul>\
                <p class="quantity">\
                  <b>数量：</b>&nbsp;<span datafield="quantity"></span> \
                  <a href="/gp/ordering/checkout/item/select.html/ref=ox_spc_change_quantity/833-6451368-0102751" class="changelink">更改</a>\
                </p>\
\
                <p>\
                  <span class="availability" datafield="availability" style="display: none;"></span>\
                </p>\
                <p class="sold-by" style="display: none;">\
                    <span>卖家：&nbsp;\
                      <span datafield="sellerwithlink" style="display: none;">\
                        <a id="sellerlink" href="" target="AmazonHelp"><b datafield="seller"></b></a>\
                      </span>\
                      <span datafield="sellerwithoutlink" style="display: none;">\
                        <b datafield="seller"></b>\
                      </span>\
                    </span>\
                </p>\
                <p class="promo" nullpromo="item" promo="template" style="display: none;"></p>\
                <!-- IE requires that the HTML be laid out on the same line to display properly (without an extra space for each element) -->\
                <p class="condition" datafield="condition" style="display: none;">商品状况： &nbsp;<span\
                  condition="used" style="display: none;">二手商品</span><span\
                  condition="collectible" style="display: none;">收藏品</span><span\
                  condition="refurbished" style="display: none;">翻新商品</span><span\
                  datafield="subcondition" style="display: none;">&nbsp;-&nbsp;<span\
                    subcondition="new" style="display: none;">    </span><span\
                    subcondition="mint" style="display: none;">像新品一样</span><span\
                    subcondition="verygood" style="display: none;">非常好</span><span\
                    subcondition="good" style="display: none;">好</span><span\
                    subcondition="acceptable" style="display: none;">可接受的</span><span\
                    subcondition="refurbished" style="display: none;">翻新商品</span>\
                  </span>\
                </p>\
                <p class="gift" datafield="gift-wrap" style="display: none;"><b>礼品包装:</b>&nbsp;</p>\
                <p class="gift-message" datafield="gift-message" style="display: none;"><b>:</b>&nbsp;</p>\
                <p class="gift" id="gift-link">\
                  <a id="change-gift" href="/gp/buy/gift/handlers/display.html/ref=ox_spc_change_giftoption/833-6451368-0102751" class="changelink" style="display: none;">更改礼品选项</a>\
                  <a id="add-gift" href="/gp/buy/gift/handlers/display.html/ref=ox_spc_change_giftoption/833-6451368-0102751" class="changelink">添加礼品选项</a>\
                </p>\
                <p id="not-giftable" style="display: none;"></p>\
              </div>\
            <!-- first asins -->\
            </div>\
\
          <!-- shipment="template" -->\
          </div>\
\
        <!-- shipping-group -->\
        </div>\
      \
      <!-- order -->\
      </div>\
\
    <!-- whitebox -->\
    </div>\
    \
  <!-- vendor-group -->\
  </div>\
  \
<!-- orders -->\
</div>\
\
<!-- purchase-context -->\
</div>\
\
\
\
\
<!-- yui-b -->\
</div>\
<!-- yui-main -->\
</div>\
\
\
\
\
\
<div class="yui-b" id="sidebar">\
  <div id="spc-order-summary">\
\
    <div id="csphone-app-order-4" class="csphone-app-add" style="display: none;">\
      <strong class="csphone-app-add-text"> </strong>\
      <div class="csphone-app-sub"><table class="csphone-app-tab"><tr><td class="left">&#8220;</td><td class="middle">  </td><td class="right">&#8221;</td></tr></table>\
      </div>\
      <span class="csphone-app-span">  </span>\
    </div>\
\
    <div class="os-head">\
      <div class="os-head-right">\
        <div id="buybutton">\
          <!-- Start buy button -->\
          <div buybuttondiv="spinner" class="place-order-button" style="display: none;">\
            <img src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/assets/loading-boxed-small._V193849142_.gif" alt=""/>\
          </div>\
\
          <div buybuttondiv="notfx" style="display: none;">\
            <p name="placeYourOrder" class="place-order-button">\
              <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" id="placeOrderPrimaryButton" value="Place Your Order" alt=""/>\
              <input type="hidden" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/transparent-pixel._V192562247_.gif" id="placeOrderPrimaryDE" style="display: none;" />\
            </p>\
            <p name="placeYourOrderAndPay" class="place-order-button" style="display: none;">\
              <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-pay._V140236901_.gif" name="placeYourOrder" value="Place Your Order and Pay" alt="" />\
            </p>\
            <input type="hidden" id="needsThirdPartyRedirect" name="needsThirdPartyRedirect" value="0"/>\
            <input type="hidden" id="paymentDisplayName" name="paymentDisplayName" value=""/>\
          </div>\
          <div id="redirectMessage" class="redirect-message" style="display:none;">\
            <table><tr><td>\
              \
            </td></tr></table>\
          </div>\
\
          <div buybuttondiv="fx" style="display: none;">\
            <p class="place-order-button" buybutton="transactional" style="display: none;">\
              <input type="image" imgname="buybutton-transactional" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" value="Place Your Order" alt="" />\
            </p>\
            <p class="place-order-button" buybutton="marketplace" style="display: none;">\
              <input type="image" imgname="buybutton-marketplace" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" value="Place Your Order" alt="" />\
            </p>\
          </div>\
        </div>\
      </div>\
    </div>\
\
    <!-- Start subtotals -->\
    <div class="os-content">  \
    <div id="os-content-wrapper">\
      <h3 class="ordersummaryheader" style="display: none;">\
        订单价格\
      </h3>\
      <!-- Start FX "TFX Enabled/Disabled" messaging -->\
\
      <div id="fxGoodNews-marketplace" style="display: none;" class="tfx-message">\
        <h5>\
        亚马逊货币换算器<b>禁止</b>。 <p class="summary-helplink">(<a href="/gp/buy/tfx/handlers/learn-more.html/ref=ox_spc_tfx_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/buy/tfx/handlers/learn-more.html/ref=ox_spc_tfx_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">查看原因</a>)</p>\
        </h5>\
      </div>\
      <div id="fxGoodNews-transactional" style="display: none;" class="tfx-message">\
        <h5>\
        亚马逊货币换算工具已启用。 <p class="summary-helplink">(<a href="/gp/buy/tfx/handlers/learn-more.html/ref=ox_spc_tfx_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/buy/tfx/handlers/learn-more.html/ref=ox_spc_tfx_learn_more/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">查看原因</a>)</p>\
        </h5>\
      </div>\
\
      <!-- End FX "TFX Enabled/Disabled" messaging -->\
\
      <div id="spc-subtotals">\
        <table class="subtotals" id="SPCSubtotals-marketplace-table" style="display: none;">\
          <tbody id="SPCSubtotals-marketplace">\
            <tr subtotalsline="template" style="display:none;">\
              <td datafield="label" class="label"></td>  \
              <td datafield="price" class="price"></td>\
            </tr>\
            <tr subtotalstotal="template" style="display:none;">\
              <td colspan="2" ><hr /></td>\
            </tr>            \
            <tr subtotalstotal="template" style="display:none;">\
              <td datafield="label" colspan="2" class="total">\
                <em datafield="price" class="price"></em>\
              </td>\
            </tr>\
            <tr subtotalsseparator="template" style="display:none;">\
              <td colspan="2"><hr /></td>\
            </tr>\
          </tbody>\
        </table>\
        <table class="subtotals" id="SPCSubtotals-transactional-table" style="display: none;">\
          <tbody id="SPCSubtotals-transactional">\
          </tbody>\
        </table>\
      </div>\
\
      <div id="vatBreakdown" style="display: none;">\
        <div id="vatTitle" style="display: none;"></div>\
        <table class="subtotals" id="SPCRetailSubtotals-marketplace-table">\
          <thead>\
            <tr>\
              <td colspan="2"><b>亚马逊订单概要</b></td>\
            </tr>\
          </thead>\
          <tbody id="SPCRetailSubtotals-marketplace">\
          </tbody>\
        </table>\
        <table class="subtotals" id="SPCMerchantSubtotals-marketplace-table">\
          <thead>\
            <tr>\
              <td colspan="2"><b>网站订单总结</b></td>\
            </tr>\
          </thead>\
          <tbody id="SPCMerchantSubtotals-marketplace">\
          </tbody>\
        </table>\
        <table class="subtotals" id="SPCRetailSubtotals-transactional-table">\
          <thead>\
            <tr>\
              <td colspan="2"><b>亚马逊订单概要</b></td>\
            </tr>\
          </thead>\
          <tbody id="SPCRetailSubtotals-transactional">\
          </tbody>\
        </table>\
        <table class="subtotals" id="SPCMerchantSubtotals-transactional-table">\
          <thead>\
            <tr>\
              <td colspan="2"><b>网站订单总结</b></td>\
            </tr>\
          </thead>\
          <tbody id="SPCMerchantSubtotals-transactional">\
          </tbody>\
        </table>\
      </div>\
      \
      <br />\
      \
      <div id="vatBreakdownNote" class="tiny" style="display: none;">\
        Vat breakdown\
        <br />\
        <span id="vatBreakdownLink"><a class="changelink"></a>\
          <img class="carat" src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/assets/carrot._V192194608_.gif" />\
        </span>\
        <br />\
      </div>\
\
      <!-- Start FX section  -->\
      <div class="tfx-message" style="display: none;" id="tfxSection">        \
\
        <p>\
          <img src="https://images-na.ssl-images-amazon.com/images/G/28/foreign_exchange/buttons/2010/switch_currency._V169847026_.png" alt="更改货币种类" id="switch-currency-button" onClick="return spcpage.showChangeCurrency();" />\
        </p>\
\
        <!-- Start FX radio button subsection -->\
        <div id="tfx-currency-switcher" style="display: none;">          \
          <p>\
            <b>更改货币种类:</b>\
          </p>\
          <input type="hidden" name="currencyChanged" id="currencyChanged" value="">\
          <ul>\
            <li>\
              <input type="radio" name="checkoutCurrencySelection" \
                                  id="checkoutCurrencyTransactional" \
                                  value="transactional" \
                                  onclick="spcpage.submitChangeCurrency(\'transactional\',\'checkoutCurrencyTransactional\');">\
              <label for="checkoutCurrencyTransactional"><span currency="transactional"></span></label>\
            </li>\
            <li>\
              <input type="radio" name="checkoutCurrencySelection" \
                                  id="checkoutCurrencyMarketplace" \
                                  value="marketplace" \
                                  onclick="spcpage.submitChangeCurrency(\'marketplace\',\'checkoutCurrencyMarketplace\');">\
              <label for="checkoutCurrencyMarketplace"><span currency="marketplace"></span></label>\
            </li>\
          </ul>\
        </div>\
        <!-- End FX radio button subsection -->\
\
        <!-- Start exchange rate FX -->\
        <p class="caption">\
          <a href="#" class="helplink" id="tfx-conversion-rate-trigger">汇率</a>\
        </p>\
\
        <div style="display: none;" id="tfx-conversion" class="tfx-info">\
          <p><b>的汇率:</b></p>\
          <p message="fxexchangerate">1&nbsp;美元&nbsp;=&nbsp;<span datafield="exchange-rate"></span>&nbsp;<span datafield="foreign-currency"></span></p>\
          <p class="caption">(包括所有费用)</p>\
        </div>\
        <!-- End exchange rate FX -->\
\
      <!-- End FX section -->\
      </div>\
\
      <!-- Start null promo section -->\
      <div id="null-promo-order-summary" style="display: none;">\
        <b>促销优惠明细：</b>\
        <ul id="null-promo-order-summary-list">\
          <li nullpromo="order-summary" style="display: none;"></li>        \
        </ul>\
      </div>\
     \
      <!-- Start China invoice -->\
      <div id="china-invoice" style="display: none;">\
        <div class="check-line">\
          <input type="checkbox" name="needChinaInvoice" id="china-invoice-required" value="1">\
          <label for="china-invoice-required"><b>发票开具</b></label>\
          (<a href="/gp/help/customer/display.html/833-6451368-0102751?ie=UTF8&nodeId=200386980&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/833-6451368-0102751?ie=UTF8&nodeId=200386980&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">了解更多</a>)\
        </div>\
        <div class="checked-content" style="display: none;">\
          <div class="notes">\
            <span class="note-for-amazon">\
              数码、手机、小家电类商品系统将默认打印出商品全称，若您订单中包含其它类商品，请在下列发票内容中选择。\
              <p class="note-for-merchants" style="display: none;">\
                (如商品卖家非亚马逊，发票内容由其卖家决定，发票由卖家开具并寄出，不在配送包裹内。)\
              </p>\
            </span>\
          </div>\
          <div class="field">\
            发票抬头：\
            <input type="text" name="chinaInvoiceTitle" id="china-invoice-title" size="14" maxLength="28">\
          </div>\
          <div class="field">\
            发票内容：\
            <select name="chinaInvoiceCategoryID" id="china-invoice-category">\
              <option value=\'\'>请选择</option>\
            </select>\
          </div>\
          <div class="save-as-default" style="display: none;">\
            <input type="checkbox" name="saveAsDefaultChinaInvoice" id="china-invoice-as-default" value="1">\
            <label for="china-invoice-as-default">设置为默认发票</label>\
          </div>\
        </div>\
      </div>\
      <!-- End China invoice -->\
\
    <!-- end os-content-->\
    </div>\
    </div>\
\
  <!-- order-summary -->\
  </div>    \
\
  <!-- Important OS message box -->\
  <div class="info-callout calloutbox" id="important-message-callout" style="display:none;">\
    <div class="calloutbox_corner calloutbox_TR"></div>\
    <div class="calloutbox_corner calloutbox_BR"></div>\
    <div class="calloutbox_corner calloutbox_BL"></div>\
    <div class="calloutbox_corner calloutbox_TL"></div>\
  \
    <ul id="info-callout-list">\
      <li id="callout-no-sss" style="display: none;"></li>\
      <li callout="template" style="display: none;"></li>\
    </ul>\
  </div>\
\
<!-- yui-b -->\
</div>\
\
<!-- second buy-button (only shown if >1 order) -->\
<div id="bottom-place-order" style="display: none;">\
  <div buybuttondiv="spinner" class="bottom-place-order-spinner" style="display: none;">\
    <img src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/common/loading/loading-small._V192276520_.gif" alt=""/>\
  </div>\
  <div buybuttondiv="notfx" style="display: none;">\
    <p name="placeYourOrder" class="bottom-place-order">\
      <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" value="Place Your Order" alt="" />\
    </p>\
    <p name="placeYourOrderAndPay" class="bottom-place-order" style="display: none;">\
      <input type="image" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-pay._V140236901_.gif" name="placeYourOrder" value="Place Your Order and Pay" alt="" />\
    </p>\
  </div>\
  <div buybuttondiv="fx" style="display: none;">\
    <p class="bottom-place-order" buybutton="transactional" style="display: none;">\
      <input type="image" imgname="buybutton-transactional" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" value="Place Your Order" alt="" />\
    </p>\
    <p class="bottom-place-order" buybutton="marketplace" style="display: none;">\
      <input type="image" imgname="buybutton-marketplace" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/place-order-primary._V196018616_.png" name="placeYourOrder" value="Place Your Order" alt="" />\
    </p>\
  </div>\
</div>\
\
<!-- end second buy-button -->\
\
\
\
<!-- bd -->\
</div>\
\
\
<div id="ft">\
  <p class="gateway-link">\
     &nbsp;\
  </p>\
  <p id="sellerofrecord" style="display: none;">\
    *为何征收销售税？ <a href="/gp/checkout/confirm/seller-of-record.html/ref=ox_spc_footer_help_tax/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/checkout/confirm/seller-of-record.html/ref=ox_spc_footer_help_tax/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=640,height=480,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">见税收及卖家信息。</a>\
  </p>\
  <p>\
    需要帮助？请访问 <a href="/gp/help/customer/display.html/ref=ox_spc_help/833-6451368-0102751?ie=UTF8&nodeId=200343690&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_help/833-6451368-0102751?ie=UTF8&nodeId=200343690&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">帮助中心</a> 或 <a href="/gp/help/contact-us/general-questions.html/ref=ox_spc_contact_us/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/contact-us/general-questions.html/ref=ox_spc_contact_us/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=640,height=480,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">联系我们</a>\
  </p>\
  <p>\
    对于亚马逊售出的商品：您点击“订单确认”按钮之后，我们将向您发送一封电子邮件，以确认收到了您的订单。我们向您发送电子邮件，通知您商品已发货之后，我们和您之间的订购合同才成立。\
  </p>\
  <p id="export-charges" style="display: none;">\
    除另有说明外，此订单中的所有商品均由亚马逊出口销售公司(AES)销售。您所下订单即表明您已授权AES指定一个承运人，代表您(或收件人)办理清关手续，并交纳进口费用。报关手续将由指定承运人以您(或收件人)的名义代为办理。要查阅您订单的全部条款，请点击&nbsp;<a href="/gp/help/customer/display.html/ref=ox_spc_timex_tandc/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_timex_tandc/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');"></a>.\
  </p>\
  <p id="state-sales-tax-info" style="display: none;">\
    \
  </p>\
  <p id="tfx-terms-of-use-footnote" style="display: none;">\
    **亚马逊货币转换器由亚马逊欧洲服务公司SARL提供. 点击 <a href="/gp/tfx/t-and-c-popup.html/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/tfx/t-and-c-popup.html/833-6451368-0102751?ie=UTF8&nodeId=&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">这里</a> 查看使用条件.\
  </p>\
   <p id="jersey-footnote" style="display: none;">\
    \
  </p>\
  <p>\
    亚马逊承诺自商品预计送达时间起30日内，如商品及包装保持亚马逊出售时原状且配件齐全，我们将提供全款退货的服务。例外情况和限制条件适用。了解更多信息，请访问亚马逊的 <a href="/gp/help/customer/display.html/ref=ox_spc_footer_return_policy/833-6451368-0102751?ie=UTF8&nodeId=200683840&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_footer_return_policy/833-6451368-0102751?ie=UTF8&nodeId=200683840&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">退货政策</a>。 <br><br><a href=http://www.amazon.cn/ref=ox_spc_footer_homepage>返回亚马逊主页</a> 并放弃提交该订单.\
  </p>\
  <p class="copyright">\
    <a href="/gp/help/customer/display.html/ref=ox_spc_condition_of_use/833-6451368-0102751?ie=UTF8&nodeId=200347160&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_condition_of_use/833-6451368-0102751?ie=UTF8&nodeId=200347160&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">使用条件</a> | <a href="/gp/help/customer/display.html/ref=ox_spc_privacy/833-6451368-0102751?ie=UTF8&nodeId=200347130&pop-up=1#" target="AmazonHelp" onclick="return amz_js_PopWin(\'/gp/help/customer/display.html/ref=ox_spc_privacy/833-6451368-0102751?ie=UTF8&nodeId=200347130&pop-up=1#\',\'AmazonHelp\',\'width=340,height=340,resizable=1,scrollbars=1,toolbar=1,status=1,protocol=current\');">隐私声明</a> © 1999 - 2012 Amazon.com, Inc. or its affiliates\
  </p>\
</div>\
\
<!-- custom-doc -->\
</div>\
\
<input type="image" id="radio-on" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/radio-on._V192562279_.gif" style="display: none;" width="14" height="14" border="0">\
<input type="image" id="radio-off" src="https://images-na.ssl-images-amazon.com/images/G/28/x-locale/checkout/radio-off._V192562278_.gif" style="display: none;" width="14" height="14" border="0">\
\
<div id="address-book" style="display: none;">\
</div>\
\
<div id="stuff">\
</div>\
\
<div id="primepagecontent" style="display: none;">\
</div>\
\
<div class="htmlresponsesuccess" style="display:none;"></div>\
\
<!-- popover will get positioned near place-order button -->\
<div id="place-order-blocker-box" style="display:none">\
  <p error="confirmYourAge" on="no" style="display:none;"></p>\
  <p error="missingRequiredFieldForChinaInvoice" on="no" style="display:none;">您需要填写发票抬头和选择发票内容。</p>\
  <img src="https://images-na.ssl-images-amazon.com/images/G/28/checkout/payselect/assets/blocker-arrow._V247344931_.gif"/>\
\
</div>\
\
\
\
');
