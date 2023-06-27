<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "YES";
    $dbname = "dbname";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM Visitors";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result) ) {
            echo "id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        } 
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>