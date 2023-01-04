<?php
// salimsea 
ob_start();
session_start();

if(!isset($_SESSION['username'])) {
	header('location:../login.php');
} else {
	$username = $_SESSION['username'];
}

require_once("include/config.php");

$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$tampil = mysql_fetch_array($query);

$queryto = mysql_query("SELECT * FROM order_history WHERE buyer = '$username'");
$tampilto = mysql_num_rows($queryto);

$usertotalsz = mysql_query("SELECT * FROM user");
$totalusersz = mysql_num_rows($usertotalsz);

$transaksisz = mysql_query("SELECT * FROM order_history");
$transaksizs = mysql_num_rows($transaksisz);

$level = $tampil['level'];
$balance = $tampil['balance'];
$balance_view = "Rp " . number_format($tampil['balance'],0,",",".");
$balance_used = "Rp " . number_format($tampil['balance_used'],0,",",".");
$jt = mysql_query("SELECT price, SUM(price) FROM order_history");
$jtr = mysql_num_rows($jt);
$htr = mysql_fetch_array($jt);
$total = "Rp " . number_format($htr['SUM(price)'],0,",",".");


$hariini = date("Y-m-d");
$tampilss = mysql_query("SELECT * FROM order_history WHERE tanggal = '$hariini' ORDER BY id DESC");
$datass1 = mysql_num_rows($tampilss);
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$tampil = mysql_fetch_array($query);
$username_ig = $tampil['username_ig'];
$querytoo = mysql_query("SELECT * FROM order_history ORDER BY id");
$tampiltoo = mysql_num_rows($querytoo);
$querytooo = mysql_query("SELECT * FROM historyall1 ORDER BY id");
$tampiltooo = mysql_num_rows($querytooo);
$tampilin = $tampiltoo+$tampiltooo;
$queryto = mysql_query("SELECT * FROM order_history WHERE pembeli = '$username'");
$tampilto = mysql_num_rows($queryto);
$usertotalsz = mysql_query("SELECT * FROM user");
$totalusersz = mysql_num_rows($usertotalsz);
$transaksisz1 = mysql_query("SELECT * FROM order_history");
$transaksizs1 = mysql_num_rows($transaksisz1);
$totalt = $transaksizs1;
$level = $tampil['level'];
$nama = $tampil['nama'];
$balance = $tampil['balance'];
$balance_view = " " . number_format($tampil['balance'],0,",",".");
$balance_used = " " . number_format($tampil['balance_used'],0,",",".");
$jts = mysql_query("SELECT balance_used, SUM(balance_used) FROM user");
$jt11 = mysql_query("SELECT harga, SUM(harga) FROM history_socmed");
$jtr11 = mysql_num_rows($jt11);
$jtrs = mysql_num_rows($jts);;
$htr11 = mysql_fetch_array($jt11);
$hhhdjs = $htrs['SUM(balance_used)'];
$hhhdj = $htr['SUM(harga)'];
$htrr = $htr1['SUM(harga)'];
$htrrr = $htr11['SUM(harga)'];
$hhfjf = $htr11;
$total = "Rp " . number_format($hhfjf['SUM(harga)'],0,",",".");
$totalss = "Rp " . number_format($htrs['SUM(balance_used)'],0,",",".");

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ndesaintheme.com/themes/cannavaro/v1.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 12:41:16 GMT -->
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
    <link type="text/css" media="screen" rel="stylesheet" href="awwwards.css" />
    <!-- pace loader -->



    <link href="js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />



</head>

