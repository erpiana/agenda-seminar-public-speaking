<?php
include_once '../database/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM tabel4"); 
?>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../foldercss/tampilan.css">
</head>
<body>
        <div id="kaki_bawah"> 
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                     echo "<p>" . $row["Nama"] . "<p>";
                     echo "<p>" . $row["Identitas"] . "<p>";
                }
            } 
            else {
                echo "No data found.";
            }
        ?>
        </div>
</body>
</html>