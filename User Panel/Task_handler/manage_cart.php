<?php

include_once './../vendor/autoload.php';


use kichaiUser\Product\Product;


$cartobj = new Product();
$cart = $cartobj->addtocart($_POST);
header('Location: ../view/product-details.php');

?>

