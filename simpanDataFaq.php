<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$pertanyaan = $_POST['pertanyaan'];
$jawaban = $_POST['jawaban'];
$status = $_POST['status'];


if($_GET['simpan']=='edit'){

	$idFaq = $_GET['idFaq'];

	$sql = mysqli_query($conn, "UPDATE tblfaq SET pertanyaan = '$pertanyaan', jawaban = '$jawaban', status = '$status' WHERE idFaq = '$idFaq'");

	if ($sql){
	//header ('location:view.php');
	header("location:faq.php");
	} else { echo "Data gagal disimpan";
	}
}elseif(($_GET['simpan']=='hapus')){
	$idFaq = $_GET['idFaq'];

	$sql = mysqli_query($conn, "Delete From tblfaq where idFaq='$idFaq'");

	if($sql)
	{
		header("location:faq.php");
	}

	else
	{
		"Failure";
	}
}else{
// perintah SQL
	$sql = mysqli_query($conn, "INSERT INTO tblfaq VALUES ('','$pertanyaan','$jawaban','$status')");

	if ($sql){
	//header ('location:view.php');
	header("location:faq.php");
	} else { echo "Data gagal disimpan";
	}
}
?>