<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dynamic Cartography</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height initial-scale=1">
    <!-- BOOTSTRAP FRAMEWORK -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/responsive-nav.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
</head>

<body onload="initialize()">
    <div id="container">
        <header>

            <a href="profile.php" data-scroll><img class="logo" src="img/logo.png" alt="Qr Maps"></img></a>

            <a href="#index" data-scroll></a>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item">
                        <a href="profile.php" data-scroll>
                            <?php 
                            if (login_check($mysqli) == true) : 
                            ?>
                            <p>
                            <?php 
                            echo htmlentities($_SESSION['username']); 
                            ?></p>
                        </a>
                    </li>
                    <li class="menu-item active"><a href="aboutlog.php" data-scroll>About</a></li>
                    <li class="menu-item"><a href="includes/logout.php" data-scroll>Logout</a></li>
                </ul>
            </nav>
        </header>


        <div class="container-fluid">
            <br/>

            <div class="row">
                
                <div class="col-md-4"></div>
                  <div class="col-md-4">
                        <p style="width:100%; text-align:justify;">
                        <br/>
                            QrMaps is an web-based mapping service developed for Bucks New University Performing Arts students. The system utilises a database of uploaded multimedia. This multimedia is then placed on a mapping interface which displays each medium on a marker.
                        <br/>
                        <br/>
                            The aim of the QrMaps web service project is to research, analyse and develop a QR code scanning and data mapping service which would allow the client and affiliated users to see multimedia mapped out onto a web interface. 
                        </p>
                </div>
                  <div class="col-md-4"></div>
                
          
                    
                </div>
                <br/>
            </div>

            <?php else : ?>
                <p>
                    <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
                </p>
                <?php endif; ?>

        </div>

        <script src="js/fastclick.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/fixed-responsive-nav.js"></script>
</body>

</html>