<?php
// Script by Sebastian Wirajaya

if(!$username) {
	header('location:../logout');
} else {
$username = $_SESSION['username'];
}
if(isset($_POST['reset'])) {
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
$nama = $hasil['nama'];

$afi = mysql_query("SELECT * FROM api WHERE username = '$username'");
$api = mysql_fetch_array($afi);
$cekapi = mysql_num_rows($afi);


if($cekapi == 0) { ?>
<div class="alert alert-danger">
Gagal : Belum mempunyai APIKEY.
</div>
<?php } else {
 $key = md5(uniqid(rand(), true));
 $ta = "KG-$key";
 $simpan = mysql_query("UPDATE api SET apikey = '$ta' WHERE username = '$username'");
 if($simpan) { ?>
<div class="alert alert-success">
==========RESET==========<br />
Nama : <?php echo $nama; ?><br />
Username : <?php echo $username; ?><br />
Apikey : <?php echo $ta; ?><br />
==========RESET==========
</div>
<?php } else { ?>
ERROR....
<?php   }
   }
} ?>
<? if(isset($_POST['create'])) {
require_once("include/config.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
$nama = $hasil['nama'];

$afi = mysql_query("SELECT * FROM api WHERE username = '$username'");
$api = mysql_fetch_array($afi);
$cekapi = mysql_num_rows($afi);

$harga = '0';

if($cekapi <> 0) { ?>
<div class="alert alert-danger">
Gagal : User sudah terdaftar dalam sistem api.
</div>
<?php } else  if ($hasil['balance'] < $harga) { ?>
<div class="alert alert-danger">
Gagal : Saldo tidak mencukupi.
</div>
<?php } else {
 $key = md5(uniqid(rand(), true));
 $ta = "KG-$key";
 $simpan = mysql_query("INSERT INTO api VALUES('', '$ta', '$nama', '$username')");
 if($simpan) { ?>
<div class="alert alert-success">
==========RESULT==========<br />
Nama : <?php echo $nama; ?><br />
Username : <?php echo $username; ?><br />
Apikey : <?php echo $ta; ?><br />
==========RESULT==========
</div>
<?php } else { ?>
ERROR....
<?php   }
   }
} ?>		
<?php
// Script By Denny Irawan
session_start();
include "include/config.php";
if($_SESSION['username'] == '') {
header('location:/?pesan=Mohon masuk dahulu!');
} else {
$username = $_SESSION['username'];
}
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
$nama = $hasil['nama'];
$afi = mysql_query("SELECT * FROM api WHERE username = '$username'");
$api = mysql_fetch_array($afi);
$cekapi = mysql_num_rows($afi);
if($cekapi == '0') { ?>
<!-- buttons in panel -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-cogs"></i> Created API Key</h3>
            </div>
            <div class="box-body">
		                  <form class="form-horizontal" method="POST">
                                        <b>Click Creat Untuk Mengambil API KEY Code</b> 
                                        <button type="submit" class="btn btn-primary" name="create">Create APIKEY</button>
                                        </div>
                                        </div>

</script><?php } else if($cekapi <> 0) { ?>

           				<pre class="text-center"><h3>API Help (Bantuan API)</h3></pre>
                           <div class="row">
                           <div class="col-md-12">
                                <div class="alert alert-info fade in">

                               <h3 class="panel-title">API Dokumentasi</h3>
                               <p>
                            <div class="panel-body">
		                  <form class="form-horizontal" method="POST"> 
                            <h5><b>Base URL</b></h5>
                            <pre>https://klikgram.id/api/v2/</pre>
                            <h5><b>Response</b></h5>
                            <pre>JSON</pre>
                            <h5><b>HTTP Method</b></h5>
                            <pre>POST</pre>
                            <h5><b>API Key</b></h5>
                            <pre id="apikey"><?php echo $api['apikey']; ?></pre>
                            <button type="submit" class="btn btn-md btn-primary waves-effect waves-light" name="reset"><i class="fa fa-paper-plane-o fa-white"></i> Ganerate API New</button>
</div> 
</div>
</div>
						<div class="col-lg-12">
							<div class="panel panel-color panel-custom">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="icon icon-shuffle"></i> API Integration (Sosial Media)</h3>
								</div>
								<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td>HTTP Method</td>
                                            <td>POST</td>
                                        </tr>
                                        <tr>
                                            <td>API URL <label class="label label-danger">HTTP</label></td>
                                            <td>https://klikgram.id/api/v2/</td>
                                        </tr>
                                        <tr>
                                            <td>Respon</td>
                                            <td>JSON</td>
                                        </tr>
                                        <tr>
                                            <td>API Key</td>
                                            <td>
<?php echo $api['apikey']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Contoh Kode PHP</td>
                                            <td><a href="api/v2/sample.txt" target="blank">CONTOH KODE</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
<h3>Metode add (Membuat order baru)</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>key</td>
                                            <td>API Key Anda.</td>
                                        </tr>
                                        <tr>
                                            <td>action</td>
                                            <td>Metode <label class="label label-success">add</label> untuk membuat order baru</td>
                                        </tr>
                                        <tr>
                                            <td>service</td>
                                            <td>ID layanan di SmartMedia Panel (<a href="?content=service-list">SERVICE LIST</a>)</td>
                                        </tr>
                                        <tr>
                                            <td>link</td>
                                            <td>Data orderan berupa link post/username (Sesuai kebutuhan).</td>
                                        </tr>
                                        <tr>
                                            <td>quantity</td>
                                            <td>Jumlah order yang diinginkan.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Respon yang ditampilkan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Contoh respon jika order <label class="label label-success">SUKSES</label></td>
                                            <td>
<pre>{
"code":"200",
"data":
{
"order_id":"287443",
"link":"http:\/\/twitter.com/salim.sa\/",
"quantity":"100",
"created":"16-03-2016 00:22:35"
}
}</pre></td>
                                        </tr>
                                        <tr>
                                            <td>Contoh respon jika order <label class="label label-danger">GAGAL</label</td>
                                            <td>
<pre>
{
  "error":"not_enough_funds"
}
</pre></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
<h3>Metode status (Cek Status Order)</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>key</td>
                                            <td>API Key Anda.</td>
                                        </tr>
                                        <tr>
                                            <td>action</td>
                                            <td>Metode <label class="label label-success">status</label> untuk membuat order baru</td>
                                        </tr>
                                        <tr>
                                            <td>order_id</td>
                                            <td>Nomor Order KLIKGRAM.ID</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Respon yang ditampilkan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Contoh respon jika cek status order <label class="label label-success">SUKSES</label></td>
                                            <td>
<pre>{
"code":"200",
"data":
{
"order_id":"287443",
"link":"salim.sa",
"status":"Pending",
"created":"15-03-2016 23:33:35"
}
}</pre></td>
                                        </tr>
                                        <tr>
                                            <td>Contoh respon jika cek status order <label class="label label-danger">GAGAL</label</td>
                                            <td>
<pre>
{
   "error":"order_id is not found"
}
</pre></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

								</div>
							</div>
						</div>

					</div>
					<!-- end row -->
<script>
function reset()
{
post();
	var reset = $('#reset').val();
	$.ajax({
		url	: 'api/reset.php',
		data	: 'reset='+reset,
		type	: 'POST',
		dataType: 'html',
		success	: function(result){
hasil();
	$("#result").html(result);
	}
	});
}
</script><?php } ?>