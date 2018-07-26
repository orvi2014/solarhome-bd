<?php
include '..\controller\config.php';
//include

// trying to insert so far so good
// Sytax error problem=https://www.w3schools.com/php/php_mysql_insert.asp
//sample , result_date
try{
$insert_value="INSERT INTO solarhome (id, company, phone, email, location, dc, titlt, ratetype, tkrate)
VALUES (NULL,'{$_SESSION['company']}','{$_SESSION['email']}','{$_SESSION['phone']}','{$_SESSION['location']}','{$_SESSION['dc']}','{$_SESSION['titlt']}','{$_SESSION['ratetype']}','{$_SESSION['value'][12]}')";

if (mysqli_query($db, $insert_value)) {
    //echo "New record created successfully";
} else {
   throw new Exception("Error: " . $insert_value . "<br>" . mysqli_error($db));
   //echo "Error: " . $insert_value . "<br>" . mysqli_error($db);
}
}
catch(Exception $e){
  $error_msg= $e->getmessage();
  $_SESSION['error']=$error_msg;
  //refreshing time for error msg
  header('Location: error.php' );
  exit();
}
// Hmm. now submit button click insert into database.

// closing database connection
// no need to close now mysqli_close($db);
 ?>
