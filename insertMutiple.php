<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "dbname";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Visitors (firstname, lastname, email)
    VALUES ('Philip', 'Osunlola', 'philiposun@gmail.com')";
    $sql .= "INSERT INTO companies (firstname, lastname, email)
    VALUES ('Nicholas', 'Osunlola', 'Nicholasosun@gmail.com')";
    $sql .= "INSERT INTO companies (firstname, lastname, email)
    VALUES ('John', 'Osunlola', 'Johnosun@gmail.com')";
    
    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created succcessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

