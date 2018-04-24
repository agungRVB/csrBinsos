<?php
      $dns=$_GET['dns']; $kt=$_GET['kt']; $kd=$_GET['kd'];
      include '../config/koneksi.php';
      $sql=mysql_query("SELECT * FROM kegiatan where kd_kegiatan='$_GET[kd]'");
      $subsql1=mysql_query("SELECT * FROM dinas where kd_dinas='$_GET[dns]'");
      $subsql2=mysql_query("SELECT * FROM kota where kd_kota='$_GET[kt]'");
     // $subsql3=mysql_query("SELECT * FROM bidang");
          $bcdt=mysql_fetch_row($sql);
          $subbc1=mysql_fetch_row($subsql1);
          $subbc2=mysql_fetch_row($subsql2);
         // $subbc3=mysql_fetch_row($subsql3);
?>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Input Kegiatan  <?php echo $subbc1['1']." ".$subbc2['1'];  ?> </h1>
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
        <?php
        include'../config/koneksi.php';
            $qry=mysql_query("SELECT * FROM bidang where kd_bidang='$bcdt[2]'");
             $bcbd=mysql_fetch_row($qry);

        ?>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1"> Bidang</label></td><td>:</td>
          <td><div>
              <select name="bidang"  class="form-control select2" required style="width:100%;">
                  <option value="<?php echo $bcdt[2]; ?>"><?php echo $bcbd[1]; ?> </option>
              <?php
              include'../config/koneksi.php';
              $q=mysql_query("SELECT * FROM bidang");
              while ($bc=mysql_fetch_row($q)) { ?>
                <option value="<?php echo $bc[0];?>">
                    <?php echo $bc[1]; ?>
                  </option>
                  <?php } ?>
              </select>
              <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
              </div>
          </td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Kegiatan</label></td><td>:</td>
          <td><input type="text" class="form-control" name="kegiatan" value="<?php echo $bcdt[4]; ?>"></td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">volume</label></td><td>:</td>
          <td><input type="text" class="form-control" name="volume" value="<?php echo $bcdt[5]; ?>" required></td>
          </div>
      </tr>

      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Jumlah</label></td><td>:</td>
          <td><div class="input-group" style="width:100%">
                <div class="input-group-addon" style="width:2%">
                  RP
                </div>
                <input type="text" class="form-control" name="jumlah" value="<?php echo $bcdt[6]; ?>" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
              </div>
          </td>
          </div>
      </tr>

      <tr><div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Deskripsi Projek</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="keterangan" placeholder="Detail project" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $bcdt[7]; ?></textarea></td>
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
        $bidang=$_POST['bidang'];
        $nm=$_POST['kegiatan'];
        $volume=$_POST['volume'];
        $jumlah=$_POST['jumlah'];
        $keterangan=$_POST['keterangan'];

          mysql_query("UPDATE kegiatan SET  bidang = '$bidang', nm_kegiatan = '$nm', volume = '$volume', jumlah = '$jumlah', keterangan = '$keterangan' WHERE kd_kegiatan = '$kd'");
            //mysql_query("INSERT INTO kegiatan (kd_kegiatan, dinas, bidang, kota, nm_kegiatan, volume, jumlah, keterangan) VALUES
            //('','$dns','$bidang','$kt','$nm','$volume','$jumlah','$keterangan')");
    }
 ?>
