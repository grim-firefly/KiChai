<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\Product\Product;

if(isset($_GET['info'])){
    $id = $_GET['id'];
    $category = new Product();
   
	echo json_encode($category->getProduct($id));
    // header('Location: categoryphp');
}
