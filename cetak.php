<?php
session_start();
$id_catatan = $_GET['id_catatan'];
include 'koneksi.php';
$sql = " SELECT * FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Perjalanan</title>
    <style>
        .container {
    max-width: 800px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    font-size: 16px;
}

h2 {
    font-weight: bold;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    padding: 10px;
    border: 1px solid #ddd;
}

p {
    margin: 10px 0;
    text-align: justify;
}

.text-center {
    text-align: center;
}

.mb-4 {
    margin-bottom: 1.5rem;
}

/* Bootstrap Table Classes */
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    background-color: transparent;
    border-collapse: collapse;
}

.table td,
.table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}

.table-sm td,
.table-sm th {
    padding: 0.3rem;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-bordered td,
.table-bordered th {
    border: 0;
}
    </style>
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center mb-4">Surat Perjalanan</h2>
       
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Nomor Induk Kependudukan (NIK)</td>
                    <td>: <?= $_SESSION['nik'];?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <?= $_SESSION['nama'];?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <?= $value['tanggal'] ?></td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td>: <?= $value['waktu'] ?></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td>: <?= $value['lokasi'] ?></td>
                </tr>
                <tr>
                    <td>Suhu Tubuh</td>
                    <td>: <?= $value['suhu'] ?>°C</td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>: <?= $value['tujuan'] ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Demikian surat perjalanan ini dibuat sebagai persyaratan untuk melakukan perjalanan ke tujuan yang dimaksud.</p>
        <br>
        <p>Hormat kami,</p>
        <br>
        <p><?= $_SESSION['nama'];?></p>
    </div>
    <script>
        window.print();

        window.onafterprint = function () {
            window.close();
            console.log("Print completed.."); 
        }
    </script>
</body>
</html>