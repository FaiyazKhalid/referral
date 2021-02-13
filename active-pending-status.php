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
    echo "Not Found";
}

?>


            <div class="container mb-4">
                <div class="row">
                    <div class="col">
                        <h6 class="subtitle mb-3">Status </h6>
                    </div>
                    <div class="col-auto"><a href="#" class="text-default">View all</a></div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                            <i class="material-icons vm text-template">local_atm</i>
                                        </div>
                                    </div>
                                   <div class="col-4 align-self-center">
                                        <h6 class="mb-1">Activated</h6>
                                        <p class="small text-secondary">By your refferal</p>
                                    </div>
                                    <div class="col-auto align-self-center border-left">
<a href="list-of-active.php">                                        <h6 class="mb-1">
<?
$result2 = mysqli_query($link,"SELECT * FROM users WHERE pstatus like 'approved'  and refid like '$id'");

if ($result2) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result2); 
          
           if ($row) 
              { 
                 printf("  " . $row); 
              } 
              else 
              echo '0';
        // close the result. 
        mysqli_free_result($result2); 
    } 

?></a>

 
</h6>
                                        <p class="small text-secondary"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto pr-0">
                                        <div class="avatar avatar-50 border-0 bg-default-light rounded-circle text-default">
                                            <i class="material-icons vm text-template">local_atm</i>
                                        </div>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <h6 class="mb-1">Pending</h6>
                                        <p class="small text-secondary">By your refferal</p>
                                    </div>
                                  <div class="col-auto align-self-center border-left">
                                        <h6 class="mb-1">  <a href="list-of-pending.php">
<?
$result2 = mysqli_query($link,"SELECT * FROM users WHERE pstatus like 'pending'  and refid like '$id'");

if ($result2) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result2); 
          
           if ($row) 
              { 
                 printf("  " . $row); 
              } 
              
              else 
              echo '0';
        // close the result. 
        mysqli_free_result($result2); 
    } 

?></a>
                                            
                                            </h6>
                                        <p class="small text-secondary"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?

$i=0;
while($row = mysqli_fetch_array($result1)) {

 
$id = $row['ip']; 
 
 ?>

<?
$i++;
}

?>