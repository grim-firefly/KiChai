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
	<script src="https://kit.fontawesome.com/67bb6a6c2a.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
include_once './../vendor/autoload.php';

use kichaiAdmin\Product\Product;
use kichaiAdmin\Category\Category;
use kichaiAdmin\User\User;
$productObj = new Product();
$products = $productObj->index();

$categoryObj = new Category();
$categories = $categoryObj->index();

$userObj= new User();
$productobj=new Product();
$categorieObj=new Category();
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
						<a href="index.php" class="sidebar-button active"><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
							DashBoard</a>
					</div>

					<div class="sidebar-only-button">
						<a href="category.php" class="sidebar-button"><i class="fa-solid fa-house-chimney sidebar-button-left-icon "></i>
							Category</a>
					</div>
					<!-- sidebar button containing list  -->
					<div class="sidebar-list-container">
						<button class=" sidebar-button collapsed" data-bs-target="#usersection" data-bs-toggle="collapse" aria-controls="usersection" aria-expanded="true">
							<i class="fa-solid fa-user sidebar-button-left-icon"></i> Users<i class="fa-solid fa-circle-chevron-down sidebar-button-icon "></i>
						</button>
						<ul class="sidebar-list collapse " id="usersection">


							<li class="sidebar-list-item">
								<a href="user.php">
									<i class="list-item-icon fa-solid fa-user-edit"></i>
									<span> User</span>
								</a>
							</li>
							<li class="sidebar-list-item">
								<a href="user-banned.php">
									<i class=" list-item-icon fa-solid fa-user-times"></i>
									<span>Banned User</span>
								</a>
							</li>
					</div>
					<div class="sidebar-only-button">
						<a href="product.php" class="sidebar-button  "><i class="fa-solid fa-cart-flatbed-suitcase sidebar-button-left-icon"></i>
							Products</a>
					</div>
					<!-- sidebar button containing list  -->

				</div>

			</div>
		</div>
		<!-- =================sidebar Ends====================== -->


		<!-- =================Main Body====================== -->

		<div class="col-md-11" id="sidebar-right-section">
			<div class="row mt-5">
				<div class="dashboard-card col-3 ">
					<div class="card-left-section">
						<i class="fa-solid fa-users"></i>
					</div>
					<div class="card-right-section">
						<div class="count">

							<h1><?=($userObj->CountUser())?></h1>
						</div>
						<div class="title">Total Clients</div>

					</div>
				</div>
				<div class="dashboard-card col-3 mx-1">
					<div class="card-left-section">
						<i class="fa-solid fa-rectangle-list"></i>
					</div>
					<div class="card-right-section">
						<div class="count">

						<h1><?=($categorieObj->CountCategory())?></h1>

						</div>
						<div class="title">Total Categories</div>

					</div>
				</div>
				<!-- <div class="dashboard-card col-3 mx-1">
					<div class="card-left-section">
						<i class="fa-solid fa-sack-dollar"></i>
					</div>
					<div class="card-right-section">
						<div class="count">
							<h1>9999</h1>
						</div>
						<div class="title">Total Sold</div>

					</div>
				</div> -->
				<div class="dashboard-card col-3">
					<div class="card-left-section">
						<i class="fa-solid fa-cart-shopping"></i>
					</div>
					<div class="card-right-section">
						<div class="count">
						<h1><?=($productobj->CountProduct())?></h1>
						</div>
						<div class="title">Total Products</div>

					</div>
				</div>

			</div>
			<div class="container">
				<div class="row mt-5" style="margin-top:100px !important;">
					<div class="col-md-3">
						<div>
							<p>New Products Added :</p>
						</div>
						<div>
							<p>New User increase This Year :</p>
						</div>
						<div>
							<p>Seles increase This Year :</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
						</div>
						<div class="progress mt-4">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">35%</div>
						</div>
						<div class="progress mt-4" style="margin-top:28px !important ;">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-6">
					<canvas id="sellchart" style="width:100%;max-width:700px"></canvas>
				</div>
				<div class="col-md-6">
					<canvas id="userchart" style="width:100%;max-width:700px;"></canvas>
				</div>
			</div>

		</div>
	</div>

	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="js/jquery/jquery-3.6.0.min.js"></script>
	<!-- // chart -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
	</script>
	<script>
		$(document).ready(function() {
			// search box
			let node = $('#input-search-box');
			$(node).on('focus', function() {
				$(node).next('.line').css('left', 0);
			}).on('focusout', function() {
				$(node).next('.line').css('left', '-120%');

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

		});




		(function userchart() {
			var xValues = ["Dhaka", "Gazipur", "Narsingdi", "Tangail", "Others"];
			var yValues = [55, 49, 44, 24, 15];
			var barColors = [
				"#F44336",
				"#AB47BC",
				"#E91E63",
				"#42A5F5",
				"#FFEE58"
			];

			new Chart("userchart", {
				type: "pie",
				data: {
					labels: xValues,
					datasets: [{
						backgroundColor: barColors,
						data: yValues
					}]
				},
				options: {
					title: {
						display: true,
						text: "Clients Location"
					}
				}
			});
		})();


		(function sellchart() {
			var xValues = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
			var yValues = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 90, 70];

			new Chart("sellchart", {
				type: "line",
				data: {
					labels: xValues,
					datasets: [{
						fill: false,
						lineTension: 0,
						backgroundColor: "rgba(0,0,255,1.0)",
						borderColor: "rgba(0,0,255,0.1)",
						data: yValues
					}]
				},
				options: {
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							ticks: {
								min: 0,
								max: 100
							}
						}],
					},
					title: {
						display: true,
						text: "Sell Increase in percentage"
					}
				}
			});
		})();
	</script>
</body>

</html>