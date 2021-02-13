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



<?
$username = $_SESSION['username'];
if(count($_POST)>0) {
mysqli_query($db,"UPDATE users set fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "',  email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', phone='" . $_POST['bankname'] . "', ifsc='" . $_POST['ifsc'] . "', bankholder='" . $_POST['bankholder'] . "', bankaccount='" . $_POST['bankaccount'] . "' WHERE username='$username'");
$message = "Record Modified Successfully";
}
?> 
 <!doctype html>
<html lang="en" class="h-100">


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:29:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Finwallapp - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
    <link rel="icon" href="img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="profile">
    <!-- screen loader -->
   <? include 'loader.php'; ?>
 <? include 'sidebar.php'; ?>


    <!-- menu main -->
   


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <? include 'header-pic.php'; ?>
        
 <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Update Profile Details</h6>
                    </div>
                    <div class="card-body">
                        <form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="fname" value="<?php echo $row['fname']; ?>">
                            <label class="form-control-label">First Name</label>
                          
                        </div>
                      
                       <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="lname" value="<?php echo $row['lname']; ?>">
                            <label class="form-control-label">Last Name</label>
                         
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="email" value="<?php echo $row['email']; ?>">
                            <label class="form-control-label">Email</label>
                        
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="phone" value="<?php echo $row['phone']; ?>">
                            <label class="form-control-label">Phone</label>
                           
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="bankname" value="<?php echo $row['bankname']; ?>">
                            <label class="form-control-label">Bank Name</label>
                           
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="ifsc" value="<?php echo $row['ifsc']; ?>">
                            <label class="form-control-label">IFSC</label>
                           
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="bankholder" value="<?php echo $row['bankholder']; ?>">
                            <label class="form-control-label">Account Holder Name</label>
                           
                        </div>
                        
                        <div class="form-group float-label active">
                            <input type="text" class="form-control is-valid" name="bankaccount" value="<?php echo $row['bankaccount']; ?>">
                            <label class="form-control-label">Account Number</label>
                           
                        </div>
                      <br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-default btn-sm rounded">
                    </div></form>
                </div>
                
                </div>

<div class="container">
               
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


    <!-- page level custom script -->
    <script src="js/app.js"></script>
    
</body>


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:29:16 GMT -->
</html>




	