<body role="document">
<div id="awwwards" class="nominee black bottom right">
<a href="/" target="_blank">FOLLOWAKU</a>
</div>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- TOPNAV -->

    <div class="row">
        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-th text-amber"></i>
                </li>
                <li id="Date"></li>
            </ul>
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-stopwatch text-amber"></i>
                </li>
                <li id="hours"></li>
                <li class="point">:</li>
                <li id="min"></li>
                <li class="point">:</li>
                <li id="sec"></li>
            </ul>


        </div>
        <div class="col-lg-6">
            <div style="margin-bottom:0;" class="alert text-white ">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <span class="entypo-info-circled"></span>
                <strong>Wellcome back!</strong>&nbsp;&nbsp;<?php echo $username ?>, your last loggin was 1 Minutes ago. Have a nice day
            </div>
        </div>

        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle text-white" href="#">
                        <img alt="" class="admin-pic img-circle" src="ribbons/kg.png">Hi, <?php echo $username ?> <b class="caret"></b>
                    </a>
                    <ul style="margin:25px 15px 0 0;" role="menu" class="dropdown-setting dropdown-menu bg-amber">
                        
                        <li>
                            <a href="logout.php">
                                <span class="entypo-vcard"></span>&nbsp;&nbsp;logout.php</a>
                        </li>
                       
                    </ul>
                </li>

                

            </ul>
        </div>

    </div>
    <!-- END OF TOPNAV -->
    <!-- Comtainer -->
    <div class="container-fluid paper-wrap bevel tlbr">
        <div id="paper-top">
            <div class="row">
                <div class="col-sm-3 no-pad">

                    <a class="navbar-brand logo-text" href="#">FOLLOWAKU</a>

                    <ul class="list-unstyled list-inline noft-btn">
                        <li data-toggle="tooltip" data-placement="bottom" title="Profile"><i class=" icon-user"></i>
                        </li>

                        <li data-toggle="tooltip" data-placement="bottom" title="Log Out"> <a href="login.php" class="text-white"><i class="icon-upload"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-6 no-pad">
                    <ul style="margin-top:8px;" class="nav navbar-nav navbar-left list-unstyled list-inline text-gray date-list news-list">
                        <!-- <li><i class="fontello-doc-text text-gray"></i>
                        </li> -->
                        <li>
                            <ul class="list-unstyled top-newsticker text-gray news-list">
                                <li><i class="fontello-lightbulb-1 text-gray"></i>&nbsp;&nbsp;
                                    <strong>Welcome,</strong><?php echo $username ?>, Gunakan Fiture dengan bijak &nbsp;<b></b>
                                </li>
                                <li><i class="fontello-lightbulb-1 text-gray"></i>&nbsp;&nbsp;
                                    <strong>Hallo,</strong><?php echo $username ?>, Rajin promosi yah, agar sukses :D &nbsp;<b></b>
                                </li>
                                <li><i class="fontello-lightbulb-1 text-gray"></i>&nbsp;&nbsp;
                                    <strong><?php echo $username ?>,</strong>Kalau mau isi saldo, chat admin ya :D &nbsp;<b></b>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>



                <div class="col-sm-3 no-pad">
                    <!-- menu right -->
                    <div class="navbar-right">
                        <ul class="nav navbar-nav margin-left">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <div class="drop-btn dropdown-toggle bg-white" data-toggle="dropdown">
                                    <i class="fa  fa-envelope text-navy"></i>
                                    <span class="label label-success label-drop">4</span>
                                </div>
                                <ul class="dropdown-menu drop-msg ">
                                    <li class="header bg-green">
                                        You have 4 messages</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                          
                                        </ul>
                                    </li>

                                    <li class="footer-green">
                                        <!--    <div class="btn btn-xs bg-opacity-white-btn  fontello-arrows-cw"></div>
                                        <div class="btn btn-xs bg-opacity-white-btn fontello-trash"></div>
                                        <div class="btn btn-xs bg-opacity-white-btn fontello-eye-outline"></div> -->
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <div class="drop-btn dropdown-toggle bg-white" data-toggle="dropdown">
                                    <i class="fa  fa-exclamation-triangle text-navy"></i>
                                    <span class="label bg-aqua label-drop">7</span>
                                </div>
                                <ul class="dropdown-menu drop-noft">

                                    <li class="header bg-aqua">
                                        You have 10 notifications</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-user"></i> New developer registered
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-cloud"></i> 2 item commit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-download"></i> 3 members joined
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-tag"></i> 22 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa icon-document"></i> New task from manager
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="footer-blue">

                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <div class="drop-btn bg-white dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-briefcase text-navy"></i>
                                    <span class="label bg-red label-drop">9</span>
                                </div>
                                <ul class="dropdown-menu drop-task">

                                    <li class="header bg-red">
                                        <span></span>You have 9 tasks</li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu bg-white">
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Wed, 25 Mar 2014
                                                        <span>9:32
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Finished task Testing.</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->

                                                <div class="task-list-item">
                                                    <h2>Thu, 23 Mar 2014
                                                        <span>7:54
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Creat the documentation</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>

                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Wed, 21 Mar 2014
                                                        <span>12:43
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Repository you file now!</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <div class="task-list-item">
                                                    <h2>Fri, 20 Mar 2014
                                                        <span>8:00
                                                            <small>PM</small>
                                                        </span>
                                                    </h2>
                                                    <h1>Fill the job description</h1>
                                                    <p>Lorem ipsum dollor si amet amet jabang bayi</p>
                                                </div>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>

                                    <li class="footer-red">

                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- end of menu right -->
            </div>
        </div>

        <!-- SIDE MENU -->
        <div class="wrap-sidebar-content">
            <div id="skin-select">
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>

                <div class="skin-part">
                    <div id="tree-wrap">
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav">
                                <li class="devider-title">
                                    <h3>
                                        <span>Desain Kit Menu</span>
                                    </h3>
                                </li>
                                <li >
                                    <?php include_once "include/menu.php"; ?>
                            <div class="side-dash">
                               
                                <ul class="side-dashh-list">
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-leaf">
                                                Tidy up your files
                                                <small class="pull-right">35%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-blue " style="width: 35%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">35% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-box">
                                                Check server status
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-aqua" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li>
                                        <!-- Task item -->
                                        <a href="#">
                                            <h3 class="fontello-headphones">
                                                Support costumer
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs bg-opacity-one height-tiny">
                                                <div class="progress-bar bg-red-orange" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                               
                                <div id="doughnutChart" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/skin-select -->
            <!-- END OF SIDE MENU -->

            <!-- Breadcrumb -->
            <div class="sub-board">
                <span class="header-icon"><i class="fontello-home"></i>
                </span>
                <ol class="breadcrumb newcrumb ng-scope">
                    <li>
                        <a href="#">
                            <span>
                            </span>Dashboard</a>
                    </li>

                </ol>


                <div class="dark" style="visibility: visible;">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search rounded id_search" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Breadcrumb -->






            <!-- CONTENT -->
            <div class="wrap-fluid" id="paper-bg">
              
              <div class="row">
                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-green">Total Order</span>
                                  </h2>
                                  <i class="fontello-shop-1"></i>
                                  <h4 class="text-green"><?php echo $transaksizs ?></h4>
                                  <h5>Semua Orderan</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>

                  <div class="col-lg-6">
                      <div class="box">
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-aqua">Saldo Terpakai</span>
                                  </h2>
                                  <i class="fontello-star"></i>
                                  <h4 class="text-aqua"><?php echo $balance_used ?></h4>
                                  <h5>Saldo dipakai</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                      </div>
                      <!-- /.box -->
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-red">Saldo</span>
                                  </h2>
                                  <i class="fontello-money"></i>
                                  <h4 class="text-red">
                                      <small></small><?php echo $balance_view ?></h4>
                                  <h5>Sisa Saldo</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>

                  <div class="col-lg-6">
                      <div class="box">
                          <!-- /.box-header -->
                          <div class="box-body">
                              <div class="news-widget">
                                  <h2>
                                      <span class="bg-blue">Total User</span>
                                  </h2>
                                  <i class="fontello-users"></i>
                                  <h4 class="text-blue"><?php echo $totalusersz ?></h4>
                                  <h5>Pengguna User</h5>
                                  <div style="clear:both;"></div>
                              </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
          
