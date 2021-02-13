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

		<?php  if (isset($_SESSION['username'])) : ?>
<?php echo $_SESSION['username']; ?>


<?php
$username='faiyazkh_money';
$password='9971217372Fk';
$conn=mysqli_connect($url,$username,$password,"faiyazkh_money");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>


<!doctype html>
<html lang="en" class="h-100">


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:30:57 GMT -->


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
                <div class="card mb-4">
                    <div class="card-header border-0 bg-none">
                        <div class="row">
                            <div class="col align-self-center">
                          
                                <h6 class="mb-0">Transection History</h6>
                            </div>
                            <div class="col-auto align-self-center">
                                <button class="btn btn-default btn-sm rounded">
                                    Export
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive"><?
$ip = $_SESSION['username'];
$r = mysqli_query($conn,"SELECT * FROM ref_history WHERE his_username = '$ip'  ORDER BY `id` DESC");
?>

<?
if (mysqli_num_rows($r) > 0) {
?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Request ID</th>
                                        <th scope="col">Username</th>
                                       
                                        <th scope="col">Amount</th>
                                        <th scope="col">Tax</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Requested On</th>
                                        <th scope="col">Credit Date</th>
                                        <th scope="col">Receive Date</th>
                                        <th scope="col">Receipt</th>
                                        <th scope="col">Status</th>
                                        
                                    </tr>
                                </thead>
<?php
$counter=1;
$i=0;
while($row = mysqli_fetch_array($r)) {
?>
                                <tbody>
                                    <tr>
                                        
                                        
<th scope="row"><?php echo $counter++ ; ?></th>	
<td><?php echo $row["his_id"]; ?></td>
<td><?php echo $row["his_username"]; ?></td>

<td><?php echo $row["his_earn"]; ?></td>
<td>GST 18% / P.Fee 2%</td>
<td><?php echo $row["his_withdrawn"]; ?></td>
<td><? echo date("d-m-Y", strtotime($row["his_date"]));?></td>
<td><?php $date = $row["his_date"]; echo date('d-m-Y', strtotime($date .' +3 day')); ?></td>
<td><?php echo $row["his_withdrawndate"]; ?></td>
<td><?php echo $row["his_receipt"]; ?></td>
<td>Processed</td>


                                    </tr>
                                    
                                </tbody>
<?php
$i++;
}
?>
                            </table>
<?php
}
else{
    echo "<center>No Transection</center>";
}
?>                            
                            
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


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:30:57 GMT -->
</html>
<?php endif ?>