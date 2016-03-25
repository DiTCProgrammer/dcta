<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
?>
<div class="upload">
    <h1 class="title">ATTENDANCE MANAGEMENT</h1>
    <h2 class="sub_title">Upload File</h2>

    <div class="box_upload">
        <div class="filter">
            <select name="month" id="" class="select_date">
                <?php
                foreach ($month_th as $key => $val):
                    ?>
                    <option value="เดือน<?php echo $key; ?>"><?php echo $val; ?></option>
                    <?php
                endforeach;
                ?>
            </select>
            <select name="year" id="" class="select_date">
                <option value="2016">2559</option>
                <option value="2015">2558</option>
            </select>
        </div>

        <!------ Upload -------->
        <div class="box_upload_file">
            <form action="" name="upload" method="post">
                <div class="row_upload">
                    <input type="file" name="" value="">
                    <input type="text" class="name_file" readonly="reafdsadonly" value="">
                    <button class="remove" type="button" style="display: none;">Remove</button>
                    <button class="ok" type="button">Browse</button>
                    <button type="button" class="btn_upload" style="display:none;">Upload</button>

                </div>
            </form>

            <div class="time_popup" style="display: none;">
                <div class="time_popup2">
                    <div class="box_data">
                        <div class="text_top">Please Wait</div>
                        <div class="num_progress">
                            <div class="time_progress" style="left: 0%;">0%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <div class="text_bottom">
                            Uploading...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>