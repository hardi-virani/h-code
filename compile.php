<?php
// sample.php

$arg1 = "Hello";
$arg2 = "World";

// Command to execute Python script with arguments
$cmd = "python3 /Applications/XAMPP/xamppfiles/htdocs/Minor/app.py $arg1 $arg2";

// Execute command and capture output
$output = exec($cmd);

// Print output
echo $output;

?>