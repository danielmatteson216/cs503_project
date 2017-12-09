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
	$conn=mysqli_connect('localhost', 'root', '1234', 'CostumeConvention') or die ("can't connect to mysql");

	//initialize variables
	$htmlout= array();
	$columns= 3;
	$input = $_GET['input'];
	$input = htmlspecialchars($input); 
	$input = mysqli_real_escape_string($conn, $input);

	//Get data form database, display in a html-table
	$sql = "SELECT Cname, URL, Description FROM Costumes WHERE Cname LIKE '%$input%' ";
	$result= $conn->query($sql);
	$rows = mysqli_num_rows($result);
	if($rows > 0){
		//build table entries
		while($row = $result->fetch_assoc()){
			$htmlout[]="<tr id='{$row['Cname']}'> <td> <img heigth='500px' width='300px' src='{$row['URL']}' alt='' /></td> <td> {$row['Cname']}</td> <td>{$row['Description']} </td></tr>";
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
