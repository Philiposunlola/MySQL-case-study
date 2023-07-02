<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "";
    $dbname = "studydb";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Visitors (firstName, lastName, email)
    VALUES ('Philip', 'Osunlola', 'philiposun@gmail.com')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created succcessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

