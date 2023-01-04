<?php
// Script by Faisal Khairul Fasha
$title = "KlikGram";

date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");
$time = date("h:i:s");

$host = "localhost";
$user = "followakudong_salim";
$pass = "followakudong_salim123";
$db = "followakudong_salim";
$konek = mysql_connect($host, $user, $pass) or die ('Perbaikan ! ');
mysql_select_db($db);
?>