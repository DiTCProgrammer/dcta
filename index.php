<?php
// Start the session
session_start();
$_SESSION['userid'] = '1';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DCTA DHARMNITI CLOUD TIME ATTENDANCE V 1.0</title>
        <link href="assets/elements/css_reset/reset.css" rel="stylesheet">
        <link href="assets/elements/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/elements/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/elements/bootstrap_datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="assets/elements/icomoon/style.css" rel="stylesheet">
        <link href="assets/fonts/sukhumvit/css/style.css" rel="stylesheet">
        <link href="assets/css/template.css" rel="stylesheet">
        <link href="assets/css/menu.css" rel="stylesheet">
        <link href="assets/css/departments.css" rel="stylesheet">
        <link href="assets/css/personal_informations.css" rel="stylesheet">
        <link href="assets/css/personal_information.css" rel="stylesheet">
        <link href="assets/css/upload.css" rel="stylesheet">
        <link href="assets/css/delete.css" rel="stylesheet">
        <link href="assets/css/time_settings.css" rel="stylesheet">
        <link href="assets/css/setting_employee.css" rel="stylesheet">
        <link href="assets/css/setting_company_profile.css" rel="stylesheet">
        <link href="assets/css/setting_department.css" rel="stylesheet">
        <link href="assets/css/setting_weekend.css" rel="stylesheet">
        <link href="assets/css/setting_weekend_department.css" rel="stylesheet">
        <link href="assets/css/setting_weekend_company.css" rel="stylesheet">
        <link href="assets/css/setting_holiday_menu.css" rel="stylesheet">
        <link href="assets/css/setting_holiday_absence.css" rel="stylesheet">

        <script src="assets/elements/jquery/jquery.min.js" type="text/javascript"></script>

        <script src="assets/js/menu.js" type="text/javascript"></script>
        <script src="assets/js/upload.js" type="text/javascript"></script>
        <script src="assets/js/delete.js" type="text/javascript"></script>
        <script src="assets/js/setting_employee.js" type="text/javascript"></script>
        <script src="assets/js/setting_company_profile.js" type="text/javascript"></script>
        <script src="assets/js/setting_weekend_department.js" type="text/javascript"></script>
        <script src="assets/js/setting_holiday_absence.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="dcta">
            <div class="page_main">
                <section class="menu">
                    <?php
                    include ('./views/menu.php');
                    ?>
                </section>
                <section class="page">
                    <header>
                        <div class="box_head">
                            <div class="sub_box_head">
                                <div class="letter"><a><span class="fa fa-envelope-o"></span></a></div>
                                <div class="user">
                                    <div class="box_img"><img src="assets/user_images/kanjung.jpg" alt=""></div>
                                    <div class="name">Kan Jung</div>
                                </div>
                            </div>
                        </div>
                        <div class="head_company">บริษัท ดีไอทีซี จำกัด</div>
                    </header>

                    <div class="main_page">
                        <div class="sub_page">
                            <?php
                            //include ('./views/home.php');
                            //include ('./views/departments.php');
                            //include ('./views/personal_informations.php');
                            //include ('./views/personal_information.php');
                            //include ('./views/upload.php');
                            //include ('./views/delete.php');
                            //include ('./views/time_settings.php');
                            //include ('./views/setting_employee.php');
                            //include ('./views/setting_company_profile.php');
                            include ('./views/setting_department.php');
                            //include ('./views/setting_weekend.php');
                            //include ('./views/setting_weekend_department.php');
                            //include ('./views/setting_weekend_company.php');
                            //include ('./views/setting_holiday_menu.php');
                            //include ('./views/setting_holiday_absence.php');
                            ?>
                        </div>
                    </div>

                </section>

                <footer>

                </footer>
            </div>
        </div>
        <script src="assets/elements/bootstrap_datetimepicker/moment/moment.js" type="text/javascript"></script>
        <script src="assets/elements/bootstrap_datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
    </body>
</html>
