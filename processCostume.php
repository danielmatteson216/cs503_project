<?php
	//connect to database
	$conn=mysqli_connect('localhost', 'root', '1234', 'CostumeConvention') or die ("can't connect to mysql");

	$name = $_POST['name'];
	$url = $_POST['url'];
	$condition = $_POST['condition'];
	$description = $_POST['description'];

	$name = mysqli_real_escape_string($conn, $name);
	$url = mysqli_real_escape_string($conn, $url);
	$condition = mysqli_real_escape_string($conn, $condition);
	$description = mysqli_real_escape_string($conn, $description);


	$sql="INSERT INTO furr_table (Cname, CostumeCondition, URL, Description)
			VALUES ('$name','$condition','$url','$description')";

	$returnval=$conn->query($sql);
	if($returnval){
		header('Location: frontpage.php');
	}else {
		die("Insertion to database failed".mysqli_error($conn));
	}
	//mysqli_close($conn)
?>