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
		<form action="tambah-siswa.php" method="POST">
			<div class="header-text">
				Daftar Nilai MKK
			</div>
			<input type="number" name="nisn" placeholder="Masukkan NISN">
				<input type="text" name="nama" placeholder="Masukkan Nama">
				<select name="kelas"><option>11 RPL 1</option><option>11 RPL 2</option><option>11 ANM 1</option><option>11 ANM 2</option><option>11 DKV 1</option><option>11 DKV 2</option></select>
				<input type="number" name="nilai" placeholder="Masukkan Nilai">
				<input type="submit" name="" value="Kirim" class="table-success">

		</form>
		
		<!-- <table border="1">
	        <th colspan="4">Nilai XI RPL 2</th>
	        <tr class="first">
	            <td>No</td>
	            <td>Nama</td>
	            <td>Kelas</td>
	            <td>Nilai</td>
	        </tr>
	        <tr> -->
	    <table border="1" class="hasil">
	    <?php
			include 'connection.php';
			$no=1;

			$sql = "SELECT * FROM daftar_nilai";

			$data_siswa = $conn->query($sql);

			while ($row = $data_siswa->fetch_row()){
				$banyak_siswa[] = $row;
		}?>
			<tr>
        		<th cosplan="6">Nilai MKK</th>
        	</tr>
			<?php if (!isset($banyak_siswa)): ?>
			<p>Data Kosong .</p>
			<?php else : ?>
        	<tr>
        		<td>No</td>
            	<td>NISN</td>
            	<td>Nama</td>
            	<td>Kelas</td>
            	<td>Nilai</td>
            	<td colspan="2"></td>
        	</tr>
			<?php foreach ($banyak_siswa as $siswa): ?>
        	<tr>
        		<td><?= $no++;?></td>
            	<td><?= $siswa[0]?></td>
            	<td><?= $siswa[1]?></td>
            	<td><?= $siswa[2]?></td>
            	<td><?= $siswa[3]?></td>
            	<td class="table-option"><center><a href="edit-siswa.php?nisn=<?php echo $siswa[0]; ?>"><i class="fa-regular fa-pen-to-square"></i></a></center></td>
            	<td class="table-option"><center><a href="delete-siswa.php?nisn=<?php echo $siswa[0]; ?>"><i class="fa solid fa-trash-can"></i></a></center></td>
        	</tr>
			<?php endforeach; ?>
			<?php endif; ?>
   		</table>
	        <!-- </tr> -->
	    <!-- </table> -->
    </div>
</body>
</html>