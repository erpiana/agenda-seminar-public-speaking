<?php
include_once '../database/koneksi.php';

if (count($_POST) > 0) {
    $ID = $_POST['ID'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $kirim = mysqli_query($koneksi, "UPDATE tabel2 SET nama='" . $nama . "', jk='" . $jk . "', alamat='" . $alamat . "', no_hp='" . $no_hp . "' WHERE ID='" . $ID . "'");
    if ($kirim) {
        $Save2 = "Data Berhasil Disimpan";
        $Save1 = urlencode($Save2);
        header("Location: pembaharuidata.php?Save1=" . $Save1);
        exit();
    } else {
        echo "Gagal! Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

$result = mysqli_query($koneksi, "SELECT * FROM tabel2 WHERE ID='" . $_GET['ID'] . "'");
$row = mysqli_fetch_array($result);
?>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../folder_css/tampilan.css">
</head>
<body>
    <?php include_once '../include/kepala.php'; ?>
    <div class="enter"></div>
    <?php include_once '../include/navigasi.php'; ?>
    <div class="enter"></div>
    <div id="isi">
        <div class="badan"> 
            <form method="post" action="">
                <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="text" name="jk" value="<?php echo $row['jk']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td><input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="enter"></div>
    <?php include_once '../include/kaki.php'; ?>
</body>
</html>
