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

        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <!-- Google CDN for jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            var customIcons = {
                restaurant: {
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
                    shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
                },
                bar: {
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
                    shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
                }
            };

            function load() {
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(51.6286, -0.7482),
                    zoom: 13,
                    mapTypeId: 'roadmap'
                });

                var infoWindow = new google.maps.InfoWindow;
                // Change this depending on the name of your PHP file
                downloadUrl("mapxml.php", function (data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    for (var i = 0; i < markers.length; i++) {
                        var username = markers[i].getAttribute("username");
                        var filename = markers[i].getAttribute("filename");
                        var location = markers[i].getAttribute("location");
                        var type = markers[i].getAttribute("type");
                        var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng")));
                        var html = "<b>" + username + "</b> <br/>" + filename + "</b> <br/>" +

                            '<iframe src=' + location + ' frameborder="0" allowfullscreen></iframe>';
                        var icon = customIcons[type] || {};
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            icon: icon.icon,
                            shadow: icon.shadow
                        });
                        bindInfoWindow(marker, map, infoWindow, html);
                    }
                });
            }

            function bindInfoWindow(marker, map, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });
            }

            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;
                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };
                request.open('GET', url, true);
                request.send(null);
            }

            function doNothing() {}
            //]]>
        </script>
    </head>

    <body onload="load()">
        <div id="container">
            <header>

                <a href="profile.php" data-scroll><img class="logo" src="img/logo.png" alt="Qr Maps"></img>
                </a>

                <a href="#index" data-scroll></a>
                <nav class="nav-collapse">
                    <ul>
                        <li class="profile">

                        </li>
                        <li class="menu-item active">
                            <a href="profile.php" data-scroll>
                                <?php 
                                if (login_check($mysqli) == true) : 
                                ?>
                                    <p>
                                        <?php 
                                    echo htmlentities($_SESSION['username']); 
                                ?>
                                    </p>
                            </a>
                        </li>
                        <li class="menu-item"><a href="aboutlog.php" data-scroll>About</a></li>
                        <li class="menu-item"><a href="includes/logout.php" data-scroll>Logout</a></li>
                    </ul>
                </nav>
            </header>


            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Google Map -->
                        <br/>
                        <div id="map"></div>
                    </div>
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