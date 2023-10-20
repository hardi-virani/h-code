<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./assets/CSS/home.css" />

        <title>Hcode</title>
    </head>
    <body>
        <?php require "nav.php";?>
           
        <div
            class="container"
            style="
                border-radius: 2em;
                padding-bottom: 2em;
                margin-top: 1em;
                padding-right: 2em;
                padding-left: 2em;
                background-color: rgba(52, 50, 50, 0.763);
            "
        >
            <div class="container">
            <div id="time-view-search">
                <div id="time" class="medium"><?php echo date("l") . " " . date("d-m-y"); ?></div>
                <div class="search">
                    <div class="input-group">
                        <input id="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button id="search" type="button" class="btn btn-secondary">
                            Search
                        </button>
                    </div>
                </div>
            </div>
                <!-- ----------TABLE --------------- -->

                <table class="table table-dark">
                    <thead class="thead">
                        <tr>
                            <th scope="col">No. of participants</th>
                            <th scope="col">Event</th>
                            <th scope="col">No. of problems</th>
                            
                            <th scope="col">End time</th>
                            
                        </tr>
                    </thead>
                    <tbody id="table_body">
                        <tr class="rows" id="row1">
                            <!-- <th scope="row"></th> -->
                            <td>10</td>
                            
                            <td><img
                                    id="logos"
                                    class="codechef"
                                    src="./assets/img/codechef.png"
                                    alt="codelogo"
                                /><a href="" style="color: white">
                                Code Chef March Challenge 2021 Division</a>
                                </td>
                                
                            <td>2</td>
                            <td>aug. 3,2023</td>
                            
                        </tr>
                        <tr class="rows" id="row2">
                            <!-- <th scope="row">2</th> -->
                            <td>34</td>
                            <td><img
                                    id="logos"
                                    class="leetcode"
                                    src="./assets/img/leetcode-3521542-2944960.webp"
                                    alt="leetcodelogo"
                                /><a href="" style="color: white">
                                LeetCode Weekly Contest 230 (Div. 1)</a>
                               </td>
                               <td>20</td>
                                <td>jan. 1,2024</td>
                            
                            
                            
                        </tr>
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

        <div id="particles-js"></div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="./JS/home.js"></script>

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

        <!-- ---------------------FOR HOVER OF NAVBAR COLOUR--------------------- -->

        <script>
            $(function () {
                $(document).scroll(function () {
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
