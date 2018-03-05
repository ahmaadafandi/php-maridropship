<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Maridropship</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">

  <style type="text/css">
    .detailLabel{
      font-size: 18px;
      float: left;
      width: 150px;
    }

    .detailIsi{
      font-size: 18px;
      float: left;
      text-align: right;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index2.php?menu=1"><i class="fa fa-dashboard"></i> <span>Branda</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="pengguna.php"><i class="fa fa-dashboard"></i> <span>Pengguna</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="produk.php"><i class="fa fa-dashboard"></i> <span>Produk</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li class="active"><a href="promo.php"><i class="fa fa-dashboard"></i> <span>Promo</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="pesanan.php"><i class="fa fa-dashboard"></i> <span>Pesanan</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="laporan_penjualan.php"><i class="fa fa-dashboard"></i> <span>Laporan Penjualan</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="index2.php?menu=11"><i class="fa fa-dashboard"></i> <span>Voucher</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="faq.php"><i class="fa fa-dashboard"></i> <span>Faq</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="index2.php?menu=13"><i class="fa fa-dashboard"></i> <span>Komentar</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- DataTables -->

<?php
  include "koneksi.php"; //Mengimport database data
?>

<section class="content-header">
<h1>
  Promo
  <small>Version 2.0</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Dashboard</li>
</ol>
</section>
  <!-- Info boxes -->

<section class="content">

<link rel="stylesheet" type="text/css" href="css/css_table_produk.css"> 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="box box-info">
  <div class="box-header with-border">
  <h3 class="box-title">Table Promo</h3>
   </div>

<!-- /.Dropshiper Order --> 
  <link rel="stylesheet" type="text/css" href="css/css_pesanan.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <div class="row">
    <div class="col-md-12">
        <div class="table-responsive">   
        <div id="mytable" class="table table-bordred table-striped">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Heading</h3>
                  </div>
                  <div class="col col-xs-6 text-right"> 
                    <form action="tambahPromo.php" method="post">
                      <button type="text" class="btn btn-sm btn-primary btn-create">Create New</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel-body" style="margin: 20px;">
                <table id="dataTables" class="display" cellspacing="0" width="100%">
         <thead>
          <tr>
            <th style="width:5%">Detail</th>
            <th>Gambar</th>
            <th>Id Promo</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Kode Produk</th>
            <th>Stok</th>
            <th>Harga Normal</th>
            <th>Harga Promo</th>
            <th></th>
            <th></th>
          </tr>
       </thead>   
       <tbody>
        <?php 
        
          $sql = mysqli_query($conn, "select *from tblpromo inner join tblproduk on tblpromo.idProduk = tblproduk.idProduk");

          while ($data = mysqli_fetch_array($sql)) {
            $idPromo  = $data['idPromo'];
            $idProduk  = $data['idProduk'];
            $hargaNormal  = $data['hargaNormal']; 
            $potongan = $data['potongan'];
            $hargaPromo  = $data['hargaPromo'];

            $namaProduk  = $data['namaProduk'];
            $kodeProduk  = $data['kodeProduk'];
            $tipeProduk  = $data['tipeProduk'];
            $gambar  = $data['gambar']; 
            $hargaBeli  = $data['hargaBeli'];
            $hargaJual  = $data['hargaJual']; 
            $stok  = $data['stok']; 
            $status  = $data['status']; 
            $tglMasuk  = $data['tglMasuk'];  ?>

            <tr class="row-content">
              <td>
                <a class="btn btn-default" style="background: #00a65a;">
                  <div class="icon">
                    <i class="ion ion-bag" style="color: white;"></i>
                  </div>
                </a>
              </td>
              <td><img src="gambar/<?php echo $gambar; ?>" style="width: 30px; height: 40px;"></td>
              <td><?php echo $idPromo; ?></td>
              <td><?php echo $idProduk; ?></td>
              <td><?php echo $namaProduk; ?></td>
              <td><?php echo $kodeProduk; ?></td>
              <td><?php echo $stok; ?></td>
              <td><?php echo $hargaNormal; ?></td>
              <td><?php echo $hargaPromo; ?></td>
              <td style="width: 40px;">
                  <a class="btn btn-danger edit" href="settingPromo.php?simpan=hapus&idPromo=<?php echo $idPromo; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
              </td>
              <td style="width: 40px;"> 
                  <form method="POST" action="promo.php?idPromo=<?php echo $idPromo; ?>">
                    <button type="submit" class="btn btn-sm btn-primary btn-create" name="adit">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>
                  </form> 
               </td>
              </tr>
              <?php } ?>
             </tbody>
             <tfoot>
              <tr>
                <th style="width:5%">Detail</th>
                <th>Gambar</th>
                <th>Id Promo</th>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Kode Produk</th>
                <th>Stok</th>
                <th>Harga Normal</th>
                <th>Harga Promo</th>
                <th></th>
                <th></th>
              </tr>
           </tfoot>
          </table>    
            </div>
          </div>
      </div>
     </div>
  </div>
</div>
</div>

<!-- form Edit -->
<?php 
if(isset($_POST['adit'])){

  $idPromo = $_GET['idPromo'];

  $sqlPromo = mysqli_query($conn, "select *from tblpromo inner join tblproduk on tblpromo.idProduk = tblproduk.idProduk where tblpromo.idPromo = $idPromo");

        while ($data = mysqli_fetch_array($sqlPromo)) {
          $idPromo  = $data['idPromo'];
          $idProduk  = $data['idProduk'];
          $hargaNormal  = $data['hargaNormal']; 
          $potongan = $data['potongan'];
          $hargaPromo  = $data['hargaPromo'];
        
          $namaProduk  = $data['namaProduk'];
          $kodeProduk  = $data['kodeProduk'];
          $tipeProduk  = $data['tipeProduk'];
          $gambar  = $data['gambar']; 
          $hargaBeli  = $data['hargaBeli'];
          $hargaJual  = $data['hargaJual']; 
          $stok  = $data['stok']; 
          $status  = $data['status']; 
          $tglMasuk  = $data['tglMasuk'];
        } ?>

  <div class="row">
  <!-- left column -->
  <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Produk Yang Akan Diedit</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action="settingPromo.php?simpan=edit&idProduk=<?php echo $idProduk; ?>" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
          <img src="gambar/<?php echo $gambar; ?>" style="width: 350px; height: 350px; float: left;">
          <h3><b><?php echo $namaProduk; ?></b></h3><br>
          <div class="detailLabel">
              <label>Id Produk</label><br>
              <label>Kode Produk</label><br>
              <label>Harga Jual</label><br>
              <label>Harga Beli</label><br>
              <label>Stok</label><br>
              <label>Potongan (%)</label>
          </div>
          <div class="detailIsi">
              <label><?php echo $idProduk; ?></label><br>
              <label><?php echo $kodeProduk; ?></label><br>
              <label><?php echo $hargaJual; ?></label><br>
              <label><?php echo $hargaBeli; ?></label><br>
              <label><?php echo $stok; ?></label><br>
              <input type="text" class="form-control" name="potongan" value="<?php echo $potongan; ?>" style="width: 55px;" required="">
          </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer" style="text-align: right;">
          <button type="submit" class="btn btn-primary">Edit Produk Promo</button>
          <a href="promo.php" style="font-size: 15px;" class="btn bg-olive btn-flat margin" >Cencel</a>
        </div>
      </form>
    </div>
   </div>
  </div>
  <?php } ?>
</section>

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>



<script src="jquery-1.12.0.min.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
  $('#dataTables').DataTable();
} );
</script>

<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>


