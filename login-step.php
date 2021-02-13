<?php include('server.php') ?>

<? include 'header-css.php'; ?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    
<!-- screen loader -->
    
<? include 'loader.php'; ?>

<!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                   
                </div>
                <div class="ml-auto col-auto align-self-center">
                    <a href="signup.php" class="text-white">
                        Sign up
                    </a>
                </div>
            </div>
    </header>
        
        
    <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="font-weight-normal mb-5">Login</h2>
                            	<form method="post" action="login-step.php">
                            <div class="form-group float-label active">
                                	<?php include('errors.php'); ?>
                                <input type="text" class="form-control text-white" name="username">
                                <label class="form-control-label text-white">Username</label>
                            </div>
                            <div class="form-group float-label position-relative">
                                <input type="password" class="form-control text-white " name="password">
                                <label class="form-control-label text-white">Password</label>
                            </div>  
                            <p class="text-right"><a href="forgot_password.php" class="text-white">Forgot Password?</a></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
                <button type="submit" class="btn btn-default rounded btn-block" name="login_user">Login</a>
            </div>
        </div>
    </div></form>


    <!-- Required jquery and libraries -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="js/main.js"></script>
    <script src="js/color-scheme-demo.js"></script>


    <!-- page level custom script -->
    <script src="js/app.js"></script>
    
</body>


</html>
