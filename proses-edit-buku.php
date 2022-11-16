<?php

include "koneksi.php";
$id_buku=$_POST['id_buku'];
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$penulis_buku=$_POST['penulis_buku'];
$penerbit_buku=$_POST['penerbit_buku'];
$tahun_penerbit=$_POST['tahun_penerbit'];
$stok=$_POST['stok'];
$keadaan_buku=$_POST['keadaan_buku'];

$ubah=$koneksi->query("update daftar_buku set kode_buku='$kode_buku', judul_buku='$judul_buku', penulis_buku='$penulis_buku', penerbit_buku='$penerbit_buku', tahun_penerbit='$tahun_penerbit', stok='$stok', keadaan_buku='$keadaan_buku' where id_buku='$id_buku'");

if($ubah==true){

    header("location:daftar_buku.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>