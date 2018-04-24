<?php
include '../config/koneksi.php';
    mysql_query("UPDATE instansi SET stts = '0' WHERE kd_dinas = $_GET[id];");
    header('location:index.php?menu=instansi');
 ?>
