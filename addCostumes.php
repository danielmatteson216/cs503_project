<!Doctype html>
<html>
<head>
	<title>Modify costumes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div>
	<form action="processCostume.php" method="POST">
		<label>Name of costume: <input type="text" name="name" placeholder="name" required></label><br>
		<label>Image url: <input type="text" name="url" placeholder="url" required> </label><br>
		<label>Costume condition:<input type="text" name="condition" pattern="^[1-10]" title="Enter a value on a scale 1-10" required> </label><br>
		<label>Description: <input type="text" name="description" required> </label><br>
		<input type="submit" value="Add costume">
	</form>
</div>
<div>
		<a href="frontpage.php"> <-- Go back to main page</a>
</div>	

</body>
</html>