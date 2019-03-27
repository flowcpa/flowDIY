<?php

/**
CREATE TABLE `cpaUser` (
 `Name` varchar(25) NOT NULL,
 `Email` varchar(25) NOT NULL,
 `Password` varchar(100) NOT NULL,
 `Apps` text,
 `Questions` text,
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`ID`)
) 
**/

$DB['server'] = 'localhost';
$DB['user'] = '';
$DB['password'] = '';
$DB['db'] = '';

try 
{

  // connect to database
  $conn = new PDO("mysql:host=".$DB['server'].";dbname=".$DB['db'], 
	              $DB['user'], 
				  $DB['password']);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // have my fetch data returned as an associative array
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
  exit();
}