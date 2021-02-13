<?
date_default_timezone_set("Asia/Kolkata");
$currentdate = date('d-m-Y H:i:s');
$expirydate = $row['expirydate'];

if( $currentdate > $expirydate ) {
    
      include("locked.php");
     
    } else {
        
        echo '<a href="transfer-extension.php" class="swiper-slide text-white">
                                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">call_received</span></div>
                                    <p><small>Transfer</small></p>
                                </a>';
    
    }
?>

