<!Doctype html>
<html>
<head>
	<title>Furry inspo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
	<div class="middle">
	<h1>Furry Inspiration<br> Welcome to our collection </h1>
	<hr style="margin:auto width:40%">
	</div>
</header>

<!-- Just some stylish introduction text-->
<section class="intro">
	<p>On this page you are able to search for inspiration for your furry costumes. Search in our search field,
	browse the homepage or login to add your own ideas!
	</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>

<!-- Make the login button and search field with button-->
<section class="nav">
	<form >
		<label> Click here to log in: <br>
			<input type="button" value="login" onclick="window.location.href='cs503_html.php'">
		</label>
	</form>
	<form action="search.php" method="GET">
		<label>Let's find some inspiration<br>
		<input name="input" type="search" placeholder="search"><br>
		<input type="submit" value="search"></label>
	</form>
</section>

<!-- retrieve data from database and display in a table-->
<article id="content">
	<div>
		<?php
		//Connect to the database (server, username, password, database)
		$conn=mysqli_connect('localhost', 'root', 'password', 'db_project') or die ("can't connect to mysql");

		//initialize variables
		$htmlout= array();
		$columns= 3;

		//retrieve data from sql
		$sql="SELECT name, url, description FROM furr_table ORDER BY name";
		$result= $conn->query($sql);
		while($row = $result->fetch_assoc()){
			$htmlout[]="<tr id='{$row['name']}'> <td> <img heigth='500px' width='300px' src='{$row['url']}' alt='' /></td> <td> {$row['name']}</td> <td>{$row['description']} </td></tr>";
		}
		$htmlout=array_chunk($htmlout, $columns);

		//display table
		print '<table>';
		foreach ($htmlout as $current_row) {
			print  implode(' ', $current_row);
		}

		mysqli_close($conn);	
		?>
	</div>
</article>

</body>
</html>
