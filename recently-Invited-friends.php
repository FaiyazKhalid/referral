<?
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];

$result = mysqli_query($link,"SELECT * FROM ref_users WHERE ip = '$ip'");


if (mysqli_num_rows($result) > 0) {
?>

<?
$i=0;
while($row = mysqli_fetch_array($result)) {


$id = $row['myrefid']; 
?>

<? 
$i++;
}

?>


<?
}
else{
  
}

?><?



$result1 = mysqli_query($link,"SELECT * FROM users WHERE refid LIKE '$id'  ORDER BY `id` DESC LIMIT 1");
$counter=1;

if (mysqli_num_rows($result1) > 0) {

?>
<div class="container mb-4">
                <div class="swiper-container swiper-users text-center ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <a href="send_money.html" class="avatar avatar-60 rounded mb-1 bg-default-light">
                                        <span class="material-icons">add</span>
                                    </a>
                                    <p class="text-secondary"><small>Send</small></p>
                                </div>
                            </div>
                        </div>

       
<?

$i=0;
while($row = mysqli_fetch_array($result1)) {

 
$id = $row['ip']; 
 
 ?>                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 rounded mb-1">
                                        <div class="background"><img src="userprofile/avatars/<?php echo $row['avatar'];?>" alt=""></div>
                                    </div>
                                    <p class="text-secondary"><small><?php echo $row["username"]; ?></small></p>
                                </div>
                            </div>
                            </div>
       
<?
$i++;
}

?>

<?
}
else{
   include("ref-add.php");
}
?>
 </div>
                            </div>
                            </div>
            