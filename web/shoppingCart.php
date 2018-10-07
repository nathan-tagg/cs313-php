<?php
$itemOne   = htmlspecialchars($_POST["numberOfItemOne"]);
$itemTwo   = htmlspecialchars($_POST["numberOfItemTwo"]);
$itemThree = htmlspecialchars($_POST["numberOfItemThree"]);
$itemFour  = htmlspecialchars($_POST["numberOfItemFour"]);
$itemFive  = htmlspecialchars($_POST["numberOfItemFive"]);
$itemSix   = htmlspecialchars($_POST["numberOfItemSix"]);

if (isset($_COOKIE['one']))   { $_COOKIE['one'] += $itemOne; $itemOne = $_COOKIE['one']; }
if (isset($_COOKIE['two']))   { $_COOKIE['two'] += $itemTwo; $itemTwo = $_COOKIE['two']; }
if (isset($_COOKIE['three'])) { $_COOKIE['three'] += $itemThree; $itemThree = $_COOKIE['three']; }
if (isset($_COOKIE['four']))  { $_COOKIE['four'] += $itemFour; $itemFour = $_COOKIE['four']; }
if (isset($_COOKIE['five']))  { $_COOKIE['five'] += $itemFive; $itemFive = $_COOKIE['five']; }
if (isset($_COOKIE['six']))   { $_COOKIE['six'] += $itemSix; $itemSix = $_COOKIE['six']; }

$_COOKIE['one'] = $itemOne;
$_COOKIE['two'] = $itemTwo;
$_COOKIE['three'] = $itemThree;
$_COOKIE['four'] = $itemFour;
$_COOKIE['five'] = $itemFive;
$_COOKIE['six'] = $itemSix;

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?if ($itemOne) echo "one";?>
    <br>
    <?if ($itemTwo) echo "two";?>
    <br>
    <?if ($itemThree) echo "three";?>
    <br>
    <?if ($itemFour) echo "four";?>
    <br>
    <?if ($itemFive) echo "five";?>
    <br>
    <?if ($itemSix) echo "six";?>

  </body>
</html>
