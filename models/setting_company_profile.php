<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../includes/setting.php';

$fn = new Setting();
$data = isset($_POST['form']) ? $_POST['form'] : '';
$user_id = isset($_POST['form']['user_id']) ? $_POST['form']['user_id'] : '';
$data['logo'] = $fn->UploadImage($_FILES['form'], $user_id);
$fn->UpdateData($data);
