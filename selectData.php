<?php
    // Database credentials
    $servername = "localhost";
    $username = "Philip Osunlola";
    $password = "";
    $dbname = "studydb";

    // Create a new MySQLi instance
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // Check for connection errors
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // SQL query to fetch data from the visitors table
    $sql = "SELECT * FROM visitors";

    // Execute the query
    $result = $mysqli->query($sql);

    // Check if there are any records found
    if ($result->num_rows > 0) {
        // Display the data in a table
        echo "<table border = '1px'>;
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>";

        // Fetch and display each row of data
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["firsName"] . "</td>
                    <td>" . $row["lastame"] . "</td>
                    <td>" . $row["email"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No visitors found.";
    }

    // Close the database connection
    $mysqli->close();
?>