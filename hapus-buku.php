<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from daftar_buku where id_buku='$id'");

if($hapus==true){

    header("location:daftar_buku.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>