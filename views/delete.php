<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
?>
<div class="delete">
    <h1 class="title">ATTENDANCE MANAGEMENT</h1>
    <h2 class="sub_title">Delete File</h2>

    <div class="filter">
        <select name="year" id="" class="select_date">
            <option value="2016">2559</option>
            <option value="2015">2558</option>
        </select>
    </div>

    <div class="box_delete">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="item_list" month="<?php echo $i;?>">
            <div class="month_name">เดือน <?php echo $month_th[$i]; ?></div>
            <a class="remove" month="<?php echo $i;?>"><span class="fa fa-trash-o"></span></a>
        </div>
        <?php endfor; ?>

    </div>
</div>