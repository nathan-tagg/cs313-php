<?php
$itemOne   = htmlspecialchars($_POST["numberOfItemOne"]);
$itemTwo   = htmlspecialchars($_POST["numberOfItemTwo"]);
$itemThree = htmlspecialchars($_POST["numberOfItemThree"]);
$itemFour  = htmlspecialchars($_POST["numberOfItemFour"]);
$itemFive  = htmlspecialchars($_POST["numberOfItemFive"]);
$itemSix   = htmlspecialchars($_POST["numberOfItemSix"]);

if (isset($_COOKIE['one']))   { setcookie(one, $_COOKIE['one'] + $itemOne, time() + 2147483647); }
else { setcookie(one, $itemOne, time() + 2147483647); }
if (isset($_COOKIE['two']))   { setcookie(two, $_COOKIE['two'] + $itemTwo, time() + 2147483647); }
else { setcookie(two, $itemTwo, time() + 2147483647); }
if (isset($_COOKIE['three'])) { setcookie(three, $_COOKIE['three'] + $itemThree, time() + 2147483647); }
else { setcookie(three, $itemThree, time() + 2147483647); }
if (isset($_COOKIE['four']))  { setcookie(four, $_COOKIE['four'] + $itemFour, time() + 2147483647); }
else { setcookie(four, $itemFour, time() + 2147483647); }
if (isset($_COOKIE['five']))  { setcookie(five, $_COOKIE['five'] + $itemFive, time() + 2147483647); }
else { setcookie(five, $itemFive, time() + 2147483647); }
if (isset($_COOKIE['six']))   { setcookie(six, $_COOKIE['six'] + $itemSix, time() + 2147483647); }
else { setcookie(six, $itemSix, time() + 2147483647); }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?if ($_COOKIE['one']) echo $_COOKIE['one'] . " * one";?>
    <br>
    <?if ($_COOKIE['two']) echo $_COOKIE['two'] . " * two";?>
    <br>
    <?if ($_COOKIE['three']) echo $_COOKIE['three'] . " * three";?>
    <br>
    <?if ($_COOKIE['four']) echo $_COOKIE['four'] . " * four";?>
    <br>
    <?if ($_COOKIE['five']) echo $_COOKIE['five'] . " * five";?>
    <br>
    <?if ($_COOKIE['six']) echo $_COOKIE['six'] . " * six";?>

  </body>
</html>
