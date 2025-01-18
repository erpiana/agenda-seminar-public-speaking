<?php
include_once '../database/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tabel3"); 
?>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../folder_css/tampilan.css">
</head>
<body>
    <?php include_once ('kepala.php'); ?>
    <div class="enter"></div>
    <?php include_once('navigasi.php'); ?>
    <div class="enter"></div>
    <div id="isi">
        <div class="badan">
        <br>
        <?php
             if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<h2>" . $row["Judul"] . "</h2>";
                        echo "<h5>" . $row["Deskripsi"] . "</h5>";
                    echo "</tr>";
                }
            } else {
                echo "No data found.";
            }
        ?>
        </div>
    </div>
    <div class="enter"></div>
    <?php include_once('kaki.php'); ?>
</body>
</html>
