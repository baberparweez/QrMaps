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
    $sql = "INSERT INTO markers (name, description, lat, lng) 
            VALUES ('Poppys Birthday Bash', 'Poppy Bottle 1', '51.625187', '-0.737802'),
            ('Piroshky Piroshky', '1908 Pike pl, Seattle, WA', '47.610127', '-122.342838')";

    if ($conn->query($sql) === TRUE) {
        echo " Record(s) added successfully";
    } else {
        echo "Error adding record" . $conn->error;
    }

    $conn->close();
?>