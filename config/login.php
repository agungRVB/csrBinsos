<?php
include'koneksi.php';
  if (isset($_POST['login'])) {
    $nama_user  = @$_POST['nama_user'];
    $pswd       = @$_POST['pass'];
    $enkrip=sha1($pswd);

    $sql=mysql_query("SELECT * FROM user WHERE namauser='$nama_user' and passwd='$pswd'");
    $row=mysql_fetch_row($sql);

      if($row > 0){
        $_SESSION['isLoggedIn']=1;
      $_SESSION['username']=$nama_user;
        header('Location:../admin/');
      }else {
        header('location:../');
      }
    //echo "$enkrip";
  }
 ?>
