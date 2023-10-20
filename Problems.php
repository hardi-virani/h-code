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
    <link rel="stylesheet" href="assets/CSS/Problems.css" />

    <title>Problems</title>
</head>
//hcode

<body>
    <?php require "nav.php"; ?>


    <div class="container" style="
                border-radius: 2em;
                padding-bottom: 2em;
                margin-top: 1em;
                padding-right: 2em;
                padding-left: 2em;
                background-color: rgba(52, 50, 50, 0.763);
            ">
        <div class="container">
            <div id="time-view-search">
                <div id="time" class="medium"><?php echo date("l") . " " . date("d-m-y"); ?></div>
            </div>

            <!-- ----------TABLE --------------- -->

            <table class="table table-dark">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Problem Title</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Compiler</th>

                    </tr>
                </thead>
                <tbody id="table_body">
                    <tr class="rows" id="row1">
                        <!-- <th scope="row"></th> -->
                        <td>1</td>
                        <td>Add Two digits</td>
                        <td>Easy</td>
                        <td>Mathematical</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>

                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>2</td>
                        <td>Ugly Numbers</td>
                        <td>Easy</td>
                        <td>Dynamic Programming</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>3</td>
                        <td>Ugly Numbers II</td>
                        <td>Medium</td>
                        <td>Dynamic Programming</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>4</td>
                        <td>Reverse Strings</td>
                        <td>Medium</td>
                        <td>Strings</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>5</td>
                        <td>Nim Game</td>
                        <td>Hard</td>
                        <td>Mathematical</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>6</td>
                        <td>Reverse String</td>
                        <td>Easy</td>
                        <td>Maths</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>7</td>
                        <td>Remove Invalid Parenthesis</td>
                        <td>Hard</td>
                        <td>Tree</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>8</td>
                        <td>Remove Duplicate Letter</td>
                        <td>Medium</td>
                        <td>Greedy Algorithm</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>9</td>
                        <td>Additive Numbers</td>
                        <td>Hard</td>
                        <td>Backtracking</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>10</td>
                        <td>Blub Switcher</td>
                        <td>Medium</td>
                        <td>Mathematical</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>11</td>
                        <td>Remove Invalid Parenthesis</td>
                        <td>Hard</td>
                        <td>Tree</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>12</td>
                        <td>Integer to English word</td>
                        <td>Medium</td>
                        <td>String</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>13</td>
                        <td>Perfect Squares</td>
                        <td>Hard</td>
                        <td>Dynamic Programming</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>14</td>
                        <td>Print 100 Digits</td>
                        <td>Easy</td>
                        <td>Mathemetical</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                    <tr class="rows" id="row">
                        <td>15</td>
                        <td>Remove Invalid Parenthesis</td>
                        <td>Hard</td>
                        <td>Tree</td>
                        <td>
                            <a href="editor.html">
                                <button id="bt" type="submit" class="btn btn-outline-info">Offline</button>
                            </a>
                            <a href="https://www.programiz.com/c-programming/online-compiler/">
                                <button id="bt" type="submit" class="btn btn-outline-primary">Online</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="particles-js"></div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="JS/Problems.js"></script>

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
</body>

</html>