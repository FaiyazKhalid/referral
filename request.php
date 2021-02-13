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



?>
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
			<?php  if (isset($_SESSION['username'])) : ?>
			<?php echo $_SESSION['username']; ?>
			
			<?php
$servername='localhost';
$username='faiyazkh_money';
$password='9971217372Fk';
$dbname = "faiyazkh_money";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
<?
	 
    $username = $_SESSION['username'];
$id = $row['id'];
	 $ip = $row['ip'];
	 $points = $row['points'];
	 $date = $row['date'];
	 
    	$ref = mysqli_query($conn,"SELECT * FROM ref_users WHERE ip = '" . $username . "'");
        $refrow = mysqli_fetch_array( $ref );
	
	$t = $refrow['plan'];
	$m = $refrow['points'];
	$tax =  20;
	$RandomNum = rand(0, 9999);
	
if (($t == "100" and $m > "999")) {
$tr =  1000;
$idi = $refrow['id'];
$ipi = $refrow['ip'];
$total = $tr * ((100-$tax) / 100);

} elseif ($t == "500" and $m > "4999") {
$tr = 5000;
$idi = $refrow['id'];
$ipi = $refrow['ip'];
$total = $tr * ((100-$tax) / 100);
    
} elseif (($t == "1000" and $m > "9999")) {
$tr =  10000;
$total = $tr * ((100-$tax) / 100);
$idi = $refrow['id'];
$ipi = $refrow['ip'];
$total = $tr * ((100-$tax) / 100);

} elseif (($t == "5000" and $m > "49999")) {
$tr =  50000;
$idi = $refrow['id'];
$ipi = $refrow['ip'];
$total = $tr * ((100-$tax) / 100);

} elseif (($t == "10000" and $m > "99999")) {
$tr =  100000;
$idi = $refrow['id'];
$ipi = $refrow['ip'];
$total = $tr * ((100-$tax) / 100);

} else {
  echo "<h2>You are not Eligible!</h2>";
}
	
	 $username = $_SESSION['username'];
	
	 $ref = $refrow['points'] - $tr;
	 $idr = $refrow['id']. $RandomNum;
	 $date = $refrow['date'];
	 $sql = "INSERT INTO ref_history (his_id,his_username,his_earn,his_withdrawn,his_withdrawndate,his_receipt)
	 VALUES ('$idr','$ipi','$tr','$total','N/A','N/A')";
	 date_default_timezone_set("Asia/Kolkata");
         $username = $_SESSION['username'];
        $curr_timestamp = date("Y-m-d H:i:s");
    	$ref = mysqli_query($conn,"SELECT * FROM ref_users WHERE ip = '" . $username . "'");
        $refrow = mysqli_fetch_array( $ref );

	$t = $refrow['plan'];
	$m = $refrow['points'];
	
if (($t == "100" and $m > "999")) {
$tr =  1000;
} elseif ($t == "500" and $m > "4999") {
$tr = 5000;
} elseif (($t == "1000" and $m > "9999")) {
$tr =  10000;
} elseif (($t == "5000" and $m > "49999")) {
$tr =  50000;
} elseif (($t == "10000" and $m > "99999")) {
$tr =  100000;
} else {
  echo "<h2>You are Well!</h2>";
}

        
        $ref = $refrow['points'] - $tr;
        mysqli_query($conn,"UPDATE ref_users SET points='" . $ref . "' , updation_date='" . $curr_timestamp . "'  WHERE ip='" . $username . "'");
?>
<!doctype html>
<html lang="en" class="h-100">

<? include 'header-css.php'; ?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="thankyou">
    <!-- screen loader -->
    <? include 'loader.php'; ?>

  




    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
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
                <div class="ml-auto col-auto">
                    
                </div>
            </div>
        </header>

        <!-- page content start -->
        <div class="main-container h-100">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center my-3 mx-auto">
                        <div class="icon icon-120 bg-success-light text-success rounded-circle mb-3">
                            <i class="material-icons display-4">redeem</i>
                        </div>
                                         <h2>Congratulation!</h2>
                        <h3 class="text-secondary mb-3">Your transection has been processed. </h3>
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


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/thank_you.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:30:56 GMT -->
</html>
<?
 if (mysqli_query($conn, $sql)) {
	     header("Location:account.php");
}
?><?php endif ?>
