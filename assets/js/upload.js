jQuery(function () {
    dcta_upload();
    jQuery('div.upload div.box_upload_file').dcta_upload();

    function dcta_upload() {
        jQuery.fn.dcta_upload = function () {
            var main = jQuery(this);
            var ok = main.find('button.ok');
            var input_file = main.find('input[type="file"]');
            var textbox = main.find('input.name_file');
            var remove = main.find('button.remove');
            var upload_btn = main.find('button.btn_upload');

            var popup = main.find('.time_popup');
            popup.appendTo('body');
            popup = jQuery('body .time_popup');
            var num = 100;
            var num_progress = popup.find('.num_progress .time_progress');
            var progress = popup.find('.progress .progress-bar');




            textbox.val('');
            input_file.val('');
            ok.click(function () {
                input_file.click();
            });

            input_file.change(function () {
                textbox.val(jQuery(this).val());
                remove.show();
                upload_btn.show();
                ok.hide();
            });

            remove.click(function () {
                textbox.val('');
                input_file.val('');
                remove.hide();
                upload_btn.hide();
                ok.show();
            });

            upload_btn.click(function () {
                if (input_file.val()) {
                    timepopup();
                } else {
                    textbox.val('');
                    input_file.val('');
                    remove.hide();
                    upload_btn.hide();
                    ok.show();
                }
            });


            function timepopup() {
               
                progress.width(0);
                num_progress.css('left', 0);
                num_progress.text('0%');
                popup.show();
                
                progress.css('width', num + '%');
              // num_progress.css('left', num + '%');
                num_progress.text(num + '%');
            }

        };
    }
});