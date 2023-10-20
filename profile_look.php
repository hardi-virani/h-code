<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/CSS/profile_look.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/home.css" rel="stylesheet" />

</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">

                <img src="https://avatars.dicebear.com/api/initials/{ <?php session_start();
                                                                        echo $_SESSION['username']; ?> }.svg" alt="" class="img-fluid rounded-circle" />

                <h1 class="text-light">
                    <?php echo $_SESSION["username"]; ?>
                </h1>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li>
                        <a href="home.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i>
                            <span>Problem counter</span></a>
                    </li>
                    <li>
                        <a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Problems</span></a>
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link scrollto" style="color: red">
                            <span>LOG OUT</span></a>
                    </li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1><?php echo $_SESSION["username"]; ?></h1>
            <p>
                I'm
                <span class="typed" data-typed-items="Problem Solver, Developer"></span>
            </p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= problmes chart & skills Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Problems counter</h2>
                    <!-- <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam
                        cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic
                        quas.
                    </p> -->
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                <strong>Question Solved</strong>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                <strong>Projects Made</strong>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                <strong>Target Question</strong>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                            <p>
                                <strong>Question Remaining</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container section-title">
                <h2>Skills</h2>

                <div class="row skills-content">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">Problem Solving
                                <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">C/C++ <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Java <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">HTML <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">
                <div class="section-title">
                    <h2>Problems</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="resume-item">
                            <h4>1 to 200</h4>
                            <h5>Easy</h5>
                            <p>
                                <em>Hackerrank</em>
                            </p>
                            <p>
                                This platform helped me develop my Problem
                                Solving Skills at the begining of my
                                Graduation Years.
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>200 to 600</h4>
                            <h5>Medium</h5>
                            <p>
                                <em>Leetcode, Coding ninja etc </em>
                            </p>
                            <p>
                                These Platforms are the best platform to
                                increase you timming and optimal code solution
                                for a problems and data structures.
                                However, this website help many contest to
                                compete around the world which can eventually
                                add to you resume.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="resume-item">
                            <h4>600 to 700</h4>
                            <h5>Hard</h5>
                            <p>
                                <em>Codechef, GeeksforGeeks</em>
                            </p>
                            <p>
                                These websites are for advance level problem
                                solving question, in which one should use
                                recursive function, which less time and space
                                complexity. All these skills helps you develop
                                you cogent and logical skills at computer level.
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>701 to 1000</h4>
                            <h5>MNC Level</h5>
                            <p>
                                <em>All the platform shown in Home page are on the contest with MNC level question.</em>
                            </p>
                            <p>
                                MNC level question, gives a huge amount of
                                data which tests the problem solver how
                                to handle it with optimal code and less time
                                and space complexity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Resume Section -->
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="JS/profile_look.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="JS/profile_look.js"></script>
</body>

</html>