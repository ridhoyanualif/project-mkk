<?php 
	include 'connection.php';

	$nisn = $_GET['nisn'];
	$query = "DELETE FROM daftar_nilai WHERE nisn = '$nisn';";

	$data = mysqli_query($conn, $query);

	// if($data){
	// 	echo
	// 	"
	// 	<script>
	// 	if(confirm('Siswa Terhapus')) {window.location.href = 'belajar1.php'}
	// 	</script>
	// 	";
	// } else{
	// 	echo "Siswa Gagal Terhapus";
	// }
	
	header("location:dash.php");











?>