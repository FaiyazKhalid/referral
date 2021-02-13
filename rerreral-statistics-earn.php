<?
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];
$result5 = mysqli_query($link,"select points from ref_users  Where ip = '$ip'");

?>
<?
if (mysqli_num_rows($result5) > 0) {
?>

<?
$i=0;
while($row = mysqli_fetch_array($result5)) {


?>

<?
echo $row['points']; 
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