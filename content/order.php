<?php
// Script by Denny Irawan

if(!$username) {
	header('location:../login.php');
} ?>

<?php if (isset($_POST['order'])) {
$link = $_POST['link'];
$no = $_POST['service'];
$quantity = $_POST['quantity'];

$dataservice = mysql_query("SELECT * FROM service WHERE no = '$no' AND status = 'Tersedia'");
$sdata = mysql_fetch_array($dataservice);
$scount = mysql_num_rows($dataservice);

$min = $sdata['min'];
$max = $sdata['max'];
$ket = $sdata['ket'];
$service = $sdata['service'];
$rate = $sdata['rate'];
$provider = $sdata['provider'];
$providerid = $sdata['provider_id'];

$price = $quantity*$rate;


if ($scount == 0) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Service tidak ditemukan. </div>
<? } else if (!$quantity || !$link) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Masih ada data yang kosong. </div>
<? } else if ($quantity < $min) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Quantity tidak sesuai. </div>
<? } else if ($quantity > $max) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Quantity tidak sesuai. </div>
<? } else if ($balance < $price) { ?>
<div class="alert alert-danger"> <strong>Error: </strong> Balance tidak mencukupi, silahkan topup. </div>
<? } else {

if ($provider == "SMP") {
class Api
   {
      public $api_url = 'http://smartmedia-panel.web.id/api/v2/'; // API URL

      public $api_key = 'SM-b5111c4fa28e01ff9b0f145b9f16ad6c'; // Your API key

      public function order($link, $type, $quantity) { // Add order
        return json_decode($this->connect(array(
          'api' => $this->api_key,
          'action' => 'add',
          'link' => $link,
          'service' => $type,
          'quantity' => $quantity
        )));
      }

      public function status($order_id) { // Get status, remains
        return json_decode($this->connect(array(
          'api' => $this->api_key,
          'action' => 'status',
          'order_id' => $order_id
        )));
      }


      private function connect($post) {
        $_post = Array();
        if (is_array($post)) {
          foreach ($post as $name => $value) {
            $_post[] = $name.'='.urlencode($value);
          }
        }
        $ch = curl_init($this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        if (is_array($post)) {
          curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        if (curl_errno($ch) != 0 && empty($result)) {
          $result = false;
        }
        curl_close($ch);
        return $result;
      }
   }

   // Examples

   $api = new Api();

   $order = $api->order("".$link."", "".$providerid."", "".$quantity."");
} else if($provider == "SOSPED"){
class Api
   {
      public $api_url = 'https://sosmedpedia.com/api.php'; // API URL

      public $api_key = 'apikey'; // Your API key

      public function order($link, $type, $quantity) { // Add order
        return json_decode($this->connect(array(
          'api' => $this->api_key,
          'action' => 'tambah',
          'linknya' => $link,
          'hasilnya' => $type,
          'quantitynya' => $quantity
        )));
      }

      public function status($order_id) { // Get status, remains
        return json_decode($this->connect(array(
          'api' => $this->api_key,
          'action' => 'cekin',
          'id' => $order_id
        )));
      }


      private function connect($post) {
        $_post = Array();
        if (is_array($post)) {
          foreach ($post as $name => $value) {
            $_post[] = $name.'='.urlencode($value);
          }
        }
        $ch = curl_init($this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        if (is_array($post)) {
          curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        echo $result;
        if (curl_errno($ch) != 0 && empty($result)) {
          $result = false;
        }
        curl_close($ch);
        return $result;
      }
   }

   // Examples

   $api = new Api();

   $order = $api->order("".$link."", "".$providerid."", "".$quantity."");
}

if ($provider == "SMP" AND $order->error) { ?>
<div class="alert alert-danger"> <strong>Fitur Sedang Dalam Perbaikan.</strong></div>
<? } else if ($provider == "SOSPED" AND $order->error) { ?>
<div class="alert alert-danger"> <strong>Gagal: </strong> Fitur Sedang Maintenance </div>
<? } else {
if ($provider == "SMP") {
$order_id = $order->data->order_id;
} else if($provider == "SOSPED") {
$order_id= $order->data->id;
} else {
$order_id = rand(0000,9999);
}
	$send = mysql_query("UPDATE user SET balance = balance-$price WHERE username = '$username'");
	$send = mysql_query("UPDATE user SET balance_used = balance_used+$price WHERE username = '$username'");
	$send = mysql_query("INSERT INTO order_history(order_id, provider, buyer, service, link, quantity, price, status, date, time) VALUES ('$order_id','$provider','$username','$service','$link','$quantity','$price','Pending','$date','$time')");
if ($send) { ?>
<div class="alert alert-info">
<font color="black">
<strong>Pembelian: Success!</strong><br />
Order ID: KG -<?php echo $order_id ?><br />
Service : <?php echo $service; ?><br />
Link : <?php echo $link; ?><br />
Quantity: <?php echo $quantity; ?><br />
Price : <?php echo "Rp. " . number_format($price,0,",","."); ?> Balance<br />
Tanggal Order : <?php echo $date; ?>
</font>
</div>
<? } else { ?>
errror
<? } } } } else { ?>
<div class="alert alert-info"> <strong>*INFO: </strong> Sebelum order mohon membaca Peraturan, agar tidak terjadi kesalahan saat melakukan order. Kami tidak akan merefund order yang error karena kesalahan user</div>
<? } ?>

                    <!-- Row-->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>       
         <script type="text/javascript">
var htmlobjek;
$(document).ready(function(){

 $("#category").change(function(){
    var category = $("#category").val();

	$.ajax({
		url	: 'include/service.php',
		data	: 'category='+category,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#service").html(msg);
	        }
	});
  });

  $("#service").change(function(){
    var service = $("#service").val();

	$.ajax({
		url	: 'include/min.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#min").val(msg);
	        }
	});

	$.ajax({
		url	: 'include/max.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#max").val(msg);
	        }
	});

        $.ajax({
		url	: 'include/ket.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#ket").val(msg);
	        }
	});

	$.ajax({
		url	: 'include/rate.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#rate").val(msg);
	        }
	});

        $.ajax({
		url	: 'include/creat.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#creat").val(msg);
	        }
	});

	$.ajax({
		url	: 'include/price.php',
		data	: 'service='+service,
		type	: 'POST',
		dataType: 'html',
		success	: function(msg){
	             $("#price").val(msg);
	        }
	});
  });


});
</script>
 <div class="panel panel-info">
            <div class="panel-heading"> Pesan Baru
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
                                <!-- start content -->
		                  <form class="form-horizontal" method="POST">
		                    <div class="form-group">
		                      <label class="col-md-12">Category</label>
		                      <div class="col-md-12">
		                        <select class="form-control" name="category" id="category">
		                          <option value="0">Pilih salah satu</option>
				          <option value="IGF">Instagram Followers</option>
				          <option value="IGL">Instagram Likes</option>
				          <option value="IGV">Instagram Views</option>
		                          <option value="TW">Twitter</option>
		                          <option value="FB">Facebook</option>
		                          <option value="YT">Youtube</option>
		                          <option value="SC">Soundcloud</option>
		                          <option value="WEB">Website</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <label class="col-md-12">Service</label>
		                      <div class="col-md-12">
		                        <select class="form-control" name="service" id="service">
		                          <option value="0">Pilih salah satu</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <div class="col-md-4">
			                      <label>Price/1000</label>
			                      <div class="input-group"><span class="input-group-addon">Rp.</span>
			                        <input type="text" class="form-control" id="price" value="0" readonly>
			                      </div>
		                      </div>
		                       <div class="col-md-8">
			                      <label>Description</label>
			                      <div>
