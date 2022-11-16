<!doctype html>
<html>
<head>
        <tittle> Menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-buku.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from daftar_buku where id_buku='$id'");
                $row=$tampil->fetch_assoc();
             ?>
 
            <div class="form-group">
                <label for="kode_buku"><b>Kode buku</b></label>
                 <Input type="hidden" name="id_buku" value="<?php echo$row['id_buku']?>" class="form-control">
                <Input type="text" name="kode_buku" value="<?php echo$row['kode_buku']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="judul_buku"><b>Judul buku</b></label>
                <Input type="text" name="judul_buku" value="<?php echo$row['judul_buku']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="penulis_buku"><b>Penulis buku</b></label>
                <Input type="text" name="penulis_buku" value="<?php echo$row['penulis_buku']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="penerbit_buku"><b>Penerbit buku</b></label>
                <Input type="text" name="penerbit_buku" value="<?php echo$row['penerbit_buku']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="tahun_penerbit"><b>Tahun penerbit</b></label>
                <Input type="text" name="tahun_penerbit" value="<?php echo$row['tahun_penerbit']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok"><b>Stok</b></label>
                <Input type="text" name="stok" value="<?php echo$row['stok']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="keadaan_buku"><b>Keadaan buku</b></label>
                <select name="keadaan_buku" class="form-control">
                <option value ="Baik"> Baik</option>
                <option value ="Kurang baik"> Kurang baik</option>
            </select>
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>