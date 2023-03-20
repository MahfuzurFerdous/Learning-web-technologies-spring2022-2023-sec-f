<!DOCTYPE html>
<html>
<head>
	<title>Send Money</title>
</head>
<body>
	<h2>Send Money</h2>
	<form method="post" action="">
		<table border="1">
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="amount"></td>
			</tr>
			<tr>
				<td>Receiver Email:</td>
				<td><input type="email" name="receiver_email"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Send Money"></td>
			</tr>
            
		</table>
	</form>
	<br>
	<button onclick="location.href='SendMoneyHistory.php'">Recent</button>
    <button onclick="location.href='user.php'">Home</button>
</body>
</html>
