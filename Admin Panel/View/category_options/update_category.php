<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\Category\Category;

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = new Category();
    echo $category->update($id,$name);
    
}
