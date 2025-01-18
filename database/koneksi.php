<?php
$name_server = "localhost";
$user = "root";
$pw = "";
$data_base = "db_pspeaking";
$koneksi = new mysqli ($name_server, $user, $pw, $data_base);

if (!$koneksi){
	die("koneksi gagal ".mysqli_connect_error());
}
?>