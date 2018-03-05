<?php 
include "../koneksi.php"; //(../) untuk keluar dari suatu folder

// VARIABEL UNTUK MENAMPUNG GAMBAR
    $tmp_gambar=$_FILES['files']['tmp_name'];
    $nama_gambar=$_FILES['files']['name'];

    if(move_uploaded_file($tmp_gambar, "../image/product/".$nama_gambar."")){
    	if($_GET['a']=='tsd'){
				header('location:admin.php?admin=insert_product&a=tsd&nama='.$nama_gambar.''); // kembali ke halaman edit
			}elseif($_GET['a']=='tsl'){
				header('location:admin.php?admin=insert_product&a=tsl&nama='.$nama_gambar.''); // kembali ke halaman edit
			}elseif($_GET['a']=='tst'){
				header('location:admin.php?admin=insert_product&a=tst&nama='.$nama_gambar.''); // kembali ke halaman edit
			}elseif($_GET['a']=='new'){
				header('location:admin.php?admin=setting&setting=newproduct&ubah=aktif&nama='.$nama_gambar.''); // kembali ke halaman edit
			}
			
	}else{ // jika gagal menyimpan gambar kedalam folder
		echo "GAGAL";
	}
 ?>