<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\Category\Category;

if(isset($_POST['create'])){
   
    $name = $_POST['name'];
    $category = new Category();
    echo $category->create($name);

    // header('Location: categoryphp');
}
