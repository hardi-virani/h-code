<?php
$code = "print('hellfsd')";
$file = fopen("hello.py", 'w');
fwrite($file, $code);
fclose($file);
print(exec ('python3 hello.py'));
