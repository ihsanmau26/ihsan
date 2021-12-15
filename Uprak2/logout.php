<?php
session_start();

if($_SESSION['level']==""){
	header("Location:login.php");
}
else{
	session_destroy();
	 
	echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="login.php";</script>';
}

?>