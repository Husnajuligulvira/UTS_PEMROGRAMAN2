<?php
$id_buku=$_POST['id_buku'];
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$penulis_buku=$_POST['penulis_buku'];
$penerbit_buku=$_POST['penerbit_buku'];
$tahun_penerbit=$_POST['tahun_penerbit'];
$stok=$_POST['stok'];
$keadaan_buku=$_POST['keadaan_buku'];

echo "id buku :". $id_buku."<br>";
echo "kode buku :". $kode_buku."<br>";
echo "judul buku:". $judul_buku."<br>";
echo "penulis buku :". $penulis_buku."<br>";
echo "penerbit buku :". $penerbit_buku."<br>";
echo "tahun penerbit :". $tahun_penerbit."<br>";
echo "stok :". $stok."<br>";
echo "keadaan buku:". $keadaan_buku."<br>";

?>