<?php
// Database credentials
$host = "localhost";
$username = "Philip Osunlola";
$password = "YES";
$dbname = "studydb";

// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// SQL query to fetch data from the visitors table
$sql = "SELECT id, firstname, lastname FROM visitors";

// Execute the query
$result = $mysqli->query($sql);

// Check for query execution errors
if (!$result) {
    echo "Error: " . $mysqli->error;
    exit();
}

// Fetch and display the data
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "First Name: " . $row['firstname'] . "<br>";
    echo "Last Name: " . $row['lastname'] . "<br><br>";
}

// Close the result and database connection
$result->close();
$mysqli->close();
?>