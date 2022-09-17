<?php 
include_once '../../vendor/autoload.php';
use kichaiAdmin\User\User;

if(isset($_POST['banned'])){
    $id = $_POST['id'];
    $users = new User();
    echo $users->bannThisUser($id);

    // header('Location: categoryphp');
}
