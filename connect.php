<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "";
    $dbname = "studydb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>