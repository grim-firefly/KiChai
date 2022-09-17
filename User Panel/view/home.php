<?php
session_start();
if (!isset($_SESSION['email'])) {
    session_start();
    $_SESSION['toast'] = 'Login required!';

    header('Location: ./login-signup.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/home.css" />

    <title>Home | KiChai?</title>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="left-side d-flex">
            <a class="navbar-brand" href="#"><img src="image/logo.svg" alt="" /></a>
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
                            <a class="dropdown-item" href="product-list.html">All Products</a>
                            <a class="dropdown-item" href="product-list.html">Drone</a>
                            <a class="dropdown-item" href="product-list.html">Laptop</a>
                            <a class="dropdown-item" href="product-list.html">SmartPhone</a>
                            <a class="dropdown-item" href="product-list.html">Play Station</a>
                            <a class="dropdown-item" href="product-list.html">Camera</a>
                            <a class="dropdown-item" href="product-list.html">Headphons</a>
                            <a class="dropdown-item" href="product-list.html">Keyboards</a>
                            <a class="dropdown-item" href="product-list.html">Mouse</a>
                            <a class="dropdown-item" href="product-list.html">Other</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-4 mr-4" href="about-us/aboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us/contactUs.html">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-side">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link button-cart" href="cart/cart.html">Your Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link button-profile ml-5" href="./user-profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Slide Section -->

    <section class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/camera.jpg" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Most Popular in 2022</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/speaker.jpg" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Recommended For you</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/phone.jpg" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Get Special Offer</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>

    <section class="mini-category">
        <h2>For you,</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/airpods.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Airpods</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/watch2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/google.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Google Assistant</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/old-camera.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">camera</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>

                <a href="product-list.html"><button type="button" class="btn btn-warning mt-4 ml-3">See More
                        ...</button></a>


            </div>
        </div>

        <h2 class="pt-5">New Items,</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/airpods.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Airpods</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Add to cart
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Congratulation!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Successfuly added to your cart.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Got
                                                it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/watch2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Add to cart
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Congratulation!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Successfuly added to your cart.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Got
                                                it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/google.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Google Assistant</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Add to cart
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Congratulation!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Successfuly added to your cart.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Got
                                                it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/old-camera.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">camera</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Add to cart
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Congratulation!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Successfuly added to your cart.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Got
                                                it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="product-list.html"><button type="button" class="btn btn-warning mt-4 ml-3">See More
                        ...</button></a>
            </div>
        </div>


        <h2 class="pt-5">Most Selling Items,</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/airpods.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Airpods</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/watch2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/google.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Google Assistant</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/old-camera.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">camera</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="product-details.html" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <a href="product-list.html"><button type="button" class="btn btn-warning mt-4 ml-3">See More
                        ...</button></a>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>