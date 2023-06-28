<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "YES";
    $dbname = "studydb";

    // Create   connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstName, lastName FROM Visitors WHERE lastName='Osunlola'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result) ) {
            echo "id: ". $row["id"]. " - Name: ". $row["firstName"]. " " . $row["lastName"] . "<br>";
        } 
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>