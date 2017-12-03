<!Doctype html>
<html>
<head>
	<title>Furry inspo/search</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div>
		<a href="frontpage.php"> <-- Go back to main page</a>
	</div>
	<?php

	//Connect to the database (server, username, password, database)
	$conn=mysqli_connect('localhost', 'root', 'Rambutan', 'db_project') or die ("can't connect to mysql");

	//initialize variables
	$htmlout= array();
	$columns= 3;
	$input = $_GET['input'];
	$input = htmlspecialchars($input); 
	$input = mysqli_real_escape_string($conn, $input);

	$sql = "SELECT name, url, description FROM furr_table WHERE name LIKE '$input' ";
	$result= $conn->query($sql);
	$rows = mysqli_num_rows($result);
	if($rows > 0){

			while($row = $result->fetch_assoc()){
				$htmlout[]="<tr id='{$row['name']}'> <td> <img heigth='500px' width='300px' src='{$row['url']}' alt='' /></td> <td> {$row['name']}</td> <td>{$row['description']} </td></tr>";
			}
			$htmlout=array_chunk($htmlout, $columns);

			//display table
			print '<table>';
			foreach ($htmlout as $current_row) {
				print  implode(' ', $current_row);
			}
	}
	else{
		echo "No results found";
	}
	?>
</body>
</html>