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



            <div class="container mb-4">
                <div class="row">
                    <div class="col">
                        <h6 class="subtitle mb-3">Dates </h6>
                    </div>
                   
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
                                        <h6 class="mb-1">Target Date:</h6>
                                        <p class="small text-secondary"></p>
                                    </div>
                                    <div class="col-auto align-self-center border-left">
                                        <h6 class="mb-1">

<? echo date("F j, Y ", strtotime($row["date"]));?>
                                        
                                        
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
                                        <h6 class="mb-1">Expire on:</h6>
                                        <p class="small text-secondary"></p>
                                    </div>
                                    <div class="col-auto align-self-center border-left">
                                        <h6 class="mb-1">
<? if ($row["expirydate"] == notset )
{
echo 'Account not active';
} else {

echo date("F j, Y ", strtotime($row["expirydate"])); }?>
                                            
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
$i++;
}

?>

<?
}
else{
    echo "Not Found";
}

?>
