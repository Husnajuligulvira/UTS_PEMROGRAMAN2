<!doctype html>
<html>
    <head>
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
    <div class="container">
        <div class="row">
        <div clas="col-md-12"><br><br><br><br>
    
    <center><table border ="2" bgcolor="red">
    <tr>
        <td colspan="2" height = "200px" width="400px">
        <center><h2> Login admin </h2>
        <form action="proses-login.php" method="post">
            <b>username:</b><br>
            <input type="text" name="username" required>
            <br><br>
            <b>password:</b><br>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" name="simpan"
            value="login" class="btn btn-info">
            <input type="reset" name="kosongkan"
            value="kosongkan" class="btn btn-danger"></center><br>
            </td>
     </tr>
</center>
    </form>
</div>
</div>
</div>
    <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>