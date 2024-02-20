<?php

$nama = $_POST['nama'];
$nik = $_POST['nik'];

include 'koneksi.php';

$query_validasi = "SELECT*FROM user WHERE nik ='$nik'";
$query = mysqli_query($koneksi, $query_validasi);

if (mysqli_num_rows($query) == 0) {
    $query_register = mysqli_query($koneksi, "INSERT INTO user(nama,nik) VALUES ('$nama','$nik')");
    if ($query_register) { ?>
        <script>
            alert('anda telah berhasil registrasi, silahkan login');
            window.location.assign("login.php");
        </script>
    <?php }
} else {
    ?>
    <script>
        alert('NIK sudah terdaftar, gunakan nik lain');
        window.location.assign("daftar.php");
    </script>
    <?php
}
?>