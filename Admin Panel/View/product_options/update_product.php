<?php
include_once '../../vendor/autoload.php';

use kichaiAdmin\Product\Product;

print_r($_POST);

if (isset($_FILES['pimg'])) {
    $file_name = $_FILES['pimg']['name'];
    $file_tmp = $_FILES['pimg']['tmp_name'];
    $file_size = $_FILES['pimg']['size'];
    $file_type = $_FILES['pimg']['type'];
    if(empty($file_name) or empty($file_tmp) or !$file_size or empty($file_type)){
        
    }
    $file_ext = strtolower(pathinfo($_FILES['pimg']['name'])['extension']);
    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        // move_uploaded_file($file_tmp, "images/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
