<?php
require_once("../include/config.php");
$category = mysql_real_escape_string(trim($_POST['category']));
$query = mysql_query("SELECT * FROM service WHERE category = '$category' AND status = 'Tersedia' ORDER BY no");
if(mysql_num_rows($query)<1){
	print '<option value="0">No Data</option>';
} else {
	while($fetch = mysql_fetch_assoc($query)){
		$id = $fetch['no'];
		$service = $fetch['service'];
		print '<option value="'.$id.'">'.$service.'</option>';
	}
}