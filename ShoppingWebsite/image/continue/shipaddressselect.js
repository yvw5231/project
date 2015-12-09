amznJQ.onReady('jQuery', function() {

    jQuery(".deletebutton").bind('click', deleteAddress).show();
     
    function deleteAddress(event) {
        var blockNumber = jQuery("#deleteButtonCount",this).attr("value");
        var addressID = jQuery("#deleteButtonAddressID",this).attr("value");
        var sessionID = jQuery("#sessionID").attr("value");
        var url = "/gp/buy/address/handlers/delete-address.html?ref=ox_shipaddress_delete_addr_" + blockNumber + "&addressID=" + addressID + "&requestSessionId=" + sessionID;
        performDeleteAddress(blockNumber, url, '#existingaddresses');
    }
    
    jQuery(".storedeletebutton").bind('click', deleteStoreAddress).show();
     
    function deleteStoreAddress(event) {
        var blockNumber = jQuery("#deleteButtonCount",this).attr("value");
        var addressID = jQuery("#deleteButtonAddressID",this).attr("value");
        var addressBookID = jQuery("#deleteButtonAddressBookID",this).attr("value");
        var sessionID = jQuery("#sessionID").attr("value");
        var url = "/gp/buy/address/handlers/delete-store-address.html?ref=ox_shipaddress_storedelete_addr_" + blockNumber + "&addressID=" + addressID + "&addressBookId=" + addressBookID + "&requestSessionId=" + sessionID;
        performDeleteAddress(blockNumber, url, '#existingstoreaddresses');
    }
    
    function performDeleteAddress(blockNumber, url, wrapperSelector) {
         jQuery(wrapperSelector+' .addressBlock'+blockNumber).remove();
         if (jQuery(wrapperSelector+' .addressblock').size() == 0) jQuery(wrapperSelector).hide();
         jQuery.ajax({
           type:"GET",
           url: url
         });
    }
    
    if (jQuery('input[name=searchCriterion][value=address]').size() != 0) {
      jQuery('#address').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=address]').click(); });
      jQuery('#storeZip').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=storeZip]').click(); });
      jQuery('#landmark').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=landmark]').click(); });
    }

    if (jQuery('input[name=searchCriterion][value=addressAndState]').size() != 0) {
      jQuery('#state,#address').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=addressAndState]').click(); });
      jQuery('#storeZip,#storeZip2').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=storeTwoZips]').click(); });
      jQuery('#landmark,#landmarkState').bind('focus', function(event) { jQuery('input[name=searchCriterion][value=landmarkAndState]').click(); });
    }

});

function amz_js_PopWin(url,name,options){
      var ContextWindow = window.open(url,name,options);
      ContextWindow.focus();
      return false;
    }
