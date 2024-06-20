<?php
	session_start();
	include '../onek.php';

	if (isset($_GET['name'])) {
		
		$id = $_GET['name'];
		mysqli_query($dbcon,"DELETE FROM kriteria WHERE id_kriteria = '$id'");
		echo "<script>alert ('berhasil menghapus')</script>";
		header("location:../kriteria.php");

	}else{
		echo "<h1>good</h1>";
	}

?>