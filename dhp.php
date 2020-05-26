 <?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "otis_data"; //change depending on your database name
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "PLACEHOLDER"; //change depending on mysql password
        // Create connection
$conn = new mysqli($servername , $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
	}
?> 
