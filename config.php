<?php
/* Database username 'bank' password '1234' */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'bank');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'customer');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn === false){
    die("ERROR: Sorry, Couldn't connect. " . mysqli_connect_error());
}
?>
