<?php
$itemOne   = htmlspecialchars($_POST["numberOfItemOne"]);
$itemTwo   = htmlspecialchars($_POST["numberOfItemTwo"]);
$itemThree = htmlspecialchars($_POST["numberOfItemThree"]);
$itemFour  = htmlspecialchars($_POST["numberOfItemFour"]);
$itemFive  = htmlspecialchars($_POST["numberOfItemFive"]);
$itemSix   = htmlspecialchars($_POST["numberOfItemSix"]);

if (isset($_COOKIE['one']))   { $_COOKIE['one'] += $itemOne; }
else { setcookie(one, $itemOne, time() + 2147483647); }
if (isset($_COOKIE['two']))   { $_COOKIE['two'] += $itemTwo; }
else { setcookie(two, $itemTwo, time() + 2147483647); }
if (isset($_COOKIE['three'])) { $_COOKIE['three'] += $itemThree; }
else { setcookie(three, $itemThree, time() + 2147483647); }
if (isset($_COOKIE['four']))  { $_COOKIE['four'] += $itemFour; }
else { setcookie(four, $itemFour, time() + 2147483647); }
if (isset($_COOKIE['five']))  { $_COOKIE['five'] += $itemFive; }
else { setcookie(five, $itemFive, time() + 2147483647); }
if (isset($_COOKIE['six']))   { $_COOKIE['six'] += $itemSix; }
else { setcookie(six, $itemSix, time() + 2147483647); }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?if ($itemOne) echo $_COOKIE['one'] . " * one";?>
    <br>
    <?if ($itemTwo) echo $_COOKIE['two'] . " * two";?>
    <br>
    <?if ($itemThree) echo $_COOKIE['three'] . " * three";?>
    <br>
    <?if ($itemFour) echo $_COOKIE['four'] . " * four";?>
    <br>
    <?if ($itemFive) echo $_COOKIE['five'] . " * five";?>
    <br>
    <?if ($itemSix) echo $_COOKIE['six'] . " * six";?>

  </body>
</html>
