<?php
session_start();
if(isset($_SESSION["loggedin"]))
{
    if($_SESSION["loggedin"])
    {
        header("location: home.php");
    }
}


require "dbconnection.php";

// Process the form data when the form is submitted
if ($_POST) {
    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $rpassword = $_POST["Confirm"];
    $fbook = $_POST["Book"];
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty($username_err)){
        $password_err = "Please enter your password.";
        // Insert the user into the database
        $sql = "SELECT id, username, password FROM hcodeusers WHERE username = \"$username\" or email = \"$email\"";
       
        // Check if username exists, if yes then verify password
        if(mysqli_num_rows(mysqli_query($conn,$sql))!=1){
            
            if($password==$rpassword){
                
                // Password is correct, so start a new session
                $sql = "INSERT INTO hcodeUsers VALUES (NULL,'$username', '$email', '$password','$fbook',current_timestamp(),Null)";
                mysqli_query($conn,$sql);
                
                    
                        
                        // Redirect user to home page
                        header("location: Login.php");
                    } 
                    else{
                        
                        
                        echo'<script>
                    function myFunction() {
                    alert("Password and Confirm Password must be same.");
                    }
                    myFunction();
                    </script>';
                    require "Sign.php";
                    }
                
                } 

                else{
                    // Display an error message if username doesn't exist
                    echo"he";
                    echo'<script>
                    function myFunction() {
                    alert("Username or Email is already exist.");
                    }
                    myFunction();
                    </script>';
                    require "Sign.php";
                }
                
  
}
}

?>