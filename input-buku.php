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

         <form action="proses-input-buku.php" method="post">
            <div class="form-group">
                <label for="nama"><b>Kode buku</b></label>
                <Input type="text" name="kode_buku"class="form-control">
            </div>
            
            <div class="form-group">
                <label for="nama"><b>Judul buku</b></label>
                <Input type="text" name="judul_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penulis buku</b></label>
                <Input type="text" name="penulis_buku"class="form-control">
            </div>
             <div class="form-group">
                <label for="nama"><b>Penerbit buku</b></label>
                <Input type="text" name="penerbit_buku"class="form-control">
            </div>
             
             <div class="form-group">
                <label for="nama"><b>Tahun penerbit</b></label>
                <Input type="text" name="tahun_penerbit"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Stok</b></label>
                <input type="text" name="stok"class="form-control">
            </div>
            <div class="form-group">
                <label for="keadaan_buku"><b>Keadaan buku</b></label>
                <select name="keadaan_buku" class="form-control">
                <option value ="Baik"> Baik</option>
                <option value ="Kurang baik"> Kurang baik</option>
            </select>
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>