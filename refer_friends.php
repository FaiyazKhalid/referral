<?php 
 include 'server.php';
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
include("incl/config.php");
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$ip = $_SESSION['username'];


?>

<?php  if (isset($_SESSION['username'])) : ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Onet Bank - Activate and Eran</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
    <link rel="icon" href="img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="referfriend">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="img/favicon144.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">Onet Bank</h4>
                    <p class="text-secondary">Activate and Earn</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="index.php">
                        <h5 class="mb-0">Referral Progream</h5>
                    </a>
                </div>
                
            </div>
        </header>

        <!-- page content start -->
        <div class="container mb-4 text-center text-white">
            <div class="row">
                <div class="col col-sm-8 col-md-6 col-lg-5 mx-auto">
                    <img src="img/refer.png" alt="" class="mw-100 mb-4">
                    <h5>Invite your contacts<br>or Friends and Earn Rewards</h5>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">card_giftcard</i>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <h6 class="mb-1">My Referral ID: <?php echo $row["myrefid"]; ?></h6>
                                <p class="small text-secondary">Share your referal id and start earning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
<? $username = $_SESSION['username'];
$result = mysqli_query($db,"SELECT * FROM ref_users where ip= '$username'"); if (mysqli_num_rows($result) > 0) { ?>
<?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
            
            
            <div class="container mb-4">
                <div class="alert alert-success d-none" id="successmessage">Refferal link copied</div>
                <div class="input-group mb-3">

<textarea class="form-control" placeholder="refferal Link" id="referallink" value=" 
My Referral ID: <?php echo $row["myrefid"]; ?>

Open a bank account on O net Bank and earn per user activation. Plans are follows:

(1) Plan 100 = Activation: 10 = Earn 1000
(2) Plan 500 = Activation: 10 = Earn 5000
(3) Plan 1000 = Activation: 10 = Earn 10,000
(4) Plan 5000 = Activation: 10 = Earn 50,000
(5) Plan 10,000 = Activation: 10 = Earn 1,00000

Join now: https://onetbank.com/

Thanks" rows="3">

*Use Referral ID: <?php echo $row["myrefid"]; ?>*

*My plan: <?php echo $row["plan"]; ?> INR*

Open a bank account on O net Bank and earn per user activation. Plans are follows:

(1) Pay 100 =  Earn 1000
(2) Pay 500 =  Earn 5000
(3) Pay 1000 = Earn 10,000
(4) Pay 5000 = Earn 50,000
(5) Pay 10,000 = Earn 1,00000

Join now: https://onetbank.com/

Thanks
    
</textarea>
<? $id = $row["myrefid"]; ?>
<? $data = $row["plan"]; ?>


<?
$text = 
'Open a bank account on O net Bank and earn per user activation. Plans are follows:


(1) Pay 100 =  Earn 1000

(2) Pay 500 =  Earn 5000

(3) Pay 1000 = Earn 10,000

(4) Pay 5000 = Earn 50,000

(5) Pay 10,000 = Earn 1,00000


Join now: '

?>

<? 
$link = 'https://onetbank.com/';
?>

                    <div class="input-group-append">
                        <button class="btn btn-default rounded" type="button" id="coplink">Copy link</button>
                    </div>
                </div>
                <p class="text-center text-secondary">Share link to social</p>
                <div class="row justify-content-center">
                    <div class="col-auto">
<center>
<a href="https://www.google.com/bookmarks/mark?op=edit&bkmk=<? echo "" . $link . "/signup.php?u=" . $id   ?>&title=<? echo "" . $link . "/signup.php?u=" . $id   ?>&labels="  target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/google.bookmarks.png" width="15%" class="web-icons-image-div-source"></a>
<a href="http://www.facebook.com/sharer.php?u=<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?><? echo $text ?>" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/facebook.png" width="15%" class="web-icons-image-div-source"></a>
<a href="https://api.whatsapp.com/send?text=<? echo $text ?> <? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?>" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/whatsapp.png" width="15%" class="web-icons-image-div-source"></a>
<a href="https://twitter.com/intent/tweet?url=<? echo "" . $link . "/signup.php?u=" . $id   ?> &text=<? echo $text ?> &via=&hashtags=" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/twitter.png" width="15%" class="web-icons-image-div-source"></a>
<a href="https://www.linkedin.com/sharing/share-offsite/?url=<? echo "" . $link . "/signup.php?u=" . $id   ?> " target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/linkedin.png" width="15%" class="web-icons-image-div-source"></a>
<a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?>&title=<? echo $text ?>=&tags=" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/tumblr.png"  width="15%" class="web-icons-image-div-source"></a>
<a href="http://pinterest.com/pin/create/button/?url=<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?>" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/pinterest.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="sms:?body=<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?><? echo $text ?> " target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/sms.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="https://lineit.line.me/share/ui?url=<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?>" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/line.me.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="https://web.skype.com/share?url<? echo "" . $link . "/signup.php?u=" . $id  . "&v=" . $data ?>&text=<? echo $text ?>" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/skype.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="https://t.me/share/url?url=<? echo "" . $link . "/signup.php?u=" . $id   ?>&text=<? echo "" . $link . "/signup.php?u=" . $id   ?> &to=" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/telegram.me.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="mailto:?subject=<? echo "" . $link . "/signup.php?u=" . $id   ?> &body=" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/email.png"  width="15%" class="web-icons-image-div-source"></a>
<a href="https://mail.google.com/mail/?view=cm&to=&su=<? echo "" . $link . "/signup.php?u=" . $id   ?>&body=<? echo $text ?> &bcc=&cc=" target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/gmail.png" width="15%"  class="web-icons-image-div-source"></a>
<a href="http://compose.mail.yahoo.com/?to=&subject=<? echo "" . $link . "/signup.php?u=" . $id   ?> &body=<? echo $text ?> " target="_blank" rel="nofollow"><img src="https://www.earthfluent.com/image/social-media-logo-icons-opaque-background/yahoo.png" width="15%"  class="web-icons-image-div-source"></a>
</center>
</div>
</div>
<br>
            <div class="container mb-4">
                  <h6 class="subtitle mb-3">Recently Invited friends</h6>
                <? include("ref-used.php"); ?>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email addres">
                    <div class="input-group-append">
                        <button class="btn btn-default rounded" type="button" id="button-addon2">Invite</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Required jquery and libraries -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="js/main.js"></script>
    <script src="js/color-scheme-demo.js"></script>


    <!-- page level custom script -->    
    <script src="js/app.js"></script>
    

</body>


<!-- Mirrored from maxartkiller.com/website/finwallapp/HTML/refer_friends.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 14:26:06 GMT -->
</html>
<?php

}
?>

 <?php
}
else{
    echo "";
}
?>   
  
<?php endif ?>