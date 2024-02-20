<?php

$id_catatan = $_POST['id_catatan'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$tujuan = $_POST['tujuan'];

include 'koneksi.php';

$sql = "UPDATE catatan SET tanggal='$tanggal', waktu='$waktu', lokasi='$lokasi', suhu='$suhu', tujuan='$tujuan' WHERE id_catatan='$id_catatan'";

$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
    <script>
        alert("catatan berhasil di edit");
        window.location.assign("index.php?url=riwayat_catatan")
    </script>
    <?php
} else { ?>
    <script>
        alert("catatan gagal di edit, silahkan isi kembali")
        window.location.assign("index.php?url=edit")
    </script>
    <?php
}