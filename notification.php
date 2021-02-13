<?php 
 include 'server.php';
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];


?>

<?php  if (isset($_SESSION['username'])) : ?>

<? include 'header-css.php'; ?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    
    <!-- screen loader -->
    
    <? include 'loader.php'; ?>

    <!-- menu main -->
    
    <? include 'sidebar.php'; ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
<? include 'header-pic.php'; ?>


   
        <!-- page content start -->
       
        <div class="main-container">
            <div class="container">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item bg-default-light" href="#">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-default">local_mall</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="row mb-1">
                                            <div class="col">
                                                <p class="mb-0"></p>
                                            </div>
                                            <div class="col-auto pl-0">
                                                <p class="small text-secondary"></p>
                                            </div>
                                        </div>
                                        <p class="small text-secondary">No new notification</p>
                                    </div>

                                </div>
                            </a>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </main>

  
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


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/notification.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:29:16 GMT -->
</html>

<?php endif ?>