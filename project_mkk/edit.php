<?php
	include 'connection.php';

	$nisn = $_GET['nisn'];

	$siswa = $conn->query("SELECT * FROM daftar_nilai WHERE nisn = $nisn");

	$siswa = $siswa->fetch_row();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$nilai = $_POST['nilai'];

    $query = mysqli_query($conn, "SELECT * FROM daftar_nilai WHERE nama = '$nama'");
	if($query === false) {
		echo "Error: " . mysqli_error($conn);
		header('location:main.php');
	} else {
		if(mysqli_num_rows($query) > 0) {
			header("location:main.php");
			exit;
		} else{
			$update = mysqli_query($conn, "UPDATE daftar_nilai SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE nisn = $nisn");
			if ($update) {
				header('location:main.php');
				// exit;
			} else {
				echo "Penambahan Data Gagal: " . mysqli_error($conn);
				header('location:main.php');
				
			}
		}
	}

		if(mysqli_query($conn, "UPDATE daftar_nilai SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE nisn = $nisn")) {
			header("location:main.php");
		}
	}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>Update Form</title>
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

    <body>
    <div class="form-box">
		<form method="POST">
			<div class="header-text">
				Update Nilai MKK
			</div>
			<input class="white-input" type="number" name="nisn" placeholder="Masukkan NISN" value="<?= $siswa[0] ?>" disabled>
				<input type="text" name="nama" placeholder="Masukkan Nama" value="<?= $siswa[1] ?>">
				<select id="kelas" name="kelas"><option>11 RPL 1</option><option>11 RPL 2</option><option>11 ANM 1</option><option>11 ANM 2</option><option>11 DKV 1</option><option>11 DKV 2</option></select>
				<input type="number" name="nilai" placeholder="Masukkan Nilai" value="<?= $siswa[3] ?>">
				<input type="submit" name="" value="Kirim" class="table-success">

		</form>
		</form>
	    </div>
	    <script>
	    	document.getElementById('kelas').value = <?= $siswa [2] ?>
	    </script>
</body>
</html>
