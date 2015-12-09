<?php
session_start();
$conn= mysql_connect("localhost", "root", "") or die("数据库连接错误");
mysql_select_db("league") or die("数据库名称错误");
?>


<html><head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">



        <style type="text/css">
            body,table,td,th,.small {font-family:verdana,arial,helvetica,sans-serif;font-size:small}
            body {background-color:#fff}
            .h1,.h3color,.headline {color:#e47911}
            .h1 {font-size:13px}
            h2.h2 {margin-bottom:0}
            .tiny {font-size:x-small}
            a:link {color: #004b91}
            a:active {color: #f93}
            a:visited {color: #963}
            .headline {font-weight:bold;display:block}
            .listprice {text-decoration:line-through}
            .unified_widget h2 {color:#e47911;padding:0}
            .unified_widget {clear:both;margin-bottom:2em}
            .unified_widget .carat { font-weight:bold; font-size:120%; font-family: verdana,arial,helvetica,sans-serif; color:#E47911; margin-right:0.20em; }
            .h_rule {clear:both}
        </style><style type="text/css">



            #leftNavContainer {
                border: 1px solid #D0EAF8;
            }

            #leftNav ul {
                border-bottom: 1px solid #D0EAF8;
            }

            #leftNav li a:visited {
                color: #039;
            }

            #leftNav li .refinementNotAvailable {
                font-size: 11px;
            }

            #leftNav li a .narrowValue {
                font-size: 80%;
            }

            #leftNav .shippingWhatsThis a {
                color: #039;
            }

            div.resultCount,
            div.pagn,
            div.pagnBtm,
            div.noResults,
            div.sortBy,
            div.header {
                font-size: 93%;
            }

            .sortByDropdown {
                font-size: 100%;
            }

            #topRefinementsContainer {
                border: 1px solid #D0EAF8;
            }

            #topRefinementsHeader {
                border-bottom: 1px solid #D0EAF8;
            }

            #topRefinementsHeader a {
                color: #039;
            }

            #bottomCategoryHelper a .categoryCount {
                font-size: 0.8em;
            }

            #kindOfSortHotspot_tab a,
            #bestRefinementsMoreHotspot_tab a {
                color: #039;
            }

            .searchTemplate .price {
                font-family: verdana,arial,helvetica,sans-serif;
            }

            .searchTemplate a {
                color: #039;
            }

            #searchTemplate .mvOneCol .priceListSet {
                font-size: 85% !important;
                margin-top: 1px;
            }

            .defaultView div.result div.fastTrack,
            .defaultView div.result div.recAge,
            .defaultView div.result div.sss,
            .defaultView div.result div.sssUnrated,
            .defaultView div.result div.lowStock {
                font-size: 90%;
            }

            div.results div.result div.data div.newPrice strike {
                font-size: 110%;
            }

            .priceListLabel {
                font-size: 85%;
            }

            .priceListFirstRow .priceListLabel,
            .priceListFirstRow .priceListPrice {
                font-size: 95%;
            }

            .priceListPrice {
                font-size: 85%;
            }

            div.grid div.data div.title {
                font-size: 90%;
            }

            .howsMySearchText {
                font-size: 11px;
            }

            .howsMySearchThanks {
                font-size: 11px;
            }

            .howsMySearchTitle {
                font-size: 12px;
            }

            .howsMySearchDivFeedback {
                font-size: 11px;
            }

            .searchOtherStores a,
            .searchOtherStores a:visited {
                color: #039;
            }

            .structuredResultList th {
                font-size: .85em;
            }

            div.grid div.data div.ageRange,
            div.grid div.data div.audienceRating,
            div.grid div.data div.authorEntity,
            div.grid div.data div.brand,
            div.grid div.data div.excerpt,
            div.grid div.data div.sitbExcerpt,
            div.grid div.data div.fastTrack,
            div.grid div.data div.lowStock,
            div.grid div.data div.loyalty,
            div.grid div.data div.newerVersion,
            div.grid div.data div.tradeInLink,
            div.grid div.data div.prodAds,
            div.grid div.data div.promotions,
            div.grid div.data div.sss {
                font-size: 80%;
            }

            div.largeGridResult div.data div.sss,
            div.largeGridResult div.data div.promotions {
                font-size: 75%;
            }

            #searchTemplate .twister div.title {
                font-size: 1.1em;
            }

            div.list .ageRange,
            div.list .audienceRating,
            div.list .authorEntity,
            div.list .excerpt,
            div.list .sitbExcerpt,
            div.list .fastTrack,
            div.list .lowStock,
            div.list .loyalty,
            div.list .newerVersion,
            div.list .tradeInLink,
            div.list .otherEditions,
            div.list .prodAds,
            div.list .promotions,
            div.list .rebate,
            div.list .sitb,
            div.list .sss,
            div.list .store,
            div.list .usedNewPrice {
                font-size: 85%;
            }

            div.list div.data div.newPrice,
            div.list div.data div.snsPrice,
            div.list div.data div.digitalPrice,
            div.list div.data div.rentMsg {
                font-size: 95%;
            }

            div.list div.data div.starsAndPrime {
                font-size: 75%;
            }

            div.list ul.tcBrowseNodes li {
                font-size: 85%;
            }


            #center #refinementsOnTopWrapper{
                display: none;
            }


            .srSprite {
                background: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif);
            }


            .searchTemplate {

                font-size: 117.6%;

            }


            .searchTemplate h1#breadCrumb{
                font-size: 14px;
            }

            .list .data .title a.title{
                font-weight: normal;
                font-size: 14px;
            }

            .grid .data .title a.title{
                font-weight: normal;
                font-size: 12px;
            }

            .results .data .title,
            .results .data .newPrice,
            .results .data .fastTrack{
                font-size: 12px;
            }

            .loadingSpinner {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/loading-large._V186630982_.gif);
                background-repeat: no-repeat;
                top: 50px;
                position: relative;
                overflow: hidden;
            }

            #kindOfSortHotspot_tab .kindOfSortBtn {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/kindOfSortBtn._V192235029_.gif);
            }

            .kindOfSortOpen#kindOfSortHotspot_tab .kindOfSortBtn {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopArrowButtonOpen._V192239610_.gif);
            }

            .kindOfSortOpen#kindOfSortHotspot_tab .kindOfSortTabLeft {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopLeftEndCapOpenX._V192239576_.gif);
            }

            .kindOfSortOpen#kindOfSortHotspot_tab .kindOfSortTabRight {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopRightEndCapOpenNoArrow._V192239531_.gif);
            }

            .kindOfSortOpen#kindOfSortHotspot_tab .kindOfSortTabMid {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopTopOpen._V192239534_.gif);
            }

            .changeCategoryOpen#changeCategoryHotspot_tab .kSprite {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif);
            }

            #changeCategoryHotspot_tab .changeCategoryBtn {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/kindOfSortBtn._V192235029_.gif);
            }

            .changeCategoryOpen#changeCategoryHotspot_tab .changeCategoryBtn {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopArrowButtonOpen._V192239610_.gif);
            }

            .changeCategoryOpen#changeCategoryHotspot_tab .changeCategoryTabLeft {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopLeftEndCapOpenX._V192239576_.gif);
            }

            .changeCategoryOpen#changeCategoryHotspot_tab .changeCategoryTabRight {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopRightEndCapOpenNoArrow._V192239531_.gif);
            }

            .changeCategoryOpen#changeCategoryHotspot_tab .changeCategoryTabMid {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopTopOpen._V192239534_.gif);
            }

            #bestRefinementsMoreHotspot_tab .bestRefinementsMoreBtn {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/kindOfSortBtn._V192235029_.gif);
            }

            .bestRefinementsMoreOpen#bestRefinementsMoreHotspot_tab .bestRefinementsMoreBtn {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopArrowButtonOpen._V192239610_.gif);
            }

            .bestRefinementsMoreOpen#bestRefinementsMoreHotspot_tab .bestRefinementsMoreTabLeft {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopLeftEndCapOpenX._V192239576_.gif);
            }

            .bestRefinementsMoreOpen#bestRefinementsMoreHotspot_tab .bestRefinementsMoreTabRight {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopRightEndCapOpenNoArrow._V192239531_.gif);
            }

            .bestRefinementsMoreOpen#bestRefinementsMoreHotspot_tab .bestRefinementsMoreTabMid {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopTopOpen._V192239534_.gif);
            }

            .brscSeeAllOpen#brscSeeAllHotspot_tab .kSprite{
                background-image: url();
            }

            #brscSeeAllHotspot_tab .brscSeeAllBtn {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/kindOfSortBtn._V192235029_.gif);
            }

            .brscSeeAllOpen#kindOfSortHotspot_tab .brscSeeAllBtn {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopArrowButtonOpen._V192239610_.gif);
            }

            .brscSeeAllOpen#brscSeeAllHotspot_tab .brscSeeAllTabLeft {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopLeftEndCapOpenX._V192239576_.gif);
            }

            .brscSeeAllOpen#brscSeeAllHotspot_tab .brscSeeAllTabRight {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopRightEndCapOpenNoArrow._V192239531_.gif);
            }

            .brscSeeAllOpen#brscSeeAllHotspot_tab .brscSeeAllTabMid {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navCrossshopTopOpen._V192239534_.gif);
            }

            #style-shop-error-box #warning-icon {
                background: url(http://g-ec4.images-amazon.com/images/G/28/x-locale/common/errors-alerts/error-sprite-mini._V192274952_.gif) 0 -51px no-repeat;
            }

            .toe .expand ,
            .tp .expand {
                background: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif) no-repeat scroll -145px -200px transparent;
            }

            .toe .collapse ,
            .tp .collapse {
                background: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif) no-repeat scroll -145px -212px transparent;
            }



            .toe .primeBadgeSprite ,
            .tp .primeBadgeSprite {
                background: transparent url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif) no-repeat scroll 0 0;
                background-position: -100px -270px;
                height: 11px;
                width: 40px;
                display: inline-block;
            }



            .platformLogoSprite {
                background: transparent url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif) no-repeat scroll;
                height: 20px;
                width: 20px;
                display: inline-block;
            }

            #backoutMsgBox span.icon, #sbcBackoutMsgBox span.icon {
                left: 10px;
                top: 10px;
                width: 25px;
                height: 25px;
                display: block;
                position: absolute;
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/x-locale/common/errors-alerts/error-sprite._V192274952_.gif);
                background-repeat: no-repeat;
            }

            #ssBArrow, #ssLNArrow {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/kindOfSortBtn._V192235029_.gif);
            }

            .ssOpened #ssBArrow, .ssOpened #ssLNArrow {
                background-image: url();
            }

            .ssOpened #ssBTabLeft, .ssOpened #ssBTabMid, .ssOpened #ssBTabRight, .ssOpened #ssLNTabLeft, .ssOpened #ssLNTabMid, .ssOpened #ssLNTabRight {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/searchSprite._V144714748_.gif);
            }

            #ssInputSaveButton {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/btn-save-sm-active._V153703960_.gif);
            }

            #ssInputSaveButton.ssInputSaveButtonDisabled {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/btn-save-sm-inactive._V153703962_.gif);
            }

            .ssDeleteButton {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/delete._V153703957_.gif);
            }

            #ssBConnectorLeft, #ssLNConnectorLeft {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover-border-l._V192239212_.gif);
            }

            #ssBConnectorRight, #ssLNConnectorRight {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover-border-r._V192239511_.gif);
            }

            .howsMySearchTable td.topLeft {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-tl2._V192234941_.gif);
            }

            .howsMySearchTable td.topRight {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-tr2._V192234902_.gif);
            }

            .howsMySearchTable td.bottomLeft {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-bl._V192562678_.gif);
            }

            .howsMySearchTable td.bottomRight {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-br._V192234912_.gif);
            }

            .tigerTL {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-tl._V192562629_.gif);
            }

            .tigerTC {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-tm._V192235085_.gif);
            }

            .tigerTR {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-tr._V192235120_.gif);
            }

            .tigerBL {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-bl._V192235411_.gif);
            }

            .tigerBC {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-bm._V192235122_.gif);
            }

            .tigerBR {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-gray-br._V192235122_.gif);
            }

            .tigerBlueTL {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-tl._V139359476_.gif);
            }

            .tigerBlueTC {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-blue-tm._V192235480_.gif);
            }

            .tigerBlueTR {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-tr._V192234898_.gif);
            }

            .tigerBlueBL {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-bl._V192562678_.gif);
            }

            .tigerBlueBC {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/images/gui/box-blue-bm._V192562632_.gif);
            }

            .tigerBlueBR {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/nav2/dp/box-line-br._V192234912_.gif);
            }

            .tigerBlueContentSeparator {
                border-bottom: 1px solid #DDD;
            }

            .addedToWL {
                padding-top: 4px;
                background: url(http://g-ec4.images-amazon.com/images/G/28/nav2/buttons/add-to-wish-list-115x22-on._V192562658_.gif) no-repeat;
            }

            #autoSparkle {
                border-bottom: 1px solid #DDD;
            }

            .sosSpacing {
                border-top: 1px solid #DDD;
                padding-top: 6px;
                padding-bottom: 2px;
            }

            td.searchOtherStoresWideView {
                text-align: left;
                font-size: 11px;
                margin: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #DDD;
            }

            .largeGridResult .searchPopoverBg div.container {
                top: 251px !important;
            }

            .largeGridResult .searchPopoverBg div.containerWide {
                top: 251px !important;
            }

        </style>








        <style type="text/css" id="search_cse">
            /* nav-begin */


            .navSprite,
            .navSaJs li.navSaMenuItem {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navPackedSprites-CN-14._V149627272_.png);
            }

            .navSpritePopoverH {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif);
            }

            .navSpritePopoverV {
                background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif);
            }

            .nav_popover .header .l {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -14px 0px no-repeat;
            }

            .nav_popover .header .r {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -14px no-repeat;
            }

            .nav_popover .header .c {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px 0px repeat-x;
            }

            .nav_popover .footer .l {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -21px no-repeat;
            }

            .nav_popover .footer .r {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -21px 0px no-repeat;
            }

            .nav_popover .footer .c {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -7px repeat-x;
            }

            .nav_popover .body .l {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) 0px 0px repeat-y;
            }

            .nav_popover .body .r {
                background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -7px 0px repeat-y;
            }

            #navCartButton a.count {
                background: url(http://g-ec4.images-amazon.com/images/G/28/x-locale/common/transparent-pixel._V192562247_.gif) 0px 0px no-repeat;
            }

            /* search-suggest-css */

            .suggest_link {
                background-color: #FFF;
                padding: 2px 6px 2px 6px;
            }

            .nav-beacon .suggest_link {
                padding: 1px 10px;
                line-height: 22px;
                margin: 0px;
            }

            .nav-beacon ul.promo_list {
                margin: 0;
                padding: 0;
                border-top: none;
                background-color: #FFF;
                list-style-type: none;
            }

            .nav-beacon ul.promo_list li {
                clear: both;
                overflow: hidden;
                padding: 7px 10px;
                white-space: normal;
                line-height: 20px;
                margin: 0;
            }

            .nav-beacon ul.promo_list li .promo_image {
                float: left;
                width: 40px;
                height: 40px;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .nav-beacon ul.promo_list li .promo_cat {
                font-weight: bold;
                margin-left: 50px;
            }

            .nav-beacon ul.promo_list li .promo_title {
                line-height: 13px;
                margin-left: 50px;
            }

            .suggest_nm {
                display: block;
            }

            .nav-beacon .suggest_link_over {
                background-color: #EEE;
                color: #000;
            }

            .suggest_link_over {
                background-color: #146EB4;
                color: #FFF;
            }

            .suggest_link .suggest_category {
                color: #666;
            }

            .nav-beacon .suggest_link_over .suggest_category {
                color: #666;
            }

            .suggest_link_over .suggest_category {
                color: #FFF;
            }

            #srch_sggst {
                background-color: #FFF;
                border: 1px solid #ddd;
                color: #000;
                position: absolute;
                text-align: left;
                z-index: 250;
            }

            .nav-beacon #srch_sggst {
                -moz-box-shadow: 0 2px 5px 0 #AAAAAA;
                -webkit-box-shadow: 0 2px 5px 0 #AAAAAA;
                box-shadow: 0 2px 5px #AAAAAA;
                border: none;
                _border: 1px solid #ddd;
            }

            .suggest_link, .promo_cat, .promo_title {
                font-family: arial, sans-serif;
            }

            #sugdivhdr {
                color: #888;
                font-size: 10px;
                line-height: 12px;
                padding-right: 4px;
                text-align: right;
            }

        </style>







        <title>亚马逊：手机</title>

        <meta name="description" content="亚马逊：手机">












        <link type="text/css" href="../image/search/site-wide-2731623960.css" rel="stylesheet">
        <style type="text/css">
            /* non-sprited */
            .ap_popover_unsprited .ap_body   .ap_left   { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_left_17._V248144977_.png ); }
            .ap_popover_unsprited .ap_body   .ap_right  { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_right_17._V248144978_.png ); }
            .ap_popover_unsprited .ap_header .ap_left   { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_left._V265110087_.png ); }
            .ap_popover_unsprited .ap_header .ap_right  { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top_right._V265110087_.png ); }
            .ap_popover_unsprited .ap_header .ap_middle { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_top._V265110086_.png ); }
            .ap_popover_unsprited .ap_footer .ap_left   { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_left._V265110084_.png ); }
            .ap_popover_unsprited .ap_footer .ap_right  { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom_right._V265110087_.png ); }
            .ap_popover_unsprited .ap_footer .ap_middle { background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/po_bottom._V265110084_.png ); }

            /* Everything else -- sprited */
            .ap_popover_sprited .ap_body .ap_left,
            .ap_popover_sprited .ap_body .ap_right {
                background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-v._V219326282_.png );
            }

            .ap_popover_sprited .ap_header .ap_left,
            .ap_popover_sprited .ap_header .ap_right,
            .ap_popover_sprited .ap_header .ap_middle,
            .ap_popover_sprited .ap_footer .ap_left,
            .ap_popover_sprited .ap_footer .ap_right,
            .ap_popover_sprited .ap_footer .ap_middle,
            .ap_popover_sprited .ap_closebutton {
                background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-h._V219326280_.png );
            }

            .ap_popover_sprited .ap_body .ap_right-arrow, .ap_popover_sprited .ap_body .ap_left-arrow {
                background-image: url( http://g-ec4.images-amazon.com/images/G/01/javascripts/lib/popover/images/light/sprite-arrow-v._V219326281_.png );
            }
        </style>

        <link type="text/css" href="../image/search/search-css-3390547297.css" rel="stylesheet">






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

            }</style></head>
    <body><div id="ap_container"><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 229; opacity: 0; top: 94px; left: 168px; width: 137px; height: 121px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 223; opacity: 0; top: 94px; left: 168px; width: 112px; height: 121px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 225; opacity: 0; top: 94px; left: 168px; width: 100px; height: 74px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 217; opacity: 0; top: 94px; left: 168px; width: 115px; height: 144px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 199; opacity: 0; top: 151.5px; left: 1052.6px; width: 300px; height: 503px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 215; opacity: 0; top: 94px; left: 168px; width: 136px; height: 144px;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 227; opacity: 0; top: 94px; left: 168px; width: 100px; height: 51px;" frameborder="0"></iframe><ul style="display: none;" id="navSaChild_0" class="navbar navSaChild">

                <li class="navSaChildItem">



                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>


                </li>
            </ul><ul style="display: none;" id="navSaChild_1" class="navbar navSaChild">



            </ul><ul style="display: none;" id="navSaChild_2" class="navbar navSaChild">






            </ul><ul style="display: none;" id="navSaChild_6" class="navbar navSaChild">
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E7%8E%A9%E5%85%B7/b/ref=sa_menu_tg6?ie=UTF8&amp;node=647070051" class="navSaChildItem">玩具</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%AF%8D%E5%A9%B4%E7%94%A8%E5%93%81/b/ref=sa_menu_ba6?ie=UTF8&amp;node=42692071" class="navSaChildItem">母婴用品</a>

                </li>
            </ul><ul style="display: none;" id="navSaChild_5" class="navbar navSaChild">



            </ul><ul style="display: none;" id="navSaChild_8" class="navbar navSaChild">
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%9C%8D%E8%A3%85%E6%9C%8D%E9%A5%B0/b/ref=sa_menu_clo8?ie=UTF8&amp;node=2016156051" class="navSaChildItem">服装服饰</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E9%9E%8B-%E9%9D%B4%E5%AD%90/b/ref=sa_menu_sho8?ie=UTF8&amp;node=2029189051" class="navSaChildItem">鞋靴</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E7%9A%AE%E5%85%B7%E7%AE%B1%E5%8C%85/b/ref=sa_menu_bac8?ie=UTF8&amp;node=865184051" class="navSaChildItem">皮具箱包</a>

                </li>
            </ul><ul style="display: none;" id="navSaChild_9" class="navbar navSaChild">
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%89%8B%E8%A1%A8-%E6%97%B6%E9%92%9F/b/ref=sa_menu_wch9?ie=UTF8&amp;node=1953164051" class="navSaChildItem">钟表</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E7%8F%A0%E5%AE%9D%E9%A6%96%E9%A5%B0/b/ref=sa_menu_jwy9?ie=UTF8&amp;node=816482051" class="navSaChildItem">珠宝首饰</a>

                </li>
            </ul><ul style="display: none;" id="navSaChild_7" class="navbar navSaChild">
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E5%81%A5%E8%BA%AB%E5%99%A8%E6%A2%B0/b/ref=sa_menu_sef7?ie=UTF8&amp;node=42787071" class="navSaChildItem">健身训练</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E9%9C%B2%E8%90%A5-%E6%88%B7%E5%A4%96%E8%A3%85%E5%A4%87/b/ref=sa_menu_sco7?ie=UTF8&amp;node=42782071" class="navSaChildItem">露营及户外</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E8%BF%90%E5%8A%A8%E6%9C%8D%E9%A5%B0/b/ref=sa_menu_ss7?ie=UTF8&amp;node=42786071" class="navSaChildItem">运动服饰</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E4%BD%93%E8%82%B2%E7%94%A8%E5%93%81/b/ref=sa_menu_se7?ie=UTF8&amp;node=42783071" class="navSaChildItem">体育用品</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E8%BF%90%E5%8A%A8-%E6%88%B7%E5%A4%96-%E4%BC%91%E9%97%B2/b/ref=sa_menu_sap7?ie=UTF8&amp;node=836312051" class="navSaChildItem">所有产品</a>

                </li>
            </ul><ul style="display: none;" id="navSaChild_4" class="navbar navSaChild">






            </ul><ul style="display: none;" id="navSaChild_3" class="navbar navSaChild">






            </ul><ul style="display: none;" id="navSaChild_10" class="navbar navSaChild">
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/GPS-%E8%BD%A6%E8%BD%BD%E7%94%B5%E5%99%A8/b/ref=sa_menu_autogps10?ie=UTF8&amp;node=51023071" class="navSaChildItem">GPS、车载电器</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%B1%BD%E8%BD%A6%E5%85%BB%E6%8A%A4-%E7%BB%B4%E4%BF%AE%E7%94%A8%E5%93%81/b/ref=sa_menu_automnt10?ie=UTF8&amp;node=51024071" class="navSaChildItem">汽车养护维修</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%B1%BD%E8%BD%A6%E8%A3%85%E9%A5%B0/b/ref=sa_menu_autodec10?ie=UTF8&amp;node=51025071" class="navSaChildItem">汽车装饰</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E8%87%AA%E9%A9%BE%E6%B8%B8%E7%94%A8%E5%93%81/b/ref=sa_menu_autostp10?ie=UTF8&amp;node=51026071" class="navSaChildItem">自驾游用品</a>

                </li>
                <li class="navSaChildItem">
                    <div class="navSprite navSaChildOrangeArrow"></div>
                    <a href="http://www.amazon.cn/%E6%B1%BD%E8%BD%A6%E7%94%A8%E5%93%81/b/ref=sa_menu_allauto10?ie=UTF8&amp;node=1947899051" class="navSaChildItem">所有汽车用品</a>

                </li>
            </ul></div><div id="ap_container"><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe><iframe tabindex="-1" src="javascript:void(false)" style="display: none; position: absolute; z-index: 0; opacity: 0;" frameborder="0"></iframe></div>



    <style type="text/css"><!--



        .navSprite,
        .navSaJs li.navSaMenuItem {
            background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/images/orangeBlue/navPackedSprites-CN-14._V149627272_.png);
        }

        .navSpritePopoverH {
            background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif);
        }

        .navSpritePopoverV {
            background-image: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif);
        }

        .nav_popover .header .l {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -14px 0px no-repeat;
        }

        .nav_popover .header .r {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -14px no-repeat;
        }

        .nav_popover .header .c {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px 0px repeat-x;
        }

        .nav_popover .footer .l {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -21px no-repeat;
        }

        .nav_popover .footer .r {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -21px 0px no-repeat;
        }

        .nav_popover .footer .c {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-h2._V172306153_.gif) 0px -7px repeat-x;
        }

        .nav_popover .body .l {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) 0px 0px repeat-y;
        }

        .nav_popover .body .r {
            background: url(http://g-ec4.images-amazon.com/images/G/28/gno/popover/sprites-v2._V172306153_.gif) -7px 0px repeat-y;
        }


        #navCartButton a.count {
            background: url(http://g-ec4.images-amazon.com/images/G/28/x-locale/common/transparent-pixel._V192562247_.gif) 0px 0px no-repeat;
        }





        --></style>




    <img src="../image/search/navPackedSprites-CN-14.png" style="display: none;" alt="">
    <img src="../image/search/transparent-pixel.gif" style="display: none;" alt="" id="nav_trans_pixel">


    <!-- navp-AQOsnybqj9RqTruGE5IoH04wo2xTypU3xZPmkwijEDA= rid-1RDZNXGJNHX2SKDQW3QR templated -->




    <div id="navbar" style="padding:0;" class="navbar">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">


            <tbody><tr>
                    <td rowspan="2" align="left" valign="bottom" width="180">
                        <a id="navLogo" class="nonGateway" href="http://www.amazon.cn/ref=gno_logo">

                            <span id="navLogoSecondary" class="navSprite nonPrime"></span>
                        </a>
                    </td>
                    <td align="left" height="26" width="100%">
                        <table id="welcomeRowTable" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
                                    <td class="navGreetingBkg" align="left" valign="bottom">
                                        <div id="navidWelcomeMsg" style="white-space: nowrap;">
                                            <?php
                                            if(@$_SESSION['name']!=null) {
                                                echo "<span class=\"navGreeting\">您好,尊敬的会员".$_SESSION['name']."</span>";
                                            }else {
                                                echo "<span class=\"navMessage\" style=\"white-space: nowrap;\"><a href=\"../web/login.php\" rel=\"nofollow\">请登录</a>以获取为您订制的推荐.</span>";
                                                echo "<span class=\"navMessage\" style=\"white-space: nowrap;\">新客户? <a href=\"../web/reg.php\" rel=\"nofollow\">点这里注册</a>.</span>";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                    <td align="left">&nbsp;</td>
                                    <td id="navSwmSlot" align="right" height="26" valign="center">
                                        <table id="navSwmSkedPop" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                                            <tbody><tr>
                                                    <td align="right" valign="bottom">
                                                        <div id="navSwmMainHdgDiv" style="padding-bottom: 3px;">

                                                        </div>
                                                    </td>
                                                    <td rowspan="1" align="left" valign="bottom" width="5"><div id="navSwmFlyoutTrigger" style="display:none; height:13px; width:13px; margin:2px 3px 3px 3px;">
                                                            <a name="navSwmSkedPop|he|navSwmSkedPop_content"><img src="../image/search/transparent-pixel.gif" alt="" class="default navSprite" id="navSwmFlyoutImage" border="0" height="1" width="1"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody></table>      </td>
                                </tr></tbody></table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id="navCrossshop" border="0" cellpadding="0" cellspacing="0" height="22" width="100%">
                            <tbody><tr>

                                    <td style="padding-right: 20em;">
                                        <a href="cnep.php" class="navCrossshopLink">我的亚马逊</a>
                                        <span class="navCrossshopBar">&nbsp;|&nbsp;</span>



                                    </td>
                                    <td width="100%">&nbsp;</td>
                                    <td>
                                        <a href="cnep.php" class="navCrossshopYALink">我的帐户</a>


                                        <span class="navCrossshopBar">&nbsp;|&nbsp;</span>

                                    </td>
                                </tr>
                            </tbody></table>
                    </td>
                </tr>
                <tr class="navShopSearch" width="100%" align="left">
                    <td width="180">

                    </td>
                    <td width="100%"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
                                    <td width="100%">
                                        <form style="width:100%; margin:0 0 0 0; border:0; padding:0 0 0 0;" method="post" action="search.php" name="site-search">
                                            <input name="__mk_zh_CN" value="亚马逊网站" type="hidden">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tbody><tr>
                                                        <td class="navSearchStart"></td>
                                                        <td id="navSearchBar" class="navSearchBar"><label for="twotabsearchtextbox">搜索</label></td>
                                                        <td class="dropdownNavbar">  <table id="subDropdownTable" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody><tr>  <td id="navSearchDropdown" width="105px">
                                                                            <div id="hiddenSearchDropdown" width="auto">

                                                                                <select name="Category_id"  title="搜索范围" style="min-width:105px;">
                                                                                    <option value="all" selected="selected">全部分类</option>
                                                                                    <?php
                    								$sql= "SELECT * FROM Category C where EXISTS (select * from Item I where C.Category_id = I.Category_id)";
                                                                                    $rs=mysql_query($sql);
                                                                                    while($find=mysql_fetch_object($rs)) {
                                                                                        echo "<option value=\"$find->Category_id\">$find->Category_name</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div> </td>  <td align="left" width="3px">&nbsp;</td>
                                                                        <td id="searchTextBoxHolder" align="left">
                                                                            <input id="twotabsearchtextbox" autocomplete="off" class="searchSelect" name="field-keywords" size="50" title="搜索目标" type="text">


                                                                        </td></tr></tbody></table></td>
                                                        <td class="navSearchBar" align="right" width="3px">&nbsp;</td>
                                                        <td align="left" width="25">
                                                            <div id="navGoButton" class="navSprite">
                                                                <input src="../image/index/transparent-pixel.gif" alt="点击" type="image"></div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                        </form>
                                    </td>
                                    <td style="padding-right: 1px;" align="right">
                                        <div id="navCartButton" class="navButton navBlueButton">
                                            <div class="navSprite left"></div>
                                            <div class="navSprite right"></div>
                                            <div id="navCartEmpty">
                                                <div class="navSprite icon"></div>
                                                <a class="destination" href="car.php" rel="nofollow"><span class="text">购物车</span></a>
                                            </div>
                                            <div id="navCartFull" style="display:none">
                                                <div class="iconLeft navSprite"></div>
                                                <div class="iconMiddle navSprite"></div>
                                                <div class="iconRight navSprite"></div>
                                                <div id="navCartCount" class="iconText"></div>
                                                <a class="destination count" href="http://www.amazon.cn/gp/cart/view.html/ref=gno_cart" rel="nofollow"><span class="text">购物车</span></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="padding-right: 0px;" align="right">
                                        <div id="navWishListButton" class="navButton navBlueButton">
                                            <div class="navSprite left"></div>
                                            <div class="navSprite right"></div>
                                            <a class="destination" href="http://www.amazon.cn/gp/registry/wishlist/ref=wish_list"><span class="text">心愿单</span></a>
                                        </div>
                                    </td>
                                    <td class="navSprite navSearchEnd"></td>
                                </tr></tbody></table></td>
                </tr>
                <tr id="navSubnavRowTR" width="100%" style="display: none;" height="23">
                    <td colspan="2" width="100%">
                        <table id="navCatSubnav" cellspacing="0">
                            <tbody><tr>
                                    <td class="navCatLeft navSprite" width="7"><div class="navCatLeftSpc"></div></td>
                                    <td class="navCat"><div class="navCatSpc"><a class="navCatA" href=""></a></div></td>
                                    <td class="navSubLeft" width="1"><div class="navSubLeftSpc"></div></td>
                                    <td class="navSubItem">
                                        <a class="navSubA" href=""></a>
                                    </td>
                                    <td class="navSubMid navSprite" width="3"><div class="navSubMidSpc"></div></td>
                                    <td class="navSubItem">
                                        <a class="navSubA" href=""></a>
                                    </td>
                                    <td class="navSubRight navSprite" width="6"><div class="navSubRightSpc"></div></td>
                                </tr></tbody>
                        </table>
                    </td>
                </tr>
                <tr id="navSubnavBorderTR" style="display: none;">
                    <td colspan="2" style="background-color: rgb(20, 110, 180);" height="2" width="100%"></td>
                </tr>
            </tbody></table>
            <div id="top">
        <div id="sprGradient" class="srSprite spr_gradient">&nbsp;</div></div>
    <div id="searchTemplate" class="searchTemplate listLayout so_cn_zh">
        <!-- if we need the left-nav, print the rightContainer div -->
        <div id="rightContainerATF">
            <div id="rightResultsATF">
                <div id="widthPreserver"></div>
                <div id="center">
                    <div id="breadCrumbDiv">
                        <div id="bcDiv">
                            <h1 id="breadCrumb">
                                <?php echo $_POST['field-keywords'];?></h1>
                        </div>
                        <br class="unfloat">
                    </div>
                    <div id="topBar">
                        <div class="srSprite spr_header hdr">
                            <table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                        <td width="35%">
                                            <h2 style="" class="resultCount" id="resultCount">
                                            </h2></td>
                                        <td width="45%">
                                            <div class="kindOfSort" style="width:100%">
                                                <table style="" id="kindOfSort_table" align="right" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <span style="display: none;" id="kindOfSort_NonJS_tab">选择一个 类别 启动排序</span>
                                            </div><br class="unfloat">
                                        </td>
                                    </tr>
                                </tbody></table>
                        </div><br clear="all">
                    </div>
                     <div class="list results">


                                         <?php
                                                  $Category_id=$_POST['Category_id'];
                                                  $Item_name=$_POST['field-keywords'];
                                                  $mean;
                                                if($_POST['Category_id']!="all")
                                                {
                                                       $sql="select * from Item where Category_id=$Category_id and Item_name like '%$Item_name%'";
                                                       $rs=mysql_query($sql);
                                                       while($search=mysql_fetch_object($rs))
                                                       {
                                                                
                                                          echo "<br>";
                                                          echo "<div id=\"result_0\" class=\"result firstRow product\" name=\"B0036MEFQE\">";
                                                          echo "<div id=\"srNum_0\" class=\"number\">";
                                                          echo "</div>";
                                                          echo "<div class=\"image\">";
                                                          echo " <a href=\"display.php?Item_id=".$search->Item_id."\" target=\"_blank\"><img src=\"../image/".$search->Image."\" class=\"productImage\" alt=\"产品详细信息\"> </a></div>";
                                                          echo "<div id=\"c_B0036MEFQE\" class=\"addtocart\">";
                                                          echo "<form action=\"../manage/DoShoppingCar.php?Item_id=$search->Item_id\" method=\"POST\">";
                                                          echo "<input src=\"../image/search/add-to-cart-md-p.gif\" alt=\"将商品添加到购物车\" value=\"addToCart\" name=\"submit.addToCart\" class=\"button\" align=\"absbottom\" border=\"0\" height=\"21\" type=\"image\" width=\"71\">";
                                                          echo " <br><input src=\"../image/search/add-to-wish-list-115x22.gif\" alt=\"加入心愿单\" name=\"submit.add-to-registry.wishlist\" class=\"button\" onclick=\"this.form.action=\'/gp/item-dispatch/ref=sr_add_wl_0\'\" border=\"0\" height=\"22\" type=\"image\" width=\"85\">";
                                                          echo " </form>";
                                                          echo "</div>";
                                                          echo "<div class=\"data\">";
                                                          echo " <h3 class=\"title\">";
                                                          echo "<a class=\"title\" href=\"display.php?Item_id=$search->Item_id;\" target=\"_blank\">$search->Item_name</a> </h3><div class=\"newPrice\">";
                                                          echo " <a class=\"title\" href=\"display.php?Item_id=$search->Item_id;\" target=\"_blank\"></a> </h3><div class=\"newPrice\">";
                                                          echo "<span class=\"price addon\">"."价格￥：".$search->Price."</span>";
                                                          echo "</div><br class=\"unfloat\">";
                                                          echo "<div class=\"usedNewPrice\">";
                                                          echo "<br class=\"unfloat\">";
                                                          echo " </div>";
                                                          echo "<div class=\"fastTrack\">";
                                                          echo "现在有货".$search->Quantity."件";
                                                          echo "<div class=\"store\">";
                                                          echo " <span>简介:</span>";
                                                          echo "</div></div>$search->Description";
                                                          echo "</div>";
                                                          echo "<div class=\"unfloat\"></div>";
                                                          echo " <div class=\"unfloat\"></div>";
                                                          echo "<div class=\"unfloat\"></div>";
                                                          echo "</div>";
                                                          echo " </div>";
                                                       }
                                                }else
                                                {
                                                        $sql1="select * from Item where Item_name like '%$Item_name%'";
                                                        $rs1=mysql_query($sql1);
                                                        while($mean=mysql_fetch_object($rs1))
                                                        {
                                 
                                                          echo "<br>";
                                                          echo "<div id=\"result_0\" class=\"result firstRow product\" name=\"B0036MEFQE\">";
                                                          echo "<div id=\"srNum_0\" class=\"number\">";
                                                          echo "</div>";
                                                          echo "<div class=\"image\">";
                                                          echo " <a href=\"display.php?Item_id=".$mean->Item_id."\" target=\"_blank\"><img src=\"../image/".$mean->Image."\" class=\"productImage\" alt=\"产品详细信息\"> </a></div>";
                                                          echo "<div id=\"c_B0036MEFQE\" class=\"addtocart\">";
                                                          echo "<form action=\"../manage/DoShoppingCar.php?Item_id=$mean->Item_id\" method=\"POST\">";
                                                          echo "<input src=\"../image/search/add-to-cart-md-p.gif\" alt=\"将商品添加到购物车\" value=\"addToCart\" name=\"submit.addToCart\" class=\"button\" align=\"absbottom\" border=\"0\" height=\"21\" type=\"image\" width=\"71\">";
                                                          echo " <br><input src=\"../image/search/add-to-wish-list-115x22.gif\" alt=\"加入心愿单\" name=\"submit.add-to-registry.wishlist\" class=\"button\" onclick=\"this.form.action=\'/gp/item-dispatch/ref=sr_add_wl_0\'\" border=\"0\" height=\"22\" type=\"image\" width=\"85\">";
                                                          echo " </form>";
                                                          echo "</div>";
                                                          echo "<div class=\"data\">";
                                                          echo " <h3 class=\"title\">";
                                                          echo "<a class=\"title\" href=\"display.php?Item_id=$mean->Item_id;\" target=\"_blank\">$mean->Item_name</a> </h3><div class=\"newPrice\">";
                                                          echo " <a class=\"title\" href=\"display.php?Item_id=$mean->Item_id;\" target=\"_blank\"></a> </h3><div class=\"newPrice\">";
                                                          echo "<span class=\"price addon\">"."价格￥：".$mean->Price."</span>";
                                                          echo "</div><br class=\"unfloat\">";
                                                          echo "<div class=\"usedNewPrice\">";
                                                          echo "<br class=\"unfloat\">";
                                                          echo " </div>";
                                                          echo "<div class=\"fastTrack\">";
                                                          echo "现在有货".$mean->Quantity."件";
                                                          echo "<div class=\"store\">";
                                                          echo " <span>简介:</span>";
                                                          echo "</div></div>$mean->Description";
                                                          echo "</div>";
                                                          echo "<div class=\"unfloat\"></div>";
                                                          echo " <div class=\"unfloat\"></div>";
                                                          echo "<div class=\"unfloat\"></div>";
                                                          echo "</div>";
                                                          echo " </div>";
                                                        }
                                                 }
                                        ?>                  
                <!-- Render JS below the fold -->
                <div id="js-boot-btf">





                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>

                    <div class="unfloat"></div>
                    <div id="result_15" class="result lastRow product" name="B004UPUMJA">
                        <div id="search-js-btr">


                        </div>



                        <div class="srSprite spr_header hdr" id="bottomBar">
                            <div id="pagn" class="pagn">
                                <span class="pagnDisabled">«上一页</span>
                                <span class="pagnSep">|</span>
                                <span class="pagnLead"></span>
                                <span class="pagnCur">1</span>
                                <span class="pagnLink"><a href="#/ref=sr_pg_2?rh=i%3Aaps%2Ck%3A%E6%89%8B%E6%9C%BA&amp;page=2&amp;d=1&amp;keywords=%E6%89%8B%E6%9C%BA&amp;ie=UTF8&amp;qid=1339463347">2</a></span>
                                <span class="pagnLink"><a href="#/ref=sr_pg_3?rh=i%3Aaps%2Ck%3A%E6%89%8B%E6%9C%BA&amp;page=3&amp;d=1&amp;keywords=%E6%89%8B%E6%9C%BA&amp;ie=UTF8&amp;qid=1339463347">3</a></span>
                                <span class="pagnMore">...</span>
                                <span class="pagnSep">|</span>
                                <span class="pagnNext">
                                    <a title="下一页" id="pagnNextLink" class="pagnNext" href="#/ref=sr_pg_2?rh=i%3Aaps%2Ck%3A%E6%89%8B%E6%9C%BA&amp;page=2&amp;d=1&amp;keywords=%E6%89%8B%E6%9C%BA&amp;ie=UTF8&amp;qid=1339463347">下一页»</a>
                                </span>
                                <br clear="all">
                            </div>
                        </div>

                    </div>

                    <div id="centerBelowStatic">
                        <!-- btf pilu -->

                        <div style="display: none;" id="navSaNonGwWrapper" class="navNoDisplay">
                            <div class="navbar navSaJs">
                                <ul class="navSaMenu">


                                </ul>
                            </div>
                        </div>


                    </div>

                    <div id="centerBelowExtra">

                        <div id="sponsoredLinks"></div>



                        <div id="poweredBy">

                            <a href="http://a9.com/?src=amz_spb_sas"></a>
                        </div>
                    </div>

                    <!-- if left-nav was printed close the divs -->
                </div>
            </div>



            <!-- Render JS right below the left-nav as well -->
            <div id="js-boot-leftnav">
                <!--  <a:bootstrap content="section" /> -->
            </div>
            <div id="ajaxData">
                <div id="results-atf-next" style="display: none;">

                </div>
                <div id="result-count-only-next" style="display: none;">
                    <!--
                        <h2 style="" class="resultCount" id="resultCount"><span>显示： 17-32条， 共36777条</span>
                            </h2>
                    -->
                </div><div id="featuredEntity-next" style="display: none;">
                    <!--
                        <div id="featuredEntity"></div>
                    -->
                </div>
                <div id="didYouMean-next" style="display: none;">
                    <!--
                        <div id="didYouMean"></div>
                    -->
                </div>
                <div id="qzBackoutMsgBox-next" style="display: none;">
                    <!--
                        <div id="qzBackoutMsgBox"></div>
                    -->
                </div>
                <div id="bestRefinement-next" style="display: none;">
                    <!--
                        <div id="bestRefinement"></div>
                    -->
                </div>
                <div id="brsc-next" style="display: none;">
                    <!--
                        <div id="brsc"></div>
                    -->
                </div>
            </div>



            <!-- Render JS final -->
            <div id="js-boot-final">
                <!-- <a:bootstrap content="final" /> -->
            </div>
        </div>
    </div>

    <!-- Render debug pagelets at the bottom, if exist, and move them up for visibility -->
    <!--  il -->



    <div id="be" style="display:none;"><form name="ue_backdetect" action="get"><input name="ue_back" value="3" type="hidden"></form>


    </div>
</body></html>

<?php
mysql_close($conn);

?>
