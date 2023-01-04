<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

                    <!-- Row-->
<div class="row">
						
                    <div class="col-sm-12">
					<div class="panel panel-default">
                    <div class="panel-heading"</div>
                    <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Daftar Harga</h3>
                    </div>
                    <div class="panel-body">
					<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover m-0">
			                <thead>
			                  <tr>
			                    <th>ID</th>
			                    <th>LAYANAN</th>
			                    <th>HARGA/1000</th>
			                    <th>MIN</th>
			                    <th>MAX</th>
			                    <th>DESCRIPTION</th>
			                  </tr>
			                </thead>
			                <tbody>
<?php
 $queryu = "SELECT * FROM service WHERE status = 'Tersedia' ORDER BY no ASC";
 $exe = mysql_query($queryu);
 $cek = mysql_num_rows($exe);
 $no = 1;
 while($row = mysql_fetch_assoc($exe)){
  $id = $row['no'];
  $service = $row['service'];
  $price = $row['rate']*1000;
  $min = $row['min'];
  $max = $row['max'];
  $ket = $row['ket'];

?>
			                  <tr>
			                    <td><?php echo $id; ?></td>
			                    <td><?php echo $service; ?></td>
			                    <td><?php echo "Rp " . number_format($price,0,",","."); ?></td>
			                    <td><?php echo $min; ?></td>
			                    <td><?php echo $max; ?></td>
			                    <td><?php echo $ket; ?></td>

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