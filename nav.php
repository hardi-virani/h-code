<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/CSS/home.css" />

    <title>Hcode</title>
</head>

<body>
    <nav id="mainNavbar" class="navbar sticky-top navbar-dark navbar-expand-md">
        <div class="container">
            <a href="home.php" class="navbar-brand">
                <img id="logo" src="assets/img/logo-white.png" /></a>

            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="Resources.php" class="nav-link">Resources</a>
                    </li>

                    <li class="nav-item">
                        <a href="Standings.php" class="nav-link">Standings</a>
                    </li>

                    <li class="nav-item">
                        <a href="Problems.php" class="nav-link">Problems</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a href="coders.php" class="nav-link">Coders</a>
                    </li> -->

                    <li class="nav-item">
                        <a href="Accounts.php" class="nav-link">Accounts</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a href="Versus.php" class="nav-link">Versus</a>
                    </li> -->

                    <?php
                    session_start();
                    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
                        echo '<!-- ===========    PROFILE PIC IN NAVBAR AFTER LOG IN ============= -->
                        
                            <li>
                            <div type="hidden" class="username" value="john dog"></div>
                                <a href="profile_look.php">
                                <img id="profile_pic" src="assets/SVG/index.svg" alt="" class="img-fluid rounded-circle" />
                                
                                
                                
                                </a>
                            </li>';
                    } else {
                        echo '<li class="nav-item">
                                <a href="Login.php" class="nav-link"
                                    >Signup/Login</a
                                >
                            </li>';
                    }


                    ?>
                    <!-- ===========    PROFILE PIC IN NAVBAR AFTER LOG IN END HERE ============= -->
                </ul>
            </div>
        </div>
    </nav>





</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.18.0/js/md5.min.js"></script>

</html>

<!-- <img
                                    id="profile_pic"
                                    src="https://avatars.dicebear.com/api/initials/{' . $_SESSION["username"] . '}.svg"
                                    
                                    alt=""
                                    class="img-fluid rounded-circle"
                                /> -->