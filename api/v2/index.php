<?php
// Script by Denny Irawan
session_start();
date_default_timezone_set('Asia/Jakarta');
$date = date("Y-m-d");
$time = date("h:i:s");
require_once("koneksi.php");

if (!$_POST['api']){
	$output = array (
			'code' => '404',
			'data' => array (
					'message' => 'input data is empty'
			));
	print_r(json_encode($output));
			} else {
$key = $_POST['api']; // tangkap data api user


//menyusun_data_yang_di_perlukan

$action = $_POST['action'];
$idsvice = $_POST['service'];
$links = $_POST['link'];
$quantity = $_POST['quantity'];
$order_id = $_POST['order_id'];

//validitas_api_key_dan_user
$key = stripslashes($key);
$key = mysql_real_escape_string($key);
$query = mysql_query("select * from api where apikey = '$key'");
		$data = mysql_fetch_array($query);
		$username = $data['username'];
		$rows = mysql_num_rows($query);
			if ($rows != 1) {
				$output = array ( 
						'code' => '404',
						'data' => array ( 
								 'message' => 'api_key is not exist'
								 ));
				print_r(json_encode($output));
                        } else if($quantity < 0) {
				                $output = array ( 
						'code' => '404',
						'data' => array ( 
								 'message' => 'jumlah order tidak sesuai'
								 ));
				print_r(json_encode($output));
				} else {
$querya = mysql_query("select * from user where username = '$username'");
		$dataa = mysql_fetch_array($querya);
		$saldoa = $dataa['balance'];
		$usernames = $dataa['username'];
		$nama = $dataa['nama'];


if ($action == 'add') {
//cek idsvice

$idjumlh = $quantity;
$sal1 = mysql_query("SELECT * FROM service WHERE no = '$idsvice' AND status = 'Tersedia'");
$tamvan1 = mysql_fetch_array($sal1); 
$rowss = mysql_num_rows($sal1);
$rates1 = $tamvan1['rate'];
$minimal1 = $tamvan1['min'];
$maksimal1 = $tamvan1['max'];
$kode1 = $tamvan1['provider_id'];
$name = $tamvan1['service'];
$jenis22 = $tamvan1['provider'];
$enabled23 = $tamvan1['status'];
$jumlahtotal1 = $idjumlh  * $rates1; //totalnya

$dataaa = mysql_query("SELECT * FROM user WHERE username = '$usernames'");
$hasil2= mysql_fetch_array($dataaa); 
$username2 = $hasil2['username'];
$balance = $hasil2['balance'];
			if ($rowss != 1) {
				$output = array ( 
						'code' => '405',
						'data' => array ( 
								 'message' => 'service_id is not exist'
								 ));
				print_r(json_encode($output));
				}

$total = $jumlahtotal1;

if ($saldoa < $total) { //pengecekkan saldo member
	$output = array ( 
			'code' => '403',
			'data' => array ( 
			'message' => 'not enough funds on balance'
			 ));
	print_r(json_encode($output));
} else { //proses orderan disini
if ($jenis22 == "RIVALPANEL") {
class Api
   {
      public $api_url = 'https://rivalpanel.id/api/v2/'; // API URL

      public $api_key = 'RVLec4329c83350ca22a8000cfdf7cbe6e0'; // Your API key

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

   $order = $api->order("".$links."", "".$kode1."", "".$idjumlh."");
} else if($jenis22 == "SOCIALMEDIA"){
     class Api
   {
      public $api_url = 'http://socialmedia-panel.id/api/v2/index.php'; // API URL

      public $api_key = 'SM-1af2defad837e57365412cc42b6720a4'; // Your API key

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

   $order = $api->order("".$links."", "".$kode1."", "".$idjumlh."");
}

if ($jenis22 == "INSTANSOSMED") {
$id_order = $order->data->order_id;
} else if($jenis22 == "RIVALPANEL") {
$id_order = $order->data->order_id;
} else if($jenis22 == "SOCIALMEDIA") {
$id_order = $order->data->order_id;
} else {
$id_order = rand(0000,9999);
}

	$balances = $balance-$total;
	$send = mysql_query("UPDATE user SET balance = $balances WHERE username = '$usernames'");
	$send = mysql_query("UPDATE user SET balance_used = balance_used+$total WHERE username = '$usernames'");
        $send = mysql_query("INSERT INTO order_history(order_id, provider, buyer, service, link, quantity, price, status, date, time) VALUES ('$id_order','$jenis22','$usernames','$name (API)','$links','$idjumlh','$total','Pending','$date','$time')");

	if ($send){
	$output = array (
				'code' => '200',
				'data' => array (
						'order_id' => $id_order,
						'link' => $links,
						'layanan' => $name,
	 					'status' => 'Pending',
						'created' => $date
						));
		print_r(json_encode($output));
	
	}
}

}
if ($action == 'status'){
	$querys = mysql_query("select * from order_history where order_id = '$order_id'");
		$rowsss = mysql_num_rows($querys);
			if ($rowsss != 1) {
				$output = array ( 
						'code' => '404',
						'data' => array ( 
								 'message' => 'order_id is not found'
								 ));
				print_r(json_encode($output));
				} else {
				$datas = mysql_fetch_array($querys);
				$status = $datas['status'];
				$link = $datas['link'];
				$date = $datas['date'];
				$idsvice_name = $datas['service'];
				$output = array ( 
						'code' => '200',
						'data' => array ( 
								 'order_id' => $order_id,
								 'link' => $link,
								 'layanan' => $idsvice_name,
								 'status' => $status,
								 'created' => $date
								 ));
				print_r(json_encode($output));
}
}


}

}
?>