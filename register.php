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
<article id="content">

    <h1> CS503 Final Project Register Page </h1>

    <table border="0">
        <tr>
            <td>Name</td>
            <td align="center"><input type="text" name="Name" size="30" /></td>
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

    <div>
        <?php
        echo $_POST["name"];
        //Connect to the database (server, username, password, database)
        // $conn=mysqli_connect('localhost', 'root', 'password', 'db_project') or die ("can't connect to mysql");

        // //initialize variables
        // $htmlout= array();
        // $columns= 3;

        // //retrieve data from sql
        // $sql="INSERT INTO Participant VALUES ()";
        // $result= $conn->query($sql);
        // while($row = $result->fetch_assoc()){
        //     $htmlout[]="<tr id='{$row['name']}'> <td> <img heigth='500px' width='300px' src='{$row['url']}' alt='' /></td> <td> {$row['name']}</td> <td>{$row['description']} </td></tr>";
        // }
        // $htmlout=array_chunk($htmlout, $columns);

        // //display table
        // print '<table>';
        // foreach ($htmlout as $current_row) {
        //     print  implode(' ', $current_row);
        // }

        mysqli_close($conn);    
        ?>
    </div>

</article>
</body>
</html>
