            <?php

$MERCHANT_KEY = "WE4OZTuK";
$SALT = "D76e4RWutG";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
        
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

        <!-- page content start -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary rounded m-2" data-toggle="modal" data-target="#exampleModalScrollable">
                            Pay to activate account
                        </button>
                   
    

    <!-- Modals  -->
  
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Payment Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
            
            
            
            
            
            
            
            
            
            


  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  
  <body onload="submitPayuForm()">
   
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
       
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

      
<?
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];
$id = $_SESSION['refid'];
$result = mysqli_query($link,"SELECT * FROM users WHERE username = '$ip'");


/*
* function to encode string
* accepts a string
* returns encoded string
*/
function safe_encode($string) {
    return strtr(base64_encode($string), '+/=', '-_-');
}
/*
* function to decode the encoded string
* accepts encoded string
* returns the original string
*/
function safe_decode($string) {
    return base64_decode(strtr($string, '-_-', '+/='));
}

if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) { 

?>

<?
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];
$records = mysqli_query($link,"SELECT * FROM ref_users WHERE ip = '$ip'"); // fetch data from database 


 
while($data = mysqli_fetch_array($records)) 
{ 
?> 
 
 <?php
$id = $row['refid'];
$data = $data['id'];


?> 

<input type="hidden"  name="surl" value="<? echo "" . $installdir . "/paid.php?u=" . safe_encode($id)  . "&v=" . safe_encode($data) ?>" />  
<input type="hidden" name="furl" value="<? echo "" . $installdir . "/cancelled.php"; ?>" />  

<?php 
} 
?> 

<?php
$i++;
}

}
else{
    echo "No result found";
}
?>
 


<style>
    .text-white {
    color: #212529 !important;
}

h2, .h2 {
    font-size: 1rem;
}
</style>
<h2>Rule and Regulations</h2>
<br>
<p>Pay fee as per plan amount and complete the target. Money reward is awaited for you.</p>        
        
<?php
$planr = mysqli_query($db,"SELECT * FROM ref_users where ip= '$username' limit 1");
if (mysqli_num_rows($planr) > 0) {
?>
<?
$i=0;
while($row1 = mysqli_fetch_array($planr)) {
?>
         <tr>
          <td>Amount<td>
          <td><input type="text" name="amount" class="form-control" value="<? echo $row1['plan']; ?>" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" / readonly required></td>
<?php
$i++;
}
?>
<?php
}
else{
    echo "<center>No plan selected.</center>";
}
?>  
<?php
$userd = mysqli_query($db,"SELECT * FROM users where username= '$username' limit 1");
if (mysqli_num_rows($userd) > 0) {
?>
<?
$i=0;
while($user = mysqli_fetch_array($userd)) {
?>


          <label>Name</label>
          <td><input name="firstname" class="form-control" id="firstname" value="<? echo $user['fname']; ?> <? echo $user['lname']; ?>" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /readonly required></td>
        </tr>
        <tr>
          <label>Receipt Send to:</label>
          <td><input name="email" class="form-control" id="email" value="invoice@onetbank.com" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /readonly required></td>
          <label>Phone</label>
          <td><input name="phone" class="form-control" value="<? echo $user['phone']; ?>" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /readonly required></td>
        </tr>
    <br>
        <p>Note: Once you pay, will not be refunded.</p>
        <? include 'verifiedby.php' ?>
<?php
$i++;
}
?>
<?php
}
else{
    echo "<center>Name and Phone Number not available.</center>";
}
?>     
        

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

       
        
          <?php if(!$hash) { ?>
          
         
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" value="Submit" class="btn btn-primary">Pay</button>
                </div>
                 <?php } ?>
        </tr>
      </table>
    </form>
            </div>
        </div>
    </div>
  

