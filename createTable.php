<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "";
    $dbname = "studydb";

    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
   if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL to create table
   $sql = "CREATE TABLE visitors (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY
        firstname VARCHAR(30) NOT NULL
        lastname VARCHAR(30) NOT NULL
        email VARCHAR(50)
     )";

     if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
     } else {
        echo "Error creating table: " . mysqli_error($conn);
     }

   mysqli_close($conn);

?>
