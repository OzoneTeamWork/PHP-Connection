<?php
/*!
 * PHP Connection
 * By Alireza Nazari (alireza.ginbox@gmail.com)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Create connection to database in procedural method
 */

// server information
$servername = "localhost";
$username = "root";
$password = "some password";

// create connection
$conn = mysqli_connect($servername, $username, $password);

// check the connection 
if (!$conn) {
	die("Connection faild: " . mysqli_connect_error());
}

echo "Connected seccessfuly!";


mysqli_close($conn);
?>