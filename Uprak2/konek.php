<?php
session_start();

if($_SESSION['level'] == 'admin'){
	header("Location:admin/halamanadmin.php");
}
else if ($_SESSION['level'] == 'user') {
	header("Location:user/halamanuser.php");
}
else if($_SESSION['level'] == ""){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="logout.php";</script>';
}
?>