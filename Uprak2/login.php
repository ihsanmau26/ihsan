<?php  
include('koneklogin.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="stylemenu.css">
</head>
<body>

	<div class="login">
		<form action="" method="post">
			<img src="YFR2.png">
	        <p>
	            <label>Username</label><br>
	            <input type="text" id="username" name="username"   />
	        </p><br>
	        <p>
	            <label>Password</label><br>
	            <input type="password" id="password" name="password" />
	        </p><br>
	        <?php echo $form_error; ?>
	        <p>
	            <input type="submit" name= "submit" id="btn" value="Login" name="submit_login" />
	        </p>
	    </form>
    </div>

</body>