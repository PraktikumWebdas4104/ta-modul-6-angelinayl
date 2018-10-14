<form method="POST">
<h1> <center> Form Pendaftaran </center></h1>
	<center>
	<table>
	
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="Nama" length="100"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="NIM" length="10"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="Kelas" value="MI01">MI01<br>
			<input type="radio" name="Kelas" value="MI02">MI02<br>
			<input type="radio" name="Kelas" value="MI03">MI03<br>
			<input type="radio" name="Kelas" value="MI04">MI04<br></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="Hobi" value="Berenang">Berenang
				<br>
			<input type="checkbox" name="Hobi" value="Bersepeda">Bersepeda
				<br>
			<input type="checkbox" name="Hobi" value="Bernyanyi">Bernyanyi
				<br>
			<input type="checkbox" name="Hobi" value="Memasak">Memasak
				<br>
			<input type="checkbox" name="Hobi" value="Menari">Menari
				<br>
			<input type="checkbox" name="Hobi" value="Berkuda">Berkuda
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="Fakultas">
			<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="Alamat"></textarea></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="Password"></td>
		</tr>


		<tr>
		<td><input type="submit" name="kirim" value="Send"></td>
		</tr>

	</table>
	</center>
</form>

<?php 
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "takhir";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$Nama    		= $_POST['Nama'];
	$NIM     		= $_POST['NIM'];
	$Kelas   		= $_POST['Kelas'];
	$JenisKelamin		= $_POST['JenisKelamin'];
	$Hobi   		= $_POST['Hobi'];
	$Fakultas 		= $_POST['Fakultas'];
	$Alamat 		= $_POST['Alamat'];
	$Password 		= $_POST['Password'];

	$sql = $conn->query("INSERT INTO mhsw
						 VALUES ('$Nama','$NIM','$Kelas','$JenisKelamin','$Hobi','$Fakultas','$Alamat','$Password')");

	echo "Berhasil"."<br>";
	echo "<a href = 'login.php'>Klik</a> lanjut";
}
 ?>
