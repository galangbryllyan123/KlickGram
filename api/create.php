<?php
session_start();
if($_SESSION['username'] == '') {
header('location:/?pesan=Mohon masuk dahulu!');
} else {
$username = $_SESSION['username'];
}
if(isset($_POST['create'])) {
require_once("jangan/config.php");
$query = mysql_query("SELECT * FROM users WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
$nama = $hasil['nama'];
$saldo = $hasil['saldo'];

$afi = mysql_query("SELECT * FROM api WHERE username = '$username'");
$api = mysql_fetch_array($afi);
$cekapi = mysql_num_rows($afi);

$harga = '0';
$balance = $saldo-$harga;
if($cekapi <> 0) { 
header("Location:./api.php?error=Vk");
 } else  if ($hasil['saldo'] < $harga) { 
header("Location:./api.php?error=VkK");

} else {
$salman = "KG";
$key = md5(uniqid(rand(), true));
$api_key = "$salman-$key";

 $simpan = mysql_query("UPDATE users SET saldo = '$balance' WHERE username = '$username'");
 $query = ("INSERT into api(apikey,nama,username) VALUES('$api_key','$nama','$username')");
	$sql = mysql_query ($query) or die (mysql_error());
 if($sql) { 
header("Location:./api.php?sukses=$api_key");
 } else { 
header("Location:../dashboard.php?error");
   }
   }
} ?>	