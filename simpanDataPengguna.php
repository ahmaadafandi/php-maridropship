<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$email = $_POST['email'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$source = $_FILES['foto']['tmp_name'];
$folder = './gambar/';


if($_GET['simpan']=='edit'){

	$idUser = $_GET['idUser'];

	$sql = mysqli_query($conn, "UPDATE tblpengguna SET nama = '$nama', kontak = '$kontak', email = '$email', password = '$password', alamat = '$alamat', foto = '$foto' WHERE idUser = '$idUser'");

	if ($sql && move_uploaded_file($source, $folder.$foto)){
	//header ('location:view.php');
	header("location:pengguna.php");
	} else { echo "Data gagal disimpan";
	}
}elseif(($_GET['simpan']=='hapus')){
	$idUser = $_GET['idUser'];

	$sql = mysqli_query($conn, "Delete From tblpengguna where idUser='$idUser'");

	if($sql)
	{
		header("location:pengguna.php");
	}

	else
	{
		"Failure";
	}
}else{
// perintah SQL
	$sql = mysqli_query($conn, "INSERT INTO tblpengguna VALUES ('','$nama','$email','$password','$alamat','$kontak','$foto','Aktif',NOW(),'')");

	if ($sql && move_uploaded_file($source, $folder.$foto)){
	//header ('location:view.php');
	header("location:pengguna.php");
	} else { echo "Data gagal disimpan";
	}
}
?>