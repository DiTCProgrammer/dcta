jQuery(function () {
    upload_company_profile_img();
    jQuery('.company_profile .box_form').upload_company_profile_img();
    function upload_company_profile_img() {
        jQuery.fn.upload_company_profile_img = function () {
            var main = jQuery(this);
            var change_img = main.find('.box_file_img');
            var change_btn = change_img.find('.browe');
            var show_name = main.find('.show_name_img');
            var file = main.find('input[type="file"]');
            var show_img = main.find('.box_show_img');
            var img_error = main.find('.img_error');

            change_btn.click(function () {
                file.click();
            });

            file.change(function () {
                show_name.val(jQuery(this).val());
                var inputdata = this;
                if (inputdata.files && inputdata.files[0]) {
                    var filesize = ((inputdata.files[0].size) / 1024) / 1024;
                    var type = jQuery(this).val().split('.').pop().toLowerCase();
                    if (filesize < 5120) {
                        if (jQuery.inArray(type, ['jpg', 'jpeg']) != -1) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                show_img.find('.show_img').html('<img src="" style="display:none;">');
                                show_img.find('img').attr('src', e.target.result).show();
                            };
                            reader.readAsDataURL(inputdata.files[0]);
                            img_error.text('');
                            //  label_error.html('');
                        } else {
                            show_name.val('');
                            file.val('');
                            show_img.html('');
                            img_error.text('*Use Image Type JPG,JPEG');
                        }
                    } else {
                        show_name.val('');
                        file.val('');
                        img_error.text('*Image Size Maximum 5MB.');
                        show_img.html('');
                    }


                } else {
                    show_name.val('');
                    file.val('');
                    show_img.html('');
                }
            });
        };
    }
});