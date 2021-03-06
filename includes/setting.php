<?php

require 'mainfunction.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Setting extends DctaMain {

    public function UpdateData($data) {
        $conn = $this->connectDB();

        foreach ($data as $key => $item) {
            if ($key === 'user_id') {
                $id = $item['user_id'];
            } else {
                $row[$key] = $key . '=\'' . $item . '\'';
            }
        }

        $row = implode(',', $row);
        $sql = ' 
            UPDATE `config_company` 
            SET ' . $row . '
            WHERE id = ' . $id . ' 
        ';


        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }

    public function UploadImage($data, $id) {

        $target_dir = "images/setting/" . $id;
        if (!is_dir('../' . $target_dir)) {
            mkdir($target_dir);
        }

        $target_file = $target_dir . '/' . basename('companylogo.' . substr($data["name"]["logo"], -3));

        $uploadOk = 1;
//        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        $check = getimagesize($data["tmp_name"]["logo"]);

        if ($check !== false) {
//            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
//            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($data["tmp_name"]['logo'], '../' . $target_file)) {
                $image_path = $target_file;
            } else {
                $image_path = '';
            }
        }

        return $image_path;
    }

    public function getData($id) {
        $conn = $this->connectDB();

        $sql = 'SELECT * FROM `config_company` WHERE id=' . $id;

        if ($result = $conn->query($sql)) {

            /* fetch object array */
            while ($obj = $result->fetch_object()) {
                $row[] = $obj;
            }

            /* free result set */
            $result->close();
        }

        $conn->close();

        return $row;
    }

    public function getDepartment($start = null, $limit = null) {
        $conn = $this->connectDB();

        $sql = 'SELECT * FROM `data_department` WHERE `status_day` = 1';
        if ($start && $limit) {
            $sql .= 'LIMIT ' . $start . ',' . $limit;
        }

        if ($result = $conn->query($sql)) {

            /* fetch object array */
            while ($obj = $result->fetch_object()) {
                $row[] = $obj;
            }

            /* free result set */
            $result->close();
        }

        $conn->close();

        return $row;
    }

    public function getIcon($id) {
        $icon = '';
        switch ($id) {
            case '1':
                $icon = 'assets/images/department/account.png';
                break;
            case '2':
                $icon = 'assets/images/department/money.png';
                break;
            case '3':
                $icon = 'assets/images/department/seminar.png';
                break;
            case '4':
                $icon = 'assets/images/department/manage.png';
                break;
            case '5':
                $icon = 'assets/images/department/press.png';
                break;
            case '6':
                $icon = 'assets/images/department/IT.png';
                break;
            case '7':
                $icon = 'assets/images/department/human.png';
                break;
            case '8':
                $icon = 'assets/images/department/operetor.png';
                break;
            case '9':
                $icon = 'assets/images/department/service.png';
                break;
            case '10':
                $icon = 'assets/images/department/security.png';
                break;
            case '11':
                $icon = 'assets/images/department/cleaning.png';
                break;
        }
        
        return $icon;
    }

}
