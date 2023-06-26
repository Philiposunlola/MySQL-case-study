<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $companies = "companies";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $companies);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO companies (firstname, lastname, email)
    VALUES ('Philip', 'Osunlola', 'philiposun@gmail.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created succcessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

