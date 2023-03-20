<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="post" action="regcheck.php">
		<table border="1">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="date" name="dob"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="confirm_password"></td>
			</tr>
			<tr>
				<td>User Type:</td>
				<td>
					<select name="user_type">
						<option value="user">User</option>
						<option value="admin">Admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="register" value="Register"></td>
			</tr>
		</table>
		<button><a href="login.php">Login</a></button>
	</form>
</body>
</html>
