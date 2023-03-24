<!DOCTYPE html>
<html>
<head>
	<title>Testing and Feedback</title>
</head>
<body>
	<header>
		<h2>Testing and Feedback</h2>
	</header>
	<main>
		<form method="post" action="submit_feedback.php">
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
					<td>Feedback:</td>
					<td><textarea name="feedback" required></textarea></td>
				</tr>
				<tr>
					<td><label for="rating">Rating:</label></td>
					<td>
						<select name="rating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit Feedback">
		</form>
	</main>
    <button onclick="location.href='Dashboard.php'">Back</button>
</body>
</html>
