<?php

if(isset($_COOKIE['AboutVisit']))
{
$last = $_COOKIE['AboutVisit']; }
$year = 31536000 + time() ;
//this adds one year to the current time, for the cookie expiration
setcookie(AboutVisit, time (), $year) ;
if (isset ($last))
{
$change = time () - $last;
if ( $change > 86400)
{
echo "<p>Welcome back!<p> <br> <p>You last visited on<p> ". date("m/d/y",$last) ;
// Tells the user when they last visited if it was over a day ago
}
else
{
echo "<p>Thanks for using our site<p>!";
//Gives the user a message if they are visiting again in the same day
}
}
else
{
echo "<p>Welcome to our site!<p>";
//Greets a first time user
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
