<!Doctype html>
<html>
<head>
	<title>Modify costumes</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div>
		<a href="frontpage.php"> <-- Go back to main page</a>
	</div>	

	<form action="processCostume.php" method="POST">
		<label>Name of costume: <br><input type="text" name="name" placeholder="name" required></label><br>
		<label>Image url: <br><input type="text" name="url" placeholder="url" required> </label><br>
		<label>Costume condition:<br><input type="text" name="condition" title="Enter a value on a scale 1-10" required> </label><br>
		<label>Description: <br><input type="text" name="description" required> </label><br>
		<input type="submit" value="Add costume">
	</form>
</body>
</html>