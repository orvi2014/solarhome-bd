<?php

// session start
session_start();
// Connecting to database
try {
    $db = mysqli_connect('localhost','root','','solarhomexwa') or die;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
