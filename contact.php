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

        <div class="main-container">
            <!-- page content start -->



                  
                        <div class="card mb-4">
                            <div class="card-header">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabhome1230-tab" data-toggle="tab" href="#tabhome1230" role="tab" aria-controls="tabhome1230" aria-selected="false">
                                            About Company
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabhome2231-tab" data-toggle="tab" href="#tabhome2231" role="tab" aria-controls="tabhome2231" aria-selected="false">
                                            Legal Implications 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tabhome3233-tab" data-toggle="tab" href="#tabhome3233" role="tab" aria-controls="tabhome3233" aria-selected="true">
                                            Contact Details
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tabhome1230" role="tabpanel" aria-labelledby="tabhome1230-tab">
                                        <h6>Online Net Bank</h6>
                                        <p>Online Net Bank (Onet Bank) is a registered company situated in Noida, Uttar Pradesh. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tabhome2231" role="tabpanel" aria-labelledby="tabhome2231-tab">
                                        <h6>Legal Issues</h6>
                                        <p>All the transection related issues are directed to Online Net Bank.</p>
                                    </div>
                                    <div class="tab-pane active" id="tabhome3233" role="tabpanel" aria-labelledby="tabhome3233-tab">
                                        <h6>Communication</h6>
                                        <p>Tollfree Number: . </p><br />
                                        <p>Email: info@onetbank.com  </p><br />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                               All rights are reserved 2020
                            </div>
                        </div>     </div>
                                </div>
                            </div>
                            <div
                    </div>
                       <!-- footer-->
 <? include("footer-menu.php"); ?>
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

    <!-- PWA app service registration and works -->
    <script src="js/pwa-services.js"></script>
     <script src="pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="js/app.js"></script>
    
<?php endif ?>    