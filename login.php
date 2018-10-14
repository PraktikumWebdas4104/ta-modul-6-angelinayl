<form method="POST">
<h1> <center> Form Log In </center></h1>

	<center>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="NIM" length="10"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="Password"></td>
		</tr>

		<tr>
			<td><input type="submit" name="Kirim" value="Send"><a href="registrasi.php">REGISTRASI</a></td>
		</tr>

	</table>
</center>
</form>

<?php 
error_reporting(0);
	if (isset($_POST['Kirim'])) {
		session_start();
		include 'koneksi.php';

		$nim = $_POST['NIM'];
		$pass = $_POST['Password'];

		$que = "SELECT NIM,Password FROM mhsw WHERE NIM = '$nim'";
		$qry = mysqli_query($conn , $que);
		$row = mysqli_fetch_array($qry);

		if ($nim == $row['NIM'] && $pass == $row['Password']) {
			$_SESSION["NIM"]=$row['NIM'];
			$_SESSION["Password"]=$row['Password'];

			header("location:halamanawal.php");
		}
		else{

			echo "Password atau NIM salah";
		}

}
 ?>