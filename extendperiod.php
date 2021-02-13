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

<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	    p.status {
  text-align: right;
}
	</style>
</head>
<body>
	<div class="header">
		<h2>MNB |Home Page</h2>
	</div>
	<div class="content">
<center><? include 'manu.php'?> </center>
		<!-- notification message -->
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

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<? include("server.php"); ?>
	<p class="status">	<? echo "Account Status: " . $row['status']; ?></p>


<?
	 
$username = $_SESSION['username'];
	 
$ref = mysqli_query($link,"SELECT * FROM ref_users WHERE ip = '$username'");
$refrow = mysqli_fetch_array( $ref );

$gino = mysqli_query($link,"SELECT * FROM ref_history WHERE his_username = '$username'");
$transection=mysqli_num_rows($gino);

$gino2 = mysqli_query($link,"SELECT * FROM ref_extenddate WHERE eusername = '$username'");
$period=mysqli_num_rows($gino2);
	
	$t = $refrow['plan'];
	$m = $refrow['points'];
	$date = $refrow['date'];
	
?>



<?
if (($transection > "0" ))  {

  include("core/one-transection.php");

} else {
    
  include("core/zero-transection.php");
}


	
	 mysqli_query($link,"INSERT INTO ref_extenddate (eusername, rdate, edate, deduct)
	 VALUES ('$eusername','$currentdate','$expirydate','$deduct')");

	 date_default_timezone_set("Asia/Kolkata");

	 $ref = $refrow['points'] - $deduct;
	 mysqli_query($link,"UPDATE ref_users SET points='" . $ref . "' , updation_date='" . $currentdate . "' , expirydate='" . $expirydate . "'  WHERE ip='" . $username . "'");
        
	 
	 if (mysqli_query($link, $sql)) {
	     header("Location:account.php");
}
?><?php endif ?>