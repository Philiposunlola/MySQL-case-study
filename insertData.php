<?php
    $servername = "localhost";
    $username = "username";
    $password = "YES";
    $dbname = "studyBD";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Visitors (firstname, lastname, email)
    VALUES ('Philip', 'Osunlola', 'philiposun@gmail.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created succcessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

