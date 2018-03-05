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
        <li class="active"><a href="produk.php"><i class="fa fa-dashboard"></i> <span>Produk</span>
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
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- DataTables -->

<?php
  include "koneksi.php"; //Mengimport database data
  error_reporting(0);
?>

<section class="content-header">
<h1>
  Produk
  <small>Version 2.0</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Dashboard</li>
</ol>
</section>
<!-- Info boxes -->

<section class="content">
  <div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-red">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Barang Baru</span>
      </div>

      <?php 
        $jlh1 = 0;
        $res1 = $conn->query("SELECT * FROM tblproduk");
        while($row1 = $res1->fetch_assoc()){ 

          $tglMasuk1 = $row1['tglMasuk'];

          $start_date1 = strtotime(date("y-m-01 00:00:00"));
          $end_date1 = strtotime(date("y-m-31 00:00:00"));
          $input_date1 = strtotime("$tglMasuk1 00:00:00");

          if($input_date1 >= $start_date1 && $input_date1 <= $end_date1){ $jlh1++; } } ?>
      <!-- /.info-box-content -->
      <div class="info-box-content">
        <span class="info-box-number" style="font-size: 35px;"><?php echo $jlh1; ?></span>
      </div>   
      <a href="produk.php?barang=baru" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Barang Mahal</span>
      </div>

      <?php 
        $jlh2 = 0;
        $res2 = $conn->query("SELECT * FROM tblproduk");
        while($row2 = $res2->fetch_assoc()){ 

          $hargaJual1 = $row2['hargaJual']; 

          if($hargaJual1 >= 200000){ $jlh2++; } } ?>
      <!-- /.info-box-content -->
      <div class="info-box-content">
        <span class="info-box-number" style="font-size: 35px;"><?php echo $jlh2; ?></span>
      </div>   
      <a href="produk.php?barang=mahal" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-green">
      <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Barang Murah</span>
      </div>

      <?php 
        $jlh3 = 0;
        $res3 = $conn->query("SELECT * FROM tblproduk");
        while($row3 = $res3->fetch_assoc()){ 

          $hargaJual2 = $row3['hargaJual']; 

          if($hargaJual2 <= 100000){ $jlh3++; } } ?>
      <!-- /.info-box-content -->
      <div class="info-box-content">
        <span class="info-box-number" style="font-size: 35px;"><?php echo $jlh3; ?></span>
      </div>   
      <a href="produk.php?barang=murah" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="small-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Barang Terlaris</span>
      </div>
      <!-- /.info-box-content -->
      <div class="info-box-content">
        <span class="info-box-number" style="font-size: 35px;">??</span>
      </div>   
      <a href="produk.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<link rel="stylesheet" type="text/css" href="css/css_table_produk.css"> 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Judul Halaman -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Table Produk</h3>
  </div>

  <!-- /.Data produk --> 
  <link rel="stylesheet" type="text/css" href="css/css_table_produk.css"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">   
        <div id="mytable" class="table table-bordred table-striped">
          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <?php
                  if($_GET['barang']=='baru'){
                   ?> <h3 class="panel-title" style="font-size: 22px;" >List Produk Terbaru</h3> <?php 
                  }elseif($_GET['barang']=='mahal'){
                    ?> <h3 class="panel-title" style="font-size: 22px;">List Produk Mahal</h3> <?php 
                  }elseif($_GET['barang']=='murah'){
                    ?> <h3 class="panel-title" style="font-size: 22px;">List Produk Murah</h3> <?php 
                  }elseif($_GET['barang']=='laris'){
                    # code...
                  }else{
                    ?> <h3 class="panel-title" style="font-size: 22px;">List Semua Produk Yang Tersedia</h3> <?php 
                  } ?>
                </div>
                <div class="col col-xs-6 text-right">
                  <form action="inputDataProduk.php" method="post">
                    <button type="text" class="btn btn-sm btn-primary btn-create">Create New</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table id="dataTables" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Detail</th>
                            <th>New/Old</th>
                            <th>Gambar</th>
                            <th>Id Produk</th>
                            <th>Nama Produk</th>
                            <th>Kode Produk</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                
                <tbody>
                  <?php
                  if($_GET['barang']=='baru'){

                    $no = 1;
                    $res = $conn->query("SELECT * FROM tblproduk");
                    while($row = $res->fetch_assoc()){ 

                      $tglMasuk = $row['tglMasuk'];

                      $start_date = strtotime(date("y-m-01 00:00:00"));
                      $end_date = strtotime(date("y-m-31 00:00:00"));
                      $input_date = strtotime("$tglMasuk 00:00:00");

                      if($input_date >= $start_date && $input_date <= $end_date){ ?>

                        <tr>
                          <td><?php echo $no; ?></td>
                          <td>
                            <a class="btn btn-default" style="background: #00a65a;">
                              <div class="icon">
                                <i class="ion ion-bag" style="color: white;"></i>
                              </div>
                            </a>
                          </td>
                          <td> <span class="label label-default"> New </span></td>
                          <td><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $row['idProduk']; ?></td>
                          <td><?php echo $row['namaProduk']; ?></td>
                          <td><?php echo $row['kodeProduk']; ?></td>
                          <td><?php echo $row['stok']; ?></td>
                          <td><?php echo $row['hargaBeli']; ?></td>
                          <td><?php echo $row['hargaJual']; ?></td>
                          <td>
                              <a class="btn btn-danger edit" href="simpanDataProduk.php?simpan=hapus&idProduk=<?php echo $row['idProduk']; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </a>
                          </td>
                          <td> 
                              <a href="inputDataProduk.php?idProduk=<?php echo $row['idProduk']; ?>" class="btn btn-info edit" aria-label="Settings">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </a> 
                           </td>
                        </tr>
                        <?php ;
                        $no++;
                      }
                    } 
                  }elseif($_GET['barang']=='mahal'){

                    $no = 1;
                    $res = $conn->query("SELECT * FROM tblproduk");
                    while($row = $res->fetch_assoc()){

                      $hargaJual = $row['hargaJual']; 

                      if($hargaJual >= 200000){ ?>

                        <tr>
                          <td><?php echo $no; ?></td>
                          <td>
                            <a class="btn btn-default" style="background: #00a65a;">
                              <div class="icon">
                                <i class="ion ion-bag" style="color: white;"></i>
                              </div>
                            </a>
                          </td>
                          <td> <span class="label label-default"> New </span></td>
                          <td><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $row['idProduk']; ?></td>
                          <td><?php echo $row['namaProduk']; ?></td>
                          <td><?php echo $row['kodeProduk']; ?></td>
                          <td><?php echo $row['stok']; ?></td>
                          <td><?php echo $row['hargaBeli']; ?></td>
                          <td><?php echo $row['hargaJual']; ?></td>
                          <td>
                              <a class="btn btn-danger edit" href="simpanDataProduk.php?simpan=hapus&idProduk=<?php echo $row['idProduk']; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </a>
                          </td>
                          <td> 
                              <a href="inputDataProduk.php?idProduk=<?php echo $row['idProduk']; ?>" class="btn btn-info edit" aria-label="Settings">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </a> 
                           </td>
                        </tr>
                        <?php ;
                        $no++;
                      }
                    }
                  }elseif($_GET['barang']=='murah'){

                    $no = 1;
                    $res = $conn->query("SELECT * FROM tblproduk");
                    while($row = $res->fetch_assoc()){

                      $hargaJual = $row['hargaJual']; 

                      if($hargaJual <= 100000){ ?>

                        <tr>
                          <td><?php echo $no; ?></td>
                          <td>
                            <a class="btn btn-default" style="background: #00a65a;">
                              <div class="icon">
                                <i class="ion ion-bag" style="color: white;"></i>
                              </div>
                            </a>
                          </td>
                          <td> <span class="label label-default"> New </span></td>
                          <td><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 30px; height: 40px;"></td>
                          <td><?php echo $row['idProduk']; ?></td>
                          <td><?php echo $row['namaProduk']; ?></td>
                          <td><?php echo $row['kodeProduk']; ?></td>
                          <td><?php echo $row['stok']; ?></td>
                          <td><?php echo $row['hargaBeli']; ?></td>
                          <td><?php echo $row['hargaJual']; ?></td>
                          <td>
                              <a class="btn btn-danger edit" href="simpanDataProduk.php?simpan=hapus&idProduk=<?php echo $row['idProduk']; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </a>
                          </td>
                          <td> 
                              <a href="inputDataProduk.php?idProduk=<?php echo $row['idProduk']; ?>" class="btn btn-info edit" aria-label="Settings">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </a> 
                           </td>
                        </tr>
                        <?php ;
                        $no++;
                      }
                    }
                  }else{

                    $no = 1;
                    $res = $conn->query("SELECT * FROM tblproduk");
                    while($row = $res->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                          <a class="btn btn-default" style="background: #00a65a;">
                            <div class="icon">
                              <i class="ion ion-bag" style="color: white;"></i>
                            </div>
                          </a>
                        </td>
                        <td> <span class="label label-default"> New </span></td>
                        <td><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 30px; height: 40px;"></td>
                        <td><?php echo $row['idProduk']; ?></td>
                        <td><?php echo $row['namaProduk']; ?></td>
                        <td><?php echo $row['kodeProduk']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td><?php echo $row['hargaBeli']; ?></td>
                        <td><?php echo $row['hargaJual']; ?></td>
                        <td>
                            <a class="btn btn-danger edit" href="simpanDataProduk.php?simpan=hapus&idProduk=<?php echo $row['idProduk']; ?>" aria-label="Settings" onclick="return confirm('Anda Yakin Akan Menghapus ?')">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td> 
                            <a href="inputDataProduk.php?idProduk=<?php echo $row['idProduk']; ?>" class="btn btn-info edit" aria-label="Settings">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a> 
                         </td>
                      </tr>
                      <?php ;
                      $no++;
                    }
                  }
                  ?>
                </tbody>
                <tfoot>
                        <tr>
                            <th>NO.</th>
                            <th>Detail</th>
                            <th>New/Old</th>
                            <th>Gambar</th>
                            <th>Id Produk</th>
                            <th>Nama Produk</th>
                            <th>Kode Produk</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
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
</section>
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

<!-- jQuery 3 -->
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
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