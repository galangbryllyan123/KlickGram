<?php
require_once("../include/config.php");
$id = mysql_real_escape_string((int)$_POST['service']);
$query = mysql_query("SELECT * FROM service WHERE no = '$id' AND status = 'Tersedia'");
if(mysql_num_rows($query)<1){
	print '0';
} else {
	$fetch = mysql_fetch_assoc($query);
	$show = $fetch['ket'];
	print $show;
}