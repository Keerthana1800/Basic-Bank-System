<?php
/* Database username 'root' password '' */

$servername= 'localhost';
$user ='root';
$pass = '';
$dbname= 'customer';
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($servername, $user, $pass, $dbname);

// Check connection
if(!$conn){
    die("ERROR: Sorry, Couldn't connect. " . mysqli_connect_error());
}
?>
