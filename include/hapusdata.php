<?php
    include_once '../database/koneksi.php';

    $Save1 = "";
    if (isset($_GET['Save1'])){
        $Save1 = urldecode($_GET['Save1']);
    }
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
        <?php
            $result = mysqli_query($koneksi, "SELECT * FROM tabel2");
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Nama</th>";
                echo "<th>Jenis Kelamin</th>";
                echo "<th>Alamat</th>";
                echo "<th>No. HP</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["jk"] . "</td>";
                    echo "<td>" . $row["alamat"] . "</td>";
                    echo "<td>" . $row["no_hp"] . "</td>";
                    echo '<td><a href="proses_hapusdata.php?ID=' . $row["ID"] . '">Hapus</a></td>';
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No data found.";
            }
        ?>

            <?php
                if ($Save1 !== ""){
                    echo "<b>".$Save1."</b>";
                }
            ?>
            </div>
    </div>
    <div class="enter"></div>
    <?php include_once '../include/kaki.php'; ?>
</body>
</html>
