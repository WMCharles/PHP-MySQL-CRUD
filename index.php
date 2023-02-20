<?php 
    // variables 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";
$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

// create table
$sql = "CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL)";
