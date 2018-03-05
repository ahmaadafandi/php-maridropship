<?php
  include "koneksi.php"; //Mengimport database data
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <?php
           $sql1 = mysqli_query($conn, "select *from tblproduk");
           $jlhBarang = mysqli_num_rows($sql1);
        ?>
        <h3><?php echo $jlhBarang; ?></h3>

        <p>Produk</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="produk.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        
        <?php
           $sql2 = mysqli_query($conn, "select *from tblpesanan where statusPesanan not in ('Selesai', 'Batal')");
           $jlhPesanan = mysqli_num_rows($sql2);
        ?>
        <h3><?php echo $jlhPesanan; ?></h3>

        <p>Order</p>
      </div>
      <div class="icon">
        <i class="fa fa-shopping-cart"></i>
      </div>
      <a href="pesanan.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <?php
           $sql3 = mysqli_query($conn, "select *from tblpengguna");
           $jlhPengguna = mysqli_num_rows($sql3);
        ?>
        <h3><?php echo $jlhPengguna; ?></h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="pengguna.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>Promo</h3>

        <p>Check Promotion</p>
      </div>
      <div class="icon">
        <i class="fa fa-hand-o-right"></i>
      </div>
      <a href="promo.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Pesanan</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <thead>
        <tr>
            <th>No Invoice</th>
            <th>Foto</th>
            <th>Pemesan</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Biaya</th>
            <th>Status</th>
        </tr> 
        </thead>
        <tbody>
          <?php

          $sql = mysqli_query($conn, "select *from tblpesanan inner join tblpengguna on tblpesanan.idUser = tblpengguna.idUser inner join tblproduk on tblpesanan.idProduk = tblproduk.idProduk where tblpesanan.statusPesanan not in ('Telah Sampai', 'Batal') Limit 5");

          while ($data = mysqli_fetch_array($sql)) {
            $idPesanan  = $data['idPesanan'];
            $idUser  = $data['idUser'];
            $nama  = $data['nama'];
            $foto  = $data['foto'];
            $gambar  = $data['gambar'];
            $namaProduk  = $data['namaProduk']; 
            $jumlahPesanan  = $data['jumlahPesanan']; 
            $biaya  = $data['biaya']; 
            $statusPesanan  = $data['statusPesanan'];  ?>
                <tr>
                <td><?php echo "drp-mdn-$idPesanan"; ?></td>
                <td><img src="gambar/<?php echo $foto; ?>" style="width: 30px; height: 40px;"></td>
                <td><?php echo $nama; ?></td>
                <td><img src="gambar/<?php echo $gambar; ?>" style="width: 30px; height: 40px;"></td>
                <td><?php echo $namaProduk; ?></td>
                <td><?php echo $jumlahPesanan; ?></td>
                <td><?php echo $biaya; ?></td>
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
                    ?> <td class="label label-success"><?php echo $statusPesanan; ?></td> <?php
                  }else{
                    ?> <td><?php echo $statusPesanan; ?></td> <?php
                  }
                 ?>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <a href="pesanan.php" class="btn btn-sm btn-info btn-flat pull-right">View All Orders</a>
  </div>
  <!-- /.box-footer -->
</div>

<div class="row">
<!-- left column -->
  <div class="col-md-6">
            <!-- Calendar -->
    <div class="box box-solid bg-green-gradient">
      <div class="box-header">
        <i class="fa fa-calendar"></i>

        <h3 class="box-title">Calendar</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bars"></i></button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="#">Add new event</a></li>
              <li><a href="#">Clear events</a></li>
              <li class="divider"></li>
              <li><a href="#">View calendar</a></li>
            </ul>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"></div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-black">
        <div class="row">
          <div class="col-sm-6">
            <!-- Progress bars -->
            <div class="clearfix">
              <span class="pull-left">Task #1</span>
              <small class="pull-right">90%</small>
            </div>
            <div class="progress xs">
              <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
            </div>

            <div class="clearfix">
              <span class="pull-left">Task #2</span>
              <small class="pull-right">70%</small>
            </div>
            <div class="progress xs">
              <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <div class="clearfix">
              <span class="pull-left">Task #3</span>
              <small class="pull-right">60%</small>
            </div>
            <div class="progress xs">
              <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
            </div>

            <div class="clearfix">
              <span class="pull-left">Task #4</span>
              <small class="pull-right">40%</small>
            </div>
            <div class="progress xs">
              <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>

  <div class="col-md-6" >
              <!-- Dropshiper -->
  <div class="box box-primary">
    <div class="box-header">
      <i class="ion ion-clipboard"></i>

      <h3 class="box-title">Dropshiper</h3>
      <?php 
      $perPage = 3;

      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }else{
        $page = 1;
      }
      
      if($page > 1){
        $start  = ($page * $perPage) - $perPage;
      }else{
        $start = 0;
      } 
      ?>

      <div class="box-tools pull-right">
        <?php 
          $sql2 = mysqli_query($conn, "select *from tblpengguna");
          $jlhBaris = mysqli_num_rows($sql2);
          $halaman = ceil($jlhBaris/$perPage);
        ?>
        <ul class="pagination pagination-sm inline">
          <?php
            for($i=1; $i<=$halaman; $i++){ ?>
              <li <?php if($i==$page) { echo "class='active'";} ?>><a href='?page=<?php  echo $i;  ?>'><?php  echo $i;  ?></a></li>
           <?php  }  ?>
        </ul>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
      <ul class="todo-list">
          <?php 

          $sql = mysqli_query($conn, "select *from tblpengguna Limit $start, $perPage");

          while ($data = mysqli_fetch_array($sql)) {
            $idUser  = $data['idUser'];
            $nama  = $data['nama'];
            $email  = $data['email'];
            $password  = $data['password'];
            $alamat  = $data['alamat']; 
            $kontak  = $data['kontak'];
            $foto  = $data['foto']; 
            $status  = $data['status']; 
            $tglDaftar  = $data['tglDaftar']; 
            $tglKeluar  = $data['tglKeluar'];  ?>

            <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <!-- checkbox -->
            <input type="checkbox" value="">
            <!-- todo text -->
            <span class="text"><?php echo $nama; ?></span>
            <!-- Emphasis label -->
            <small class="label label-danger"><i class="fa fa-clock-o"></i> Level 3</small>
            <!-- General tools such as edit or delete-->
            <div class="tools">
              <a href="#"><i class="fa fa-edit"></i></a>
              <a href="#"><i class="fa fa-trash-o"></i></a>
            </div>
          </li>

          <?php } ?>
      </ul>
    </div>
    <!-- /.box-body -->
    <form method="POST" action="inputDataPengguna.php">
      <div class="box-footer clearfix no-border">
        <button type="submit" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
      </div>
    </form>
  </div>


    </div>
  </div>
</section>
