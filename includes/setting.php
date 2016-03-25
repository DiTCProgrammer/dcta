<?php

require 'mainfunction.php';

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
        if (!is_dir('../'.$target_dir)) {
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
            if (move_uploaded_file($data["tmp_name"]['logo'], '../'.$target_file)) {
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

}
