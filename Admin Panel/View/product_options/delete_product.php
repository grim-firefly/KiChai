<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\Product\Product;

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $category = new Product();
    echo $category->delete($id);

    // header('Location: categoryphp');
}
