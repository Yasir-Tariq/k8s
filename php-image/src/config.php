<?php

/**
  * Configuration for database connection
  *
  */

$host       = "mysqlnew-service";
$username   = "root";
$password   = "test";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

?>


