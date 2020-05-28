<?php

// LOCAL database 
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost:8888') { 
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "idm232-spreadsheet";
}

else {
// REMOTE database 
  $dbhost = "localhost";
  $dbuser = "dolmayan_idm232";
  $dbpass = "idm232recipewebsite";
  $dbname = "dolmayan_idm232";
}

//EXECUTE CONNECTION
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}

?>