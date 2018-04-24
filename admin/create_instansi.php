<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Input Instansi </h1>
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
          <td style="font-size:90%"><label for="exampleInputEmail1">Dinas</label></td><td>:</td>
          <td><div>
              <select name="dinas"  class="form-control select2" required style="width:100%;">
                  <option value="0"> Dinas Kota/Kabupaten</option>
              <?php
                  include '../config/koneksi.php';
                  $sql1=mysql_query("SELECT * FROM dinas");
                  while($bc1=mysql_fetch_row($sql1)){
                ?><option value="<?php echo $bc1['0']?>">
                     <?php echo $bc1['1'];?>
                  </option>
                  <?php
              }?>
              </select>
              <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
              </div>
          </td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Kota/Kabupaten</label></td><td>:</td>
          <td><div>
              <select name="kota"  class="form-control select2" required style="width:100%;">
                  <option value="0"> Kota/Kabupaten Terkait</option>
                  <?php
                      include '../config/koneksi.php';
                      $sql1=mysql_query("SELECT * FROM kota");
                      while($bc1=mysql_fetch_row($sql1)){
                    ?><option value="<?php echo $bc1['0']?>">
                         <?php echo $bc1['1'];?>
                      </option>
                      <?php
                  }?>
              </select>
              <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
              </div>
          </td>
          </div>
      </tr>

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
     include '../config/koneksi.php';
     if (isset($_POST['simpan'])) {
        $dinas=$_POST['dinas'];
        $kota=$_POST['kota'];

             $sql1=mysql_query("SELECT * FROM instansi WHERE kota='$dinas' and nm_dinas='$kota'");
             $bcbc=mysql_fetch_row($sql1);

              if ($bcbc > 0) {
                   echo "data dinas sudah ada";
              }else {
                   mysql_query("INSERT INTO instansi(kd_dinas, kota, nm_dinas, stts) VALUES ('','$kota','$dinas','1')");
              }

     }
 ?>
