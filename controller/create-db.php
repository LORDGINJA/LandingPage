<?php
	//connects this file to the config file
	require_once(__DIR__ . "/../model/config.php"); 

	//creating a table to store users' usernames, emails, and passwords in phpMyAdmin.  pretty much the same as previous table
	$query = $_SESSION["connection"]->query("CREATE TABLE contact ("
		. "name, "
		. "number, "
		. "email, "
		. "other, "
		. "PRIMARY KEY (id))");

	//lets me know that the users' database has been created
	if($query){
		echo "<p> Successfully created table: users </p>";
	}


	//if the database hasn't been created, this echoes out the error
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

?>