<?
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];
$result5 = mysqli_query($link,"select concat(sum(his_earn)) as withdrawl from ref_history  Where his_username = '$ip'");

?>
<?
if (mysqli_num_rows($result5) > 0) {
?>

<?
$i=0;
while($row = mysqli_fetch_array($result5)) {


?>

<?
echo $row['withdrawl']; 
?>
<? 
$i++;
}

?>

<?
}
else{
    echo "0";
}

?>