<!DOCTYPE html>
<html>
<head>
	<title>Reporting Form</title>
</head>
<body>
	<header>
		<h2>Reporting Form</h2>
	</header>
	<main>
		<form method="post" action="submit_report.php">
			<table border="1">
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td><input type="text" name="subject" required></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td><textarea name="message" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit Report"></td>
				</tr>
			</table>
		</form>
	</main>
    <button onclick="location.href='Dashboard.php'">Back</button>
</body>
</html>
