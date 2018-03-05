<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$statusPesanan = $_POST['statusPesanan'];


if($_GET['simpan']=='edit'){

	$idPesanan = $_GET['idPesanan'];

	$sql = mysqli_query($conn, "UPDATE tblpesanan SET statusPesanan = '$statusPesanan' WHERE idPesanan = '$idPesanan'");

	if ($sql){
	//header ('location:view.php');
	header("location:pesanan.php");
	} else { echo "Data gagal disimpan";
	}
}else{
	$idPesanan = $_GET['idPesanan'];

	$sql = mysqli_query($conn, "Delete From tblpesanan where idPesanan='$idPesanan'");

	if($sql)
	{
		header("location:pesanan.php");
	}

	else
	{
		"Failure";
	}
}
?>