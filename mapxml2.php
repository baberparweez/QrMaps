<?php

    require("mapdb.php");

    // Start XML file, create parent node

    $dom = new DOMDocument("1.0", "utf8");
	$node = $dom->createElement("markers");
	$parnode = $dom->appendChild($node); 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
        }

        // Select rows in the markers and media tables
        $result = $conn->query('SELECT * FROM markers WHERE 1');

        header("Content-type: text/xml")

        // Iterate through the rows, adding XML nodes for each

        foreach ($result as $row) {
          // ADD TO XML DOCUMENT NODE
          $node = $dom->createElement("marker");
          $newnode = $parnode->appendChild($node);
          $newnode->setAttribute("company",$row['company']);
          $newnode->setAttribute("filename", $row['filename']);
          $newnode->setAttribute("location", $row['location']);
          $newnode->setAttribute("lat", $row['lat']);
          $newnode->setAttribute("lng", $row['lng']);
            $newnode->setAttribute("location", $row['location']);
        }

        echo $dom->saveXML();

?>