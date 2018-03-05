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
        <li><a href="promo.php"><i class="fa fa-dashboard"></i> <span>Promo</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li><a href="pesanan.php"><i class="fa fa-dashboard"></i> <span>Pesanan</span>
            <span class="pull-right-container"></span> 
          </a>
        </li>
        <li  class="active"><a href="laporan_penjualan.php"><i class="fa fa-dashboard"></i> <span>Laporan Penjualan</span>
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
    Laporan Penjualan
    <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
</section>
<!-- Info boxes -->

<?php
  include "koneksi.php"; //Mengimport database data
?>

<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Filter Laporan</h3>
      </div>
      <form role="form" method="POST" enctype="multipart/form-data" action="">
        <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">Periode</label> 
                    <div class="form-group">
                      <input type="date" class="form-control" style="width: 43%; float: left;" name = "tglAwal" required> <label style="padding: 5px 10px;">s/d</label> <input type="date" class="form-control" name="tglAkhir" style="width: 43%; float: right;" required>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="exampleInputFile">Dropshiper</label>  
                  <input type="text" class="form-control" placeholder="Dropshiper" name = "dropshiper" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="exampleInputFile">Status Penjualan</label>  
                  <div class="form-group">
                <select class="form-control" name = "statusPesanan">
                    <option>Pesanan Baru</option>
                    <option>Pending</option>
                    <option>Telah Bayar</option>
                    <option>Proses Kirim</option>
                    <option>Telah Sampai</option>
                    <option>Batal</option>
                </select>  
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="form-group">
                    <label for="exampleInputFile">Tipe Produk</label>  
                  <div class="form-group">
                <select class="form-control" name = "opsiTipeProduk">
                    <option>Tas</option>
                    <option>Baju</option>
                    <option>Souvenir</option>
                </select>  
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="box-footer">
            <button type="submit" class="btn btn-primary" style="float: right;" name="filter">Filter</button>
        </div>
    </form>
  <!-- general form elements -->
  </div>
 </div>
