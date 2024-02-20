<?php
include 'koneksi.php';

session_start();
$nik = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$tujuan = $_POST['tujuan'];

$sql = "INSERT INTO catatan(nik,tanggal,waktu,lokasi,suhu,tujuan) VALUES('$nik','$tanggal','$waktu','$lokasi','$suhu','$tujuan')";
$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
    <script>
        alert("catatan berhasil di upload");
        window.location.assign("index.php?url=riwayat_catatan")
    </script>
    <?php
} else { ?>
    <script>
        alert("catatan gagal di upload, silahkan isi kembali");
        window.location.assign("index.php?url=edit")
    </script>
    <?php
}