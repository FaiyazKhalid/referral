<? 
$username = $_SESSION['username'];

$pic = mysqli_query($db,"SELECT * FROM users where username= '$username' limit 1");
?>
<?php
if (mysqli_num_rows($pic) > 0) { ?><?
    $i=0;
while($show = mysqli_fetch_array($pic)) {
?>
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0">Onet Bank</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <button type="button" class="btn btn-link btn-40 colorsettings">
                        <span class="material-icons">color_lens</span>
                    </button>
                    <a href="notification.php" class=" btn btn-40 btn-link" >
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>
                    </a>
                    <a href="profile.php" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="userprofile/avatars/<?php echo $show['avatar'];?>" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>
<?php

}
?>
 <?php
}
else{
    echo "";
}
?>   