<?php  

	//login to database
	$conn=mysqli_connect('localhost', 'root', '1234', 'CostumeConvention') or die ("can't connect to mysql");

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	
	//return all  entries where username=$username and password=$password
	$sql="SELECT * FROM Participant WHERE Username LIKE '$username' AND Password LIKE '$password' ";

	$returnval=$conn->query($sql);
	if($returnval == 1){  //if exctly one user found;
		header('Location: frontpage.php');
	}else {
		//invalid
		header('Location: cs503_html.html');
	}
?>