</div>

                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <span class="box-btn bg-green"><i class="fontello-lightbulb-1"></i>
                                    </span>

                                </div><div class="box">
                                <div class="media direction">
                                    <span class="pull-left">
                                        <i class="media-object fontello-lightbulb-1"></i>
                                    </span>
                                    <div class="media-body">
                                        <h5 style="margin:-2px 0 0" class="media-heading">Peringatan</h5>
                                        <h4>Dilihat dan disimak !</h4>
                                        <span class="pull-right"></span>
                                    </div>
                                </div>
                            </div></div>
                            <div class="box-body no-padding">

                                <ul class="list-unstyled newsticker">
                                    <li class="bg-red">
                                        <ul class="list-unstyled jalur-nest">
                                            <li>
                                                "Jika Melakukan order fitur instagram, diharap akunnya tidak di private "
                                            </li>
                                            <li>
                                                <i class="fa fa-instagram"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;11 Menit 24 Detik</li>
                                        </ul>
                                    </li>

                                    <li class="bg-green">
                                        <ul class="list-unstyled jalur-nest ">
                                            <li>
                                                <strong>Jika followers ig ingin cepat masuk, pilih server 1</strong>
                                            </li>
                                            <li>
                                                <i class="fa fa-instagram"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;23 Menit 53 Detik</li>
                                        </ul>
                                    </li>

                                    <li class="bg-aqua">
                                        <ul class="list-unstyled jalur-nest">
                                            <li>
                                                <strong>Jika terjadi error, harap lapor ke admin</strong>
                                            </li>
                                            <li>
                                                <i class="fontello-user"></i>
                                                <i class="fontello-chronograph"></i>&nbsp;&nbsp;45 Menit 23 Detik</li>
                                        </ul>
                                    </li>
                                </ul>
                              </li>
                                
                            </div>
                


                       
                            <!-- /.box-body -->
                 
