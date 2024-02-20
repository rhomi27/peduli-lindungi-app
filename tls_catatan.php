<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-center col-lg-20">
        <div class="card col-md-6">
            <div class="card-header">
                <a href="index.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="bi bi-box-arrow-left"></i>
                    </span>
                    <span class="text">kembali</span>
                </a>
            </div>
            <div class="card-body">
                <div class="col-md-10 text-xs">
                    <form method="post" action="simpan.php">
                        <div class="form-group">
                            <label for="1">Tanggal <i class="bi bi-calendar-week"></i></label>
                            <input class="form-control" type="date" name="tanggal" placeholder="" id="1" autofocus
                                required>
                        </div>
                        <div class="form-group">
                            <label for="2">Waktu <i class="bi bi-clock"></i></label>
                            <input class="form-control" type="time" name="waktu" placeholder="" id="2" autofocus
                                required>
                        </div>
                        <div class="form-group">
                            <label for="3">Lokasi <i class="bi bi-geo-alt"></i></label>
                            <input class="form-control" type="text" name="lokasi"
                                placeholder="Masukan Lokasi yang akan di tuju" id="3" required>
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu <i class="bi bi-thermometer-snow"></i></label>
                            <input type="number" class="form-control" id="suhu" name="suhu" min="34" max="38" step="any"
                                onKeyPress="if(this.value.length==4) return false;" onpaste="return false"
                                oncut="return false" oncopy="return false" ondrag="return false" ondrop="return false"
                                onwheel="this.blur()" placeholder="Masukan Suhu" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="5">Tujuan <i class="bi bi-airplane-engines"></i></label>
                            <input class="form-control" type="text" name="tujuan" placeholder="Tujuan Perjalanan" id="5"
                                required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit"><i class="bi bi-upload"></i> Upload</button>
                            <button class="btn btn-danger" type="reset"><i class="bi bi-trash3"></i> Ulangi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>