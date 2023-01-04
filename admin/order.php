<?php
// Script by Denny Irawan

if($level !== "Developers") {
	header('location:/');
} ?>

<?php if (isset($_GET['id'])) {
$edit_id = $_GET['id'];

$queryb = mysql_query("SELECT * FROM order_history WHERE id = '$edit_id'");
$datab = mysql_fetch_array($queryb);
$countb = mysql_num_rows($queryb);

$edit_service = $datab['service'];
$edit_status = $datab['status'];

if ($countb == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Service tidak ditemukan. </div>
<? } else { ?>
                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

                            <div class="span12">
<div class="grid simple ">
<div class="grid-title">
<h4>Edit<span class="semi-bold">Pesanan</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
</div>
<div class="grid-body ">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST" action="?developers=order">
		                    <div class="form-group">
		                      <label class="col-md-12">Service</label>
		                      <div class="col-md-12">
		                        <input type="hidden" value="<?php echo $edit_id; ?>" name="id">
		                        <input type="text" class="form-control" value="<?php echo $edit_service; ?>" readonly>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Status</label>
		                      <div class="col-md-12">
				                        <select class="form-control" name="status">
				                          <option value="<?php echo $edit_status; ?>"><?php echo $edit_status; ?> (Selected)</option>
				                          <option value="Processing">Processing</option>
				                          <option value="Pending">Pending</option>
				                          <option value="Cancelled">Cancelled</option>
				                          <option value="Completed">Completed</option>
				                          <option value="Refunded">Refunded</option>
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
                        <!-- col -->
                    </div>
                    <!-- Row-->
<? } } else { ?><? } ?>

<?php if (isset($_POST['edit'])) {
// memulai proses edit order

$add_id = $_POST['id'];
$add_status = $_POST['status'];

// mencari data di database
$cekdata = mysql_query("SELECT * FROM order_history WHERE id = '$add_id'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);

$show_service = $sdata['service'];
$show_orderid = $sdata['order_id'];

// memulai eksekusi
if ($scount == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> User tidak ditemukan. </div>
<? } else {
	$send = mysql_query("UPDATE order_history SET status = '$add_status' WHERE id = '$add_id'");

if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Success: </strong> Edit order berhasil!<br />
Service: <?php echo $show_service; ?><br />
Order ID: <?php echo $show_orderid; ?><br />
Status: <?php echo $add_status; ?><br />
Date: <?php echo $date; ?>
</font>
</div>
<? } else { ?>
Database error!
<? } } } ?>

                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">


          <div class="white-box">
            <h3 class="box-title m-b-0">Order Manager</h3>
            <div class="table-responsive">
            <table id="myTable" class="table table-striped">	     <thead>
			                  <tr>
			                    <th>NO</th>
			                    <th>ORDER ID</th>
			                    <th>BUYER</th>
			                    <th>SERVICE</th>
			                    <th>LINK</th>
			                    <th>QUANTITY</th>
			                    <th>PRICE</th>
			                    <th>STATUS</th>
			                    <th>DATE</th>
			                    <th>ACTION</th>
			                  </tr>
			                </thead>
			                <tbody>
<?php
 $queryu = "SELECT * FROM order_history ORDER BY id DESC";
 $exe = mysql_query($queryu);
 $cek = mysql_num_rows($exe);
 $no = 1;
 while($row = mysql_fetch_assoc($exe)){
  $id = $row['id'];
  $order_id = $row['order_id'];
  $service = $row['service'];
  $link = $row['link'];
  $quantity = $row['quantity'];
  $price = $row['price'];
  $date = $row['date'];
  $status = $row['status'];
  $buyer = $row['buyer'];
?>
			                  <tr>
			                    <td><?php echo $no; ?></td>
			                    <td><?php echo $order_id; ?></td>
			                    <td><?php echo $buyer; ?></td>
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
<? } else if ($status == "In Progress") { ?>
<span class="label label-info">
<? } else if ($status == "Cancelled") { ?>
<span class="label label-danger">
<? } ?>
<?php echo $status; ?>
</span>
</td>
			                    <td><?php echo $date; ?></td>
			                    <td><a class="btn btn-sm btn-block btn-success waves-effect waves-light" href="?developers=order&id=<?php echo $id; ?>"> Edit</a></td>
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