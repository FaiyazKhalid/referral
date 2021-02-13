<?php
if ($row['status'] == approved) {

echo "INR " . $row['points'] . " ";
echo '<p class="text-white mb-4">Total Balance</p>  ';  
} else {
    
$pay = "pay.php";

include 'pay.php';

}
?>