<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "nilai_db";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
	die ("Gagal terhubung dengan MySQL: " . mysqli_connect_error());
	}

	$sql = "SELECT *
	FROM daftar_nilai";

	$query = mysqli_query($conn, $sql);

	if (!$query) {
	die ("SQL Error: " . mysqli_error($conn));
	}



?>