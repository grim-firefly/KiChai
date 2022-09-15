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
	<link rel="stylesheet" href="css/product.css">
	<script src="https://kit.fontawesome.com/67bb6a6c2a.js" crossorigin="anonymous"></script>

	<style>
		.select_field {
			width: 100%;
			padding: 10px 20px;
			background-color: transparent;
			border: 1px solid #f05532ea;
			border-radius: 6px;
		}

		.select_options {
			padding: 10px 20px;
			background-color: #FFF;
			border: 1px solid #f05532ea;
		}
	</style>
</head>
<?php
session_start();
include_once './../vendor/autoload.php';

use kichaiAdmin\Product\Product;
use kichaiAdmin\Category\Category;

$productObj = new Product();
$products = $productObj->index();

$categoryObj = new Category();
$categories = $categoryObj->index();
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
						<button class=" sidebar-button collapsed" data-bs-target="#usersection" data-bs-toggle="collapse" aria-controls="usersection" aria-expanded="true">
							<i class="fa-solid fa-user sidebar-button-left-icon"></i>
							Users<i class="fa-solid fa-circle-chevron-down sidebar-button-icon "></i>
						</button>
						<ul class="sidebar-list collapse show " id="usersection">


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
						<a href="product.html" class="sidebar-button active "><i class="fa-solid fa-cart-flatbed-suitcase sidebar-button-left-icon"></i>
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
					<h1>Products</h1>
				</div>
				<div class="col-5">

				</div>
			</div>

			<div class="container-fluid mt-1">

				<!-- ================add modal starts===================== -->
				<div class="modal fade" id="add-product" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Product</h5>
								<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="./product_options/create_product.php" method="POST" id="product-create" enctype="multipart/form-data">
									<div class="input-box">
										<input placeholder="title" type="text" class="input-box-input" name="Product-title" />
										<span class="line"></span>


									</div>
									<div class="input-box mt-3">
										<select name="category_id" id="category_id"  class="input-box-input select_field">

											<?php
											foreach ($categories as $category) {
											?>
												<option value="<?= $category['id'] ?>" class="select_options"><?= $category['category_name'] ?></option>
											<?php } ?>


										</select>
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<input placeholder="price" type="text" name="price" class="input-box-input" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<input placeholder="quantity" type="text" name="qty" class="input-box-input" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<input placeholder="product image" type="file" class="input-box-input " name="pimg" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<textarea type="file" class="input-box-description" name="product-description">
											product description
											</textarea>
										<span class="line"></span>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-success">Save
									changes</button> -->
								<button id="create-new-btn" class="animate-button" data-bs-toggle="modal" data-bs-target="#add-category" data-bs-dismiss="modal">
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
				<div class="modal fade" id="edit-product" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Product</h5>
								<button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="./product_options/update_product.php" method="POST" id="product-edit" enctype="multipart/form-data">
									<input type="number" value="" name="id" hidden>

									<div class="input-box">
										<label for="Product-title">Title</label>
										<input placeholder="title" type="text" class="input-box-input" name="Product-title" />
										<span class="line"></span>

									</div>
									<div class="input-box mt-3">
										<select name="category_id" id="category_id" class="input-box-input select_field">

											<?php
											foreach ($categories as $category) {
											?>
												<option value="<?= $category['id'] ?>" class="select_options"><?= $category['category_name'] ?></option>
											<?php } ?>


										</select>
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<label for="price">Price</label>

										<input placeholder="price" type="text" name="price" class="input-box-input" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<label for="qty">Quantity</label>

										<input placeholder="quantity" type="text" name="qty" class="input-box-input" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<label for="pimg">Product Image</label>

										<input placeholder="product image" type="file" class="input-box-input " name="pimg" />
										<span class="line"></span>
									</div>
									<div class="input-box mt-3">
										<label for="input-box-description">Description</label>

										<textarea type="file" class="input-box-description" name="product-description">
											product description
										</textarea>
										<span class="line"></span>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-success">Save
									changes</button> -->
								<button id="save-update-info-btn" class="animate-button" data-bs-toggle="modal" data-bs-target="#add-category" data-bs-dismiss="modal">
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
					<button class="animate-button" data-bs-toggle="modal" data-bs-target="#add-product">
						<i class="fa-solid fa-plus"></i>
						<span class="btn-animate-top"></span>
						<span class="btn-animate-right"></span>
						<span class="btn-animate-bottom"></span>
						<span class="btn-animate-left"></span>
						<div class="btn-text"> Add</div>
					</button>
				</div>
				<div class="row">
					<table class="table border table-hover" id="product-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Category</th>
								<th scope="col">Price</th>
								<th scope="col">Stock</th>
								<th scope="col">Created at</th>
								<th scope="col">Options</th>
							</tr>
						</thead>
						<tbody>


							<?php

							// ! product shows here
							foreach ($products as $product) {
							?>
								<tr>
									<th scope="row"><?= $product['id'] ?></th>
									<td> <img class style="width: 50px; height:50px;" src="../../uploads/products/<?= $product['product_img'] ?>" alt="product image" srcset=""> </td>
									<td><?= $product['title'] ?></td>
									<td><?= $categoryObj->getCategoryName($product['category_id'])['category_name'] ?></td>
									<td><?= $product['price'] ?></td>
									<td><?= $product['quantity'] ?></td>
									<td><?= $product['created_at'] ?></td>
									<td>
										<input type="number" value="<?= $product['id'] ?>" name="id" hidden>
										<button class="btn btn-primary btn-sm edit-product-btn" data-bs-toggle="modal" data-bs-target="#edit-product">
											<i class="fa-solid fa-edit"></i>
										</button>
										<button class="btn btn-danger btn-sm delete-btn">
											<i class="fa-solid fa-trash"></i>
										</button>
										<a href="product-view.html" class="btn btn-info btn-sm view-btn">
											<i class="fa-solid fa-eye text-white"></i>
										</a>

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



			$('.input-box-description').on('focus', function() {
				$(this).next('.line').css('left', 0);
			}).on('focusout', function() {
				$(this).next('.line').css('left', '-100%');

			});



			//! delete products
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
							url: './product_options/delete_product.php',
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

			// ! edit products
			$('.edit-product-btn').on('click', function() {
				let node = $(this);
				let id = $(this).parent().find('input[name="id"]').val();
				$('#product-edit').find('input[name="id"]').val(id);
				let title = $('#product-edit').children().find('input[name="Product-title"]');
				let price = $('#product-edit').children().find('input[name="price"]');
				let qty = $('#product-edit').children().find('input[name="qty"]');
				let category = $('#product-edit').children().find('select[name="category_id"]');
				
				let description = $('#product-edit').children().find('textarea[name="product-description"]');


				$.get('./product_options/get_product.php', {
					info: true,
					id: id
				}, function(data) {
					const obj = JSON.parse(data);
					$(title).val(obj[0].title);
					$(price).val(obj[0].price);
					$(qty).val(obj[0].quantity);
					$(description).val(obj[0].description);
					$(category).find(`option[value="${obj[0].category_id}"]`).attr('selected', true);

				});


				$(document).on('click', '#save-update-info-btn', function() {
					$('#product-edit').submit();
				});
			});

			//! add products
			$('#create-new-btn').on('click', function() {
				$("#product-create").submit();
			});
		});
	</script>
</body>

</html>