<?php 
include 'koneksi.php';
	session_start();

	if (isset($_SESSION["NIM"]) && isset($_SESSION["Password"])) {

		$que2 = "SELECT Nama, NIM, Kelas, JenisKelamin, Hobi, Fakultas, Alamat FROM mhsw WHERE NIM ='$_SESSION[NIM]'";
		$qry2 = mysqli_query($conn,$que2);
		$row2 = mysqli_fetch_array($qry2);

			echo "<table border=1>
					<tr>
						<th>Nama</th>
						<th>NIM</th>
						<th>Kelas</th>
						<th>JenisKelamin</th>
						<th>Hobi</th>
						<th>Fakultas</th>
						<th>Alamat</th>
					</tr>

					<tr>
						<td>".$row2[0]."</td>
						<td>".$row2[1]."</td>
						<td>".$row2[2]."</td>
						<td>".$row2[3]."</td>
						<td>".$row2[4]."</td>
						<td>".$row2[5]."</td>
						<td>".$row2[6]."</td>
					</tr>
				</table>";
		
			echo "<table>
					<tr>
						<td><a herf='editprofil.php'>Edit</a></td>
						<td><a href='posting.php'>Posting</a></td>
						<td><a href='logout.php'>Logout</a></td>
					</tr>
				</table>";
	}else{
		echo "Login tidak berhasil,klik <a href='login.php'>Login</a> kembali";
	}


 ?>