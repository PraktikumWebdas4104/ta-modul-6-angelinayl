<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="Judul"></td>
		</tr>

		<tr>
			<td>Masukkan Postingan</td>
			<td>:</td>
			<td><textarea name="post" placeholder="Ketikkan sesuatu"></textarea></td>
		</tr>

		<tr>
			<td>Unggah Gambar</td>
			<td>:</td>
			<td><input type="file" name="Gambar"></td>
		</tr>

		<tr>
			<td><a href="halamanawal.php"> Halaman Awal </a>
				<input type="submit" name="up"></td>
		</tr>
	</table>
</form>


<?php 

error_reporting(0);
session_start();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM posting WHERE id = '$id'";

	if ($conn->query($sql)) {
		$result = $koneksi->query($sql);
		$row = $result->fetch_assoc();
	}
}else{
	if (isset($_POST['up'])) {
		include 'koneksi.php';
		$query=mysqli_query($conn, "SELECT NIM,Nama FROM mhsw WHERE NIM ='$_SESSION[NIM]");
		$row=mysqli_fetch_Array($query);

			$NIM =$row['NIM'];
			$Nama =$row['Nama'];
			$Judul =$_POST['Judul'];
			$Posting =$_POST['post'];
			$Gambar =$_FILES["Gambar"]["name"];

			if (!empty($Judul)){
				if (!empty($Posting)){
					if (str_word_count($Posting)>=30){
						if (!empty($Gambar)){
							$qry=$conn->query("INSERT INTO `posting` (`NIM`, `Nama`, `Judul`, `Posting`, `Gambar`)
														VALUES ('$NIM', '$Nama', '$Judul', '$Posting', '$Gambar')");

							echo "Berhasil Di Upload";
						}else{
							echo "Masukkan Gambar";
						}
					}else{
						echo "Postingan maksimal Anda 250 kata";
					}
				}else{
					echo "Masukkan Postingan";
				}
			}else{
				echo "Masukkan Judul Anda";


			}
	}
}

 ?>