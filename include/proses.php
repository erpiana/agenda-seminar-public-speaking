<?php
$name_server = "localhost";
$user = "root";
$pw = "";
$data_base = "db_pspeaking";
$koneksi = new mysqli($name_server, $user, $pw, $data_base);

// mengecek apakah koneksi dengan mySQL berhasil atau tidak
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO tabel2 (nama, jk, alamat, no_hp) VALUES ('$nama', '$jk', '$alamat', '$no_hp')";

    if ($koneksi->query($sql) === true) {
        $Save2 = "Data Berhasil Disimpan";
        $Save1 = urlencode($Save2);
        header("location: inputdata.php?Save1=" . $Save1);
        exit();
    } else {
        echo "Gagal! Gagal menyimpan data: " . $koneksi->error;
    }
}

$koneksi->close();
?>
