<!doctype html>
<html>
<head>
    <tittle> Daftar Buku</tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Daftar Buku</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
       <td> <center><b> Kode buku</center></td>
        <td><center><b>Judul buku </center></td> <td> <center><b>Penulis buku</center></td> 
        <td><center><b>Penerbit buku </center></td>  <td> <center><b>Tahun terbit </center></td>
        <td><center><b>Stok</center></td> <td><center><b>Keadaan buku</center></td>
        <th> 
            <a href="input-buku.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from daftar_buku order by kode_buku ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['kode_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['judul_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['penulis_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['penerbit_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['tahun_penerbit'] ?> </center> </td>
         <td> <center> <?php echo $row['stok'] ?> </center> </td>
         <td> <center> <?php echo $row['keadaan_buku'] ?> </center> </td>
         <td>
         <a href="edit-buku.php?id=<?php echo $row['id_buku']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-buku.php?id=<?php echo $row['id_buku']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
</body>
</html>