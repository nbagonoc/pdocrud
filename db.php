<?php

//database settings
$host = "localhost";
$dbname = "phpcrud";
$user = "sam";
$password = "sample";

//check connection
$connection = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);
if(!$connection) {
	die("Database Connection Failed" .mysql_error());
}

?>