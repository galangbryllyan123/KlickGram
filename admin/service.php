<?php
// Script by Denny Irawan

if($level !== "Developers") {
	header('location:/');
} ?>

<?php if (isset($_GET['id'])) {
$edit_id = $_GET['id'];

$queryb = mysql_query("SELECT * FROM service WHERE no = '$edit_id'");
$datab = mysql_fetch_array($queryb);
$countb = mysql_num_rows($queryb);

$edit_service = $datab['service'];
$edit_category = $datab['category'];
$edit_rate = $datab['rate'];
$edit_min = $datab['min'];
$edit_max = $datab['max'];
$edit_provider = $datab['provider'];
$edit_providerid = $datab['provider_id'];
$edit_status = $datab['status'];

if ($countb == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Service tidak ditemukan. </div>
<? } else { ?>
                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading">Edit Service</div>
								<div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST" action="?developers=service">
		                    <div class="form-group">
		                      <label class="col-md-12">Service</label>
		                      <div class="col-md-12">
		                        <input type="hidden" class="form-control" value="<?php echo $edit_id; ?>" name="id">
		                        <input type="text" class="form-control" value="<?php echo $edit_service; ?>" name="service" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Rate</label>
		                      <div class="col-md-12">
		                        <input type="text" class="form-control" name="rate" value="<?php echo $edit_rate; ?>" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Min</label>
		                      <div class="col-md-12">
		                        <input type="number" class="form-control" name="min" value="<?php echo $edit_min; ?>" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Max</label>
		                      <div class="col-md-12">
		                        <input type="number" class="form-control" name="max" value="<?php echo $edit_max; ?>" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Provider</label>
		                      <div class="col-md-12">
				                        <select class="form-control" name="provider">
				                          <option value="<?php echo $edit_provider; ?>"><?php echo $edit_provider; ?> (Selected)</option>
				                          <option value="SMP">SMARTMEDIA</option>
				                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Provider ID</label>
		                      <div class="col-md-12">
		                        <input type="number" class="form-control" name="providerid" value="<?php echo $edit_providerid; ?>" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Status</label>
		                      <div class="col-md-12">
				                        <select class="form-control" name="status">
				                          <option value="<?php echo $edit_status; ?>"><?php echo $edit_status; ?> (Selected)</option>
				                          <option value="Tersedia">Tersedia</option>
				                          <option value="Tidak tersedia">Tidak tersedia</option>
				                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="edit">Submit</button>
		                      </div>
		                    </div>
		                  </form>
                                <!-- end content -->
                            </div>

                        </div>
                            </div>

                        </div>
                        <!-- col -->
                    </div>
                    <!-- Row-->
<? } } else { ?><? } ?>

<?php if (isset($_POST['add'])) {
// memulai proses add service

$add_category = $_POST['category'];
$add_service = $_POST['service'];
$add_rate = $_POST['rate'];
$add_min = $_POST['min'];
$add_max = $_POST['max'];
$add_provider = $_POST['provider'];
$add_providerid = $_POST['provid'];

if (!$add_service || !$add_rate || !$add_min || !$add_max || !$add_providerid) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else {
	$send = mysql_query("INSERT INTO service(category, service, rate, min, max, provider, provider_id, status) VALUES ('$add_category','$add_service','$add_rate','$add_min','$add_max','$add_provider','$add_providerid','Tersedia')");

if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Success Add service! </strong> A<br />
Category: <?php echo $add_category; ?><br />
Service: <?php echo $add_service; ?><br />
Rate: <?php echo $add_rate; ?><br />
Min: <?php echo $add_min; ?><br />
Max: <?php echo $add_max; ?><br />
Provider: <?php echo $add_provider; ?><br />
Provider ID: <?php echo $add_providerid; ?><br />
</font>
</div>
<? } else { ?>
Database error!
<? } } ?>

<? } else if (isset($_POST['delete'])) {
// memulai proses delete user

$add_id = $_POST['idservice'];

// mencari data di database
$cekdata = mysql_query("SELECT * FROM service WHERE no = '$add_id'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);

$show_service = $sdata['service'];

// memulai eksekusi
if ($scount == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Service tidak ditemukan. </div>
<? } else {
$send = mysql_query("DELETE FROM service WHERE no = '$add_id'");

if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Success: </strong> Delete service berhasil!<br />
Service: <?php echo $show_service; ?><br />
Date: <?php echo $date; ?>
</font>
</div>
<? } else { ?>
Database error!
<? } } ?>

<? } else if (isset($_POST['edit'])) {
// memulai proses edit user

$add_no = $_POST['id'];
$add_service = $_POST['service'];
$add_rate = $_POST['rate'];
$add_min = $_POST['min'];
$add_max = $_POST['max'];
$add_provider = $_POST['provider'];
$add_providerid = $_POST['providerid'];
$add_status = $_POST['status'];

// mencari data di database
$cekdata = mysql_query("SELECT * FROM service WHERE no = '$add_no'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);

// memulai eksekusi
if ($scount == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Service tidak ditemukan. </div>
<? } else if (!$add_service) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else {
	$send = mysql_query("UPDATE service SET service = '$add_service' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET rate = '$add_rate' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET min = '$add_min' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET max = = '$add_max' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET provider = '$add_provider' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET provider_id = '$add_providerid' WHERE no = '$add_no'");
	$send = mysql_query("UPDATE service SET status = '$add_status' WHERE no = '$add_no'");

if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Success Edit service! </strong><br />
ID: <?php echo $add_no; ?><br />
SERVICE: <?php echo $add_service; ?><br />
RATE: <?php echo $add_rate; ?><br />
MIN: <?php echo $add_min; ?><br />
MAX: <?php echo $add_max; ?><br />
PROVIDER: <?php echo $add_provider; ?><br />
PROVIDER ID: <?php echo $add_providerid; ?><br />
STATUS: <?php echo $add_status; ?><br />
</font>
</div>
<? } else { ?>
Database error!
<? } } } ?>

                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading">Service Manager</div>
								<div class="panel-body">
                                <!-- start content -->
                                <div class="row">
                                	<div class="col-md-6">
                                		<a class="btn btn-block btn-success waves-effect waves-light" data-toggle="modal" data-target="#add-service"> Add Service</a>
                                	</div>
                                	<div class="col-md-6">
                                		<a class="btn btn-block btn-danger waves-effect waves-light" data-toggle="modal" data-target="#delete-service"> Delete Service</a>
                                	</div>
                                </div>
			              <div id="delete-service" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			                <div class="modal-dialog">
			                  <div class="modal-content">
			                    <div class="modal-header">
			                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			                      <h4 class="modal-title">Delete Service</h4>
			                    </div>
			                    <form method="POST">
			                    <div class="modal-body">
			                        <div class="form-group">
			                          <label for="recipient-name" class="control-label">ID:</label>
		                                          <select class="form-control select2" name="idservice">
