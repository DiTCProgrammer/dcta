jQuery(function(){
    dcta_delete();
    jQuery('div.delete .box_delete').dcta_delete();
    function dcta_delete(){
        jQuery.fn.dcta_delete = function(){
            var main  = jQuery(this);
            var remove = main.find('.item_list a.remove');
            remove.click(function(){
                var month = jQuery(this).attr('month');
                //Delete Function
                main.find('.item_list[month="'+month+'"]').remove();
            });
        };
    }
});