<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$idProduk = $_GET['idProduk'];
$potongan = $_POST['potongan'];

$sql = mysqli_query($conn, "select *from tblproduk where idProduk = $idProduk");

while ($data = mysqli_fetch_array($sql)) {
  $namaProduk  = $data['namaProduk'];
  $kodeProduk  = $data['kodeProduk'];
  $tipeProduk  = $data['tipeProduk'];
  $gambar  = $data['gambar']; 
  $hargaBeli  = $data['hargaBeli'];
  $hargaNormal  = $data['hargaJual']; 
  $stok  = $data['stok']; 
  $status  = $data['status']; 
  $tglMasuk  = $data['tglMasuk'];
} 

$hargaPromo = $hargaNormal - (($hargaNormal * $potongan)/100);


if($_GET['simpan']=='edit'){

	$sql = mysqli_query($conn, "UPDATE tblpromo SET hargaPromo = '$hargaPromo', potongan = '$potongan' WHERE idProduk = '$idProduk'");

	if ($sql){
	//header ('location:view.php');
	header("location:promo.php");
	} else { echo "Data gagal disimpan";
	}
}elseif(($_GET['simpan']=='hapus')){
	$idPromo = $_GET['idPromo'];

	$sql = mysqli_query($conn, "Delete From tblpromo where idPromo='$idPromo'");

	if($sql)
	{
		header("location:promo.php");
	}

	else
	{
		"Failure";
	}
}else{
// perintah SQL
	$sql = mysqli_query($conn, "INSERT INTO tblpromo  VALUES ('','$idProduk','$hargaNormal','$potongan','$hargaPromo')");

	if($sql){
	//header ('location:view.php');
	header("location:promo.php");
	} else { echo "Data gagal disimpan";
	} 
}
?>