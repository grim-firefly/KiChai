<?php
include_once '../../vendor/autoload.php';

use kichaiAdmin\Admin\Admin;

if (isset($_POST['username']) and isset($_POST['password'])) {
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$admin = new Admin();
	echo '<pre>';
	if ($admin->logIn($username, $password)) {
		$_SESSION['user']=$username;
		header('Location: ../index.php');
	} else {
		$_SESSION['msg'] = "error";
		header('Location: ../login.php');
	}
}
