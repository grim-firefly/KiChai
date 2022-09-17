<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin | Ki CHai</title>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/button.css">
	<link rel="stylesheet" href="css/category.css">
	<script src="https://kit.fontawesome.com/67bb6a6c2a.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
include_once './../vendor/autoload.php';

use kichaiAdmin\User\User;

$userObj = new User();
$users = $userObj->index();
?>

<body>
	<!-- ========================Navbar starts======================== -->
	<nav class="navbar bg-white navbar-modify">
		<div class="container ">
			<div class="nav-title">Admin | Control Panel</div>
			<div class="middle-section">
				<div class="search-box">
					<input placeholder="Search Something" type="text" name="search" id="input-search-box" />
					<span class="line"></span>
					<button class="">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>

				</div>
			</div>
			<div class="navbar-right-section">

				<div class="chat">
					<a href="#"><i class="fa-solid fa-message"></i><span class="badge chat-badge">99</span> </a>
				</div>
				<div class="chat">
					<a href="#"><i class="fa-solid fa-bell"></i><span class="badge chat-badge">99</span> </a>
				</div>


				<div class="admin-menu dropdown">
					<a href="#" class="btn admin btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="admin-img" src="asset/images/navbar/user.jpg" alt="user" srcset="" />
					</a>

					<ul class="dropdown-menu nav-dropdown-menu " aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- ========================Navbar Ends======================== -->


	<div class="row">
		<!-- =================sidebar====================== -->

		<div class="col-md-1 " id="sidebar-left-section">

			<div class="sidebar">
				<a href="#" id="sidebar-toggler-btn"><i class="fa-solid fa-circle-chevron-right"></i></a>
				<div class="sidebar-main" id="sidebar">
					<!-- single sidebar button  -->
					<div class="sidebar-only-button">
						<a href="index.html" class="sidebar-button "><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
							DashBoard</a>
					</div>

					<div class="sidebar-only-button">
						<a href="category.html" class="sidebar-button "><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
							Category</a>
					</div>

					<!-- sidebar button containing list  -->
					<div class="sidebar-list-container">
						<button class="active sidebar-button collapsed" data-bs-target="#usersection" data-bs-toggle="collapse" aria-controls="usersection" aria-expanded="true">
							<i class="fa-solid fa-user sidebar-button-left-icon"></i>
							Users<i class="fa-solid fa-circle-chevron-down sidebar-button-icon "></i>
						</button>
						<ul class="sidebar-list collapse show " id="usersection">


							<li class="sidebar-list-item">
								<a href="user.html" class="active">
									<i class="list-item-icon fa-solid fa-user-edit"></i>
									<span> User</span>
								</a>
							</li>
							<li class="sidebar-list-item">
								<a href="user-banned.html">
									<i class=" list-item-icon fa-solid fa-user-times"></i>
									<span>Banned User</span>
								</a>
							</li>
					</div>

					<div class="sidebar-only-button">
						<a href="product.html" class="sidebar-button "><i class="fa-solid fa-cart-flatbed-suitcase sidebar-button-left-icon"></i>
							Products</a>
					</div>

				</div>

			</div>
		</div>
		<!-- =================sidebar Ends====================== -->


		<!-- =================Main Body====================== -->

		<div class="col-md-11" id="sidebar-right-section">
			<div class="row mt-3">
				<div class="col-4">

				</div>
				<div class="page-title col-3">
					<h1>Users</h1>
				</div>
				<div class="col-5">

				</div>
			</div>


			<div class="container-fluid mt-1">



				<div class="add-new-category mb-1">

				</div>
				<div class="row">
					<table class="table border table-hover" id="user-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">username</th>
								<th scope="col">email</th>
								<th scope="col">Created at</th>
								<th scope="col">Options</th>
							</tr>
						</thead>
						<tbody>



							<?php

							foreach ($users as $user) {
							?>
								<tr>
									<th scope="row"><?= $user['id'] ?></th>
									<td><?= $user['username'] ?></td>
									<td><?= $user['email'] ?></td>
									<td><?= $user['register_at'] ?></td>
									<td>

										<input type="text" name="id" value="<?= $user['id'] ?>" hidden>
										<button class="btn btn-danger btn-sm delete-btn">
											<i class="fa-solid fa-trash"></i>
										</button>
										<button class="btn btn-warning btn-sm ban-btn">
											<i class="fa-solid fa-ban"></i>
										</button>
									</td>
								</tr>
							<?php
							} ?>




						</tbody>
					</table>
				</div>

			</div>

		</div>
	</div>

	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="js/jquery/jquery-3.6.0.min.js"></script>
	<!-- // chart -->
	<script src="js/sweetalert/sweetalert.js"></script>
	<script>
		$(document).ready(function() {
			// search box 
			let node = $('#input-search-box');
			$(node).on('focus', function() {
				$(node).next('.line').css('left', 0);
			}).on('focusout', function() {
				$(node).next('.line').css('left', '-100%');

			});


			// sidebar toggle
			$("#sidebar-toggler-btn").on('click', function() {
				if ($("#sidebar").css("left") == "0px") {
					$("#sidebar").css("left", "-230px");
					$('#sidebar-toggler-btn').css("left", "10px");
					$('#sidebar-toggler-btn i').css("transform", "rotate(0deg)");
					$('#sidebar-right-section').removeClass('col-md-10');
					$('#sidebar-right-section').addClass('col-md-11');
					$('#sidebar-left-section').removeClass('col-md-2');
					$('#sidebar-left-section').addClass('col-md-1');
				} else {
					$("#sidebar").css("left", "0");
					$('#sidebar-toggler-btn').css("left", "230px");
					$('#sidebar-toggler-btn i').css("transform", "rotate(180deg)");

					$('#sidebar-right-section').removeClass('col-md-11');
					$('#sidebar-right-section').addClass('col-md-10');
					$('#sidebar-left-section').removeClass('col-md-1');
					$('#sidebar-left-section').addClass('col-md-2');


				}
			});

			// input box 
			$('.input-box-input').on('focus', function() {
				$(this).next('.line').css('left', 0);
			}).on('focusout', function() {
				$(this).next('.line').css('left', '-100%');

			});
			// delete 
			$('.delete-btn').on('click', function() {
				let id = $(this).parent().find('input[name="id"]').val();
				let node = $(this).parent().parent();
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: './user_options/delete_user.php',
							type: 'POST',
							data: {
								delete: true,
								id: id
							},
							success: function(data) {
								if (data == 1) {
									Swal.fire(
										'Deleted!',
										'Your file has been deleted.',
										'success'
									).then((result) => {
										if (result.isConfirmed) {
											$(node).remove();
										}
									})
								} else {
									Swal.fire(
										'Error!',
										'Your file has not been deleted.',
										'error'
									)
								}
							}
						});

						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
					}
				});
			});
			$('.ban-btn').on('click', function() {
				let id = $(this).parent().find('input[name="id"]').val();
				let node = $(this).parent().parent();
				Swal.fire({
					title: 'Are you sure?',
					text: "Though , You can revert this later",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, ban this user!'
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: './user_options/banned_user.php',
							type: 'POST',
							data: {
								banned: true,
								id: id
							},
							success: function(data) {
								if (data == 1) {
									Swal.fire(
										'banned!',
										'this user has been banned',
										'success'
									).then((result) => {
										if (result.isConfirmed) {
											$(node).remove();
										}
									})
								} else {
									Swal.fire(
										'Failed!',
										'Failed to this user has been banned permanently',
										'error'
									)
								}
							}
						});
						
					}
				});
			});

		});
	</script>
</body>

</html>