<?php

include_once './../vendor/autoload.php';

use kichaiUser\User\User;

$userObj = new User();
$user = $userObj->UserLogin($_POST);

header('Location: ../view/login-signup.php');