<!DOCTYPE html>
<html>
<head>
	<title>Feature</title>
</head>
<body>
	<header>
		<h2>Add Feature</h2>
	</header>
	<main>
		<form method="POST" action="ProcessFeature.php">
			<table border="1">
				<tr>
					<th>Feature Title:</th>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<th>Feature Description:</th>
					<td><textarea name="description"></textarea></td>
				</tr>
				<tr>
					<th>Priority:</th>
					<td>
						<select name="priority">
							<option value="High">High</option>
							<option value="Medium">Medium</option>
							<option value="Low">Low</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Status:</th>
					<td>
						<select name="status">
							<option value="Not Started">Not Started</option>
							<option value="In Progress">In Progress</option>
							<option value="Completed">Completed</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Add Feature"></td>
				</tr>
			</table>
		</form>
	</main>
    <button onclick="location.href='Dashboard.php'">Home</button>
</body>
</html>