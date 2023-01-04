<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

                    
<?php if (isset($_POST['send'])) {
// memulai proses add user

$add_username = $_POST['username'];
$jumlah = $_POST['jumlah'];
$date = date("Y-m-d");
// mencari data di database
$cekdata = mysql_query("SELECT * FROM user WHERE username = '$add_username'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
$mybalance = $tampil['balance'];
$myusername = $tampil['username'];
// memulai eksekusi
if ($scount <> 1) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Username Belum Terdaftar. </div>
<? } else if (!$add_username || !$jumlah) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else if ($jumlah < '0') { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Format Tidak Sah </div>
<? } else if ($mybalance < $jumlah)  { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Saldo Tidak Cukup </div>
<? } else if ($add_username == $myusername)  { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Terjadi Kesalahan </div>
<? } else {
$no = rand(111111,999999);
	$send = mysql_query("UPDATE user SET balance = balance+$jumlah WHERE username = '$add_username'");
	$send = mysql_query("UPDATE user SET balance_used = balance_used+$jumlah WHERE username = '$myusername'");
	$send = mysql_query("UPDATE user SET balance = balance-$jumlah WHERE username = '$myusername'");
if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Transfer Completed!</strong><br />
Number ID: <?php echo $no; ?><br />
Username: <?php echo $add_username; ?><br />
Total Balance: <?php echo $jumlah; ?><br />
</font>
</div>
<?php } else { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Terjadi Kesalahan </div>
<? } } } ?>
                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

          <div class="panel panel-info">
            <div class="panel-heading"> Transfer Saldo
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">     <!-- start content -->

		                  <form class="form-horizontal" method="POST">
		                    <div class="form-group">
		                      <label class="col-md-12">Username</label>
		                      <div class="col-md-12">
		                        <input type="text" class="form-control" placeholder="Username" name="username" id="username">
		                      </div>
		                    </div>
		                     <div class="form-group">
		                      <label class="col-md-12">Total</label>
		                      <div class="col-md-12">
<?php if ($level =='Member'){ ?>
 <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah" disabled>
<?php } else if ($level =='Agen'){ ?>
 <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
<?php } else if ($level =='Reseller') { ?>
 <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
<?php } else if ($level =='Admin') { ?>
 <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
<?php } else if ($level =='Developers') { ?>
 <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
				                           <?php } ?>
		                      </div>
		                    </div>
		                    <div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="send">Submit</button>
		                      </div>
		                    </div>
		                  </form>
                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>