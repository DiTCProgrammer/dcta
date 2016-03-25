<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
$days = array('Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
);
?>
<div class="weekend_department">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Week End</label></h2>
    <h3 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Department</label></h3>

    <div class="box_items">
        <table>
            <thead>
                <tr>
                    <th width="30%">Department</th>
                    <th width="20%">Year</th>
                    <th width="25">Month</th>
                    <th width="25%">Week end</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <tr>
                        <td>ฝ่ายบัญชี</td>
                        <td>2559</td>
                        <td>มกราคม</td>
                        <td>Sunday</td>
                    </tr>
                <?php endfor; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <div class="pangnav">
                            <ul>
                                <li><a href="" title="Start"><img src="assets/images/setting/privat2.png"></a></li>
                                <li><a href="" title="Prev"><img src="assets/images/setting/privat1.png"></a></li>
                            </ul>

                            <ul>
                                <li>
                                    <a title="1">1</a>
                                </li>
                            </ul>

                            <ul>
                                <li><a href="" title="Next"><img src="assets/images/setting/next1.png"></a></li>
                                <li><a href="" title="Last"><img src="assets/images/setting/next2.png"></a></li>
                            </ul>

                        </div>

                    </td>
                </tr>
            </tfoot>
        </table>
    </div>


    <div class="box_items">
        <div class="box_form">
            <div class="box_item_left">
                <select name="form[year]">
                    <option value="2016">2559</option>
                    <option value="2015">2558</option>
                </select>
            </div>
            <div class="box_item_left">
                <select name="form[month]">
                    <?php
                    foreach ($month_th as $key => $val):
                        ?>
                        <option value="<?php echo $key; ?>">เดือน<?php echo $val; ?></option>
                        <?php
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="box_item_left">
                <ul>
                    <?php foreach ($days as $key => $val): ?>
                        <li>
                            <div class="box_checkbox">
                                <input type="checkbox" name="form[day][]" value="<?php echo $key; ?>">
                                <div class="checkbox_focus"><span class="fa fa-check"></span></div>
                            </div>
                            <label for=""><?php echo $val; ?></label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="box_item_left">
                <div class="box_sub_item">
                    <ul>
                        <li>
                            <div class="box_radio">
                                <input type="radio" name="form[week]" value="1" checked="checked">
                                <div class="radio_focus"></div>
                            </div>
                            <label for=""><?php echo "All Week"; ?></label>
                        </li>
                        <li>
                            <div class="box_radio">
                                <input type="radio" name="form[week]" value="2">
                                <div class="radio_focus"></div>
                            </div>
                            <label for=""><?php echo "Some Week"; ?></label>
                        </li>
                    </ul>

                </div>


                <div class="box_sub_item">

                    <ul>
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <li>
                                <div class="box_checkbox">
                                    <input type="checkbox" class="checkbox_week" name="form[week_num][]" value="<?php echo $i; ?>">
                                    <div class="checkbox_focus"><span class="fa fa-check"></span></div>
                                </div>
                                <label for=""><?php echo "Week " . $i; ?></label>
                            </li>

                        <?php endfor; ?>
                    </ul>
                </div>
            </div>

            <!--- ITEM --->
            <div class="box_item">
                <button type="submit">
                    <img src="assets/images/setting/save.png">
                    SAVE
                </button>
            </div>
        </div>


    </div>


</div>