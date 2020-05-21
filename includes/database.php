<?php
// Database Connection

    // Remote database credentials
    $dbhost = "localhost";
    $dbuser = "dolmayan_idm232";
    $dbpass = "idm232recipewebsite";
    $dbname = "dolmayan_idm232";
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  

 // Check the connection is good with no errors
 if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }


//Perform Database Query
$query = "SELECT * FROM images";
$result = mysqli_query($connection, $query);

// Check there are no errors with our SQL statement
if (!$result) {
die ("Database query failed.");
}


?>