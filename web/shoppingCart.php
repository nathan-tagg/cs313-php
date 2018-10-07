<?php
$itemOne   = htmlspecialchars($_POST["numberOfItemOne"]);
$itemTwo   = htmlspecialchars($_POST["numberOfItemTwo"]);
$itemThree = htmlspecialchars($_POST["numberOfItemThree"]);
$itemFour  = htmlspecialchars($_POST["numberOfItemFour"]);
$itemFive  = htmlspecialchars($_POST["numberOfItemFive"]);
$itemSix   = htmlspecialchars($_POST["numberOfItemSix"]);

if (isset($_COOKIE['one']))   { $_COOKIE['one'] += $itemOne; }
if (isset($_COOKIE['two']))   { $_COOKIE['two'] += $itemTwo; }
if (isset($_COOKIE['three'])) { $_COOKIE['three'] += $itemThree; }
if (isset($_COOKIE['four']))  { $_COOKIE['four'] += $itemFour; }
if (isset($_COOKIE['five']))  { $_COOKIE['five'] += $itemFive; }
if (isset($_COOKIE['six']))   { $_COOKIE['six'] += $itemSix; }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>One: <?=$itemOne?></p>
    <p>Two: <?=$itemTwo?></p>
    <p>Three: <?=$itemThree?></p>

  </body>
</html>
