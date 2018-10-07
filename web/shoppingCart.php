<?php
$itemOne   = htmlspecialchars($_POST["numberOfItemOne"]);
$itemTwo   = htmlspecialchars($_POST["numberOfItemTwo"]);
$itemThree = htmlspecialchars($_POST["numberOfItemThree"]);
$itemFour  = htmlspecialchars($_POST["numberOfItemFour"]);
$itemFive  = htmlspecialchars($_POST["numberOfItemFive"]);
$itemSix   = htmlspecialchars($_POST["numberOfItemSix"]);

if (isset($_COOKIE['one']))   { $_COOKIE['one'] += $itemOne; }
else { $_COOKIE['one'] = $itemOne; }
if (isset($_COOKIE['two']))   { $_COOKIE['two'] += $itemTwo; }
else { $_COOKIE['two'] = $itemTwo; }
if (isset($_COOKIE['three'])) { $_COOKIE['three'] += $itemThree; }
else { $_COOKIE['three'] = $itemThree; }
if (isset($_COOKIE['four']))  { $_COOKIE['four'] += $itemFour; }
else { $_COOKIE['four'] = $itemFour; }
if (isset($_COOKIE['five']))  { $_COOKIE['five'] += $itemFive; }
else { $_COOKIE['four'] = $itemFive; }
if (isset($_COOKIE['six']))   { $_COOKIE['six'] += $itemSix; }
else { $_COOKIE['six'] = $itemSix; }
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
