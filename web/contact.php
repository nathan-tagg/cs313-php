<?php

$host = 'ec2-54-235-73-241.compute-1.amazonaws.com';
$dbname = 'ddgliuko4bnn30';
$username = 'lrjdfhijghkjgr';
$password = '022793f308a02ea702614c5a2d20ac4d2ab20840c3c722847c870416949c3e2f';
try
{
  $db = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$person_id = htmlspecialchars($_POST["person_id"]);

$statement = $db->prepare('SELECT name_first, name_last, picture_url FROM PERSON WHERE person_id  = :person_id');
$statement->execute(array(':person_id' => $person_id);
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$picture = $rows['picture_url'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./addressBook.css">
  </head>
  <body>

    <blockquote>
      <div class="person">
        <?echo '<img src="' . $picture . '" alt="">';?>
      </div>
    </blockquote>

    <blockquote>
      <div class="telephone">

      </div>
    </blockquote>

    <blockquote>
      <div class="address">

      </div>
    </blockquote>

    <blockquote>
      <div class="email">

      </div>
    </blockquote>

  </body>
</html>