<?php
$querya = "SELECT * FROM service ORDER BY no ASC";
$exea = mysql_query($querya);
$noa = 1;
while($rowa = mysql_fetch_assoc($exea)){
$ida = $rowa['no'];
$servicea = $rowa['service'];
?>
		                                            <option value="<?php echo $ida; ?>"><?php echo $servicea; ?></option>
<? $noa++; } ?>
		                                          </select>
			                        </div>
			                    </div>
			                    <div class="modal-footer">
			                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
			                      <button type="submit" class="btn btn-inverse waves-effect waves-light" name="delete">Delete</button>
			                    </div>
			                    </form>
			                  </div>
			                </div>
			              </div>
			              </div>
			              <div id="add-service" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			                <div class="modal-dialog">
			                  <div class="modal-content">
			                    <div class="modal-header">
			                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			                      <h4 class="modal-title">Add Service</h4>
			                    </div>
			                    <form method="POST">
			                    <div class="modal-body">
				                    <div class="form-group">
				                      <label>Category:</label>
				                      <div>
				                        <select class="form-control" name="category">
				                          <option value="IGF">Instagram Followers</option>
				                          <option value="IGL">Instagram Likes</option>
				                          <option value="IGV">Instagram Views</option>
				                          <option value="TW">Twitter</option>
				                          <option value="YT">Youtube</option>
				                          <option value="FB">Facebook</option>
				                          <option value="SC">Soundcloud</option>
				                          <option value="GP">Google Plus</option>
				                          <option value="VINE">Vine</option>
				                          <option value="WEB">Website</option>
				                        </select>
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Service:</label>
				                      <div>
				                        <input type="text" class="form-control" placeholder="Service" name="service">
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Rate:</label>
				                      <div>
				                        <input type="number" class="form-control" placeholder="Rate" name="rate">
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Min:</label>
				                      <div>
				                        <input type="number" class="form-control" placeholder="Min" name="min">
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Max:</label>
				                      <div>
				                        <input type="number" class="form-control" placeholder="Max" name="max">
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Provider:</label>
				                      <div>
				                        <select class="form-control" name="provider">
				                          <option value="SMP">SMARTMEDIA</option>
				                        </select>
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <label>Provider ID:</label>
				                      <div>
				                        <input type="number" class="form-control" placeholder="Provider ID" name="provid">
				                      </div>
				                    </div>
			                    </div>
			                    <div class="modal-footer">
			                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
			                      <button type="submit" class="btn btn-inverse waves-effect waves-light" name="add">Add</button>
			                    </div>
			                    </form>
			                  </div>
			                </div>
			              </div>
			              
                                <!-- end content -->
                            </div>
  <!-- Row-->
                        <!-- col -->
          <div class="white-box">
            <h3 class="box-title m-b-0">Service List</h3>
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">			
			                <thead>
			                  <tr>
			                    <th>NO</th>
			                    <th>ID</th>
			                    <th>SERVICE</th>
			                    <th>RATE</th>
			                    <th>MIN</th>
			                    <th>MAX</th>
			                    <th>PROVIDER</th>
			                    <th>PROVIDER ID</th>
			                    <th>STATUS</th>
			                    <th>ACTION</th>
			                  </tr>
			                </thead>
			                <tbody>
<?php
 $queryu = "SELECT * FROM service ORDER BY no ASC";
 $exe = mysql_query($queryu);
 $cek = mysql_num_rows($exe);
 $no = 1;
 while($row = mysql_fetch_assoc($exe)){
  $id = $row['no'];
  $service = $row['service'];
  $rate = $row['rate'];
  $min = $row['min'];
  $max = $row['max'];
  $provider = $row['provider'];
  $provider_id = $row['provider_id'];
  $status = $row['status'];
?>
			                  <tr>
			                    <td><?php echo $no; ?></td>
			                    <td><?php echo $id; ?></td>
			                    <td><?php echo $service; ?></td>
			                    <td><?php echo $rate; ?></td>
			                    <td><?php echo $min; ?></td>
			                    <td><?php echo $max; ?></td>
			                    <td><?php echo $provider; ?></td>
			                    <td><?php echo $provider_id; ?></td>
			                    <td><?php echo $status; ?></td>
			                    <td><a class="btn btn-sm btn-block btn-success waves-effect waves-light" href="?developers=service&id=<?php echo $id; ?>"> Edit</a></td>
			                  </tr>
<?
$no++;
} ?>
			                </tbody>
			              </table>
                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>
                    <!-- Row-->

<script>
jQuery(document).ready(function() {
	$(".select2").select2();
});
</script>