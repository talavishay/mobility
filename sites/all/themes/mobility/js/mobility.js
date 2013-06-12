/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function(){
    jQuery("#region-menu .hideme").each(function(i, val){
       jQuery(val).hide().parents("li").hide();
       
    });
jQuery("#block-views-bibliography-block-1 h3").bind("click", function(e){
    e.preventDefault();
    jQuery(e.currentTarget).nextUntil("h3").each(function(i, val){
        jQuery(".views-field-title", val).toggle();
    }) ;
    return false;
});
      if(jQuery(".node .field-name-field-image-basic").length > 0){
       jQuery("#page-title").css("max-width", "560px");
       }
      
});