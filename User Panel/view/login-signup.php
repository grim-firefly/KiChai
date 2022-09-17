<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in | Sign up</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
    <script src="https://kit.fontawesome.com/67bb6a6c2a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <!-- log in form start  -->
    <div class="container" style="display: flex; justify-content: center">
        <div class="wrapper mx-auto mt-5 margin">
            <?php
      session_start();
      if (isset($_SESSION['toast'])) {
        echo $_SESSION['toast'];
        unset($_SESSION['toast']);
      }
      ?>
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title signup">Signup Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked />
                    <input type="radio" name="slide" id="signup" />
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">

                    <!-- Login start -->
                    <form action="../Task_handler/login.php" class="login" method="POST">
                        <div class="field">
                            <input type="text" name="email" placeholder="Email Address" required />
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="pass-link"><a href="#">Forgot password?</a></div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login" />
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="">Signup now</a>
                        </div>
                    </form>

                    <!-- login end -->

                    <!-- Signup form -->
                    <form action="../Task_handler/signup.php" class="signup" method="POST">
                        <div class="field">
                            <input type="text" placeholder="Username" name="username" required />
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Email Address" name="email" required />
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" name="password" required />
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm password" name="password2" required />
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup" />
                        </div>
                    </form>
                    <!--End Signup form -->
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = () => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    };
    loginBtn.onclick = () => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    };
    signupLink.onclick = () => {
        signupBtn.click();
        return false;
    };
    </script>
</body>

</html>