<?php

//declare a function to connect to the database
function openConnection(){
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass= "";
	$db="register";

	//trys to connect to the database
	$conn = new mysqli ($dbhost, $dbuser,$dbpass,$db)
	or die("unable to connnect %s\n". $conn->error);//display an error message and indicates what is the error

	return $conn;//return the whether the connection was successful
}
function closeConnection($conn)
 {
 $conn -> close();//disconnect the database
 }

?>