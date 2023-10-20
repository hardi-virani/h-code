<?php

if ($_GET) {
    require "dbconnection.php";
    $id = (int)$_GET["id"];
    $sql = "select * from hcodeproblem where id = $id";
    $result = mysqli_query($conn, $sql);
    $detail = mysqli_fetch_assoc($result);
    $code = $detail["precode"];
}
session_start();
if (!isset($_SESSION["loggedin"])) {
    if (!$_SESSION["loggedin"]) {
        header("location: Login.php");
    }
}

if ($_POST) {
    $input = $detail["input"];
    $input = 45;
    $code = $_POST["code"];
    $file = fopen("hello.py", 'w');
    fwrite($file, $code);
    fclose($file);
    $output = (string) exec("python3 hello.py call $input");
    $eOutput = (string)$detail["output"];

    if ($output == $eOutput) {
        $output = 'Output:' . $output . '<br>Expected:' . $eOutput . '<br>Correct Answer';
        $userId = (int)$_SESSION['id'];
        $sqlCheck = "SELECT * from hcodesolved where userid= $userId and problemid = $id";
        $resultCheck = mysqli_query($conn, $sqlCheck);
        if (mysqli_fetch_assoc($resultCheck) == 0) {
            $sqlsolved = "INSERT INTO hcodesolved values(NULL,$userId,$id)";
            mysqli_query($conn, $sqlsolved);
            $accepted = (int)$detail["accepted"] + 1;
            $sqlupdate = "UPDATE hcodeproblem SET accepted=$accepted where id = $id";
            mysqli_query($conn, $sqlupdate);
        }
    } elseif ($output == NULL) {
        $output = "Error";
    } else {
        $output = 'Output:' . $output . '<br>Expected:' . $eOutput . '<br>Wronge Answer';
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Code Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
    <link href="assets/CSS/editor.css" rel="stylesheet" />
</head>

<body>

    <?php
    require "nav.php";
    ?>
    <form action="compile.php" method="post">
        <input type="hidden" id="description" value="<?php echo $detail['description']; ?>"></input>
        <div class="container" id="container1">
            <h1>Code Editor</h1>
            <div class="editor-container">
                <textarea name="code" id="editor" placeholder="Write your code here"><?php echo $code;  ?></textarea>
            </div>

            <div class="button-container">
                <p> <a class="detailed-link" onclick="showDescription()">Description</a> </p>
                <button id="run">Run</button>
            </div>
            <div class="output-container">
                <div name="output" id="output"><?php echo $output;  ?></div>
            </div>
        </div>
    </form>
    <div id="particles-js"></div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/JS/editor.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- ---------------------FOR HOVER OF NAVBAR COLOUR--------------------- -->

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $("#mainNavbar");
                $nav.toggleClass(
                    "scrolled",
                    $(this).scrollTop() > $nav.height()
                );
            });
        });
    </script>
    <script>
        function showDescription() {
            const description = document.getElementById("description");
            window.alert(description.value);
        }
    </script>
</body>

</html>