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

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO Visitors (firstname, lastname, email) VALUES (?, ?, ?)");
    $smtm->bind_param("sss", $firstname, $lastname, $email);

    // set parameters and execute
    $firstname = "Philip";
    $lastname = "Osunlola";
    $email = "philiposun@gmail.com";
    $smtm->execute();

    $firstname = "Nicholas";
    $lastname = "Osunlola";
    $email = "nicholasosun@gmail.com";
    $smtm->execute();

    $firstname = "John";
    $lastname = "Osunlola";
    $email = "johnosun@gmail.com";
    $smtm->execute();

    echo "New records created successfully";

    $smtm->close();
    $smtm->close();
?>