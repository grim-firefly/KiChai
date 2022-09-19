<?php
session_start();
if (!isset($_SESSION['email'])) {
  session_start();
  $_SESSION['toast'] = 'Login required!';

  header('Location: ./login-signup.php');
}

?>

<!DOCTYPE php>
<php lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/user-profile.css" />

    <title>Profile | KiChai?</title>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="left-side d-flex">
            <a class="navbar-brand" href="home.php"><img src="image/logo.svg" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Product Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="product-list.php">All Products</a>
                            <a class="dropdown-item" href="product-list.php">Drone</a>
                            <a class="dropdown-item" href="product-list.php">Laptop</a>
                            <a class="dropdown-item" href="product-list.php">SmartPhone</a>
                            <a class="dropdown-item" href="product-list.php">Play Station</a>
                            <a class="dropdown-item" href="product-list.php">Camera</a>
                            <a class="dropdown-item" href="product-list.php">Headphons</a>
                            <a class="dropdown-item" href="product-list.php">Keyboards</a>
                            <a class="dropdown-item" href="product-list.php">Mouse</a>
                            <a class="dropdown-item" href="product-list.php">Other</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4 mr-4" href="about-us/aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us/contactUs.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-side">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link button-cart" href="cart/cart.php">Your Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link button-profile ml-5" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Profile Section -->

    <section class="profile-section">
        <div class="container-fluid d-flex profile">
            <div class="dp">
                <img src="image/person.jpg" alt="" />
            </div>

            <div class="text m-5">
                <h2>Name: [Undefined]</h2>
                <p>Username: <?= $_SESSION['username'] ?></p>
                <p>email: <?= $_SESSION['email'] ?></p>
                <p>Member since: [Undefined]</p>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <footer>
        <div class="footer-wrapper d-flex justify-content-between">
            <div class="first-row-section mr-5">
                <div class="logo d-flex">
                    <a href="#"><img src="image/logo-mini.svg" alt="brand-logo" /></a>
                    <div class="logo-texT">
                        <h2 class="font-weight-bold m-0 pt-2 pl-3">KI CHAI?</h2>
                        <p class="m-0 pl-3">Number 1 e-commerce site in Bangladesh</p>
                    </div>
                </div>

                <p class="paragraph mt-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit
                    impedit illum eos repudiandae expedita odit perspiciatis, sunt
                    praesentium sequi cupiditate non totam ipsum quaerat quisquam in
                    corporis odio nostrum. Eveniet ex magni sapiente assumenda quos
                    libero dolore quidem distinctio a epudiandae expedita odit
                    perspiciatis.
                </p>

                <h3 class="font-weight-bold mt-5">Follow Us</h3>

                <div class="icons mt-4">
                    <a href="#"><img class="mr-4" src="image/logo-facebook.svg" alt="" /></a>
                    <a href="#"><img class="mr-4" src="image/logo-youtube.svg" alt="" /></a>
                    <a href="#"><img class="mr-4" src="image/logo-twitter.svg" alt="" /></a>
                    <a href="#"><img class="mr-4" src="image/logo-linkedin.svg" alt="" /></a>
                    <a href="#"><img class="mr-4" src="image/logo-instagram.svg" alt="" /></a>
                </div>
            </div>
            <div class="second-row-section mr-5 mt-3">
                <p class="font-weight-bold">Product Categories</p>
                <div class="categories mt-4 d-flex justify-content-between">
                    <div class="categori1">
                        <p><a href="#">Drones</a></p>
                        <p>
                            <a href="#">Smartphones</a>
                        </p>
                        <p>
                            <a href="#">Cameras</a>
                        </p>
                        <p>
                            <a href="#">Laptops</a>
                        </p>
                        <p>
                            <a href="#">Desktops</a>
                        </p>
                        <p>
                            <a href="#">Monitors</a>
                        </p>
                        <p>
                            <a href="#">Smart Watches</a>
                        </p>
                    </div>

                    <div class="categori2">
                        <p><a href="#">Keyboards</a></p>
                        <p>
                            <a href="#">Mouses</a>
                        </p>
                        <p>
                            <a href="#">Speakers</a>
                        </p>

                        <p>
                            <a href="#">Play Stations</a>
                        </p>

                        <p>
                            <a href="#">Heeadphones</a>
                        </p>

                        <p>
                            <a class="font-weight-bold" href="#">View More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="third-row-section mt-3 ml-3">
                <p class="font-weight-bold">Quick Link</p>
                <div class="categories mt-4 d-flex justify-content-between">
                    <div class="categori1">
                        <p><a href="#">About Us</a></p>
                        <p>
                            <a href="#">Contact Us</a>
                        </p>
                        <p>
                            <a href="#">Products</a>
                        </p>
                        <p>
                            <a href="#">Login</a>
                        </p>
                        <p>
                            <a href="#">Sign Up</a>
                        </p>
                        <p>
                            <a href="#">FAQ</a>
                        </p>
                        <p>
                            <a href="#">Shipment</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="fourth-row-section mt-3 ml-5">
                <p class="font-weight-bold">Our Store</p>

                <img class="mt-2" src="image/map.png" alt="">

                <p>Location : Azampur, Dhaka, Bnagladesh</p>
                <p>
                    Phone: +880 1723 123456
                </p>

                <p>
                    Mail: support@kichai.com
                </p>
            </div>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</php>