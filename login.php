<?php

session_start();

// jika sudah login, beralih ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Perpus</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 200px;">
		<table class="form">
			<tr>
				<td colspan="2">
					<h1 align="center">Login Petugas</h1>
				</td>
			</tr>
			<tr>
				<td><h2>Username</h2></td>
				<td class="user">
					<input type="text" name="username" id="username" />
				</td>
			</tr>
			<tr>
				<td><h2>Password</h2></td>
				<td>
					<input type="password" name="password" id="password" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
