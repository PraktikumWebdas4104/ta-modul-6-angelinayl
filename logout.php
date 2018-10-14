<?php 

session_start();

unset($_SESSION["NIM"]);
unset($_SESSION["Password"]);


session_destroy();
	echo "Berhasil logout, klik <a href= 'login.php'> Login </a>";

 ?>