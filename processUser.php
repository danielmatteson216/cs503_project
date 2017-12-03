<?php
	//connect to database
	$conn=mysqli_connect('localhost', 'root', 'Rambutan', 'db_project') or die ("can't connect to mysql");

	$name = $_POST['name'];
	$url = $_POST['username'];
	$url = $_POST['password'];
	$url = $_POST['sex'];

	$name = mysqli_real_escape_string($conn, $name);
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	$sex = mysqli_real_escape_string($conn, $sex);

	$sql="INSERT INTO Participant (name, username, password, sex) VALUES ('$name','$username','$password', '$sex')";

	$returnval=$conn->query($sql);
	if($returnval){
		header('Location: frontpage.php');
	}else {
		die("Insertion to database failed".mysqli_error($conn));
	}
	//mysqli_close($conn)
?>