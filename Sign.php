<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn</title>

    <link rel="stylesheet" href="assets/CSS/Sign.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <?php
    session_start();

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: home.php");
        exit;
    }
    ?>
</head>

<body>
    <?php require "nav.php"; ?>


    <div class="container">
        <div id="login-box">
            <div class="logos">
                <img src="assets/img/logo-white.png" class="center" />
                <h1 class="logo-caption"><span class="tweak">S</span>ign In</h1>
            </div>
            <div class="controls">
                <form action="signupbackend.php" method="post">

                    <input type="text" id="usr" required name="username" placeholder="Username" class="form-control" />
                    <!-- <br> -->
                    <hr style="text-shadow: 2;">
                    <input type="email" id="mail" required name="Email" placeholder="Email Address" class="form-control" />
                    <!-- <br> -->
                    <hr>
                    <input type="password" id="pss" required name="Password" placeholder="Password" class="form-control" />
                    <br>
                    <!-- <input type="password" name="c" /> -->
                    <input type="text" id="cpss" required name="Confirm" placeholder="Confirm Password" class="form-control" />
                    <!-- <br> -->
                    <hr>
                    <input type="text" id="book" required name="Book" placeholder="Favourite Book" class="form-control" />

                    <!-- <br> -->

                    <!-- <div id="no_member">
                            <a class="f_pass" style="color: #8da9c4;" href="forgot.html">Forgot Password?</a>
                            <a class="f_pass" style="color: #8da9c4; text-align:left; " href="Sign.html">Not a member?</a>
                        </div> -->
                    <form action="home.php">
                        <button type="submit" class="btn btn-default btn-block btn-custom">Sign Up</button>
                    </form>
                    <form action="Login.php">
                        <button type="submit" class="btn btn-default btn-block btn-custom">LogIn</button>
                    </form>
                </form>
            </div>
        </div>
    </div>






    </div>
    <div id="particles-js"></div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="./JS/Sign.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>