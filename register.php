<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cs503 Register page</title>
    <link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
<div>

    <h1> CS503 Final Project Register Page </h1>

    <form action="processUser.php" method="POST">
        <table border="0"> 
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
        <input type="submit" value="Submit"/>
    </form>
</div>
</body>
</html>
