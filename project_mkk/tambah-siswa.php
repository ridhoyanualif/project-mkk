<?php
	include 'connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nisn = $_POST['nisn'];
		$nama = $_POST['nama'];
		$kelas= $_POST['kelas'];
		$nilai = $_POST['nilai'];
	

// 	$sql = "INSERT INTO daftar_nilai (nisn, nama, kelas, nilai) VALUES('$nisn', '$nama', '$kelas', '$nilai')";

// 	if($conn->query($sql)) {
// 		// echo "<script>window.location.href = 'belajar1.php'</script>";

// 	}
// 	header("location:belajar1.php");
// }
	$query = mysqli_query($conn, "SELECT * FROM daftar_nilai WHERE nama = '$nama'");
	if($query === false) {
		echo "Error: " . mysqli_error($conn);
		header('location:main.php');
	} else {
		if(mysqli_num_rows($query) > 0) {
			header("location:main.php");
			exit;
		} else{
			$insert = mysqli_query($conn, "INSERT INTO daftar_nilai (nisn, nama, kelas, nilai) VALUES ('$nisn', '$nama', '$kelas', '$nilai')");
			if ($insert) {
				header('location:dash.php');
				// exit;
			} else {
				echo "Penambahan Data Gagal: " . mysqli_error($conn);
				header('location:dash.php');
				
			}
		}
	}
}