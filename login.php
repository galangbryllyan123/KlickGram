<?php
// gblk
ob_start();
session_start();

if(isset($_SESSION['username'])) {
	header('location:/');
}

require_once("include/config.php");

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ndesaintheme.com/themes/cannavaro/v1.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 12:43:01 GMT -->
<head>
    <meta charset="utf-8">
    <!--   <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="ico/favicon.ico" rel="shortcut icon">

    <title>Cannavaro Web Admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap theme -->
    <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dripicon.css">
    <link rel="stylesheet" href="css/typicons.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="js/tip/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="js/vegas/jquery.vegas.css" />
    <link rel="stylesheet" type="text/css" href="js/number-progress-bar/number-pb.css">
    <!-- pace loader -->
    <script src="js/pace/pace.js"></script>
    <link href="js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    

</head>

<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <!-- Comtainer -->
                <div class="paper-wrap bevel tlbr">
                    <div id="paper-top">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <!--     -->
                                <a class="navbar-brand logo-text" href="#">Cannavaro</a>
                            </div>
                        </div>
                    </div>
<?php if(isset($_POST['submit'])) {
$username = $_POST['username'];
$pass = $_POST['password'];

$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$get = mysql_fetch_array($cekuser);

if($jumlah == 0) { // user tdk terdaftar ?>
<div class="alert alert-danger"> <strong>Data tidak terdaftar.</strong> </div>
<script>
swal("Error!", "Data tidak terdaftar.", "error");
</script>
<? } else {
   if($pass <> $get['password']) { // pass salah ?>
<div class="alert alert-danger"> <strong>Data yang dimasukkan tidak sesuai!</strong> </div>
<script>
swal("Error!", "Data yang dimasukkan tidak sesuai.", "error");
</script>
<? } else {
	$_SESSION['username'] = $get['username'];
	header('location:/');
} } } ?>
                    <!-- CONTENT -->
                  

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="account-box">

                                     <form role="form" action="" method="POST" id="loginform">
                                        <div class="form-group">
                                            <a href="#" class="pull-right label-forgot">Forgot email?</a>
                                            <label>Username or email</label>
                                            <input type="text" name="username" placeholder="Username..." class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="pull-right label-forgot">Forgot password?</a>
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-control"/>
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox">Remember me</label>
                                        </div>
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">LogIn</button>
                                            
                                    </form>
                                    <a class="forgotLnk" href="index.php"></a>
                                    <div class="or-box">

                                        <center>
                                            <span class="text-center login-with">Login or <b>Sign Up</b>
                                            </span>
                                        </center>
                                        <div class="row">
                                            <div class="col-md-6 row-block">
                                                <a href="index-2.html" class="btn bg-aqua btn-facebook btn-block">
                                                    <span class="entypo-facebook space-icon"></span>Facebook</a>
                                            </div>
                                            <div class="col-md-6 row-block">
                                                <a href="index-2.html" class="btn btn-twitter btn-block">
                                                    <span class="entypo-twitter space-icon"></span>Twitter</a>

                                            </div>

                                        </div>
                                        <div style="margin-top:25px" class="row">
                                            <div class="col-md-6 row-block">
                                                <a href="index-2.html" class="btn btn-google btn-block">
                                                    <span class="entypo-gplus space-icon"></span>Google +</a>
                                            </div>
                                            <div class="col-md-6 row-block">
                                                <a href="index-2.html" class="btn btn-instagram btn-block">
                                                    <span class="entypo-instagrem space-icon"></span>Instagram</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / FOOTER -->
                <!-- Container -->
            </div>
        </div>
    </div>

    <div class="slide-out-div">
        <a class="handle" href="http://link-for-non-js-users/"></a>
        <ul class="theme-bg">
            <li>
                <div id="button-bg"></div>
            </li>
            <li>
                <div id="button-bg2"></div>
            </li>
            <li>
                <div id="button-bg3"></div>
            </li>
            <li>
                <div id="button-bg4"></div>
            </li>
            <li>
                <div id="button-bg5"></div>
            </li>
            <li>
                <div id="button-bg6"></div>
            </li>
    
        </ul>
    </div>
    <!-- 
    ================================================== -->
    <!-- Main jQuery Plugins -->
    <script type='text/javascript' src="js/jquery.js"></script>
   <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>

    <script type="text/javascript">
    $(function() {
        $("#button-bg").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_11.jpg')no-repeat center center fixed"
        });
    });

    $("#button-bg2").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_5.jpg')no-repeat center center fixed"
        });
    });


    $("#button-bg3").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_9.jpg')no-repeat center center fixed"
        });
    });

    $("#button-bg4").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_19.jpg')no-repeat center center fixed"
        });
    });


    $("#button-bg5").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_3.jpg')no-repeat center center fixed"
        });

    });

    $("#button-bg6").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_6.jpg')no-repeat center center fixed"
        });

    });

        /**
         * Background Changer end
         */
    });
    </script>



</body>


<!-- Mirrored from ndesaintheme.com/themes/cannavaro/v1.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 12:43:02 GMT -->
</html>
