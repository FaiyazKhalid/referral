<?php 
	session_start();
	
	
	if (!isset($_SESSION['username'])) {
	
	}
	include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];
$result = mysqli_query($link,"SELECT * FROM ref_users WHERE ip = '$ip'");
$row = mysqli_fetch_array( $result );
$count=mysqli_num_rows($result);

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'faiyazkh_money', '9971217372Fk', 'faiyazkh_money');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	    
	    $Destination = 'userprofile/avatars';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }

		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$refid = mysqli_real_escape_string($db, $_POST['refid_2']);
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$ImageFile = mysqli_real_escape_string($db, $_POST['ImageFile']);

		// form validation: ensure that the form is correctly filled
		if (empty($refid)) { array_push($errors, "Reference ID is required"); }
		if (empty($fname)) { array_push($errors, "First Name is required"); }
		if (empty($lname)) { array_push($errors, "Last Name is required"); }
		if (empty($phone)) { array_push($errors, "Phone is required"); }

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
        
        

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		
$duplicate=mysqli_query($db,"select * from users where username='$username'");
if (mysqli_num_rows($duplicate)>0)
{
array_push($errors, "Username already exist.");
}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			
			
			
			$query = "INSERT INTO users (refid, fname, lname, phone, email, username, password, avatar, bankname, ifsc, bankholder, bankaccount) 
					  VALUES('$refid', '$fname', '$lname', '$phone', '$email', '$username', '$password','$NewImageName','n/a','n/a','n/a','n/a')";
			mysqli_query($db, $query);
			
			 date_default_timezone_set("Asia/Kolkata");

        $curr_timestamp = date("Y-m-d H:i:s");
        
        
      $myrefid = (rand(0000000,9999999));
      shuffle($myrefid);

$_SESSION['username'] = $username;
$ip = $username;
$plan = mysqli_real_escape_string($link, $_POST['plan']);
    $ip = $_SESSION['username'];
    mysqli_query($link,"INSERT INTO ref_users (myrefid, plan, ip, points, updation_date, expirydate) VALUES ('" . $myrefid . "', '$plan', '" . $ip . "', '0', '" . $curr_timestamp . "', 'notset')");
    header("Location:index.php");





			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = $password;
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";


$ret=mysqli_query($db,"SELECT * FROM users WHERE userName='$username'  and password='$password'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0)
{
$_SESSION['login']=$username; // hold the user name in session
$_SESSION['id']=$num['id']; // hold the user id in session
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
// query for inser user log in to data base
date_default_timezone_set("Asia/Kolkata");
$curr_timestamp = date("Y-m-d, g:i a");

mysqli_query($db,"insert into userlog(userId,username,userIp,loginTime) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip', '" . $curr_timestamp . "')");
}
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>