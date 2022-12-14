<?php

include_once './../vendor/autoload.php';

use kichaiUser\Category\Category;

$CategoryObj = new Category();

$CategoryList = $CategoryObj->index();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/welcome.css" />

    <title>Welcome | KiChai?</title>
</head>

<body>
    <!-- NavBar -->

    <nav class="navbar bg-light">
        <div class="container-fluid nav-container">
            <span class="navbar-text">
                <div class="logo d-flex">
                    <a href="home.html"><img class="brand-logo" src="image/logo.svg" alt="Brand-logo" /></a>

                    <div class="category-button mt-1 ml-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle font-weight-bold" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Products
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <?php foreach ($CategoryList as $Category) { ?>
                                <a class="dropdown-item"
                                    href="product-list.php?id=<?= $Category['id']; ?>"><?= $Category['category_name']; ?></a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </span>

            <span class="navbar-text d-flrx">
                <a href="./login-signup.php">
                    <button type="button" class="btn btn-dark mr-3 font-weight-bold">
                        Log In
                    </button>
                </a>
                <a href="./login-signup.php">
                    <button type="button" class="btn btn-danger font-weight-bold">
                        Sign Up
                    </button>
                </a>
            </span>
        </div>
    </nav>

    <!-- Self Branding -->

    <section class="self-branding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 large-branding">
                    <div class="elements-container">
                        <h3 class="hot-deal-text">HOT DEALS</h3>
                        <h2 class="special-offer">Special 50% Off</h2>
                        <h3>for our student community</h3>
                        <p class="normal-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit
                            impedit illum eos repudiandae expedita odit perspiciatis, sunt
                            praesentium sequi cupiditate non totam ipsum quaerat quisquam in
                            corporis.
                        </p>
                        <div class="buttons pt-4">
                            <a class="get-the-deal" href="#">Get The Deal</a>
                            <a class="see-other-promos" href="#">See Other Promos</a>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-3 sub-branding">
                    <h2 class="best-seller">Best Seller</h2>
                    <p>
                        <a href="checkout/paymentmethod.html">Price: 10,999 BDT</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="mini-cards mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 p-0">
                        <div class="card1 d-flex">
                            <img src="image/fast-icon.svg" alt="" />
                            <div class="text-container">
                                <h3>Fast Delivery</h3>
                                <p>Lorem ipsum, dolor sit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 p-0">
                        <div class="card1 d-flex">
                            <img src="image/secure-icon.svg" alt="" />
                            <div class="text-container">
                                <h3>Secure Payment</h3>
                                <p>Lorem ipsum, dolor sit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 p-0">
                        <div class="card1 d-flex">
                            <img src="image/best-icon.svg" alt="" />
                            <div class="text-container">
                                <h3>Best Quality</h3>
                                <p>Lorem ipsum, dolor sit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 p-0">
                        <div class="card1 d-flex m-0">
                            <img src="image/star-icon.svg" alt="" />
                            <div class="text-container">
                                <h3>Return Guarantee</h3>
                                <p>Lorem ipsum, dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="recommendation-card mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 p-0">
                        <div class="rocommend">
                            <div class="text-field">
                                <h1>Recomended For You</h1>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing <br />
                                    elit. Velit impedit illum eos.
                                </p>
                                <p><a href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="popular">
                            <div class="text-field">
                                <h1>Popular in 2022</h1>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing <br />
                                    elit. Velit impedit illum eos.
                                </p>
                                <p><a href="#">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="special-offers">
        <div class="text-sections mt-5 pt-5">
            <h2>Special Offers</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit
                impedit <br />
                illum eos repudiandae expedita odit perspiciatis,
            </p>
        </div>

        <div class="container-fluid">
            <div class="row offer-cards">
                <div class="col-4 d-flex align">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" src="image/sophia-stark-_buuYaWD6_U-unsplash.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Nothing Ear 1</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="product-details.html" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 d-flex align">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" src="image/tubagus-andri-maulana-16GqbwZPULU-unsplash.jpg"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Logitech mouse</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="product-details.html" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 d-flex align">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" src="image/c-d-x-PDX_a_82obo-unsplash.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Headphones</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="product-details.html" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>