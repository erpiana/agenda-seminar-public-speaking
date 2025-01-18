<?php
$servername = "localhost";
$username = "root";
$password = ""; 

/*Create Connection*/
$conn = mysqli_connect($servername, $username, $password);

/*Check Connection*/
if(!$conn){
	die("Koneksi Gagal: ".mysqli_connect_error());
}

/*Create Database*/
$sql = "CREATE DATABASE db_pspeaking";
if(mysqli_query($conn, $sql)){
	echo "Database db_pspeaking berhasil dibuat";
}else{
	echo "Gagal membuat database: ".mysqli_error($conn);
}
mysqli_close($conn);
?>