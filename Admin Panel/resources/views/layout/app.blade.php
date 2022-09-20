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

<body>

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

    @yield('main_content')
</body>

</html>