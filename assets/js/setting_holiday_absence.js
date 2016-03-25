jQuery(function(){
    absence_edit_data();
    jQuery('.holiday_absence').absence_edit_data();
    
    function absence_edit_data(){
        jQuery.fn.absence_edit_data = function(){
            var main = jQuery(this);
            var table = main.find('#table_absence');
            var click_data = table.find('tbody tr');
            var data = '';
            click_data.click(function(){
                data = '';
                data = jQuery(this).attr('data-employee');
                alert(data);
            });
            
        };
    }
});