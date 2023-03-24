<!DOCTYPE html>
<html>
<head>
	<title>Diagram</title>
</head>
<body>
	
		<h2>Diagram Picture Upload Page</h2>
		<p>Upload your diagram picture:</p>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<input type="file" name="diagram_picture" accept="image/*">
			<input type="submit" value="Upload">
		</form>
        <p></br></p>
        <button onclick="location.href='Dashboard.php'">Home</button>
</body>
</html>
