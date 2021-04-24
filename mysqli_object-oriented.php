<?php
/*!
 * PHP Connection
 * By Alireza Nazari (alireza.ginbox@gmail.com)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Create connection with MySQLi in Object-Oriented
 */

// SQL server information
$server_name = "localhost";
$username = "root";
$password = "somepassword";

// create connection 
$conn = new mysqli($server_name, $username, $password);

// check the connection 
if ($conn->connect_error) {
	die("Connection failed" . $conn->connect_error);
}

// OR
if (mysqli_connect_error()) {
	die("Connection failed" . mysqli_connect_error());
}

echo "Connected successfuly!";


$conn->close();
?>