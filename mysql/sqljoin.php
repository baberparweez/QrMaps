<?php
    $servername = "db599644848.db.1and1.com";
    $username = "dbo599644848";
    $password = "Media.Database";
    $dbname = "db599644848";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // sql to insert a record
    $sql = "SELECT LOCATION, COMPANY, lat, lng 
            FROM media
            INNER JOIN markers
            ON name = description";

    if ($conn->query($sql) === TRUE) {
        echo " Record(s) added successfully";
    } else {
        echo "Error adding record" . $conn->error;
    }

    $conn->close();
?>