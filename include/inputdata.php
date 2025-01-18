<?php
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
    <?php include_once ('kepala.php'); ?>
    <div class="enter"></div>
    <?php include_once('navigasi.php'); ?>
    <div class="enter"></div>
    <div id="isi">
        <div class="badan">
            <br>
            <h3>Input Data</h3>
            <form method="post" action="proses.php">
                Nama Peserta:<br>
                <input type="text" name="nama" required>
                <br><br>
                Jenis Kelamin: <br>
                <input type="text" name="jk" required>
                <br><br>
                Alamat: <br>
                <input type="text" name="alamat" required>
                <br><br>
                No Handphone: <br>
                <input type="text" name="no_hp" required>
                <br><br>
                <input type="submit" name="save" value="save">
            </form>
            <?php
            if ($Save1 !== ""){
                echo "<b>".$Save1."</b>";
            }
            ?>
        </div>
    </div>
    <?php include_once('kaki.php'); ?>
</body>
</html>
