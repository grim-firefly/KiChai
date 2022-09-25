<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="aboutUs.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>



  <body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <span class="navbar-text">
          <div class="logo d-flex">
            <a href="#"
              ><img class="brand-logo" src="image/logo.svg" alt="Brand-logo"
            /></a>

            <div class="category-button mt-1 ml-4">
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle font-weight-bold"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </span>

        <span class="navbar-text d-flrx">
          <a href="#">
            <button type="button" class="btn btn-dark mr-3 font-weight-bold">
              Log In
            </button>
          </a>
          <a href="#">
            <button type="button" class="btn btn-danger font-weight-bold">
              Sign Up
            </button>
          </a>
        </span>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="hap-text-area textaereapadding">
          <div class="middle-content my-5">
            <h1 class="single-block-subheading">For artists,by artists</h1>
            <br />
            <p class="single-block-content">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
              nisi, debitis, neque faminima rem hic qui, officia dolore
              obcaecati nihil magni? Animi amet assumenda officia aliquam
              laborum eos molestiae est, nemo eum facere, fuga dolor soluta
              consectetur velit, sapiente quod quam facilis reprehenderit eius?
              Suscipit!
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
          <img
            class="card-img-top"
            src="image/profile1.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Ismail Hossain</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
          <img
            class="card-img-top"
            src="image/profile2.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Sajid</h5>
            <p class="card-text">
              Backend developer && Web penetration tester
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
          <img
            class="card-img-top"
            src="image/profile1.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Mehedi</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="card">
          <img
            class="card-img-top"
            src="image/profile2.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Sultan Tahsin Bey</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
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
            <a href="#"
              ><img class="mr-4" src="image/logo-facebook.svg" alt=""
            /></a>
            <a href="#"
              ><img class="mr-4" src="image/logo-youtube.svg" alt=""
            /></a>
            <a href="#"
              ><img class="mr-4" src="image/logo-twitter.svg" alt=""
            /></a>
            <a href="#"
              ><img class="mr-4" src="image/logo-linkedin.svg" alt=""
            /></a>
            <a href="#"
              ><img class="mr-4" src="image/logo-instagram.svg" alt=""
            /></a>
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
  </body>
</html>
