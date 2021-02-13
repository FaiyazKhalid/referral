<?php
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];

$result = mysqli_query($link,"SELECT * FROM ref_users WHERE ip = '$ip'");
$ipa = $row['ip'];

$row = mysqli_fetch_array( $result );
$count=mysqli_num_rows($result);


function safe_encode($string) {
    return strtr(base64_encode($string), '+/=', '-_-');
}

function safe_decode($string) {
    return base64_decode(strtr($string, '-_-', '+/='));
}


if($count !== 0){
    echo "Congratulations!, " . $row['ip'] . "!<br>";
  
   
    echo "Paid by ID:" . $row['id'];

} else {
    if (isset($_GET['u']) && isset($_GET['v'])) {
         $refid = intval(safe_decode($_GET["u"]));
         $id = intval(safe_decode($_GET["v"]));
      
      date_default_timezone_set("Asia/Kolkata");

        $curr_timestamp = date("d-m-Y H:i:s");
      
        
        $ref1 = mysqli_query($link,"SELECT * FROM ref_users WHERE id = '" . $id . "'");
        $refrow1 = mysqli_fetch_array( $ref1 );
       
        

       $ipa = $refrow1['ip'];

	    $t = $refrow1['plan'];
	
if ($t == "100") {
$expirydate= date('d-m-Y H:i:s', strtotime($date .' +10 day'));

} elseif ($t == "500") {
$expirydate= date('d-m-Y H:i:s', strtotime($date .' +15 day'));

    
} elseif ($t == "1000") {
$expirydate= date('d-m-Y H:i:s', strtotime($date .' +20 day'));

} elseif ($t == "5000") {
$expirydate= date('d-m-Y H:i:s', strtotime($date .' +30 day'));

} elseif ($t == "10000") {
$expirydate= date('d-m-Y H:i:s', strtotime($date .' +60 day'));

} else {
  echo "<h2>Plan not selected for date!</h2>";
}




$t = $refrow1['plan'];
	
if ($t == "100") {
$cr = 100;

} elseif ($t == "500") {
$cr = 500;

    
} elseif ($t == "1000") {
$cr = 1000;

} elseif ($t == "5000") {
$cr = 5000;

} elseif ($t == "10000") {
$cr = 10000;

} else {
  echo "<h2>Plan not selected for credit!</h2>";
}	
       
        $ip = $_SESSION['username'];
        
        $ref = mysqli_query($link,"SELECT * FROM ref_users WHERE myrefid = '" . $refid . "'");
        $refrow = mysqli_fetch_array( $ref );
        $refpts = $refrow['points'] + $cr;
        mysqli_query($link,"UPDATE ref_users SET points='" . $refpts . "'  WHERE myrefid='" . $refid . "'");
        mysqli_query($link,"UPDATE `ref_users` SET  `status` =  'approved' , updation_date='" . $curr_timestamp . "' , expirydate='" . $expirydate . "'  WHERE id='" . $id . "'");

$result = mysqli_query($link,"SELECT * FROM ref_users WHERE id = '$id'");
$row = mysqli_fetch_array( $result );
$ip = $row['ip'];
mysqli_query($link,"UPDATE `users` SET  `pstatus` =  'approved' WHERE username = '" . $ip . "'");


       
    }
    $ip = $_SESSION['username'];
    header("Location:index.php");

}
?>

