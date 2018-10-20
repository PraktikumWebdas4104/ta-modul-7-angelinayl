<form method="POST">
	<body bgcolor="#ffee72">
<h1> <marquee direction="right" scrollamount="5" align="center"> <u> <b> Form Input Data Mahasiswa Baru </u> </b> </marquee> </h1>


	<center> 
	<table> 
	
		<tr>
			<td> Nama </td>
			<td>:</td>
			<td><input type="text" name="Nama" length="100"></td>
		</tr>

		<tr>
			<td> NIM </td>
			<td>:</td>
			<td><input type="number" name="NIM" length="10"></td>
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
			<td><textarea name="Asal"></textarea></td>
		</tr>

		<tr>
			<td> Motto Hidup </td>
			<td>:</td>
			<td><textarea name="MottoHidup"></textarea></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim" value="Kirim"></td>
		</tr>


	</table>
</body>
</form>
</center>
<?php 
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "university";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$Nama    		= $_POST['Nama'];
	$NIM     		= $_POST['NIM'];
	$JenisKelamin   = $_POST['JenisKelamin'];
	$ProgramStudi 	= $_POST['ProgramStudi'];
	$Fakultas 		= $_POST['Fakultas'];
	$Asal 			= $_POST['Asal'];
	$MottoHidup 	= $_POST['MottoHidup'];

	$sql = $conn->query("INSERT INTO mhsw
						 VALUES ('$Nama','$NIM','$JenisKelamin','$ProgramStudi','$Fakultas','$Asal','$MottoHidup')");

	echo "Berhasil"."<br>";
	echo "<a href = 'halawal.php'>Klik</a> lanjut";
}
 ?>