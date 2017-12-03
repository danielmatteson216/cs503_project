<!doctype html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Cs503 Register page</title>
    <style>
      form { display: inline; }
    </style>
  </head>
  <body>

    <h1> CS503 Final Project Log in Page </h1>
    
    <table border="0">
      <tr>
		<td>Name</td>
        <td align="center"><input type="text" name="Name" size="30" /></td>
      </tr>
        <td>Username</td>
        <td align="center"><input type="text" name="username" size="30" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td align="center"><input type="password" name="password" size="30" /></td>
      </tr>
		<td>Sex</td>
        <td align="center"><select id="sex" name="Sex">
		<option value="0">--Select Sex---</option>
		<option value="M">M</option>
		<option value="F">F</option>
		</select>
		</td>
      </tr>
	
	  
    </table>

    <form action="cs503FinalProject_php.php" method="post">
      <input type="submit" value="Submit"/>
    </form>
    <form action="cs503FinalProject2_php.php" method="post">
      <input type="submit" value="Register"/>
    </form>

  </body>
</html>
