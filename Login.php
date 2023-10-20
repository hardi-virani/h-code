<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>

        <link rel="stylesheet" href="assets/CSS/Login.css" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php require "nav.php";?>

        <!-- Login -->
        <form action="loginbackend.php" method="post">
            <div class="container">
                <div id="login-box">
                    <div class="logos">
                        <img src="assets/img/logo-white.png" class="center"/>
                        <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
                    </div>
                    <div class="controls">
                        <input type="text" required name="username" placeholder="Username or Email" class="form-control" />
                        <br>
                        <input type="password" required name="password" placeholder="Password" class="form-control" />
                        
                        <br>
                        <div id="no_member">
                            <a class="f_pass" style="color: #8da9c4;" href="forgot.php">Forgot Password?</a>
                            <a class="f_pass" style="color: #8da9c4; text-align:left; " href="Sign.php">Not a member?</a>
                        </div>
                        <button type="submit" class="btn btn-default btn-block btn-custom">LogIn</button>
                    </div>
                </div>
            </div>
        </form>


        <div id="particles-js"></div>
        
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
        <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
        <script  src="./JS/Login.js"></script>        
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


