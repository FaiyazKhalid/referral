<?php include('server.php') ?>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","faiyazkh_money","9971217372Fk","faiyazkh_money");
if(count($_POST)>0) {
$roll_no=$_POST[refid];
$result = mysqli_query($conn,"SELECT * FROM ref_users where myrefid='$roll_no' limit 1 ");
}
?>

<? include 'header-css.php'; ?>


<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">

<style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>


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
                    <a href="login.php" class="text-white">
                        Sign In
                    </a>
                </div>
            </div>
        </header>


        <div class="container h-100 text-white"><form method="post" action="signup.php" enctype="multipart/form-data" id="UploadForm">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">


                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            
                            <h2 class="font-weight-normal mb-5">Create new account</h2>
                            <center><?php include('errors.php'); ?></center>
                            <div class="form-group float-label active">
                                <input type="text" class="form-control text-white" name="refid" class="form-control" > 
                                <br>
                                <button type="submit" name="save"  class="btn btn-primary">Update Plan</button>
                                <br>
                                <label class="form-control-label text-white">Enter Referral ID</label>
                            </div>
<?
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
                            
                            <div class="form-group float-label position-relative"><label class="form-control-label text-white">Confirm ID</label><br>
                                <input type="text" class="form-control text-white "  name="refid_2" value="<?php echo $row["myrefid"]; ?>" readonly required>
                                
                            </div>
                            
                            <div class="form-group float-label position-relative"><label class="form-control-label text-white">Amount</label><br>
                                <input type="number" class="form-control text-white " name="plan" value="<?php echo $row["plan"]; ?>" readonly required>
                                
                            </div>
<?php
$i++;
}
?>                            
                            <div class="form-group float-label position-relative">
                                <input type="text" class="form-control text-white "  name="fname" value="<?php echo $fname; ?>" >
                                <label class="form-control-label text-white">First Name</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="text" class="form-control text-white " name="lname" value="<?php echo $lname; ?>" >
                                <label class="form-control-label text-white">Last Name</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="number" class="form-control text-white "  name="phone" value="<?php echo $phone; ?>" >
                                <label class="form-control-label text-white">Phone</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="email" class="form-control text-white " name="email" value="<?php echo $email; ?>">
                                <label class="form-control-label text-white">Email</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="text" class="form-control text-white "  name="username" value="<?php echo $username; ?>">
                                <label class="form-control-label text-white">Username</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="password" class="form-control text-white " name="password_1">
                                <label class="form-control-label text-white">Password</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input type="password" class="form-control text-white "  name="password_2">
                                <label class="form-control-label text-white">Confirm Password</label>
                            </div>
                            
                            <div class="form-group float-label position-relative">
                                <input name="ImageFile" class="form-control text-white " data-style="zoom-in"  type="file"/>
                                <label class="form-control-label text-white">Upload Photo</label>
                            </div>
                            
                            
                            <div class="form-group float-label position-relative">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Agree to terms and condition</label>
                                </div>
                            </div><button type="submit" class="btn btn-default rounded btn-block" name="reg_user">Register</button> 
                        </div>	<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
               
            </div>
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

</html>
