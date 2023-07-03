<?php
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "";
    $dbname = "studydb";

   // Create connection 
   $conn = $mysqli_connect($servername, $username, $password, $dbname);
    // check connection 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE visitors SET lastName='Osunlola' WHERE id=2;

    if (mysqli_query($conn, $sql)) {
        echo "Record update successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>