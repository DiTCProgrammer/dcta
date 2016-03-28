<?php
include '../includes/setting.php';

$fn = new Setting();
$data = isset($_POST['form']) ? $_POST['form'] : '';
$user_id = isset($_POST['form']['user_id']) ? $_POST['form']['user_id'] : '';