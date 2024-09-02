<?php
	include 'connection.php';

	$nisn = $_GET['nisn'];

	$siswa = $conn->query("SELECT * FROM daftar_nilai WHERE nisn = $nisn");

	$siswa = $siswa->fetch_row();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$nilai = $_POST['nilai'];

		if(mysqli_query($conn, "UPDATE daftar_nilai SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE nisn = $nisn")) {
			header("location:belajar1.php");
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style type="text/css">
		* {
			box-sizing: border-box;
	
		}
		body {
			font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
			font-size: 16px;
			color: #fff;
		}
		.form-box {
			background-color: rgba(0, 0, 0, 0.5);
			margin: auto auto;
			padding: 40px;
			border-radius: 5px;
			box-shadow: 0 0 10px #000;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: 500px;
			height: 100%;
		}
		.form-box:before {
			background-image: url("../belajarPhp/trafficjam.jpg");
			width: 100%;
			height: 100%;
			background-size: cover;
			content: "";
			position: fixed;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			z-index: -1;
			display: block;
		/*	filter: blur(2px);*/
		}
		.form-box .header-text {
			font-size: 32px;
			font-weight: 600;
			padding-bottom: 30px;
			text-align: center;
		}
		.form-box input {
			margin: 10px 0px;
			padding: 10px;
			border-radius: 5px;
			width: 100%;
			font-size: 18px;
		}
		.form-box select {
			margin: 10px 0px;
			border: none;
			padding: 10px;
			border-radius: 5px;
			width: 100%;
			font-size: 18px;
		}
		.form-box table {
			width: 415px;
			border-color: white;
			border-width: 15px;
			margin-top: 30px;
		}
		.form-box button {
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
			padding: 10px;
			margin: 20px 0px;
		}
		.first{
			text-align: center;
		}
		.table-option{
			background-color: #ffff;
		}
		.table-option a{
			text-decoration: none;
			color: black;
		}
		.white-input{
			color: #fff;
		}
		@media screen and (max-width: 600px) {
		  .form-box, .form-box table,.form-box button, .header-text, .first, select, input {
		    width: 100%;
		    margin-top: 0;
		  }
		}
	</style>
</head>



<body>
    <div class="form-box">
		<form method="POST">
			<div class="header-text">
				Update Nilai MKK
			</div>
			<input class="white-input" type="number" name="nisn" placeholder="Masukkan NISN" value="<?= $siswa[0] ?>" disabled>
				<input type="text" name="nama" placeholder="Masukkan Nama" value="<?= $siswa[1] ?>">
				<select id="kelas" name="kelas"><option>11 RPL 1</option><option>11 RPL 2</option></select>
				<input type="number" name="nilai" placeholder="Masukkan Nilai" value="<?= $siswa[3] ?>">
				<input type="submit" name="" value="Kirim" class="table-success">

		</form>
		</form>
	    </div>
	    <script>
	    	document.getElementById('kelas').value = <?= $siswa[2] ?>
	    </script>
</body>
</html>