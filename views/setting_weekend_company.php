
<?php
$days = array('Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
);
?>

<div class="weekend_company">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Week End</label></h2>
    <h3 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Department</label></h3>


    <div class="box_items">
        <table>
            <thead>
                <tr>
                    <th width="30%">Year</th>
                    <th width="70%">Week end</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>2559</td>
                    <td>Sunday</td>
                </tr>
                <tr>
                    <td>2558</td>
                    <td>Sunday</td>
                </tr>
                <tr>
                    <td>2557</td>
                    <td>Sunday,Monday</td>
                </tr>
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
                <ul>
                    <?php foreach ($days as $key => $val): ?>
                        <li>
                            <div class="box_checkbox">
                                <input type="checkbox" name="form[week_num][]" value="<?php echo $key; ?>">
                                <div class="checkbox_focus"><span class="fa fa-check"></span></div>
                            </div>
                            <label for=""><?php echo $val; ?></label>
                        </li>
                    <?php endforeach; ?>
                </ul>
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