<?php

$nama = $_POST['nama'];
$nik = $_POST['nik'];

include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT*FROM user WHERE nama='$nama' AND nik='$nik'");

if (mysqli_num_rows($query) == 0) {
    ?>
    <script>
        alert('nik dan nama anda belum terdaftar, silahkan coba lagi');
        window.location.assign("login.php");
    </script>
<?php } else {

    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['nik'] = $nik;

    header("location:index.php");
}

?>