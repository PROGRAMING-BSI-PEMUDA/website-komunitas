<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home of Clothes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.3.1/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-5.8.2-web/css/all.min.css') ?>">
    <script src="jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="index.php" class="brand"><img src="<?= base_url('assets/img/klothee-2.png') ?>"></a>  
        <div class="menu">
            <ul class="submenu">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <button class="nav-bar"><i class="fas fa-bars"></i></button>
        </div>
    </div>  
    
    <!-- Header Slide Mobile -->
    <div class="mobile-header">
        <div class="wrapper">
            <a class="text-center" href="index.php"><img class="img-fluid w-50" src="img/klothee-1-white.png"></a>
            <ul class="responsive-menu mt-5">
                <a href="index.php"><li><i class="fas fa-home pr-3"></i>Home</li></a>
                <a href="product.php"><li><i class="fa fa-tshirt pr-3"></i>Product</li></a>
                <a href="about.php"><li><i class="fas fa-user-friends pr-3"></i>About</li></a>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md w-75 d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <!-- Default form login -->
            <form class="text-center p-4" action="#!">
                <p class="h4 mb-4">Sign in</p>

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="">Register</a>
                </p>

                <!-- Social login -->
                <p>or sign in with:</p>

                <a type="button" class="light-blue-text mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                    <i class="fab fa-github"></i>
                </a>
            </form>
            <!-- Default form login -->
                </div>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>