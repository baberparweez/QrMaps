<?php
    include_once 'includes/register.inc.php';
    include_once 'includes/functions.php';
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
                        <li class="menu-item"><a href="index.php" data-scroll>Login</a></li>
                        <li class="menu-item active"><a href="register.php" data-scroll>Register</a></li>
                        <li class="menu-item"><a href="about.php" data-scroll>About</a></li>
                    </ul>
                </nav>
            </header>


            <div class="container-fluid">
                <br/>

                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="form">
                            <h1>Register</h1>
                            </br>
                            <?php
                            if (!empty($error_msg)) {
                                echo $error_msg;
                            }
                             ?>

                                <table style="width:100%">
                                    <tr>
                                        <td>Usernames may contain only digits, upper and lower case letters and underscores.</td>
                                    </tr>
                                    <tr>
                                        <td>Emails must have a valid email format.</td>
                                    </tr>
                                    <tr>
                                        <td>Passwords must be at least 6 characters long.</td>
                                    </tr>
                                </table>

                                <table style="width:100%">
                                    <tr>
                                        <td style="text-decoration: underline">Passwords must contain:</td>
                                    </tr>
                                    <tr>
                                        <td>- At least one upper case letter (A..Z)</td>
                                    </tr>
                                    <tr>
                                        <td>- At least one lower case letter (a..z)</td>
                                    </tr>
                                    <tr>
                                        <td>- At least one number (0..9)</td>
                                    </tr>
                                    <tr>
                                        <td>Your password and confirmation must match exactly.</td>
                                    </tr>
                                </table>
                                <br>
                                <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">

                                    <table style="width:300px">
                                        <tr>
                                            <td>Username:</td>
                                            <td>
                                                <input type='text' name='username' id='username' />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>
                                                <input type="text" name="email" id="email" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password:</td>
                                            <td>
                                                <input type="password" name="password" id="password" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Confirm password:</td>
                                            <td>
                                                <input type="password" name="confirmpwd" id="confirmpwd" />
                                            </td>
                                        </tr>
                                    </table>
                                    <br>

                                    <input type="button" value="Register" onclick="return regformhash(this.form,
                                       this.form.username,
                                       this.form.email,
                                       this.form.password,
                                       this.form.confirmpwd);" />
                                </form>
                                <br>
                                <p>Return to the <a href="index.php">login page</a>.</p>
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