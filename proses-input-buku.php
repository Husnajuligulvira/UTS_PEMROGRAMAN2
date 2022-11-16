<?php

$id_buku=$_POST['id_buku'];
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$penulis_buku=$_POST['penulis_buku'];
$penerbit_buku=$_POST['penerbit_buku'];
$tahun_penerbit=$_POST['tahun_penerbit'];
$stok=$_POST['stok'];
$keadaan_buku=$_POST['keadaan_buku'];

include "koneksi.php";

$simpan=$koneksi->query("insert into daftar_buku(id_buku,kode_buku,judul_buku,penulis_buku,penerbit_buku,tahun_penerbit,stok,keadaan_buku) 
    values('$id_buku','$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku','$tahun_penerbit','$stok','$keadaan_buku')");

if($simpan==true){

    header("location:daftar_buku.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>