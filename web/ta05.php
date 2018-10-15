<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?
      $conn = pg_pconnect("dbname=ddgliuko4bnn30");
      if (!$conn) {
        echo "An error occurred.\n";
        exit;
      }

      $result = pg_query($conn, "SELECT");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
        }

      while ($row = pg_fetch_row($result)) {
        echo "Author: $row[0]  E-mail: $row[1]";
        echo "<br />\n";
      }
    ?>

  </body>
</html>
