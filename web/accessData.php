<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Contacts</h1>

    <?
    $host = 'ec2-54-235-73-241.compute-1.amazonaws.com';
    $dbname = 'ddgliuko4bnn30';
    $username = 'lrjdfhijghkjgr';
    $password = '022793f308a02ea702614c5a2d20ac4d2ab20840c3c722847c870416949c3e2f';
    try
    {
      $db = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if($db){echo "Connected to the <strong>$dbname</strong> database successfully!";}
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }


    ?>

  </body>
</html>
