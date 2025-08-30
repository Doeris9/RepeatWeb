<?php

/**
  *Configuration for database connection
  *This is used to store the db login data
  *
  */

$host ="localhost";
$username ="root";
$password =" ";
$dbname ="test";
$dsn ="mysql:host=$host;dbname=$dbname";
$options =array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

?>
