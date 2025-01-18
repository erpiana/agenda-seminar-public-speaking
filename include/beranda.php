<?php
include_once '../database/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tabel1"); 
?>
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<h2>" . $row["Judul"] . "</h2>";
                        echo "<h5>" . $row["tanggal"] . "</h5>";
                        echo "<h5>" . $row["Deskripsi"] . "</h5>";
                    echo "</tr>";
                }
            } else {
                echo "No data found.";
            }
        ?>
