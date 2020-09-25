<?php
	//Server login, database navn mm.
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "GruppeOpdagelsePHP";
	//Checker forbindelsen og laver en database
	try {
	    $conn = new PDO("mysql:host=$servername", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE DATABASE $dbname";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "Database created successfully<br>";
	}
	catch(PDOException $e) {
	    echo $e->getMessage() . "<br>";
	}
	$conn = null;

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    // sql to create table
	    $sql = "CREATE TABLE user (
	    id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	    username TINYTEXT NOT NULL,
		psw LONGTEXT NOT NULL)";

	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "Table created successfully<br>";
	}
	catch(PDOException $e) {
	    echo $e->getMessage() . "<br>";
	}
	$conn = null;