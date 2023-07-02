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

    // SQL to delete data
    $sql = "DELETE FROM visitors WHERE id=3";

    if (mysqli_query($conn, $sql) > 0) {
            echo "Record deleted succcessfully"; 
    } else {
        echo "Error deleting records: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>