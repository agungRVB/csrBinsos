<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>.::Input Data CSR Binsos Jateng::.</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="style/admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="style/admin/plugins/select2/select2.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CSR</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CSR BINSOS</b>Jateng</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/logo-jateng.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">ADMIN</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../images/logo-jateng.png" class="img-circle" alt="User Image">
                    <p>
                      Adminisrator Input Data<br>
                      CSR Binsos Jawa Tengah
                      <small><?php echo date("d-m-Y"); ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <center><div style="align:center">
                      <a href="../config/logout.php" class="btn btn-default btn-flat" style="background:#D90606;color:white">Sign out</a>
                    </div></center>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/logo-jateng.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>CSR Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active treeview">
              <a href="?menu=akses">
                <i class="fa fa-user-plus"></i> <span>HAK AKSES</span>
              </a>
            </li>
            <li class="active treeview">
              <a href="?menu=instansi">
                <i class="fa fa-cubes"></i> <span>KELOLA DINAS</span>
              </a>
            </li>

            <li class="active treeview">
              <a href="#">
                <i class="fa  fa-fire"></i> <span>DINAS ESDM</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>-->
                <!--  if ($row==1) {
                      echo"<li class='active'><a href='#'><i class='fa fa-circle-o'></i> ".$row['1']."</a></li>";
                  }-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='1' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa  fa-building"></i>
                <span>BAPERMADES</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='2' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tree"></i>
                <span>DINAS KEHUTANAN</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='3' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>DISNAKERTRANDUK</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='4' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tint"></i> <span>DINAS PSDA</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='5' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user-md"></i> <span>DINAS SOSIAL</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='6' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa  fa-leaf"></i> <span>BLH</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <!--  <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='7' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa  fa-heartbeat"></i> <span>DINAS KESEHATAN</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='8' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa  fa-map"></i> <span>DIPERTAN DAN TPH</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <!--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
                <?php
                include '../config/koneksi.php';
                        $q=mysql_query("SELECT * FROM instansi where nm_dinas='9' and stts='1'");
                    while($row=mysql_fetch_row($q)){
                           $q2=mysql_query("SELECT * FROM kota WHERE kd_kota='$row[1]'");
                           $row2=mysql_fetch_row($q2);
                      echo"<li><a href='?menu=kegiatan&dns=$row[2]&kt=$row[1]'><i class='fa fa-circle-o'></i> ".$row2['1']."</a></li>";
                    }
                ?>
              </ul>
            </li>

          <!--  <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>-->

          </ul><!--akhir menu sidebar-->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php //include'create.php'; ?>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php
              switch(@$_GET['menu']) {
                case 'kegiatan':
                    include"view_kegiatan.php";
                  break;
                case 'input_kegiatan':
                    include"create_kegiatan.php";
                  break;
                case 'edit_kegiatan':
                    include"update_kegiatan.php";
                  break;
                case 'akses':
                    include 'view_akses.php';
                  break;
                case 'input_akses':
                    include 'create_akses.php';
                  break;
                case 'edit_akses':
                    include 'update_akses.php';
                  break;
                case 'instansi':
                    include 'view_instansi.php';
                  break;
                case 'input_instansi':
                    include 'create_instansi.php';
                  break;
                case 'edit_akses':
                    include 'update_instansi.php';
                  break;

                default:
                  echo "<center><img src='../images/logo-jateng.png' height=500 width=500></center>";
                  break;
              }
           ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


      <footer class="main-footer">
        <strong>Copyright &copy; 2016 Dinus Students </strong> All rights reserved.
      </footer>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script type="text/javascript">
    $('.priceFormat').priceFormat({
          prefix: 'R$ ',
          centsSeparator: ',',
          thousandsSeparator: '.'
      });
    </script>
    <!===========================================================================>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="style/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="style/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="style/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="style/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="style/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="style/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="style/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="style/admin/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!=================================================================================>
    <!-- Select2 -->
    <script src="style/admin/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="style/admin/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="style/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="style/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="style/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="style/admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="style/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="\style/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {


        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();


        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
        /*/Initialize Select2 Elements
        $(".select2").select2();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );*/
      });
    </script>
  </body>
</html>
