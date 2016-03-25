<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
?>
<div class="personal_informations">
    <h1 class="title">DATA OVERVIEW</h1>
    <h2 class="sub_title">Personal Information</h2>

    <div class="filters">
        <div class="box_select_date">
            <select name="month" class="select_date" id="month">
                <?php
                foreach ($month_th as $key => $val) {
                    ?>
                    <option value="<?= $key; ?>">เดือน<?= $val; ?></option>
                    <?php
                }
                ?>
            </select>

            <select name="year" class="select_date" id="year">
                <option value="2016">2559</option>
                <option value="2015">2558</option>
            </select>
        </div>
        <div class="box_search">
            <input type="text" value="" name="search">
        </div>
    </div> 


    <div class="box_item">
        <div class="item_row">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="item">
                    <div class="top">
                        <div class="box_img">
                            <div class="box_sub_img">
                                <div class="box_show_img"><img src="assets/user_images/kanjung.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="name">นาย กานต์ ภูมิประพาศ</div>
                            <div class="attr_date">
                                <table>
                                    <tr>
                                        <td width="50%">ทำงาน</td>
                                        <td width="10%">:</td>
                                        <td width="20" class="text-center">350</td>
                                        <td width="20">วัน</td>
                                    </tr>
                                    <tr>
                                        <td>ขาด</td>
                                        <td>:</td>
                                        <td class="text-center">10</td>
                                        <td>วัน</td>
                                    </tr>
                                    <tr>
                                        <td>ลา</td>
                                        <td>:</td>
                                        <td class="text-center">20</td>
                                        <td>วัน</td>
                                    </tr>
                                    <tr>
                                        <td>สาย</td>
                                        <td>:</td>
                                        <td class="text-center">15</td>
                                        <td>วัน</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                     <div class="bottom">รวมสาย 55 นาที</div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>