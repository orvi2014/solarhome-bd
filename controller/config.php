<?php
// Connecting to database
try {
    $db = mysqli_connect('localhost','root','','solarhomexwa');
    echo "connection succeefully";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
