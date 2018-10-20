<?php 
	$conn = mysqli_connect("localhost","root","","mhsw");
	$NIM = $_GET['nim'];

	mysqli_query($conn, "DELETE FROM mhsw WHERE NIM = '".$NIM."'");
	header("location:halawal.php?pesan=*Data Sudah Dihapus");

 ?>