<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your cart | KiChai?</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="cart.css" />
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="left-side d-flex">
        <a class="navbar-brand" href="../home.html"
          ><img src="image/logo.svg" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Our Products
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="product-list.html"
                  >All Products</a
                >
                <a class="dropdown-item" href="product-list.html">Drone</a>
                <a class="dropdown-item" href="product-list.html">Laptop</a>
                <a class="dropdown-item" href="product-list.html">SmartPhone</a>
                <a class="dropdown-item" href="product-list.html"
                  >Play Station</a
                >
                <a class="dropdown-item" href="product-list.html">Camera</a>
                <a class="dropdown-item" href="product-list.html">Headphons</a>
                <a class="dropdown-item" href="product-list.html">Keyboards</a>
                <a class="dropdown-item" href="product-list.html">Mouse</a>
                <a class="dropdown-item" href="product-list.html">Other</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-4 mr-4" href="../about-us/aboutUs.html"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact-us/contactUs.php"
                >Contact us</a
              >
            </li>
          </ul>
        </div>
      </div>

      <div class="right-side">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link button-cart" href="#">Your Cart</a>
          </li>

          <li class="nav-item">
            <a class="nav-link button-profile ml-5" href="../user-profile.php"
              >Profile</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <main class="page">
      <section class="shopping-cart">
        <div>
          <div class="block-heading">
            <h2>Your Cart</h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                <div class="items">
                  <div class="product">
                    <div class="row">
                      <div class="col-md-2">
                        <img
                          class="img-fluid"
                          src="image/Dcl-core-i3-1.jpg"
                          height="30"
                        />
                      </div>
                      <div class="col-md-10">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-4 product-name">
                              <div class="product-name">
                                <a href="#"
                                  >DCL C483 8th Generation Intel Core i3 8130U
                                  Laptop</a
                                >

                              </div>
                            </div>

                            <div class="col-md-3 quantity">
                              <label for="quantity">Quantity:</label>

                              <input
                                id="quantity"
                                type="number"
                                value="1"
                                class="form-control quantity-input"
                              />
                            </div>
                            <div class="col-md-3 price">
                              <div>
                                <p>Price/BDT</p>
                              </div>
                              <div class="product-price">
                                <span>50000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="product">
                    <div class="row">
                      <div class="col-md-2">
                        <img
                          class="img-fluid"
                          src="image/DJI-Mini-3-Pro-with-DJI-RC.jpg"
                          height="30"
                        />
                      </div>
                      <div class="col-md-10">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-4 product-name">
                              <div class="product-name">
                                <a href="#">DJI Mavic 3 - Camera Drone</a>

                              </div>
                            </div>

                            <div class="col-md-3 quantity">
                              <input
                                id="quantity"
                                type="number"
                                value="1"
                                class="form-control quantity-input"
                              />
                            </div>
                            <div class="col-md-3 price">
                              <div class="product-price">
                                <span>150000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="product">
                    <div class="row">
                      <div class="col-md-2">
                        <img
                          class="img-fluid"
                          src="image/HP Pavilion - 15-cc055tx-1-500x500.png"
                          height="30"
                        />
                      </div>
                      <div class="col-md-10">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-4 product-name">
                              <div class="product-name">
                                <a href="#"
                                  >HP Pavilion 15-cc153tx Core i5 8th</a
                                >

                              </div>
                            </div>

                            <div class="col-md-3 quantity">
                              <input
                                id="quantity"
                                type="number"
                                value="1"
                                class="form-control quantity-input"
                              />
                            </div>
                            <div class="col-md-3 price">
                              <div class="product-price">
                                <span>70000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="product">
                    <div class="row">
                      <div class="col-md-2">
                        <img
                          class="img-fluid"
                          src="image/Realme-XT.jpg"
                          height="30"
                        />
                      </div>
                      <div class="col-md-10">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-4 product-name">
                              <div class="product-name">
                                <a href="#">Realme XT</a>

                              </div>
                            </div>

                            <div class="col-md-3 quantity">
                              <input
                                id="quantity"
                                type="number"
                                value="1"
                                class="form-control quantity-input"
                              />
                            </div>
                            <div class="col-md-3 price">
                              <div class="product-price">
                                <span>30000</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="summary">
                  <h3>Summary</h3>
                  <div class="summary-item">
                    <span class="text">Subtotal</span
                    ><span class="price">300000</span>
                  </div>
                  <div class="summary-item">
                    <span class="text">Discount</span
                    ><span class="price">150</span>
                  </div>
                  <div class="summary-item">
                    <span class="text">Shipping</span
                    ><span class="price">150</span>
                  </div>
                  <div class="summary-item">
                    <span class="text">Total</span
                    ><span class="price">300000</span>
                  </div>
                  <a href="../checkout/paymentmethod.html">
                    <button
                      type="button"
                      class="btn btn-primary btn-lg btn-block"
                    >
                      Checkout
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
  <script src="js/jsm.js"></script>
</html>
