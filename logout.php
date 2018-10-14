<?php 

session_start();

unset($_SESSION["NIM"]);
unset($_SESSION["Password"]);


session_destroy();
	echo "Berhasil Logout, untuk masuk kembali silakan klik <a href= 'login.php'> Login </a>";

 ?>
