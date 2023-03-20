<!DOCTYPE html>
<html>
<head>
	<title>Bill Payment</title>
</head>
<body>
	<h1>Bill Payment</h1>
	<form method="post" action="PaymentSys.php"
		<table border="1">
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="amount"></td>
			</tr>
			<tr>
				<td>Biller ID:</td>
				<td><input type="text" name="biller_id"></td>
			</tr>
			<tr>
				<td>Options:</td>
				<td>
					<select name="options">
						<option value="">--Select--</option>
						<option value="Prime Video">Prime Video</option>
						<option value="Netflix">Netflix</option>
						<option value="Amazon">Amazon</option>
					</select>
				</td>
                
			
			</tr>
            <tr>
            <th>Scan QR</th>
			<td><input type="button" value="Scan"></td>
            </tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Deposit">
				</td>
			</tr>
			
		</table>
		
	</form>
	<button onclick="location.href='User.php'">Home</button>
</body>
</html>
