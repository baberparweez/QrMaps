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

        // sql to create table
    $sql = "CREATE TABLE media (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    LOCATION NVARCHAR(100),
    FILENAME NVARCHAR(100) NOT NULL,
    COMPANY VARCHAR(50) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table" . $conn->error;
    }

    $conn->close();
    
?>