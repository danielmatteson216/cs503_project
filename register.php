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
<div>

    <h1> CS503 Final Project Register Page </h1>

    <table border="0">
        <tr>
            <td>Name</td>
            <td align="center"><input type="text" name="name" size="30" /></td>
        </tr>
        <tr>
            <td>Username</td>
            <td align="center"><input type="text" name="username" size="30" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td align="center"><input type="password" name="password" size="30" /></td>
        </tr>
        <tr>
        <td>Sex</td>
        <td align="center"><select id="sex" name="sex">
            <option value="0">--Select Sex---</option>
            <option value="M">M</option>
            <option value="F">F</option>
            </select>
        </td>
        </tr>
    </table>

    <form action="processUser.php" method="POST">
      <input type="submit" value="Submit"/>
    </form>
</div>
</body>
</html>