<div id="main"><!-- main -->
<?php
$content = $_GET['content'];
$developers = $_GET['developers'];
$reseller = $_GET['reseller'];
$id = $_GET['id'];
$agen = $_GET['agen'];
$api = $_GET['api'];
if ($content == "change-password") {
	include_once "content/change-password.php";
} else if ($content == "order") {
	include_once "content/order.php";
} else if ($content == "add-balance") {
	include_once "content/add-balance.php";
} else if ($content == "history") {
	include_once "content/history.php";
} else if ($content == "service-list") {
	include_once "content/service-list.php";
} else if ($content == "index") {
	include_once "konfir/index.php";
} else if ($content == "hasil") {
	include_once "konfir/hasil.php";
} else if ($content == "upload") {
	include_once "konfir/upload-rename.php";
} else if ($content == "tiket1") {
	include_once "content/tiket1.php";
} else if ($content == "tiket") {
	include_once "content/tiket.php";
	
} else if ($developers == "service") {
	include_once "admin/service.php";
} else if ($developers == "order") {
	include_once "admin/order.php";
} else if ($developers == "user") {
	include_once "admin/user.php";
} else if ($developers == "balance") {
	include_once "admin/balance.php";

} else if ($api == "api") {
	include_once "api/api.php";

} else if ($reseller == "user_add") {
	include_once "admin/pendaftaran.php";
} else if ($reseller == "transfer") {
	include_once "admin/transfer.php";
} else if ($agen == "transfer") {
	include_once "admin/transfer.php";
} else { ?>
 
       
                <!-- /.row -->
                      <div class="row">
                    <div class="col-lg-8">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="fontello-megaphone"></i> 
                                    <span>Berita</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="responsive-example-table" class="table large-only">
                                    <tbody>
                                        <tr class="text-right">
                  
                    <th class="text-center">No</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th align="center">1</th>
                    <td>2017-06-22</td>
                    <td>Penambahan Remains Dan Auto Refund Jika Status Partial</td>
                  </tr>
                  <tr>
                    <th align="center">2</th>
                    <td>2017-06-22</td>
                    <td>Jika Followers Ingin Cepat Masuk & Harga Murah Gunakan Server 1 </td>
                  </tr>
                  <tr>
                    <th align="center">3</th>
                    <td><font color="black"></marquee>
<?php
$hariini = date("Y-m-d");
$i=0;

$tampil = mysql_query("SELECT * FROM order_history WHERE tanggal = '$hariini' ORDER BY id DESC");
$data = mysql_num_rows($tampil);

if ($data == 0) {
echo " ".$hariini." </b> ";
} else {


while($data = mysql_fetch_array($tampil))
 {
 $i++;
 
echo " ".$data[tanggal]." </b> <i>".$data[pembeli]."</i> telah melakukan pembelian ( ".$data[quantity]." ".$data[barang]." ) ~ ";
}
}
?></td>
                    <td>Total Transaction <?php echo $tampilin; ?>
</td>
                  </tr>
                </tbody>
              </table>
             </div>
          </div>
        </div>
       
      <div class="row">
                    <div class="col-lg-4">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="fontello-user"></i> 
                                    <span>Kontak Bantuan</span>
                                </h3>
                            </div>

	 <ul class="list-group">
	 <li class="list-group-item">
	 <span class="text-info"><i class="fa fa-facebook-square"></i></span> Facebook: <a href='https://www.facebook.com/salimsea'>Salim.sa</a></li>
	 <li class="list-group-item">
	 <span class="text-success"><i class="fa fa-phone-square"></i></span> Telp: 0821 1223 574</li>
	 <li class="list-group-item"> <span class="text-danger"><i class="fontello-skype"></i></span> Skype: salimsea</li>
	 <li class="list-group-item">
	 <span class="text-warning"><i class="fa fa-comment"></i></span> Line: salimsea</li>
										</ul>
              </div>
            </div>
          </div>
        </div>
                                </ul>
                            

                     <!-- CONTENT -->
           



                <div class="row">
                    <div class="col-lg-14">
                        <div class="box">
                            <div class="box-header">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="fa fa-times"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="fontello-grocery-store"></i> 
                                    <span>Riwayat Pemesanan</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="responsive-example-table" class="table large-only">
                                    <tbody>
                                        <tr class="text-right">
			                    <th>NO</th>
			                    <th>ORDER ID</th>
			                    <th>LAYANAN</th>
			                    <th>LINK</th>
			                    <th>JUMLAH</th>
			                    <th>HARGA</th>
			                    <th>STATUS</th>
			                    <th>DATE</th>
			                  </tr>
			                </thead>
			                <tbody>
<?php
  $queryu = "SELECT * FROM order_history WHERE buyer = '$username' ORDER BY id DESC";
 $exe = mysql_query($queryu);
 $cek = mysql_num_rows($exe);
 $no = 1;
 while($row = mysql_fetch_assoc($exe)){
  $order_id = $row['order_id'];
  $service = $row['service'];
  $link = $row['link'];
  $quantity = $row['quantity'];
  $price = $row['price'];
  $status = $row['status'];
  $date = $row['date'];
?>
			                  <tr>
			                    <td><?php echo $no; ?></td>
			                    <td><?php echo $order_id; ?></td>
			                    <td><?php echo $service; ?></td>
			                    <td><?php echo $link; ?></td>
			                    <td><?php echo $quantity; ?></td>
			                    <td><?php echo $price; ?></td>
			                    <td>
<?php if ($status == "Completed") { ?>
<span class="label label-success">
<? } else if ($status == "Refunded") { ?>
<span class="label label-info">
<? } else if ($status == "Partial") { ?>
<span class="label label-warning">
<? } else if ($status == "Pending") { ?>
<span class="label label-warning">
<? } else if ($status == "Canceled") { ?>
<span class="label label-danger">
<? } else if ($status == "Processing") { ?>
<span class="label label-warning">
<? } else if ($status == "Success") { ?>
<span class="label label-success">
<? } else if ($status == "Cancelled") { ?>
<span class="label label-danger">
<? } ?>
<?php echo $status; ?>
</span>
</td>
			                    <td><?php echo $date; ?></td>
			                  </tr>
<?
$no++;
} ?>
			                </tbody>
			              </table>

                                <!-- end content -->
                                <? } ?>

                
            <!-- #/paper bg -->
        </div></div>  </div>
        <!-- ./wrap-sidebar-content -->

        <!-- / END OF CONTENT -->

        <!-- FOOTER -->
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate"></p>
                <p id="clock"></p>
            </div>
            <div class="copyright">Copyright &copy; 2017 <a href="/">KLIKGRAM</a> Made with <i class="fontello-heart-filled text-red">SalimSA</i>
            </div>
            <div class="devider-footer"></div>
            <ul>
                <li><i class="fa fa-facebook-square"></i>
                </li>
                <li><i class="fa fa-twitter-square"></i>
                </li>
                <li><i class="fa fa-instagram"></i>
                </li>
            </ul>
        </div>
        <!-- / FOOTER -->
    </div>
    <!-- Container -->

    <!-- 
    ================================================== -->
        <!-- Main jQuery Plugins -->
    <script type='text/javascript' src="js/jquery.js"></script>
    <script type='text/javascript' src='js/bootstrap.js'></script>
    <script src="js/pace/pace.js"></script>
    <script type='text/javascript' src='js/date.js'></script>
    <script type='text/javascript' src='js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='js/sliding-menu.js'></script>
    <script type='text/javascript' src='js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type='text/javascript' src='js/tip/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src="js/donut-chart/jquery.drawDoughnutChart.js"></script>
    <script type='text/javascript' src="js/tab/jquery.newsTicker.js"></script>
    <script type='text/javascript' src="js/tab/app.ticker.js"></script>
    <script type='text/javascript' src='js/app.js'></script>

    <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>

    <script type='text/javascript' src="js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="js/number-progress-bar/number-pb.js"></script>
    <script src="js/loader/loader.js" type="text/javascript"></script>
    <script src="js/loader/demo.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/skycons/skycons.js"></script>

    <!-- FLOT CHARTS -->
    <script src="js/flot/jquery.flot.min.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <!-- Page script -->

    <!-- TAB SLIDER -->



        <script type="text/javascript">
