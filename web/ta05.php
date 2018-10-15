<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ta 05</h1>

    <?
      $conn = pg_pconnect("dbname=ddgliuko4bnn30");
      if (!$conn) {
        echo "ERROR: unable to connect to database\n";
        exit;
      }

      $result = pg_query($conn, "SELECT");
        if (!$result) {
          echo "ERROR: invalid query\n";
          exit;
        }

      while ($row = pg_fetch_row($result)) {
        
      }
    ?>

  </body>
</html>
