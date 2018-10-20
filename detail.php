<?php error_reporting(0); $NIM = $_GET['nim']; $conn = mysqli_connect("localhost","root","","university"); $que = mysqli_query($conn, "SELECT * FROM mhsw WHERE NIM = $NIM"); $row = mysqli_fetch_array($que); 

	echo "
	<h1> <center> Detail Data </center> </h1>
	<table border=1> 
	<tr> 
	<th> Nama </th>
	<th> NIM </th>
	<th> Jenis Kelamin </th>
	<th> Program Studi </td>
	<th> Fakultas </th>
	<th> Asal </th>
	<th> Motto Hidup </th>
	</tr>";

	foreach ($que as $row) {
		echo "<tr>
			<td> $row[Nama]</td>
			<td> $row[NIM]</td>
			<td> $row[JenisKelamin]</td>
			<td> $row[ProgramStudi]</td>
			<td> $row[Fakultas]</td>
			<td> $row[Asal]</td>
			<td> $row[MottoHidup]</td>";
	}

	echo "</table>";
?>
<center>
<form method="POST">
	<br><br>
	<h1> Edit Data </h1>
	<table>
		<tr> 
			<td> Nama </td>
			<td>:</td>
			<td> <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
		</tr>

		<tr> 
			<td> NIM </td>
			<td>:</td>
			<td><?php echo $NIM; ?></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Program Studi </td>
			<td>:</td>
			<td><select name="ProgramStudi">
				<option value="1"> Pilih Program Studi </option>
				<option value="MBTI"> MBTI </option>
				<option value="MI"> Manajemen Informatika </option>
				<option value="DI"> Desain Interior </option>
				<option value="DKV"> Desain Komunikasi Visual </option>
				<option value="TI"> Teknik Industri</option>
				<option value="FD"> Fashion Desgin </option>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="Fakultas">
			<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><textarea name="Asal"><?php echo $row['Asal']; ?></textarea></td>
		</tr>


		<tr>
			<td> Motto Hidup </td>
			<td>:</td>
			<td><textarea name="MottoHidup"><?php echo $row['MottoHidup']; ?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="UBAH"> <a href="halawal.php">CARI DATA</a></td>
		</tr>

</form>
</center>

<?php 
	if (isset($_POST['submit'])){
		$conn = mysqli_connect("localhost","root","","university");

		$Nama 			= $_POST['Nama'];
		$NIM 			= $_GET['nim'];
		$JenisKelamin 	= $_POST['JenisKelamin'];
		$ProgramStudi 	= $_POST['ProgramStudi'];
		$Fakultas 		= $_POST['Fakultas'];
		$Asal 			= $_POST['Asal'];
		$MottoHidup 	= $_POST['MottoHidup'];

		$que = mysqli_query($conn, "SELECT * FROM mhsw WHERE NIM =$NIM");
		$row = mysqli_fetch_array($que);


		if ($ProgramStudi !== -1) {
			if ($Fakultas !== -1) {
				$sql = mysqli_query($conn, "UPDATE `mhsw` SET `Nama` = '".$Nama."', `JenisKelamin` = '".$JenisKelamin."', `prodi` = '".$ProgramStudi."', `Fakultas` = '".$Fakultas."', `Asal` = '".$Asal."', `MottoHidup` = '".$MottoHidup."' WHERE NIM = '".$NIM."'");
				echo "Data Telah Berhasil Diubah<br>";
			}
			else{
				echo "Fakultas Harus Diisi";
			}
		}
		else{
			echo "Program Studi Harus Diisi";
		}

	}



 ?>