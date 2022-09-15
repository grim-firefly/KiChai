<?php
include_once '../../vendor/autoload.php';

use kichaiAdmin\Product\Product;

$product = new Product();
print_r($_POST);

if (isset($_FILES['pimg'])) {
    $file_name = $_FILES['pimg']['name'];
    $file_tmp = $_FILES['pimg']['tmp_name'];
   if($product->productImgUpload( $file_name,$file_tmp)){
        $_POST['fileName'] = $file_name;

   }
}
$product->create($_POST);
header('Location: ../product.php');
