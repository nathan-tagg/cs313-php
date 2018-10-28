<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Address Book</title>
    <link rel="stylesheet" href="./addressBook.css">
    <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/book_mac/512/Address_Book.png">
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
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }

    foreach ($db->query('SELECT person_id, name_first, name_last, picture_url FROM PERSON ORDER BY 2') as $row)
    {

      echo "<div class=\"\"> <img src=\""
      . $row['picture_url']
      . "\" ALIGN=\"left\" alt=\"" . $row['name_first']
      . "\" style=\"width:60px;height:60px;border-radius:50%;padding-right:10px\"> <p>"
      . $row['name_first'] . " "
      . $row['name_last']
      . "</p></div><br>";
    }
    ?>

    <blockquote style="text-align:center">
        <i><a href="./addContact.html" style="text-align: center;">New Contact</a></i>
    </blockquote>

  </body>
</html>
