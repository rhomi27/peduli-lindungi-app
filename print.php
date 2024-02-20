<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print</title>

</head>

<body>
    <h2 align="center">Laporan Catatan Perjalanan</h2>
    <table border="1" width="90%" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu</th>
                <th>Tujuan</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            include 'koneksi.php';
            session_start();
            $nik = $_SESSION['nik'];
            $no = 1;

            $sql = "SELECT*FROM catatan WHERE nik='$_SESSION[nik]'";
            $query = mysqli_query($koneksi, $sql);
            foreach ($query as $value) {
                ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $value['tanggal'] ?>
                    </td>
                    <td>
                        <?= $value['waktu'] ?>
                    </td>
                    <td>
                        <?= $value['lokasi'] ?>
                    </td>
                    <td>
                        <?= $value['suhu'] ?>
                    </td>
                    <td>
                        <?= $value['tujuan'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- script -->
    <script>
        window.print();

        window.onafterprint = function () {
            window.close();
            console.log("Print completed.."); 
        }
    </script>
</body>

</html>