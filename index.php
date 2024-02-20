<?php

session_start();
if (empty($_SESSION['nik'])) { ?>
  <script>
    alert('maaf anda harus login terlebih dahulu');
    window.location.assign('login.php');
  </script>
<?php }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Peduli Lindungi</title>

  <!-- bootsrap table -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!-- Custom fonts for this template-->
  <link href="asset1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="asset1/css/sb-admin-2.min.css" rel="stylesheet" />
  <!-- Custom styles for this page -->
  <link href="asset1/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <div class="position-sticky pt-3 sidebar-sticky">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="bi bi-journals"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Peduli Diri</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="bi bi-pc-display-horizontal"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Aktivitas</div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="?url=tulis_catatan">
            <i class="bi bi-pen"></i>
            <span>Tulis Catatan</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="?url=riwayat_catatan">
            <i class="bi bi-clock-history"></i>
            <span>Riwayat Catatan</span></a>
        </li>
        <!-- nav logout -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="bi bi-box-arrow-left"></i>
            <span>LogOut</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">
          <!-- salam -->
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <?php
              date_default_timezone_set('Asia/Jakarta');
              $jam = date('H:i');

              if ($jam > 04.00 && $jam < 11.00) {
                $salam = "Selamat Pagi!  ";
              } else if ($jam > 10.59 && $jam < 15.01) {
                $salam = "Selamat Siang!  ";
              } else if ($jam > 15.00 && $jam < 18.01) {
                $salam = "Selamat Sore!  ";
              } else {
                $salam = "Selamat Malam!  ";
              }
              ?>

              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-flex mr-4">
                  <?php
                  function hari()
                  {
                    $hari = date('D');

                    switch ($hari) {
                      case 'Sun':
                        $hari_ini = "Minggu";
                        break;

                      case 'Mon':
                        $hari_ini = "Senin";
                        break;

                      case 'Tue':
                        $hari_ini = "Selasa";
                        break;

                      case 'Wed':
                        $hari_ini = "Rabu";
                        break;

                      case 'Thu':
                        $hari_ini = "Kamis";
                        break;

                      case 'Fri':
                        $hari_ini = "Jum'at";
                        break;

                      case 'Sat':
                        $hari_ini = "Sabtu";
                        break;

                      default:
                        $hari_ini = "Hari tidak diketahui";
                        break;
                    }
                    return $hari_ini;
                  }

                  function tanggal()
                  {
                    $tanggal = date('d-m-Y');

                    $bulan = array(
                      1 => 'Januari',
                      'Februari',
                      'Maret',
                      'April',
                      'Mei',
                      'Juni',
                      'Juli',
                      'Agustus',
                      'September',
                      'Oktober',
                      'November',
                      'Desember'
                    );
                    $pecahkan = explode('-', $tanggal);

                    return $pecahkan[0] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[2];
                  }
                  ?>

                  <p class="font-weight-bold text-dark">
                    <?= hari() . ", " . tanggal(); ?>
                  </p>

                </li>
              </ul>

            </div>
          </div>
          <!-- end salam -->
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="h3 mb-4 text-gray-800">

            <?php
            $url = @$_GET['url'];
            if (!empty($url)) {
              switch ($url) {
                // tulis
                case 'tulis_catatan';
                  include 'tls_catatan.php';
                  break;
                // riwayat
                case 'riwayat_catatan';
                  include 'riwayat.php';
                  break;
                // edit
                case 'edit';
                  include 'edit.php';
                  break;

                default;
                  echo "halaman tidak ditemukan";
                  break;
              }
            } else {
              ?>
              <marquee class="bg-info" behavior="scroll" scrollamount="9" width="95%">
                <?php
                echo "Selamat datang di aplikasi catatan perjalanan, silahkan di isi catatan perjalanannya  ";
                echo $_SESSION['nama'];
                ?>
                <a href="index.php?url=tulis_catatan" class="btn btn-primary btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="bi bi-pen-fill"></i>
                  </span>
                  <span class="text">isi</span>
                </a>
              </marquee>
              <marquee class="bg-primary" behavior="scroll" scrollamount="15" width="95%">
                <h5 class="font-weight-bold text-light">
                  <?= $salam; ?>
                </h5>
              </marquee>
              <div class="d-flex justify-content-center">
                <img class="my-3 mt-4" src="img/bg2.jpg" width="80%" height="400vh" alt="">
              </div>

              <?php
            }
            ?>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; nyolong website 2023</span>
          </div>

          <div class="d-flex justify-content-center">
            <div class="mx-3"><a href="mailto:romisaja556@gmail.com"><i class="bi bi-envelope-at"></i></a></div>
            <div></div>
            <a href="https://www.instagram.com/rhomiiiiii/"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="asset1/vendor/jquery/jquery.min.js"></script>
  <script src="asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="asset1/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="asset1/js/sb-admin-2.min.js"></script>

  <!-- search -->
  <script src="js/script.js"></script>

</body>

</html>