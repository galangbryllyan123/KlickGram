<?php
// Script by Denny Irawan
$title = "SmartMedia Panel";

date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");
$time = date("h:i:s");

$host = "localhost";
$user = "smartmed_panel";
$pass = "smartmed_panel1";
$db = "smartmed_panel";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! ');
mysql_select_db($db);
?>