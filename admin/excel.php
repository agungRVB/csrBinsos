<?php
 $dns=$_GET['dns']; $kt=$_GET['kt'];
   include '../config/koneksi.php';
   $subsql1=mysql_query("SELECT * FROM dinas where kd_dinas='$_GET[dns]'");
   $subsql2=mysql_query("SELECT * FROM kota where kd_kota='$_GET[kt]'");
  // $subsql3=mysql_query("SELECT * FROM bidang");

       $subbc1=mysql_fetch_row($subsql1);
       $subbc2=mysql_fetch_row($subsql2);
      // $subbc3=mysql_fetch_row($subsql3);

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/foxitReader");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=LAPORAN.xls");

// Tambahkan table
?>
			<section class="content-header" style="width:100%">
	          <h2>Laporan Hasil Kegiatan <?php echo $subbc1['1']." ".$subbc2['1'];?></h2>
	        </section>
				<table  class="table table-bordered table-striped" border="1" style="font-size:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Dinas</th>
                        <th>Kota/Kabupaten</th>
                        <th>Kegiatan</th>
                        <th>Volume</th>
                        <th>Jumlah Anggaran</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                              <?php
                          $a=1;
                              include '../config/koneksi.php';
                              $sql=mysql_query("SELECT * FROM kegiatan where dinas='$_GET[dns]' and kota='$_GET[kt]'");
                              while($bc=mysql_fetch_row($sql)){
                                $subsql1=mysql_query("SELECT * FROM dinas where kd_dinas='$bc[1]'");
                                $subsql2=mysql_query("SELECT * FROM kota where kd_kota='$bc[3]'");
                                $subsql3=mysql_query("SELECT * FROM bidang where kd_bidang='$bc[2]'");

                                    $subbc1=mysql_fetch_row($subsql1);
                                    $subbc2=mysql_fetch_row($subsql2);
                                    $subbc3=mysql_fetch_row($subsql3);
                              ?><tr>
                                    <td><?php echo $a; $a++;?></td>
                                    <td><?php echo $subbc1['1'];?></td>
                                    <td><?php echo $subbc2['1']."(".$subbc3['1'].")";?></td>
                                    <td><?php echo $bc['4']; //Kegiatan?></td>
                                    <td><?php echo $bc['5']; //volume?></td>
                                    <td><?php echo $bc['6']; //jumlah?></td>
                                    <td><?php echo $bc['7']; //keterangan?></td>
                                </tr>
                              <?php
                            }
                          ?>
                    </tbody>
                  </table>
