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

<?php
if ($row['ifsc']) {
        
echo '<script type="text/javascript">
           window.location = "add-bank.php"
      </script>'; 
?>   
                                    
<?php }

else

echo '<script type="text/javascript">
           window.location = "request.php"
      </script>'; 

?>
