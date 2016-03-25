<div class="employee">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/employee.png" alt=""><label>Employee</label></h2>
    <h3 class="title">General Information</h3>

    <div class="box_form">
        <!--- ITEM First Name--->
        <div class="box_item">
            <label>First Name</label>
            <label>:</label>
            <div class="item">
                <input type="text" name="form[first_name]">
            </div>
        </div>

        <!--- ITEM Last Name--->
        <div class="box_item">
            <label>Last Name</label>
            <label>:</label>
            <div class="item">
                <input type="text" name="form[last_name]">
            </div>
        </div>

        <!--- ITEM Gender--->
        <div class="box_item">
            <label>Gender</label>
            <label>:</label>
            <div class="item">
                <div class="box_radio">
                    <input type="radio" name="form[gender]" value="1" checked="checked">
                    <div class="radio_focus"></div>
                </div>
                <label class="radio_text">Male</label>

                <div class="box_radio">
                    <input type="radio" name="form[gender]" value="2">
                    <div class="radio_focus"></div>
                </div>
                <label class="radio_text">Female</label>
            </div>
        </div>

        <!--- ITEM Identification Cart--->
        <div class="box_item">
            <label>Identification Cart</label>
            <label>:</label>
            <div class="item">
                <input type="text" name="form[identification_cart]">
            </div>
        </div>

        <!--- ITEM Date of Birth--->
        <div class="box_item">
            <label>Date of Birth</label>
            <label>:</label>
            <div class="item">
                <input type="text" id="birth_date" name="form[birth_date]" class="date" >
                <img class="icon_img" src="assets/images/setting/calen.png">
            </div>
        </div>

        <!--- ITEM Working Type--->
        <div class="box_item">
            <label>Working Type</label>
            <label>:</label>
            <div class="item">
                <div class="box_radio">
                    <input type="radio" name="form[working_type]" value="1" checked="checked">
                    <div class="radio_focus"></div>
                </div>
                <label class="radio_text">Monthly</label>

                <div class="box_radio">
                    <input type="radio" name="form[working_type]" value="2">
                    <div class="radio_focus"></div>
                </div>
                <label class="radio_text">Daily</label>
            </div>
        </div>

        <!--- ITEM Department--->
        <div class="box_item">
            <label>Department</label>
            <label>:</label>
            <div class="item">
                <select name="form[department]">

                </select>
            </div>
        </div>

        <!--- ITEM Position--->
        <div class="box_item">
            <label>Position</label>
            <label>:</label>
            <div class="item">
                <input type="text" name="form[position]">
            </div>
        </div>

        <!--- ITEM Start Working--->
        <div class="box_item">
            <label>Start Working</label>
            <label>:</label>
            <div class="item">
                <input type="text" id="start_working" name="form[start_working]" class="date" >
                <img class="icon_img" src="assets/images/setting/calen.png">
            </div>
        </div>

        <!--- ITEM Image--->
        <div class="box_item">
            <label>Image</label>
            <label>:</label>
            <div class="item">
                <div class="box_file_img">
                    <input type="text" readonly="readonly" class="show_name_img">
                    <input type="file" name="form[image]">
                    <div class="browe">
                        <img class="icon_img" src="assets/images/setting/folder.png">
                    </div>

                </div>
            </div>
        </div>

        <!--- ITEM --->
        <div class="box_item">
            <label></label>
            <label></label>
            <div class="item">
                <div class="box_show_img">
                    <div class="show_img">

                    </div>
                    <div class="show_text">
                        <div>150 * 180 px</div>
                        <div>max : 5 MB</div>
                    </div>
                </div>
            </div>
        </div>

        <!--- ITEM --->
        <div class="box_item">
            <label></label>
            <label></label>
            <div class="item">
                <div class="img_error"></div>
            </div>
        </div>

        <!--- ITEM --->
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