</div>

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Laporan Penjualan</h3>
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
                </div>
              </div>
              <div class="panel-body" style="margin: 20px;">
                <table id="dataTables" class="display" cellspacing="0" width="100%" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>No Invoice</th>
                      <th>ID DRP</th>
                      <th>Nama</th>
                      <th>ID Produk</th>
                      <th>Gambar</th>
                      <th>Nama Produk</th>
                      <th>Jlh Pesan</th>
                      <th>Biaya</th>
                      <th>tgl Pesan</th>
                      <th>Status</th>
                      <th></th>
                      <th></th>
                  </tr> 
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['filter'])){

                    $tglAwal = $_POST['tglAwal'];
                    $tglAkhir = $_POST['tglAkhir'];
                    $dropshiper = $_POST['dropshiper'];
                    $statusPesanan = $_POST['statusPesanan'];
                    $opsiTipeProduk = $_POST['opsiTipeProduk'];
                    
                    $sql = mysqli_query($conn, "select *from tblpesanan inner join tblpengguna on tblpesanan.idUser = tblpengguna.idUser inner join tblproduk on tblpesanan.idProduk = tblproduk.idProduk where tblpesanan.tglPesan = date('$tglAwal') or tblpengguna.nama like '%$dropshiper%' and tblpesanan.statusPesanan = '$statusPesanan' and tblproduk.tipeProduk = '$opsiTipeProduk'");

                    while ($data = mysqli_fetch_array($sql)) {
                      $idPesanan  = $data['idPesanan'];
                      $idUser  = $data['idUser'];
                      $nama  = $data['nama'];
                      $foto  = $data['foto'];
                      $idProduk  = $data['idProduk']; 
                      $gambar  = $data['gambar'];
                      $namaProduk  = $data['namaProduk']; 
                      $jumlahPesanan  = $data['jumlahPesanan']; 
                      $biaya  = $data['biaya']; 
                      $statusPesanan  = $data['statusPesanan'];  ?>
                          <tr>
                          <td><?php echo "drp-mdn-$idPesanan"; ?></td>
                          <td><?php echo $idUser; ?></td>
                          <td><?php echo $nama; ?></td>
                          <td><img src="gambar/<?php echo $foto; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $idProduk; ?></td>
                          <td><img src="gambar/<?php echo $gambar; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $namaProduk; ?></td>
                          <td><?php echo $jumlahPesanan; ?></td>
                          <td><?php echo $biaya; ?></td>
                          <td><?php echo $statusPesanan; ?></td>
                          <td style="width: 40px;">
                            <a class="btn btn-danger edit" href="settingPesanan.php?idPesanan=<?php echo $idPesanan; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </td>
                          <td style="width: 40px;"> 
                            <form method="POST" action="pesanan.php?idPesanan=<?php echo $idPesanan; ?>">
                              <button type="submit" class="btn btn-sm btn-primary btn-create" name="adit">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </button>
                            </form>  
                          </td>
                        </tr>
                        <?php } 

                    }else{

                    $sql = mysqli_query($conn, "select *from tblpesanan inner join tblpengguna on tblpesanan.idUser = tblpengguna.idUser inner join tblproduk on tblpesanan.idProduk = tblproduk.idProduk");

                    while ($data = mysqli_fetch_array($sql)) {
                      $idPesanan  = $data['idPesanan'];
                      $idUser  = $data['idUser'];
                      $nama  = $data['nama'];
                      $foto  = $data['foto'];
                      $idProduk  = $data['idProduk']; 
                      $gambar  = $data['gambar'];
                      $namaProduk  = $data['namaProduk']; 
                      $jumlahPesanan  = $data['jumlahPesanan']; 
                      $biaya  = $data['biaya']; 
                      $statusPesanan  = $data['statusPesanan'];
                      $tglPesan = $data['tglPesan'];  ?>
                          <tr>
                          <td><?php echo "drp-mdn-$idPesanan"; ?></td>
                          <td><?php echo $idUser; ?></td>
                          <td><?php echo $nama; ?></td>
                          <td><?php echo $idProduk; ?></td>
                          <td><img src="gambar/<?php echo $gambar; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $namaProduk; ?></td>
                          <td><?php echo $jumlahPesanan; ?></td>
                          <td><?php echo $biaya; ?></td>
                          <td><?php echo $tglPesan; ?></td>
                          <?php
                            if ($statusPesanan == "Pesanan Baru") {
                              ?> <td><small class="label label-info"><?php echo $statusPesanan; ?></small></td> <?php 
                            }elseif ($statusPesanan == "Pending") {
                              ?> <td><small class="label label-warning"><?php echo $statusPesanan; ?></small></td> <?php
                            }elseif ($statusPesanan == "Telah Bayar") {
                              ?> <td><small class="label label-primary"> <?php echo $statusPesanan; ?> </small></td> <?php
                            }elseif ($statusPesanan == "Proses Kirim") {
                              ?> <td><small class="label label-default"><?php echo $statusPesanan; ?></small></td> <?php
                            }elseif ($statusPesanan == "Telah Sampai") {
                              ?> <td><small class="label label-success"><?php echo $statusPesanan; ?></small></td> <?php
                            }else{
                              ?> <td><?php echo $statusPesanan; ?></td> <?php
                            }
                           ?>
                           <td>
                             <a class="btn btn-danger edit" href="settingPesanan.php?idPesanan=<?php echo $idPesanan; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                           </td>
                          <td style="width: 40px;">
                            <form method="POST" action="pesanan.php?idPesanan=<?php echo $idPesanan; ?>">
                              <button type="submit" class="btn btn-sm btn-primary btn-create" name="adit">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </button>
                            </form>                                                       
                            </a> 
                          </td>
                        </tr>
                        <?php } } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No Invoice</th>
                          <th>ID DRP</th>
                          <th>Nama</th>
                          <th>ID Produk</th>
                          <th>Gambar</th>
                          <th>Nama Produk</th>
                          <th>Jlh Pesan</th>
                          <th>Biaya</th>
                          <th>tgl Pesan</th>
                          <th>Status</th>
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


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
        </div>
          <div class="modal-body">
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Mohsin">
            </div>
          <div class="form-group">
              <input class="form-control " type="text" placeholder="Irshad">
            </div>
            <div class="form-group">
              <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
            </div>
        </div>
      <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
      </div>
    <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>
    
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
        </div>
          <div class="modal-body">
          <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
        </div>
      </div>
    <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>
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