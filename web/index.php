<?php

if(isset($_COOKIE['Visit']))
{
    $lastVisit = $_COOKIE['Visit'];
}

$year = 31536000 + time() ;
setcookie(AboutVisit, time (), $year) ;

if (isset ($lastVisit))
{
    if ((time () - $lastVisit) > 86400)
    {
        echo "Welcome back! You last visited on " . date("m/d/y",$lastVisit) ;
    }
    else
    {
        echo "<p>Thanks for visiting my Homepage again today!";
    }
}
else
{
    echo "Welcome to my Homepage!";
}

echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="./siameseFightingFish.css">
  </head>
  <body>
    <h1>Homepage</h1>
  </body>
</html>';

?>
