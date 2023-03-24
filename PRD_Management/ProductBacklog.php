<!DOCTYPE html>
<html>
<head>
	<title>Product Backlog</title>
</head>
<body>
	<header>
		<h2>Product Backlog</h2>
	</header>
	<main>
		<form method="post" action="add_to_backlog.php">
			<table border="1">
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><textarea name="description" required></textarea></td>
				</tr>
				<tr>
					<td>Priority:</td>
					<td>
						<select name="priority">
							<option value="1">High</option>
							<option value="2">Medium</option>
							<option value="3">Low</option>

						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Add to Backlog"></td>
				</tr>
			</table>
		</form>
	</main>
    <button onclick="location.href='Dashboard.php'">Home</button>
</body>
</html>
