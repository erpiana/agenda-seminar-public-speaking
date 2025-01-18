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

// membuat tabel 1
$sql1 = "CREATE TABLE tabel1 (
    ID int(3) AUTO_INCREMENT,
    Judul varchar(50),
    tanggal DATE,
    Deskripsi varchar(800),
    PRIMARY KEY (ID)
)";

if ($koneksi->query($sql1) === true) {
    echo "Tabel 1 telah dibuat!";
} else {
    echo "Gagal! gagal membuat tabel 1: " . $koneksi->error;
}

// membuat tabel 2
$sql2 = "CREATE TABLE tabel2 (
    ID int(3) AUTO_INCREMENT,
    nama varchar(50),
    jk varchar(500),
    alamat varchar(50),
    no_hp varchar(50),
    PRIMARY KEY (ID)
)";

if ($koneksi->query($sql2) === true) {
    echo "Tabel 2 telah dibuat!";
} else {
    echo "Gagal! gagal membuat tabel 2: " . $koneksi->error;
}

// membuat tabel 3
$sql3 = "CREATE TABLE tabel3 (
    ID int(3) AUTO_INCREMENT,
    Judul varchar(50),
    Deskripsi varchar(2000),
    PRIMARY KEY (ID)
)";

if ($koneksi->query($sql3) === true) {
    echo "Tabel 3 telah dibuat!";
} else {
    echo "Gagal! gagal membuat tabel 3: " . $koneksi->error;
}

// membuat tabel 4
$sql3 = "CREATE TABLE tabel4 (
    ID int(3) AUTO_INCREMENT,
    Nama varchar(50),
    Identitas varchar(50),
    PRIMARY KEY (ID)
)";

if ($koneksi->query($sql3) === true) {
    echo "Tabel 4 telah dibuat!";
} else {
    echo "Gagal! gagal membuat tabel 4: " . $koneksi->error;
}

$koneksi->close();
?>
