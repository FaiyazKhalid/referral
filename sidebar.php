
<?
$username = $_SESSION['username'];

$sidebar = mysqli_query($db,"SELECT * FROM users where username= '$username' limit 1");

if (mysqli_num_rows($sidebar) > 0) {
?>
<?php
$i=0;
while($menu = mysqli_fetch_array($sidebar)) {
?>
<div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-40 rounded-circle position-relative">
                    <figure class="background">
                        <img src="userprofile/avatars/<?php echo $menu['avatar']; ?>" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h6 class="mb-1"><?php echo $menu["fname"]; ?> <?php echo $menu["lname"]; ?></h6>
                <? $lastseen = mysqli_query($db,"SELECT * FROM userlog where username= '$username' ORDER BY `id` DESC limit 1 "); if (mysqli_num_rows($lastseen) > 0) { $i=0;
while($seen = mysqli_fetch_array($lastseen)) {?>
                <p class="small text-default-secondary">Last Seen: <?php echo $seen["loginTime"]; ?><?php
$i++;
}
?>
<?php
}
else{
    echo "Login again to view";
}
?></p>
        </div>
        </div>
        <div class="menu-container">
        <div class="row mb-4">
                
                
            </div>
                         <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            Home
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.php">
                        <div>
                            <span class="material-icons icon">insert_chart</span>
                            Analytics
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="refer_friends.php">
                        <div>
                            <span class="material-icons icon">perm_contact_calendar</span>
                            Refer Friends
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">
                        <div>
                            <span class="material-icons icon">layers</span>
                            Transection
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <div>
                            <span class="material-icons icon">widgets</span>
                            Profile
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <div>
                            <span class="material-icons icon">widgets</span>
                            Contact Us
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="index.php?logout='1'" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
            </div>
        </div>
    </div>
    <div class="backdrop"></div>
<?php
$i++;
}
?>
<?php
}
else{
    echo "No result found";
}
?>