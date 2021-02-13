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

<br>
<h2>Personal Details</h2>	
<br>  

<?
$username = $_SESSION['username'];

$result = mysqli_query($db,"SELECT * FROM users where username= '$username' limit 1");

?>
<?php
if (mysqli_num_rows($result) > 0) {
?>

 

<? include 'header-css.php'; ?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
    
    <!-- screen loader -->
    
    <? include 'loader.php'; ?>

    <!-- menu main -->
    
    <? include 'sidebar.php'; ?>


    <!-- menu main -->
    


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
       <? include 'header-pic.php'; ?>

 <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

        <!-- page content start -->
        <div class="container-fluid px-0">
            <div class="card overflow-hidden">
                <div class="card-body p-0 h-150">
                    <div class="background">
                        <img src="img/image10.jpg" alt="" style="display: none;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid top-70 text-center mb-4">
            <div class="avatar avatar-140 rounded-circle mx-auto shadow">
                <div class="background">
                    <img src="userprofile/avatars/<?php echo $row['avatar'];?>" alt="">
                </div>
            </div>
        </div>

        <div class="container mb-4 text-center text-white">
            <h6 class="mb-1"><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></h6>
            
        </div>

        <div class="main-container">
            <div class="container mb-4">
                <div class="row mb-4">
                    <div class="col-6">
                        <button class="btn btn-outline-default px-2 btn-block rounded"><span class="material-icons mr-1">qr_code_scanner</span> Share QR</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-default px-2 btn-block rounded"><span class="material-icons mr-1">receipt_long</span> Send Bill</button>
                    </div>
                </div>
    
                
             
            <div class="container">
                <div class="card mb-4">
                    <div class="card-header border-0 bg-none">
                        <div class="row">
                            <div class="col align-self-center">
                                <h6 class="mb-0">Profile</h6>
                            </div>
                            <div class="col-auto align-self-center">
                                 <td>
                                        <a href="update-profile.php?username=<?php echo $row["username"]; ?>" class="btn btn-default btn-sm rounded">Update</a>
                                    </td>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="all font-weight-medium">Subject</th>
                                    <th class="min-tablet font-weight-medium">Object</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Profile Created On:</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo date("F j, Y", strtotime($row["created_at"])); ?>,
<? echo date("g:i a", strtotime($row["date"]));?></p>
                                              
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["username"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
<?php
$result1 = mysqli_query($db,"SELECT * FROM userlog where username= '$username' limit 1");
if (mysqli_num_rows($result1) > 0) {
?>
<?
$i=0;
while($row1 = mysqli_fetch_array($result1)) {
?>
                                 
                                </tr>
                                <tr>
                                    <td>IP</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row1["userIp"]; ?></p>
                                              
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                
                                
                                <tr>
                                    <td>Last login</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row1["loginTime"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
<?php
$i++;
}
?>
<?php
}
else{
    echo "<center>Login again to view last seen and IP.</center>";
}
?>                                  
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["fname"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["lname"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["email"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["phone"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                
                                 <tr>
                                    <td>Bank Name</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["bankname"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Bank IFSC</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["ifsc"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Account Holder Name</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["bankholder"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Account Number</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["bankaccount"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                        
<?php
$i++;
}
?>

<?php
}
else{
    echo "No result found";
}
?>

<?
$username = $_SESSION['username'];

$result = mysqli_query($db,"SELECT * FROM ref_users where ip= '$username'");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
    
     <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
                        
                        
                        <table class="table mb-0">
                            <thead><br>
<h3>Account Details</h3>	
<br>  
                                <tr>
                                    <th class="all font-weight-medium">Subject</th>
                                    <th class="min-tablet font-weight-medium">Object</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>My Referral ID:</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["myrefid"]; ?></p>
                                              
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Plan</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["plan"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                 
                                </tr>
                                <tr>
                                    <td>Amount</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["points"]; ?></p>
                                              
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Act- Date:</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["date"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                 
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["status"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Last Update</td>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="mb-0"><?php echo $row["updation_date"]; ?></p>
                                               
                                            </div>
                                        </div>
                                    </td>
                                
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>


<?php

}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>   
                   
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">App Services</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                             <a href="login.php" class="list-group-item list-group-item-action border-color">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 bg-danger-light text-danger rounded">
                                            <span class="material-icons">power_settings_new</span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center pl-0">
                                        <h6 class="mb-1">Logout</h6>
                                        <p class="text-secondary">Logout from the application</p>
                                    </div>
                                </div>
                            </a>
                        </div>
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


    <!-- page level custom script -->
    <script src="js/app.js"></script>
    
</body>


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:29:16 GMT -->
</html>
