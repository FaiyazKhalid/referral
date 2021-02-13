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

<?php  if (isset($_SESSION['username'])) : ?>


<?
$username = $_SESSION['username'];
if(count($_POST)>0) {
mysqli_query($db,"UPDATE users set bankname='" . $_POST['bankname'] . "', ifsc='" . $_POST['ifsc'] . "', bankholder='" . $_POST['bankholder'] . "', bankaccount='" . $_POST['bankaccount'] . "' WHERE username='$username'");
$message = "Bank account updated successfully";
}

?>








<!doctype html>
<html lang="en" class="h-100">



<? include 'header-css.php'; ?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    
    <!-- screen loader -->
    
    <? include 'loader.php'; ?>

    <!-- menu main -->
    





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
                    <a class="navbar-brand" href="index.php">
                        <h5 class="mb-0">Add Bank Account</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto">
                    
                </div>
            </div>
        </header>

        <div class="main-container">
          
            <div class="container mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="radio" name="paynow" class="custom-control-input" id="pay3" checked="">
                                    <label class="custom-control-label" for="pay3"></label>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <h6 class="subtitle mb-0">Add Bank Account</h6>
                            </div>
                        </div>
                    </div><center><div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;"></center>
                    <div class="card-body">
                         <form name="frmUser" method="post" action="">
                        <div class="form-group float-label active">
                            <input type="text" class="form-control" name="bankname" value="<?php echo $row['bankname']; ?>" required>
                            <label class="form-control-label">Bank Name</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control" name="ifsc" value="<?php echo $row['ifsc']; ?>" required>
                            <label class="form-control-label">IFSC</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control" name="bankholder" value="<?php echo $row['bankholder']; ?>" required>
                            <label class="form-control-label">Account Holder Name</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control" name="bankaccount" value="<?php echo $row['bankaccount']; ?>" required>
                            <label class="form-control-label">Account Number</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <input type="submit" name="save" value="Submit" class="btn btn-default mb-2 mx-auto rounded">
               
            </div></form><?php endif ?>
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


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/withdraw.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:29:28 GMT -->
</html>
