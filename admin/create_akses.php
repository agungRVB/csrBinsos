<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Input User </h1>
</div>
<section class="content-header">
  <font size="4px"></font>
</section>
<section class="content">
 <div class="box box-primary" style="width:100%;margin:0 auto;">
<?php //echo form_open('projek/create'); ?>

	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_user" placeholder="Nama Pengguna" required></td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
          <td><input type="text" class="form-control" name="pswd" placeholder="Password pengguna" required></td>
          </div>
      </tr>

      <tr>
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Save</button> &nbsp
              <button type="reset" class="btn btn-primary" style="background:#713A3A">Reset</button> &nbsp
              <input type="button" class="btn btn-primary" style="color:white;font-weight:bold;background:#6B6B6B" value="Back" onclick="history.back(-1)" >
            </div>
        </td>
      </tr>
    </table>
    </div>
  </div>
</section>
</form>
<?php
    include'../config/koneksi.php';
    if (isset($_POST['simpan'])) {
        $usr=$_POST['nm_user'];
        $pswd=$_POST['pswd'];

            mysql_query("INSERT INTO user(id_user,namauser,passwd) VALUES ('','$usr','$pswd')");
            //header('location:index.php?menu=akses');
    }
 ?>
