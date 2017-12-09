<?php
	//connect to database
	$conn=mysqli_connect('localhost', 'root', '1234', 'CostumeConvention') or die ("can't connect to mysql");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sex = $_POST['sex'];


	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	$sex = mysqli_real_escape_string($conn, $sex);

	$sql="INSERT INTO Participant (Username, Password, Sex) VALUES ('$username','$password', '$sex')";

	$returnval=$conn->query($sql);
	if($returnval){
		header("Location: frontpage.php");
	}else {
		die("Insertion to database failed".mysqli_error($conn));
	}
	//mysqli_close($conn)
?>