<textarea rows="2" id="ket" class="form-control" readonly="true"></textarea>
			                      </div>
		                      </div>
                            </div>
		                    <div class="form-group">
		                      <div class="col-md-12">
		                      <label>Username/Link</label>
		                        <input type="text" class="form-control" name="link" placeholder="Username/Link" required>
		                      </div>
		                    </div>
		                    <div class="form-group">
		                      <div class="col-md-12">
			                      <label>Quantity</label>
			                      <div>
			                        <input type="hidden" class="form-control" id="rate">
			                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Jumlah order" onkeyup="getcut(this.value).value;" required>
			                      </div>
		                      </div>
		                      <div class="col-md-12">
			                      <label>Cut Balance</label>
			                      <div class="input-group"><span class="input-group-addon">Rp.</span>
			                        <input type="text" class="form-control" id="cutbalance" value="0" readonly>
			                      </div>
		                      </div>
		                    </div>
		                    <div class="form-group m-b-0">
		                      <div class="col-md-12">
		                        <button type="submit" class="btn btn-info waves-effect waves-light" name="order">Submit</button>
		                      </div>
		                    </div>
		                  </form>
                                <!-- end content -->
                            </div>

                        </div>
                        <!-- col -->
                    </div>

 <div class="panel panel-info">
            <div class="panel-heading"> Peraturan Order
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
<center><b>WAJIB BACA!!<br/>PERATURAN SEBELUM ORDER</b></center><br/>
<ol class="list-p"><b>
<li><b>Untuk Followers di Harapkan Menggunakan Username Jangan Seperti : @salim.sa Tapi Seperti : salim.sa Tanpa Menggunakan @ ya :D</b></li>
<li><b>Jangan menggunakan lebih dari satu layanan sekaligus untuk username/link yang sama. Harap tunggu status <span class="label label-success">Completed</span></b></li>
<li><b>Setelah order dimasukan, jika username/link yang diinput diganti pribadi atau diubah, kami tidak akan mengembalikan. Pastikan Anda memasukkan data yang benar, karena kami tidak akan lagi membatalkan pesanan.</b></li>
<li><b>Kesalahan member, bukan tanggung jawab admin, karena panel ini serba automatis, jadi hati-hati dan perhatiakan sebelum order!</b></li>
<li><b>Jika Orderan status <span class="label label-warning">Partial</span> & <span class="label label-danger">Canceled</span> Harap Lapor admin untuk di Re-order!</b></li>
<li><b>Jika Pesanan belum selesai, dalam waktu 1x24Jam silakan hubungi Admin!</b></li>
</ol></b>
</div></div></div>

                    </div>
                    <!-- Row-->
                    </div>
                    <!-- Row-->