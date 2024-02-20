<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card col-xl-10">
            <div class="card-header d-flex justify-content-start">
                <a href="index.php?url=tulis_catatan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="bi bi-file-earmark-plus"></i>
                    </span>
                    <span class="text">Tambahkan catatan</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-xs">
                        <div id="conten">
                            <table class="table table-info table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu</th>
                                        <th>Tujuan</th>
                                        <th>Aksi</th>
                                        <th>print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    include 'koneksi.php';
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
                                                <?= $value['suhu'] ?>°C
                                            </td>
                                            <td>
                                                <?= $value['tujuan'] ?>
                                            </td>
                                            <td>
                                                <a href="?url=edit&id_catatan=<?= $value['id_catatan'] ?>" class="btn btn-primary btn-sm text-white"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <a onclick="return confirm('apakah anda yakin akan menghapus data ini')"
                                                    href="hapus.php?id_catatan=<?= $value['id_catatan'] ?>" class="btn btn-danger btn-sm text-white"><i
                                                        class="bi bi-x-lg"></i></a>
                                            </td>
                                            <td>
                                                <a href="cetak.php?id_catatan=<?= $value['id_catatan'] ?>" target="_blank"
                                                    class="btn btn-info btn-sm text-white"><i class="fa fa-print"></i>
                                                    Cetak </a>
                            </div>
                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div> <br>

        </div>
    </div>
    <!-- script -->
</body>

</html>