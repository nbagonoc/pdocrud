<?php

//database settings
$host = "localhost";
$dbname = "pdocrud";
$user = "root";
$password = "root";

try{
	//check connection
	$connection = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);
}
catch(PDOexception $e){
	echo $e->getMessage();
}

?>