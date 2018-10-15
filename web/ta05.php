<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ta 05</h1>

    <?php

      $host = 'ec2-54-235-73-241.compute-1.amazonaws.com';
      $db = 'ddgliuko4bnn30';
      $username = 'lrjdfhijghkjgr';
      $password = '022793f308a02ea702614c5a2d20ac4d2ab20840c3c722847c870416949c3e2f';


      $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

      try{
        // create a PostgreSQL database connection
        $conn = new PDO($dsn);

        // display a message if connected to the PostgreSQL successfully
        if($conn){
          echo "Connected to the <strong>$db</strong> database successfully!";
        }
      }catch (PDOException $e){
        // report error message
        echo $e->getMessage();
      }

?>

  </body>
</html>
