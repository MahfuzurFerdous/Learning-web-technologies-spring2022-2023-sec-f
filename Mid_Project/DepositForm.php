<!DOCTYPE html>
<html>
<head>
	<title>Deposit Form</title>
</head>
<body>
	<h2>Deposit Form</h2>
	<form method="post" action="Deposit.php">
		<table border="1">
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="amount"></td>
			</tr>
			<tr>
				<td>Deposit Option:</td>
				<td>
					<select name="deposit_option">
						<option value="">--Select Deposit Option--</option>
						<option value="bkash">Bkash</option>
						<option value="nagad">Nagad</option>
						<option value="rocket">Rocket</option>
						<option value="card">Card</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Deposit"></td>
			</tr>
		</table>
	</form>
	<button onclick="location.href='User.php'">Home</button>
</body>
</html>
