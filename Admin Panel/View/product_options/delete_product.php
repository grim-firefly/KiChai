<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\Category\Category;

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $category = new Category();
    echo $category->delete($id);

    // header('Location: categoryphp');
}
