<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\User\User;

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $users = new User();
    echo $users->delete($id);

    // header('Location: categoryphp');
}
