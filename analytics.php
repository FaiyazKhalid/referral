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
        <div class="container mt-3 mb-4 text-center">
            <h2 class="text-white">INR <?
date_default_timezone_set("Asia/Kolkata");
$currentdate = date('d-m-Y / H:i:s');
$expirydate = $row['expirydate'];

if( $currentdate > $expirydate ) {

echo "<center><h2><a href='extendperiod.php'>Extend Period</a></h2></center><br>";

} else {
    
    include("target-active.php");

    
}
?></h2>
            <p class="text-white mb-4">Total Balance</p>
        </div>

        <div class="container text-center overflow-hidden">
            <canvas id="mixedchartjs"></canvas>
        </div>
        <div class="main-container">

            <div class="container mb-4">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Income</p>
                                <h6>INR <? include 'rerreral-statistics-earn.php' ?></h6>
                                <p class="text-success">10% <span class="material-icons small">call_made</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart3" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Expense</p>
                                <h6>INR <? include 'rerreral-statistics-withdrawl.php' ?> </h6>
                                <p class="text-danger">-5% <span class="material-icons small">call_received</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-none d-md-block">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart4" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Deduct</p>
                                <h6><? include 'rerreral-statistics-deduct.php' ?></h6>
                                <p class="text-success">10% <span class="material-icons small">call_made</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-none d-md-block">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="doghnutchart5" class="mb-3"></canvas>
                                <p class="text-secondary mb-2">Re-active</p>
                                <h6><? include 'rerreral-statistics-activation.php' ?></h6>
                                <p class="text-danger">-5% <span class="material-icons small">call_received</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
           
           
    </main>

    <!-- footer-->
    <? include("footer-menu.php"); ?>

    <!-- color settings style switcher -->
    <div class="color-picker">
        <div class="row">
            <div class="col text-left">
                <div class="selectoption">
                    <input type="checkbox" id="darklayout" name="darkmode">
                    <label for="darklayout">Dark</label>
                </div>
                <div class="selectoption mb-0">
                    <input type="checkbox" id="rtllayout" name="layoutrtl">
                    <label for="rtllayout">RTL</label>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary btn-round colorsettings2"><span class="material-icons">close</span></button>
            </div>
        </div>

        <hr class="mt-2">
        <div class="colorselect">
            <input type="radio" id="templatecolor1" name="sidebarcolorselect">
            <label for="templatecolor1" class="bg-dark-blue" data-title="dark-blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor2" name="sidebarcolorselect">
            <label for="templatecolor2" class="bg-dark-purple" data-title="dark-purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor4" name="sidebarcolorselect">
            <label for="templatecolor4" class="bg-dark-gray" data-title="dark-gray"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor6" name="sidebarcolorselect">
            <label for="templatecolor6" class="bg-dark-brown" data-title="dark-brown"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor3" name="sidebarcolorselect">
            <label for="templatecolor3" class="bg-maroon" data-title="maroon"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor5" name="sidebarcolorselect">
            <label for="templatecolor5" class="bg-dark-pink" data-title="dark-pink"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor8" name="sidebarcolorselect">
            <label for="templatecolor8" class="bg-red" data-title="red"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor13" name="sidebarcolorselect">
            <label for="templatecolor13" class="bg-amber" data-title="amber"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor7" name="sidebarcolorselect">
            <label for="templatecolor7" class="bg-dark-green" data-title="dark-green"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor11" name="sidebarcolorselect">
            <label for="templatecolor11" class="bg-teal" data-title="teal"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor12" name="sidebarcolorselect">
            <label for="templatecolor12" class="bg-skyblue" data-title="skyblue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor10" name="sidebarcolorselect">
            <label for="templatecolor10" class="bg-blue" data-title="blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor9" name="sidebarcolorselect">
            <label for="templatecolor9" class="bg-purple" data-title="purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor14" name="sidebarcolorselect">
            <label for="templatecolor14" class="bg-gray" data-title="gray"></label>
        </div>

    </div>




    <!-- Required jquery and libraries -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- chart js-->
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>
    <script src="vendor/chartjs/chart-js-data.js"></script>

    <!-- Customized jquery file  -->
    <script src="js/main.js"></script>
    <script src="js/color-scheme-demo.js"></script>

    <!-- page level custom script -->
    <script src="js/app.js"></script>
</body>


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:25:53 GMT -->
</html>
<?php endif ?>