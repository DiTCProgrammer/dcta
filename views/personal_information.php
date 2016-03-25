<?php
$month_th = array('1' => 'มกราคม', '2' => 'กุมภาพันธ์', '3' => 'มีนาคม', '4' => 'เมษายน', '5' => 'พฤษภาคม', '6' => 'มิถุนายน', '7' => 'กรกฎาคม', '8' => 'สิงหาคม', '9' => 'กันยายน', '10' => 'ตุลาคม', '11' => 'พฤศจิกายน', '12' => 'ธันวาคม');
?>
<div class="personal_informations">
    <h1 class="title">DATA OVERVIEW</h1>
    <h2 class="sub_title">Personal Information</h2>

    <div class="main_information">
        <div class="box_img">
            <div class="box_sub_img">
                <div class="box_show_img"><img src="assets/user_images/kanjung.jpg" alt=""></div>
            </div>
        </div>

        <div class="box_detail">
            <div class="name">นาย กานต์จัง ภูมิประพาส</div>
            <table>
                <tr>
                    <td width="20">Company</td>
                    <td width="10">:</td>
                    <td width="20">DITC</td>
                    <td width="20">Dept</td>
                    <td width="10">:</td>
                    <td width="20">Programmer</td>
                </tr>

                <tr>
                    <td>Employee</td>
                    <td>:</td>
                    <td>001</td>
                    <td>Position</td>
                    <td>:</td>
                    <td>Sexy Programmer</td>
                </tr>

                <tr>
                    <td>Time Start</td>
                    <td>:</td>
                    <td><?php echo date('d/m/', strtotime('2015/12/02')) . (date('Y', strtotime('2015/12/02')) + 543); ?></td>
                    <td>Type</td>
                    <td>:</td>
                    <td>Monthly</td>
                </tr>

            </table>
        </div>
    </div>

    <div class="condition"><span>CONDITION</span><span>GROUP 1</span></div>

    <div class="box_item">
        <div class="item_row">
            <table>
                <thead>
                    <tr>
                        <th width="8%">Date</th>
                        <th width="8%">Day</th>
                        <th width="7%">Time-in1</th>
                        <th width="7%">Time-out1</th>
                        <th width="7%">Time-in2</th>
                        <th width="7%">Time-out2</th>
                        <th width="7%">Time-in3</th>
                        <th width="7%">Time-out3</th>
                        <th width="18%">
                            <label>OT Hour</label>
                            <table>
                                <tr>
                                    <td>OT-1</td>
                                    <td>OT-1.5</td>
                                    <td>OT-2</td>
                                    <td>OT-3</td>
                                </tr>
                            </table>
                        </th>
                        <th width="8%">Totals late</th>
                        <th width="8%">Totals Hour</th>
                        <th width="8%">Condition</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                        <tr>
                            <td><?php echo date('d/m/Y', strtotime('2016/02/25')); ?></td>
                            <td>จันทร์</td>
                            <td>8:03</td>
                            <td>12:01</td>
                            <td>13:04</td>
                            <td>19:04</td>
                            <td>20:02</td>
                            <td>00:14</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>1.00</td>
                                        <td>2.00</td>
                                        <td>3.00</td>
                                        <td>4.00</td>
                                    </tr>
                                </table>
                            </td>
                            <td>0.00</td>
                            <td>10.00</td>
                            <td>A3.OT</td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="grand_total">
        <h3 class="name">GRAND TOTAL DATA</h3>
        <table>
            <tr>
                <td width="30%">Working Day</td>
                <td width="10%">11</td>
                <td width="20%">Days</td>
                <td width="25%">OT-1</td>
                <td width="10%">0.08</td>
                <td width="5%">Hour</td>
            </tr>
            <tr>
                <td>Total working Hour</td>
                <td>0.08</td>
                <td>Times</td>
                <td>OT-1.5</td>
                <td>18.00</td>
                <td>Hour</td>
            </tr>
            <tr>
                <td>Late Time</td>
                <td>1</td>
                <td>Times</td>
                <td>OT-2</td>
                <td>&nbsp;</td>
                <td>Hour</td>
            </tr>
            <tr>
                <td>Total late time</td>
                <td>0.08</td>
                <td>Minutes</td>
                <td>OT-3</td>
                <td>2.00</td>
                <td>Hour</td>
            </tr>
            <tr>
                <td>Run time Error</td>
                <td>1</td>
                <td>Times</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        
        <div class="button">
            <button><span class="fa fa-print"></span>PRINT</button>
            <button><span class="fa fa-file-excel-o"></span>EXCEL EXPORT</button>
        </div>
        
    </div>


</div>