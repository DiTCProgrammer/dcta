<?php
// Start the session
//session_start();
$user_id = isset($_SESSION['userid']) ? $_SESSION['userid'] : '';
include 'includes/setting.php';
$fn = new Setting();
$data = $fn->getData($user_id);
?>
<div class="company_profile">
    <h1 class="title">SETTINGS</h1>
    <h2 class="title"><img src="assets/images/setting/profile.png" alt=""><label>Company Profile</label></h2>
    <form action="models/setting_company_profile.php" method="post" enctype="multipart/form-data">
        <div class="box_form">
            <!--- ITEM Company Nam--->
            <div class="box_item">
                <label>Company Name</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[name]" value="<?php echo $data[0]->name; ?>">
                </div>
            </div>

            <!--- ITEM Tax ID No--->
            <div class="box_item">
                <label>Tax ID No</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[tax_id]" value="<?php echo $data[0]->tax_id; ?>">
                </div>
            </div>

            <!--- ITEM Address--->
            <div class="box_item">
                <label>Address</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[address]" value="<?php echo $data[0]->address; ?>">
                </div>
            </div>

            <!--- ITEM Tel--->
            <div class="box_item">
                <label>Tel</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[tel]" value="<?php echo $data[0]->tel; ?>">
                </div>
            </div>

            <!--- ITEM Fax--->
            <div class="box_item">
                <label>Fax</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[fax]" value="<?php echo $data[0]->fax; ?>">
                </div>
            </div>

            <!--- ITEM Phone--->
            <div class="box_item">
                <label>Phone</label>
                <label>:</label>
                <div class="item">
                    <input type="text" name="form[phone]" value="<?php echo $data[0]->phone; ?>">
                </div>
            </div>

            <!--- ITEM Email--->
            <div class="box_item">
                <label>Email</label>
                <label>:</label>
                <div class="item">
                    <input type="email" name="form[email]" value="<?php echo $data[0]->email; ?>">
                </div>
            </div>

            <!--- ITEM Website--->
            <div class="box_item">
                <label>Website</label>
                <label>:</label>
                <div class="item">
                    <input type="url" name="form[website]" value="<?php echo $data[0]->website; ?>">
                </div>
            </div>


            <!--- ITEM Image--->
            <div class="box_item">
                <label>Logo</label>
                <label>:</label>
                <div class="item">
                    <div class="box_file_img">
                        <input type="text" readonly="readonly" class="show_name_img">
                        <input type="file" name="form[logo]">
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
                            <?php if ($data[0]->logo): ?>
                                <img src="<?php echo $data[0]->logo; ?>" alt="logo" />
                            <?php endif; ?>
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

            <input type="hidden" id="user_id" name="form[user_id]" value="<?php echo $user_id; ?>" />

        </div>
    </form>
</div>