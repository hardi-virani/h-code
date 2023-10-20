<?php

    require "dbconnection.php";
    $email=$_POST["email"];
    $book = $_POST["book"];
    
    $sql = "SELECT * FROM hcodeusers WHERE email = \"$email\"";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result))
    {
        $detail = mysqli_fetch_assoc($result);
        $book_retrive = $detail["fbook"];
        if($book==$book_retrive)
        {
        $_SESSION["loggedin"] = true;
                        
        $_SESSION["username"] = $username;
                        
        header("location: home.php");
        }
        else{
            echo'<script>
                    function myFunction() {
                    alert("Book name is Wrong");
                    }
                    myFunction();
                    </script>';
        require "forgot.php";
        }
    }
    else{
        echo'<script>
                    function myFunction() {
                    alert("Email is does not exist.");
                    }
                    myFunction();
                    </script>';
        require "forgot.php";
    }

    echo"hello";

?>