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
</head>

<body>

    @include('layout.navbar')
    <div class="row">
        @include('layout.sidebar')
        @yield('main_content')
    </div>


    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/jquery/jquery-3.6.0.min.js"></script>
    <!-- // chart -->
    <script src="js/sweetalert/sweetalert.js"></script>
    @yield('Script')

</body>

</html>
