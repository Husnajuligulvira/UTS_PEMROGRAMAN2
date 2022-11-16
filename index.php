<?php include "session.php" ?>
<!doctype html>
	<html>
	<head>
		<title> Dashboard Admin</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h2> Dashboard Admin</h2>
	 Selamat datang ...  <br>
	 <br><a href="logout.php">logout</a>
	 <a href="daftar_buku.php"> | Daftar buku</a>
	<strong><?php echo $_SESSION['username']; ?></strong>
	<h3><?php echo @$_GET['pesan']?></h3>

	<script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>