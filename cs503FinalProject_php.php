<!doctype html>

<html lang="en">

  <head>

      <meta charset="UTF-8">
      <title>cs503_php page</title>

  </head>


  <body>

    <?php
#php begins
    #date
    date_default_timezone_set("America/Los_Angeles");
    echo date('h:i:s a') . "</br>";

    #data aquisition
    $usersName = $_POST['username'];
    $Password = $_POST['password'];

    echo "</br>";
    echo "Data Aquisition...";
    echo "</br>";
    echo $usersName . "</br>";
    echo $Password . "</br>";

# php end
    ?>


  </body>


</html>
