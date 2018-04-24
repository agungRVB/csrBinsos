<?php
include '../config/koneksi.php';
    mysql_query("DELETE FROM user where id_user='$_GET[id]'");
    header('location:index.php?menu=akses');
 ?>
