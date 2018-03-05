<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$namaProduk = $_POST['namaProduk'];
$kodeProduk = $_POST['kodeProduk'];
$tipeProduk = $_POST['tipeProduk'];
$hargaBeli = $_POST['hargaBeli'];
$hargaJual = $_POST['hargaJual'];
$stok = $_POST['stok'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './gambar/';


if($_GET['simpan']=='edit'){

	$idProduk = $_GET['idProduk'];

	$sql = mysqli_query($conn, "UPDATE tblproduk SET namaProduk = '$namaProduk', kodeProduk = '$kodeProduk', tipeProduk = '$tipeProduk', hargaBeli = '$hargaBeli', hargaJual = '$hargaJual', gambar = '$gambar', stok = '$stok', status = '$status' WHERE idProduk = '$idProduk'");

	if ($sql && move_uploaded_file($source, $folder.$gambar)){
	//header ('location:view.php');
	header("location:produk.php");
	} else { echo "Data gagal disimpan";
	}
}elseif(($_GET['simpan']=='hapus')){
	$idProduk = $_GET['idProduk'];

	$sql = mysqli_query($conn, "Delete From tblproduk where idProduk='$idProduk'");

	if($sql)
	{
		header("location:produk.php");
	}

	else
	{
		"Failure";
	}
}else{
// perintah SQL
	$sql = mysqli_query($conn, "INSERT INTO tblproduk  VALUES ('','$namaProduk','$kodeProduk','$tipeProduk','$gambar','$hargaBeli','$hargaJual','$stok','$status',NOW())");

	if ($sql && move_uploaded_file($source, $folder.$gambar)){
	//header ('location:view.php');
	header("location:produk.php");
	} else { echo "Data gagal disimpan";
	} 
}
?>