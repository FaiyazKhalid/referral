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

        <div class="container mt-3 mb-4 text-center">
            <h2 class="text-white"><?
date_default_timezone_set("Asia/Kolkata");
$currentdate = date('d-m-Y H:i:s');
$expirydate = $row['expirydate'];

if( $currentdate > $expirydate ) {

echo " <center><h2><a href='extendperiod.php' class='btn btn-primary rounded m-2'>Extend Period</a></h2></center><br>";

} else {
    
    include("target-active.php");

    
}
?></h2>
            
        </div>

        <div class="main-container">
            <!-- page content start -->

            <div class="container mb-4 text-center">
                <div class="card bg-default-secondary shadow-default">
                    <div class="card-body">
                        <!-- Swiper -->
                        <div class="swiper-container addsendcarousel text-center">
                            <div class="swiper-wrapper mb-4">
<?php
    $Plan = $row['plan'];
   
 if ($row['points'] >= $Plan*10) {
     
     include("request_button.php");
    } else {
    include("locked.php");
    }
?>

                                <a href="account.php" class="swiper-slide text-white">
                                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">call_made</span></div>
                                    <p><small>Transection</small></p>
                                </a>
                                <a href="add-bank.php" class="swiper-slide text-white">
                                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">call_received</span></div>
                                    <p><small>Add Bank</small></p>
                                </a>
                                
                                <a href="#" class="swiper-slide text-white">
                                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">receipt</span></div>
                                    <p><small>Receipt</small></p>
                                </a>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
           
          
            <!-- Swiper ref-used.php -->
     <? include("ref-used1.php"); ?>
            <!-- Swiper ref-used.php -->
            
           <!-- Status -->

            <? include 'active-pending-status.php' ?>
            
            <? include 'active-expiry-status.php' ?>
        <!-- Status -->
            <!-- PWA add to home display -->
            <div class="container mb-4">
                <div class="card" id="addtodevice">
                    <div class="card-body text-center">
                        <div class="row mb-3">
                            <div class="col-10 col-md-4 mx-auto"><img src="img/install-app.png" alt="" class="mw-100"></div>
                        </div>

                        <h5 class="text-dark">Add to <span class="font-weight-bold">Home screen</span></h5>
                        <p class="text-secondary">See Onet Bank app as in fullscreen on your device.</p>
                        <button class="btn btn-sm btn-default px-4 rounded" id="addtohome">Download app</button>
                    </div>
                </div>
            </div>
            <!-- PWA add to home display -->

            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">card_giftcard</i>
                                </div>
                            </div>
                            <? $username = $_SESSION['username'];
$result = mysqli_query($db,"SELECT * FROM ref_users where ip= '$username'"); if (mysqli_num_rows($result) > 0) { ?>
<?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
                            <div class="col-auto align-self-center">
                                <h6 class="mb-1">My Referral ID: <?php echo $row["myrefid"]; ?></h6>
                                <p class="small text-secondary">Share your referal id and start earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1">Select Menu Type</h6>
                        <p class="text-secondary small">Open menu after selecting style</p>
                        <div class="row">
                            <div class="col-6 col-md-auto">
                                <div class="custom-control custom-switch">
                                    <input type="radio" name="menustyle" class="custom-control-input" id="menu-overlay" checked="">
                                    <label class="custom-control-label" for="menu-overlay">Overlay</label>
                                </div>
                            </div>
                            <div class="col-6 col-md-auto">
                                <div class="custom-control custom-switch">
                                    <input type="radio" name="menustyle" class="custom-control-input" id="menu-pushcontent">
                                    <label class="custom-control-label" for="menu-pushcontent">Reveal</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col text-center">
                        <h5 class="subtitle">Refferal Statistics</h5>
                        <p class="text-secondary">Take a look your hardwork</p>
                    </div>
                </div>
                <div class="row text-center mt-3">
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">card_giftcard</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal"><? include 'rerreral-statistics-earn.php' ?></h3>
                                <p class="text-secondary small">Earned</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">subscriptions</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal"><? include 'rerreral-statistics-withdrawl.php' ?></h3>
                                <p class="text-secondary small">Withdrawl</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">local_florist</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal"><? include 'rerreral-statistics-deduct.php' ?></h3>
                                <p class="text-secondary small">Deducted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="avatar avatar-60 bg-default-light rounded-circle text-default">
                                    <i class="material-icons vm md-36 text-template">location_city</i>
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal"><? include 'rerreral-statistics-activation.php' ?></h3>
                                <p class="text-secondary small">Re-activated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-4">
                <div class="card">
                    <div class="card-body text-left text-md-center">
                        <p class="text-secondary">About us</p>
                        <h4 class="mb-3">O NET BANK is a platform for financial transection between a account holder and its referral users. The sole purpose is to provide maximum benefit to account holder.</h4>
                        <h4 class="text-secondary font-weight-normal">We are at our best</h4>
                        <div class="row my-3 justify-content-center">
                            <div class="col-10 col-md-4 mx-auto"><img src="img/about.png" alt="" class="mw-100"></div>
                        </div>
                        <p class="text-secondary mt-3">
<h5 style="text-align: left;">General Rules:</h5>
<p style="text-align: left;"><br /> 1. Activation Charge: Plan Charge <br /> 2. Activation target: Minimum 10 account to unlimited <br /> 3. Target duration: Plan duration</p>
<h5 style="text-align: left;">Conditional Rules:</h5>
<p style="text-align: left;">1. Eligibility to use account: Activation by plan charges. <br /> 2. Eligibility to transfer: Minimum 10 activated account. <br /> 3. In case no target activation: Reactivation required by plan charges. <br /> 4. In case 1 to 4 activation: Not eligible to transfer <br /> 5. In case 1 to 4 activation and time expired: Not eligible to transfer and 1 activation charge will be deducted if time extended. <br /> 6. In case more than 6 activation but less than 10: Not eligible to transfer <br /> 7. In case more than 6 activation but less than 10 and time expired: 5 activation charges can be transferred or time can be extended by deducting one activation charge. <br /> 8. In case 10 activation: 10 activation charges can be transferred <br /> 9. In case after 10 activation amount transferred and time expired: Re-activation will be granted two times free of cost and third time charge will be deducted. <br /> 10. In case 11 or 12 or 13 0r 14 0r 15 account activated: 10 activation charges can be transferred rest will be carry forward to the next target achievement. <br /> 11. In case 11 or 12 or 13 0r 14 0r 15 account activated and time expired: Re-activation will be granted free of cost only two times. <br /> 12. In case time duration expired: 2 times extension free of cost third time one activation charge will be deducted from the account. <br /> 13. In case 0 activation and time duration over: Re-active by paying plan amount <br /> 14. Duration of deposit earned money: Within 3 days <br /> 15. In case request to plan amount change: Contact Onet Bank <br /> Note: Rules may be changed subject to the provision of tax laws and general laws time to time. All the active users are bound to obey the transection rules as well as government rules.</p>
                        <a href="#" class="btn btn-sm btn-default rounded">Read more</a>
                    </div>
                </div>
            </div>
           
        </div>
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

    <!-- Customized jquery file  -->
    <script src="js/main.js"></script>
    <script src="js/color-scheme-demo.js"></script>

    <!-- PWA app service registration and works -->
    <script src="js/pwa-services.js"></script>
     <script src="pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="js/app.js"></script>
</body>


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:25:45 GMT -->
</html>
<?php

}
?>

 <?php
}
else{
    echo "";
}
?>   




<?php endif ?>