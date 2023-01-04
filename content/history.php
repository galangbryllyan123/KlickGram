<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>


                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
					<div class="panel panel-default">
                    <div class="panel-heading"</div>
                    <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Riwayat Pemesanan</h3>
                    </div>
                    <div class="panel-body">
					<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover m-0">
			                <thead>
			                  <tr>
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
			                    <td>SMP - <?php echo $order_id; ?></td>
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
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#example23').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  </script>