jQuery(function () {
    check_week();
    jQuery('.weekend_department .box_form').check_week();
    function check_week() {
        jQuery.fn.check_week = function () {
            var main = jQuery(this);
            var radio = main.find('input[name="form[week]"]');
            var radio_val = main.find('input[name="form[week]"]:checked');
            var checkbox = main.find('.box_checkbox input[type="checkbox"].checkbox_week');

            radio_check(radio_val.val());
            radio.change(function () {
                radio_check(jQuery(this).val());
            });

            function radio_check(v) {
                if (v == 1) {
                    checkbox.prop('checked', false);
                    checkbox.attr('disabled', 'disabled');
                } else {
                    checkbox.prop('disabled', false);
                }
            }
        };
    }
});