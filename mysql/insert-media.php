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
    $sql = "INSERT INTO media (LOCATION, FILENAME, COMPANY)
            VALUES ('http://baberparweez.co.uk/videos/denial/v1-denial-holly-qr.mp4','Holly QR','Denial'),
            ('http://baberparweez.co.uk/videos/denial/v2-denial-kiyanna-qr.mp4','Kiyanna QR','Denial'),
            ('http://baberparweez.co.uk/videos/denial/v3-denial-max-qr.mp4','Max QR','Denial'),
            
            ('http://baberparweez.co.uk/videos/detatched/v1-detached-move.mp4','Move','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v2-detached-party.mp4','Party','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v3-detatched-card.mp4','Card','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v4-detatched-door.mp4','Door','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v5-detatched-eye.mp4','Eye','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v6-detached-affair.mp4','Affair','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v7-detatched-murder.mp4','Murder','Detatched'),
            ('http://baberparweez.co.uk/videos/detatched/v8-detatched-dead.mp4','Dead','Detatched'),
            
            ('http://baberparweez.co.uk/videos/legendary-tours/v1-legendary-tours-winnie-wickers.mp4','Winnie Wickers','Legendary Tours'),
            ('http://baberparweez.co.uk/videos/legendary-tours/v2-legendary-tours-henry-riches.mp4','Henry Riches','Legendary Tours'),
            ('http://baberparweez.co.uk/videos/legendary-tours/v3-legendary-tours-ebony-black.mp4','Ebony Black','Legendary Tours'),
            ('http://baberparweez.co.uk/videos/legendary-tours/v4-legendary-tours-charles-duckworth.mp4','Charles Duckworth','Legendary Tours'),
            
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v1-poppy-bottle-1.mp4','Poppy Bottle 1','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v2-poppy-bottle-2.mp4','Poppy Bottle 2','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v3-poppy-bottle-3.mp4','Poppy Bottle 3','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v4-poppy-bottle-4.mp4','Poppy Bottle 4','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v5-poppy-bottle-5.mp4','Poppy Bottle 5','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v6-poppy-bottle-6.mp4','Poppy Bottle 6','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v7-poppy-arrives.mp4','Poppy Arrives','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v8-poppy-present.mp4','Poppy Present','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v9-poppy-angry.mp4','Poppy Angry','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v10-poppy-search-1.mp4','Poppy Search 1','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v11-poppy-search-2.mp4','Poppy Search 2','Poppys Birthday Bash'),
            ('http://baberparweez.co.uk/videos/poppys-birthday-bash/v12-poppy-death.mp4','Poppy Death','Poppys Birthday Bash'),
            
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v1-soh-carine.mp4','Carine 1','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v2-soh-carine.mp4','Carine 2','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v3-soh-carine.mp4','Carine 3','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v4-soh-ccfight.mp4','Fight 1','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v5-soh-ccfight.mp4','Fight 2','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v6-soh-ccfight.mp4','Fight 3','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v7-soh-emma.mp4','Emma 1','Secrets of Hellfyre'),
            ('http://baberparweez.co.uk/videos/secrets-of-hellfyre/v8-soh-emma.mp4','Emma 2','Secrets of Hellfyre'),
            
            ('http://baberparweez.co.uk/videos/timelapse-productions/a1-culture-club.mp3','Culture Club','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/a2-rick-astley.mp3','Rick Astley','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/a3-wham.mp3','Wham','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v1-future-tech.mp4','Future Tech','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v2-hologram.mp4','Hologram','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v3-doctor-who.mp4','Doctor Who','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v4-world-cup.mp4','World Cup','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v5-elvis.mp4','Elvis','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v6-fruit-n-veg.mp4','Fruit n Veg','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v7-ivf.mp4','IVF','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v8-harry-potter.mp4','Harry Potter','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/V9-stephen-fry.mp4','Stephen Fry','Timelapse Productions'),
            ('http://baberparweez.co.uk/videos/timelapse-productions/v10ww2.mp4','WWII','Timelapse Productions'),
            
            ('http://baberparweez.co.uk/videos/we-are-domus/a1-we-are-domus-intro.wav','Intro','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a2-we-are-domus-travel.wav','Travel','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a3-we-are-domus-first-steps.wav','First Steps','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a4-we-are-domus-children.wav','Children','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a5-we-are-domus-timor.wav','Timor','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a6-we-are-domus-escape.wav','Escape','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a7-we-are-domus-life.wav','Life','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a8-we-are-domus-death.wav','Death','We Are Domus'),
            ('http://baberparweez.co.uk/videos/we-are-domus/a9-we-are-domus-unum.wav','Unum','We Are Domus')
            ";

    if ($conn->query($sql) === TRUE) {
        echo " Record(s) added successfully";
    } else {
        echo "Error adding record" . $conn->error;
    }

    $conn->close();
?>