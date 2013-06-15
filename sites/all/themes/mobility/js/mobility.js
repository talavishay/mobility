/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function(){
    jQuery("#region-menu .hideme").each(function(i, val){
       jQuery(val).hide().parents("li").hide();
       
    });
    var h = jQuery("#zone-postscript").height();
    var tallest = 0;
    jQuery(".front #zone-postscript .region").each(function(i, val){
        if (jQuery(val).height() > tallest) {
            tallest = jQuery(val).height();
        }
        }).each(function(i,val) {
        if (jQuery(val).height() < tallest) {
            jQuery(val).css('height', tallest);
        }
    }); 
//    })
jQuery("#block-views-bibliography-block-1 h3").bind("click", function(e){
    e.preventDefault();
    jQuery(e.currentTarget).nextUntil("h3").each(function(i, val){
        jQuery(".views-field-title", val).toggle();
    }) ;
    return false;
});
      if(jQuery(".node .field-name-field-image-basic").length > 0){
       jQuery("#page-title").css("max-width", "530px");
       }
jQuery(".node-links a, #node-page-5 a").attr("target","_blank");
});