<?php
include_once '../database/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tabel2"); 
?>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../folder_css/tampilan.css">
</head>
<body>
    <?php include_once ('../include/kepala.php'); ?>
    <div class="enter"></div>
    <?php include_once('../include/navigasi.php'); ?>
    <div class="enter"></div>
    <div id="isi">
        <div class="badan"> 
        <?php
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                    echo "<th>Nama</th>";
                    echo "<th> Jenis Kelamin</th>";
                    echo "<th> Alamat</th>";
                    echo "<th> No. HP</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["jk"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["no_hp"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No data found.";
            }
        ?>
        </div>
    </div>
    <div class="enter"></div>
    <?php include_once('../include/kaki.php'); ?>
</body>
</html>
