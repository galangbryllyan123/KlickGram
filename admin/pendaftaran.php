<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

                    
<?php if (isset($_POST['add'])) {
// memulai proses add user

$add_username = $_POST['username'];
$password = $_POST['password'];
$level_nya = $_POST['level'];
$date = date("Y-m-d");
if ($level_nya == "Member"){
$harga = "7000";
$bonus_saldo = '5000';
$level_nya2 = 'Member';
} else  if ($level_nya == "Agen"){
$harga = '15000';
$bonus_saldo = '15000';
$level_nya2 = 'Agen';
} else if ($level_nya == "Reseller"){
$harga = '50000';
$bonus_saldo = '50000';
$level_nya2 = 'Reseller';
} else  if ($level_nya == "Admin"){
$harga = '100000';
$bonus_saldo = '100000';
$level_nya2 = 'Admin';
}
// mencari data di database
$cekdata = mysql_query("SELECT * FROM user WHERE username = '$add_username'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
$mybalance = $tampil['balance'];
$username = $tampil['username'];
// memulai eksekusi
if ($scount > 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Username sudah digunakan. </div>
<? } else if (!$add_username || !$password) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else if (strlen($password) < 5) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Password minimal 5 karakter. </div>
<? } else if (strlen($password) > 10) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Password maksimal 10 karakter. </div>
<? } else if ($add_level == "Admin") { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Terjadi Kesalahan </div>
<? } else if ($mybalance < $harga)  { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Saldo Tidak Cukup </div>
<? } else {
$no = rand(111111,999999);
$send = mysql_query("INSERT INTO user(username, password, balance, level, register, balance_used, status) VALUES ('$add_username','$password','$bonus_saldo','$level_nya2','$username','0','Aktif')");
	$send = mysql_query("UPDATE user SET balance = balance-$harga WHERE username = '$username'");
if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Add User Success!</strong><br />
Number ID: <?php echo $no; ?><br />
Username: <?php echo $add_username; ?><br />
Password: <?php echo $password; ?><br />
Balance: <?php echo $bonus_saldo; ?><br />
Level: <?php echo $level_nya2; ?><br />
</font>
</div>
<?php } else { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Terjadi KESALAHAN </div>
<? } } } ?>
    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
								
          <div class="panel panel-info">
            <div class="panel-heading"> Tambah User
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
                                <!-- start content -->

		                  <form class="form-horizontal" method="POST">
		                    <div class="form-group">
		                      <label class="col-md-12">Username</label>
		                      <div class="col-md-12">
		                        <input type="text" class="form-control" placeholder="Username" name="username">
		                      </div>
		                    </div>
		                   <div class="form-group">
		                      <label class="col-md-12">Password</label>
		                      <div class="col-md-12">
		                        <input type="text" class="form-control" placeholder="password" name="password">
		                      </div>
		                    </div>
 <div class="form-group">
		                      <label class="col-md-12">Level</label>
		                      <div class="col-md-12">
				                        <select class="form-control" name="level">
<?php if ($level =='Member'){ ?>
<?php } else if ($level =='Agen'){ ?>
				                          <option value="Member">Member</option>
<?php } else if ($level =='Reseller') { ?>
<option value="Member">Member</option>
				                          <option value="Agen">Agen</option>
<?php } else if ($level =='Admin') { ?>
<option value="Member">Member</option>
				                          <option value="Agen">Agen</option>
				                          <option value="Reseller">Reseller</option>
<?php } else if ($level =='Developers') { ?>
<option value="Member">Member</option>
				                          <option value="Agen">Agen</option>
				                          <option value="Reseller">Reseller</option>
				                          <option value="Admin">Admin</option>
				                           <?php } ?>
				                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="add">Submit</button>
		                      </div>
		                    </div>
		                  </form>
                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>