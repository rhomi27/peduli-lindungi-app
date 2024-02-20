<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peduli Diri| Login Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset1/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="asset1/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset1/css/adminlte.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<style>
  body {
    background-image: url(img/bg1.jpg);
    background-size: cover;
  }

</style>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card bg-primary my-3 mt-4">
      <h2 class="d-flex justify-content-center my-3 mt-4">
        <p class="bi bi-journals"><b>Peduli</b>Diri</p>
      </h2>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"><b>Registrasi</b></p>

        <form action="proses_regis.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="bi bi-person"></i>
              </div>
            </div>
          </div>
          <!-- /.passw -->
          <div class="input-group mb-3">
            <input type="text" name="nik" class="form-control" placeholder="Masukan NIK Anda" maxlength="16"
              minlength="16" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="bi bi-person-vcard"></i>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">daftar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="login.php" class="text-center">Login menggunakan akun yang sudah ada</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="asset1/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="asset1/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="asset1/js/adminlte.min.js"></script>
</body>

</html>