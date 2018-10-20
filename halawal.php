<body bgcolor="#ffee72">
</body>
<form method="POST">
				<h1>Cari Data</h1>
					<table>
						<tr>
							<td>Cari</td>
							<td>:</td>
							<td><input type="text" name="cariNim" placeholder="Cari NIM"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="cari" value="CARI"> <a href="input.php">Input Data</a></td>
						</tr>
					</table>
			</form>

<?php 

include 'koneksi.php';

		$que = "SELECT * FROM mhsw"; 
		$qry = mysqli_query($conn,$que);
		$row = mysqli_fetch_array($qry);

			echo "<table border='2' align='center'>
					<tr>
						<th>Nama</th>
						<th>NIM</th>
					</tr>";

			foreach ($qry as $row){

				echo	"<tr>
						<td>".$row['Nama']."</td>
						<td>".$row['NIM']."</td>
					</tr>";				
			}
			echo "</table><br><br>";
		if (isset($_POST['cari'])) {
			$cariNim = $_POST['cariNim'];

			$que = "SELECT NIM, Nama FROM mhsw WHERE NIM = $cariNim";
			$qry = mysqli_query($conn, $que);

		echo "<table border=1 align='center'>
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Aksi</th>
				</tr>";

			foreach ($qry as $row) {
			echo "<tr>
					<td>$row[Nama]</td>
					<td>$row[NIM]</td>
					<td><a href='detail.php?nim=$row[NIM]'>Detail</a> | 
						<a href='delete.php?nim=$row[NIM]'>Delete</a></td>
				  </tr>";
			}
			echo "</table>";
		}
 ?>