<?php 
	session_start();
	session_destroy();
	error_reporting(0);
	echo '<script>window.location="login-admin.php"</script>';
?>