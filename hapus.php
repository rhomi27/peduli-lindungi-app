<?php

$id_catatan = $_GET['id_catatan'];

include 'koneksi.php';

$sql = "DELETE FROM catatan WHERE id_catatan='$id_catatan'";

$query = mysqli_query($koneksi, $sql);

if ($query) { ?>
    <script>
        window.location.assign("index.php?url=riwayat_catatan")
    </script>
    <?php
} else { ?>
    <script>
        alert("data gagal dihapus")
        window.location.assign("index.php?url=edit")
    </script>
    <?php
}