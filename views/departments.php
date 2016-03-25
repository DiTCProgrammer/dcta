<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
?>

<div class="departments">
    <h1 class="title">DEPARTMENTS INFORMATION</h1>
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
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name">
                    <label>ผ่ายการเงิน ผ่ายการเงิน ผ่ายการเงิน</label>
                </div>
                <div class="number">1</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">2</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">3</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">4</div>
            </div>
        </div>

        <div class="item_row">
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name">
                    <label>ผ่ายการเงิน ผ่ายการเงิน ผ่ายการเงิน</label>
                </div>
                <div class="number">5</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">6</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">7</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">8</div>
            </div>
        </div>
        
        
        <div class="item_row">
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name">
                    <label>ผ่ายการเงิน ผ่ายการเงิน ผ่ายการเงิน</label>
                </div>
                <div class="number">5</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">6</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">7</div>
            </div>
            <div class="item">
                <div class="box_img"><img src="assets/images_icon/account.png" alt=""></div>
                <div class="name"><label>ผ่ายการเงิน</label></div>
                <div class="number">8</div>
            </div>
        </div>

    </div>
</div>