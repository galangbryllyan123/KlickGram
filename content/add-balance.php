<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

<?php if (isset($_POST['balance'])) {
$method = $_POST['method'];
$quantity = $_POST['quantity'];

if ($method == "BANK") {
$getbal = $quantity;
$payto = "NOREK: 000000/N Siti Sunarti";
} else if ($method == "PULSA") {
$getbal = $quantity;
$payto = "NOHP:082112235774";
}

if (!$quantity || !$method) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else if ($quantity < 5000) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Minimal 5000. </div>
<? } else {
$kode = rand(0000,9999);
$kode2 = rand(0000,9999);
	$send = mysql_query("INSERT INTO request_balance(kode, username, quantity, method, status, date, time) VALUES ('$kode$kode2','$username','$getbal','$method','Pending','$date','$time')");
if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Permintaan Deposit Saldo Berhasil! <br />
Kode Request: #<?php echo $kode; ?><?php echo $kode2; ?>  (TOLONG DI INGAT!)<br />
Metode Pembayaran: <?php echo $method; ?> <br />
Jumlah Transfer: <?php echo $quantity; ?> </strong> <br />
<strong>Status: Pending </strong><br />
<br /><br />
<strong>Silahkan Mengirimkan Pembayaran Ke <i><u>0821-1223-5774</u></i> <br />
<strong>Jika Sudah Mengirimkan Pembayaran, Segera Klik Fitur <i><u><a href='?content=index'>Konfirmasil Saldo</a></u></i>. <br />
<strong>Jika Kode Request Sudah Dikonfirmasi Admin, Maka Balance Akan Otomatis Terisi.
</div>
<? } else { ?>
Database error!
<? } } } else { ?>
<div class="alert alert-info"> <strong>*INFO: </strong> Untuk melakukan Add Balance, Anda harus melakukan request dahulu dengan submit form dibawah ini.<br />
<b>CARA MELAKUKAN REQUEST:</b></br >
- Pilih metode pembayaran Deposit Saldo.<br />
- Kemudian masukkan jumlah pembayaran yang akan dikirim pada input Quantity.<br />
- Setelah memasukkan jumlah pembayaran, maka jumlah balance yang didapat setelah kode request diterima akan muncul pada input Get Balance.<br />
- Jika data sudah lengkap klik Submit, maka akan muncul result submit berupa kode request, nomor tujuan pembayaran, dan info lainnya.<br />
- Setelah itu lakukan pembayaran menuju nomor tujuan yang telah ditampilkan pada result. Jika sudah membayar, segera kirimkan kode request Add Balance dan bukti pembayaran pada Admin.<br />
- Jika sudah request klik fitur <i><u><a href='?content=index'>Konfirmasil Saldo</a></u></i>, maka balance akan otomatis terisi.<br /><br />
Terimakasih.</div>
<? } ?>
                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

 <div class="panel panel-info">
            <div class="panel-heading"> Deposit Saldo
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                    <div class="form-group">
		                      <label class="col-md-12">Method</label>
		                      <div class="col-md-12">
		                        <select class="form-control" name="method" id="method">
		                          <option value="0">Pilih salah satu</option>
		                          <option value="PULSA">Pulsa Telkomsel</option>
		                          
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <div class="col-md-6">
			                      <label>Quantity</label>
			                      <div>
			                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" onkeyup="getbal(this.value).value;" required>
			                      </div>
		                      </div>
		                      <div class="col-md-6">
			                      <label>Get Balance</label>
			                      <div class="input-group"><span class="input-group-addon">Rp.</span>
			                        <input type="number" class="form-control" id="getbalance" value="0" readonly>
			                      </div>
		                      </div>
		                    </div>
		                    <div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="balance">Deposit Now!</button>
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