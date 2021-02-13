<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`email`) LIKE '%".$valueToSearch."%' limit 1";
    $search_result = filterTable($query);
    
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "faiyazkh_money", "9971217372Fk", "faiyazkh_money");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
<center>
        
  <div class="container">
    <div class="row"><center> <h3>Recover your Password</h3></center>
      <div class="main">      
        
        <form role="form" action="" method="post">
              <div class="form-group">
                  <label for="inputUsernameEmail">Email </label>
                  <input type="email" class="form-control" id="inputUsernameEmail" name="valueToSearch" placeholder="Email ">
              </div><br/>
                <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Submit" name="search">
                  Search  
              </button>
          </form>
</center>

</div></div></div>
<?php while($row = mysqli_fetch_array($search_result)):?>

      
         <center> Your Password <input type="text" size="20" value="<?php echo $row["password"]; ?>"  readonly="readonly" /> </center>
       
          <?php endwhile;?> 
          
          <center> <h3><a href="login.php">Back to login</a></h3></center>