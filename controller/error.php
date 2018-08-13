<?php session_start(); ?>
<?php
 echo $_SESSION['error'];
 header( "refresh:5; url=../index.php#team" );
 exit();
?>
