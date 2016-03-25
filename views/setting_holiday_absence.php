<div class="holiday_absence">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Holiday</label></h2>
    <h3 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Absence Management</label></h3>


    <!------------- Table Absence -------------->
    <div class="box_items">

        <table id="table_absence">
            <thead>
                <tr>
                    <th width="10%">รหัส</th>
                    <th width="30%">ชื่อ - สกุล</th>
                    <th width="15%">วันที่</th>
                    <th width="15%">ถึง</th>
                    <th width="30%">หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++):
                    $data = null;
                    $data['id'] = $i;
                    $data['date_start'] = '01/02/2016';
                    $data['date_to'] = '01/02/2017';
                    $data['type'] = '1';
                    $data['description'] = 'ไปใช้ชีวิตสไลไลท์';
                    $data = json_encode($data);
                    ?>
                    <tr data-employee='<?php echo $data; ?>'>
                        <td><?php echo $i; ?></td>
                        <td>นาย สุภเวช เฟื่อแดง</td>
                        <td> 01/02/2559</td>
                        <td> 01/02/2560</td>
                        <td>อื่นๆ (ไปใช้ชีวิตสโลไลท์...)</td>
                    </tr>
                <?php endfor; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
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


    <!------- ADD EDIT --------->
    <div class="box_items">
        <div class="box_form">
            <div class="box_item_left">
                <!--- ITEM Employee Code--->
                <div class="box_item">
                    <label>รหัส</label>
                    <label>:</label>
                    <div class="item">
                        <input type="text" name="form[id]" id="id">
                    </div>
                </div>

                <!--- ITEM Date--->
                <div class="box_item">
                    <label>วันที่</label>
                    <label>:</label>
                    <div class="item">
                        <input type="text" name="form[date]" id="date">
                        <span>ถึง</span>
                        <input type="text" name="form[date_to]" id="date_to">
                    </div>
                </div>
            </div>

            <div class="box_item_left">
                <!--- ITEM Date--->
                <div class="box_item">

                    <!---- ลากิจ  ---->
                    <div class="item">
                        <div class="box_radio">
                            <input type="radio" name="form[type]" value="1" checked="checked">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><?php echo "ลากิจ"; ?></label>
                    </div>

                    <!---- ลากิจ  ---->
                    <div class="item">
                        <div class="box_radio">
                            <input type="radio" name="form[type]" value="1" checked="checked">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><?php echo "ลากิจ"; ?></label>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>