function send()
{
        showloading();
	var service = $('#service').val();
	var link = $('#link').val();
	var jumlah = $('#jumlah').val();
	$.ajax({
		url	: 'content/new-order-act.php',
		data	: 'service='+service+'&link='+link+'&jumlah='+jumlah,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
hideloading();
	             $("#result").prepend(msg).show("slow");
	        }
	});
}

function getcut(quantity){
 var rate = $("#rate").val();
 var hasil = eval(quantity) * rate;
 $('#cutbalance').val(hasil);
} 

function getbal(quantity){
var method = $("#method").val();

 if (method== "BANK"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);

 } else if (method== "BANK DENNY BRI"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);
 } else if (method== "PULSA"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);
 } else if (method== "PULSA SALMAN"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);
 } else if (method== "PULSA DENNY"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);
 } else if (method== "PULSA ARDHI"){
  var hasil = eval(quantity);
  $('#getbalance').val(hasil);
 }

}
    //Weather Icons
    (function($) {
        "use strict";
        var icons = new Skycons({
                "stroke": 0.08,
                "color": "Gray",
                "cloudColor": "#65C3DF",
                "sunColor": "#0090d9",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    })(jQuery);

    //Animation Slider
    $(function() {
        function randomPercentage() {
            return Math.floor(Math.random() * 100);
        }

        function randomInterval() {
            var min = Math.floor(Math.random() * 30);
            var max = min + (Math.floor(Math.random() * 40) + 70);
            return [min, max];
        }

        function randomStep() {
            return Math.floor(Math.random() * 10) + 5;
        }

        // setup
        var $basic = $('#basic');
        var interval = randomInterval();
        var basicBar = $basic.find('.number-pb').NumberProgressBar({
            style: 'basic',
            min: interval[0],
            max: interval[1]
        })
        $basic.find('.title span').text('[Min: ' + interval[0] + ', Max: ' + interval[1] + ']');

        var percentageBar = $('#percentage .number-pb').NumberProgressBar({
            style: 'percentage'
        })

        var $step = $('#step');
        var maxStep = randomStep()
        var stepBar = $('#step .number-pb').NumberProgressBar({
            style: 'step',
            max: maxStep
        })
        $step.find('.title span').text('[Max step: ' + maxStep + ']');

        // loop
        var basicLoop = function() {
            basicBar.reach(undefined, {
                complete: percentageLoop
            });
        }

        var percentageLoop = function() {
            percentageBar.reach(undefined, {
                complete: stepLoop
            });
        }

        var stepLoop = function() {
            stepBar.reach(undefined, {
                complete: basicLoop
            });
        }

        // start
        basicLoop();
    });
    </script>

    <script type="text/javascript">
    $(function() {
        "use strict";
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }

            return res;
        }

        var interactive_plot = $.plot("#interactive", [getRandomData()], {
            grid: {
                borderColor: "#f3f3f3",
                borderWidth: 1,
                tickColor: "#f3f3f3"
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#03B2B4"
            },
            lines: {
                fill: true, //Converts the line chart to area chart
                color: "#03B2B4"
            },
            yaxis: {
                min: 0,
                max: 100,
                show: true
            },
            xaxis: {
                show: true
            }
        });

        var updateInterval = 500; //Fetch data ever x milliseconds
        var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()]);

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw();
            if (realtime === "on")
                setTimeout(update, updateInterval);
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === "on") {
            update();
        }
        //REALTIME TOGGLE
        $("#realtime .btn").click(function() {
            if ($(this).data("toggle") === "on") {
                realtime = "on";
            } else {
                realtime = "off";
            }
            update();
        });
        /*
         * END INTERACTIVE CHART
         */


        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }
        var line_data1 = {
            data: sin,
            color: "#3c8dbc"
        };
        var line_data2 = {
            data: cos,
            color: "#03B2B4"
        };
        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#f3f3f3",
                borderWidth: 1,
                tickColor: "#f3f3f3"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ["#3c8dbc", "#f56954"]
            },
            yaxis: {
                show: true,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            display: "none",
            opacity: 0.8
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [
                ["January", 10],
                ["February", 8],
                ["March", 4],
                ["April", 13],
                ["May", 17],
                ["June", 9]
            ],
            color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: "#f3f3f3",
                tickColor: "#f3f3f3"
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [{
            label: "Series2",
            data: 30,
            color: "#3c8dbc"
        }, {
            label: "Series3",
            data: 20,
            color: "#0073b7"
        }, {
            label: "Series4",
            data: 50,
            color: "#00c0ef"
        }];
        $.plot("#donut-chart", donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        });
        /*
         * END DONUT CHART
         */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>





</body>


<!-- Mirrored from ndesaintheme.com/themes/cannavaro/v1.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 12:41:49 GMT -->
</html>
<? ob_flush(); ?>
