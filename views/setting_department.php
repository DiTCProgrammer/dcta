<div class="department">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/depart_head.png" alt=""><label>Department</label></h2>

    <div class="box_items">
        <table>
            <thead>
                <tr>
                    <th width="10%">NO.</th>
                    <th width="20%">Code</th>
                    <th width="45">Department</th>
                    <th width="25%">Icon</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>001</td>
                        <td>ฝ่ายการเงิน</td>
                        <td><img src="assets/images/department/money.png" clss="img_icon"></td>
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
            <!-- ITEM Department Code-->
            <div class="box_item">
                <label>Department Code</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[department_code]">
                </div>
            </div>

            <!-- ITEM Department Name-->
            <div class="box_item">
                <label>Department Name</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[department_name]">
                </div>
            </div>

            <!-- ITEM Condition Group-->
            <div class="box_item">
                <label>Condition Group</label>
                <label>:</label>
                <div class="item">
                    <select name="form[condition_group]">
                        <option value="0">Select</option>
                    </select>
                </div>
            </div>

            <!-- ITEM Working Type-->
            <div class="box_item">
                <label>Working Type</label>
                <label>:</label>
                <div class="item">
                    <div class="box_radio">
                        <input type="radio" name="form[work_type]" value="1" checked="checked">
                        <div class="radio_focus"></div>
                    </div>
                    <label class="radio_text">Day</label>

                    <div class="box_radio">
                        <input type="radio" name="form[work_type]" value="2">
                        <div class="radio_focus"></div>
                    </div>
                    <label class="radio_text">Night</label>

                    <select class="time" name="form[time]">
                        <?php for ($i = 0; $i <= 23; $i++): ?>
                            <option value="<?php echo($i > 9 ? $i . ':00' : '0' . $i . ':00'); ?>">
                                <?php echo($i > 9 ? $i . ':00' : '0' . $i . ':00'); ?>
                            </option>
                        <?php endfor; ?>
                    </select>

                </div>
            </div>

            <!-- ITEM Department Icon-->
            <div class="box_item">
                <label>Department Icon</label>
                <label>:</label>
                <div class="item">
                </div>
            </div>


            <div class="box_item">
                <ul class="icon_list">
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="1" checked="checked">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/account.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="2">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/money.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="3">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/seminar.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="4">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/manage.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="5">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/press.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="6">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/IT.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="7">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/human.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="8">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/operetor.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="9">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/service.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="10">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/security.png"></label>
                    </li>
                    <li>
                        <div class="box_radio">
                            <input type="radio" name="fomr[icon]" value="11">
                            <div class="radio_focus"></div>
                        </div>
                        <label for=""><img src="assets/images/department/cleaning.png"></label>
                    </li>
                </ul>
            </div>


            <div class="box_item">
                <label></label>
                <label></label>
                <div class="item">
                    <button type="submit">
                        <img src="assets/images/setting/save.png">
                        SAVE
                    </button>
                </div>
            </div>


        </div>

    </div>

</div>