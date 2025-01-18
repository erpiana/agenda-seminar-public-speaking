<?php
include_once '../database/koneksi.php';
$sql = "DELETE FROM tabel2 WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($koneksi, $sql)) {
        $Save2="Data Berhasil DiHapus";
        $Save1=urlencode($Save2);
        header("location: hapusdata.php?Save1=". $Save1);
    } else {
        echo "Gagal! gagal menyimpan data: " . $koneksi->error;
    }

mysqli_close($koneksi);
?>

