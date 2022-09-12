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
	<?php
	session_start();
	include_once './../vendor/autoload.php';

	use kichaiAdmin\Category\Category;

	$categoryObj = new Category();
	$categories = $categoryObj->index();
	?>

</head>

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
						<a href="category.html" class="sidebar-button active"><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
							Category</a>
					</div>
					<!-- sidebar button containing list  -->
					<div class="sidebar-list-container">
						<button class=" sidebar-button collapsed" data-bs-target="#usersection" data-bs-toggle="collapse" aria-controls="usersection" aria-expanded="true">
							<i class="fa-solid fa-user sidebar-button-left-icon"></i>
							Users<i class="fa-solid fa-circle-chevron-down sidebar-button-icon "></i>
						</button>
						<ul class="sidebar-list collapse " id="usersection">


							<li class="sidebar-list-item">
								<a href="user.html">
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
					<h1>Category</h1>
				</div>
				<div class="col-5">

				</div>
			</div>


			<div class="container-fluid mt-1">

				<!-- ================add modal starts===================== -->
				<div class="modal fade" id="add-category" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Category</h5>
								<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="">
									<div class="input-box">
										<input id="create-inputbox" placeholder="Category Name" type="text" name="search" class="input-box-input" />
										<span class="line"></span>


									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-success">Save
									changes</button> -->
								<button class="animate-button" id="create-new-btn" data-bs-toggle="modal" data-bs-target="#add-category" data-bs-dismiss="modal">
									<i class="fa-solid fa-floppy-disk"></i>
									<span class="btn-animate-top"></span>
									<span class="btn-animate-right"></span>
									<span class="btn-animate-bottom"></span>
									<span class="btn-animate-left"></span>
									<div class="btn-text"> Save</div>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- ================add modal ends===================== -->


				<!-- ================Edit modal starts===================== -->
				<div class="modal fade" id="edit-category" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Category</h5>
								<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="">
									<div class="input-box">
										<input placeholder="Category Name" id="edit-inputbox" type="text" name="search" class="input-box-input" />
										<span class="line"></span>


									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-success">Save
									changes</button> -->
								<button class="animate-button" id="save-update-info-btn" data-bs-toggle="modal" data-bs-dismiss="modal">
									<i class="fa-solid fa-floppy-disk"></i>
									<span class="btn-animate-top"></span>
									<span class="btn-animate-right"></span>
									<span class="btn-animate-bottom"></span>
									<span class="btn-animate-left"></span>
									<div class="btn-text"> Save</div>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- ================Edit modal ends===================== -->


				<div class="add-new-category mb-1">
					<button class="animate-button" data-bs-toggle="modal" data-bs-target="#add-category">
						<i class="fa-solid fa-plus"></i>
						<span class="btn-animate-top"></span>
						<span class="btn-animate-right"></span>
						<span class="btn-animate-bottom"></span>
						<span class="btn-animate-left"></span>
						<div class="btn-text"> Add</div>
					</button>
				</div>
				<div class="row">
					<table class="table border table-hover" id="category-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Category</th>
								<th scope="col">Created at</th>
								<th scope="col">Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$slNo = 1;
							foreach ($categories as $category) {
							?>
								<tr>

									<th scope="row"><?= $slNo++ ?></th>
									<td><?= $category['category_name'] ?></td>
									<td><?= $category['created_at'] ?></td>
									<td>
										<input type="number" value="<?= $category['id'] ?>" name="id" hidden>
										<button class="btn btn-primary btn-sm edit-category-btn" data-bs-toggle="modal" data-bs-target="#edit-category">
											<i class="fa-solid fa-edit"></i>
										</button>

										<button class="btn btn-danger btn-sm delete-btn">
											<i class="fa-solid fa-trash"></i>
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


			// ! delete category dynamic 
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
							url: './category_options/delete_category.php',
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

			// ! edit category dynamic 
			$('.edit-category-btn').on('click', function() {
				let id = $(this).parent().find('input[name="id"]').val();
				let name = $(this).parent().parent().find('td:nth-child(2)');
				$('#edit-inputbox').val(name.text());
				$('#save-update-info-btn').on('click', function() {
					let new_name = $('#edit-inputbox').val();
					$.ajax({
						url: './category_options/update_category.php',
						type: 'POST',
						data: {
							update: true,
							id: id,
							name: new_name
						},
						success: function(data) {
							if (data == 1) {
								Swal.fire(
									'Updated!',
									'Your file has been updated.',
									'success'
								).then((result) => {
									if (result.isConfirmed) {
										$(name).text(new_name);
									}
								})
							} else {
								Swal.fire(
									'Error!',
									'Your file has not been updated.',
									'error'
								)
							}
						}
					});
				});
			});

			// ! create category dynamic 
			$('#create-new-btn').on('click', function() {
				let name = $('#create-inputbox').val();
				$.ajax({
					url: './category_options/create_category.php',
					type: 'POST',
					data: {
						create: true,
						name: name
					},
					success: function(data) {
						if (data == 1) {
							Swal.fire(
								'Created!',
								'Your file has been created.',
								'success'
							).then((result) => {
								if (result.isConfirmed) {
									location.reload();
								}
							})
						} else {
							Swal.fire(
								'Error!',
								'Your file has not been created.',
								'error'
							)
						}
					}
				});
			});

		});
	</script>
</body>

</html>