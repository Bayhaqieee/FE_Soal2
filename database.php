<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$data = 'personal_data';
	$gather = mysqli_connect($host,$user,$pass,$data);

	mysqli_select_db($gather, $data);
?>
