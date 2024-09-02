<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>Input Form</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <img src="logo71.png" alt="" />
          </div>
          <nav>
            <div class="btn">
              <i class="fa fa-times close-btn"></i>
            </div>
            <li><a href="main.html">Home</a></li>
            <li><a href="main.php">Data Nilai</a></li>
            <li><a href="#">Data Mapel</a></li>
            <li><a href="#">Log Out</a></li>
          </nav>
          <div class="btn">
            <i class="fa fa-bars menu-btn"></i>
          </div>
        </div>
      </div>
    </header>

    <div class="form-box">
		<form action="tambah-siswa.php" method="POST">
			<div class="header-text">
				Input Nilai MKK
			</div>
			<input type="number" name="nisn" placeholder="Masukkan NISN">
				<input type="text" name="nama" placeholder="Masukkan Nama">
				<select id="kelass" name="kelas"><option>11 RPL 1</option><option>11 RPL 2</option><option>11 ANM 1</option><option>11 ANM 2</option><option>11 DKV 1</option><option>11 DKV 2</option></select>
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
			<p>Empty .</p>
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
            	<td class="table-option"><center><a href="edit.php?nisn=<?php echo $siswa[0]; ?>"><i class="fa-regular fa-pen-to-square"></i></a></center></td>
            	<td class="table-option"><center><a href="delete-siswa.php?nisn=<?php echo $siswa[0]; ?>"><i class="fa solid fa-trash-can"></i></a></center></td>
        	</tr>
			<?php endforeach; ?>
			<?php endif; ?>
   		</table>
	        <!-- </tr> -->
	    <!-- </table> -->
    </div>