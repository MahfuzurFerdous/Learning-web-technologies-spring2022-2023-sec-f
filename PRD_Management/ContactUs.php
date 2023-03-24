<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>

	<h1>Contact Us</h1>

	<form method="post">
		<label for="search">Search for:</label>
		<input type="text" name="search" id="search">
		<button type="submit">Search</button>
	</form>

	<?php
	// Check if search query is submitted
	if(isset($_POST['search'])) {
		// Get the search term from the form
		$searchTerm = $_POST['search'];

		// Open the txt file and search for the term
		$file = fopen("owners.txt", "r");
		
		echo "<table border='1'>";
		echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
		while(!feof($file)) {
			$line = fgets($file);
			$data = explode(",", $line);
			if(strpos($data[0], $searchTerm) !== false) {
				echo "<tr>";
				echo "<td>" . $data[0] . "</td>";
				echo "<td>" . $data[1] . "</td>";
				echo "<td>" . $data[2] . "</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
		fclose($file);
	}
	else {
		// Display all the information from the txt file
		$file = fopen("owners.txt", "r");
		echo "<table border='1'>";
		echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
		while(!feof($file)) {
			$line = fgets($file);
			$data = explode(",", $line);
			echo "<tr>";
			echo "<td>" . $data[0] . "</td>";
			echo "<td>" . $data[1] . "</td>";
			echo "<td>" . $data[2] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		fclose($file);
	}
	?>

	<button onclick="location.href='dashboard.php'">Home</button>
	<button onclick="location.href='contactus.php'">Refresh</button>

</body>
</html>
