<?php
//TODO: if added functionality of logging in, change the whodunit to the current user. that is all.
$name_first = htmlspecialchars($_POST["firstName"]);
$name_middle = htmlspecialchars($_POST["middleName"]);
$name_last = htmlspecialchars($_POST["lastName"]);
switch (htmlspecialchars($_POST["relationship"])) {
    case 'friend':
        $relationship = 1003;
        break;
    case 'co-worker':
        $relationship = 1004;
        break;
    case 'family':
        $relationship = 1002;
        break;
    case 'spouse':
        $relationship = 1001;
        break;
    default:
        $relationship = null;
}
$birthday = htmlspecialchars($_POST["birthday"]);
$picture = htmlspecialchars($_POST["image"]);

$numberOfPhoneNumbers = (int)htmlspecialchars($_POST['numberOfPhoneNumbers']);
$numberOfAddresses = (int)htmlspecialchars($_POST['numberOfAddresses']);
$numberOfEmails = (int)htmlspecialchars($_POST['numberOfEmails']);

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


// Insert the peoples
$query = 'INSERT INTO PERSON(SELECT nextval(\'person_s1\'), :relationship, :name_first, :name_middle, :name_last, :birthday, :picture, (SELECT system_user_id FROM system_user WHERE system_user_name = \'Nathan\'))';

  $statement = $db->prepare($query);

  $statement->bindValue(':relationship', $relationship);
  $statement->bindValue(':name_first', $name_first);
  $statement->bindValue(':name_middle', $name_middle);
  $statement->bindValue(':name_last', $name_last);
  $statement->bindValue(':birthday', $birthday);
  $statement->bindValue(':picture', $picture);
  $statement->execute();

// Insert the telephones

for ($i=1; $i <= $numberOfPhoneNumbers; $i++) {
  $telephone_type = htmlspecialchars($_POST['telephone_type' + $i]);
  $country_code = htmlspecialchars($_POST['countryCode' + $i]);
  $area_code = htmlspecialchars($_POST['areaCode' + $i]);
  $telephone_number = htmlspecialchars($_POST['phoneNumber' + $i]);
  $query = 'INSERT INTO TELEPHONE(SELECT nextval(\'telephone_s1\'), :telephone_type, (SELECT currval(\'person_s1\')), :country_code, :area_code, :telephone_number, (SELECT system_user_id FROM system_user WHERE system_user_name = \'Nathan\'))';
    $statement = $db->prepare($query);
    $statement->bindValue(':telephone_type', $telephone_type);
    $statement->bindValue(':country_code', $country_code);
    $statement->bindValue(':area_code', $area_code);
    $statement->bindValue(':telephone_number', $telephone_number);
    $statement->execute();
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Created! :)</title>
    <link rel="stylesheet" href="./addressBook.css">
  </head>
  <body>
    <h1>Contact added</h1>

    <blockquote style="text-align:center">
        <i><a href="./addressBook.php" style="text-align: center;">View Contacts</a></i>
    </blockquote>

  </body>
</html>
