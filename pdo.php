<?php
/*!
 * PHP Connection
 * By Alireza Nazari (alireza.ginbox@gmail.com)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *
 * Create connection to the database server by using PDO method
 */
// server information 
$servername = "localhost";
$username = "root";
$password = "some password";

// create connection 
try {
	
	$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
	// set the PDO error to exception 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfuly!";

} catch (PDOException $e){
	echo "Connection faild: " . $e->getMessage();
}


$conn = null;
?>