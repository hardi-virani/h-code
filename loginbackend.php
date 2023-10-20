<?php
session_start(); // Start the session


// Check if the user is already logged in, if yes then redirect to home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

// Include the database connection file
require "dbconnection.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_POST){
    
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM hcodeusers WHERE username = \"$username\"";
        
        $result = mysqli_query($conn,$sql);
        
            // Check if username exists, if yes then verify password
            if(mysqli_num_rows($result) == 1){
                $detail = mysqli_fetch_assoc($result);
                $hashed_password = $detail["password"];
                    // if(password_verify($password, $hashed_password)){
                        if($password==$hashed_password){
                        // Password is correct, so start a new session
                        session_start();
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $detail["id"];
                        $_SESSION["username"] = $username;
                        // Redirect user to home page
                        header("location: home.php");
                    } 
                    else{
                        
                        // Display an error message if password is not valid
                        $password_err = "The password you entered was not valid.";
                    }
                
                } 

                else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } 
    }
    if($username_err!="")
    {
        echo'<script>
        function myFunction() {
          alert("'.$username_err.'");
        }
        myFunction();
        </script>';
       
    }
    elseif($password_err!="")
    {
        echo'<script>
        function myFunction() {
          alert("'.$password_err.'");
        }
        myFunction();
        </script>';
    }
    require "Login.php";

        

        
    
?>
