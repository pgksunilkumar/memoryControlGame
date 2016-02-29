<?php
$servername = "localhost";
$username = "niranjan";
$password = "anandam";
$dbname = "MemoryControl";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE MemoryControl";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// sql to select database

$sql = "use MemoryControl";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error Selecting Database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE MemoryGameStats (
id VARCHAR(12), 
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
score int UNSIGNED NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MemoryGameStats created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


