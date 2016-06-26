<?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

    sec_session_start();

    if (login_check($mysqli) == true) {
        $logged = 'in';
    } else {
        $logged = 'out';
    }
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

        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>

    </head>

    <body onload="initialize()">
        <div id="container">

            <header>

                <a href="index.php" data-scroll><img class="logo" src="img/logo.png" alt="Qr Maps"></img>
                </a>

                <a href="#index" data-scroll></a>
                <nav class="nav-collapse">
                    <ul>
                        <li class="menu-item active"><a href="index.php" data-scroll>Login</a></li>
                        <li class="menu-item"><a href="about.php" data-scroll>About</a></li>
                    </ul>
                </nav>
            </header>


            <div class="container-fluid">
                <br/>

                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="form">
                            <h1>Login</h1>
                            </br>
                            <?php
                            if (isset($_GET['error'])) {
                                echo '<p class="error">Error Logging In!</p>';
                            }
                            ?>
                                <form action="includes/process_login.php" method="post" name="login_form">

                                    <table style="width:300px">
                                        <tr>
                                            <td>Email:</td>
                                            <td>
                                                <input type="text" name="email" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password:</td>
                                            <td>
                                                <input type="password" name="password" id="password" />
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
                                </form>

                                <br/>
                                <p>You are currently logged
                                    <?php echo $logged ?>.</p>
                        </div>
                    </div>
                </div>
                <br/>
            </div>

        </div>

        <script src="js/fastclick.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/fixed-responsive-nav.js"></script>
    </body>

    </html>