<?php
$dbroot = 'localhost';
$dbuser = 'root';
$dbpass= '';
$dbname = 'countrydb';
 $conn = mysqli_connect($dbroot,$dbuser,$dbpass,$dbname);

 if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
?>