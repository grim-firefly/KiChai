<?php

include_once './../vendor/autoload.php';


use kichaiUser\Product\Product;


$cartobj = new Product();
$cart = $cartobj->addtocart($_GET['id']);
header('Location: ../view/home.php');

?>

