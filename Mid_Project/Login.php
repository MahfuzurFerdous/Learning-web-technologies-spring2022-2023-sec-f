<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="post" action="loginCheck.php">
		<table border="1">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<label><input type="checkbox" name="remember_me" value="1">Remember me</label>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
		
	</form>
	<p>Don't have an account yet? <a href="registration.php">Register here</a>.</p>
</body>
</html>
