<?php
    require("mapdb.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    sec_session_start();
    // Start XML file, create parent node

    $dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

    // Opens a connection to a MySQL server

    $connection=mysql_connect ($servername, $username, $password);
    if (!$connection) {  die('Not connected : ' . mysql_error());}

    // Set the active MySQL database

    $db_selected = mysql_select_db($database, $connection);
    if (!$db_selected) {
      die ('Can\'t use db : ' . mysql_error());
    }

    // Select all the rows in the markers table
    $query = "SELECT markers.username, media.filename, media.location, markers.lat, markers.lng
                FROM media
                INNER JOIN markers
                ON markers.filename=media.filename
                INNER JOIN members
                ON members.username=media.username
                WHERE members.username = '".$_SESSION['username']."';";
    $result = mysql_query($query);
    
    if (!$result) {
      die('Invalid query: ' . mysql_error());
    }

        header("Content-type: text/xml");

        // Iterate through the rows, adding XML nodes for each

        while ($row = @mysql_fetch_assoc($result)){
          // ADD TO XML DOCUMENT NODE
          $node = $dom->createElement("marker");
          $newnode = $parnode->appendChild($node);
          $newnode->setAttribute("username",$row['username']);
          $newnode->setAttribute("filename", $row['filename']);
          $newnode->setAttribute("location", $row['location']);
          $newnode->setAttribute("lat", $row['lat']);
          $newnode->setAttribute("lng", $row['lng']);
        }

        echo $dom->saveXML();

?>