<?php

require "config.php";

$sql =" ";

try{

$connection = new PDO("mysql:host=localhost", $username, $password, $options);

$sql = file_get_contents("data/appt.sql");
$connection->exec($sql);

echo "database and table users created sucessfully";
}catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}

 ?>
