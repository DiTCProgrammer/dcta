jQuery(function(){
    dcta_nav();
    jQuery('.menu nav.main_menu').dcta_nav();
    
    function dcta_nav(){
        jQuery.fn.dcta_nav = function(){
            var main = jQuery(this);
            var ul = main.find('ul');
            ul.find('li.parent').click(function(){
                ul.find('li.parent > ul').stop().slideUp();
                jQuery(this).find('ul').stop().slideToggle();
            });
        };
    }
    
    
   
    
});