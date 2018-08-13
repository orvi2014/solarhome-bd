<?php
//connect database
$servername = "localhost";
$username = "root";
$password = "";
// Parse error: syntax error, unexpected '$sql' (T_VARIABLE)
// check semicole the line before;
try {
   $db = mysqli_connect('localhost','root','','solarhomexwa');
   // set the PDO error mode to exception

  //connection database complete

}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<body>
  <h1><span class="blue"></span>Solar<span class="blue"></span> <span class="yellow">Home</pan></h1>
<h2>Showing user information who used our calculator</h2>
<table class="container">
 <thead>
  <tr>
    <th><h1>Company Name</h1></th>
    <th><h1>Email</h1></th>
    <th><h1>Phone</h1></th>

  </tr>
</thead>
  <tbody>

<?php

  $sql = "SELECT * FROM solarhome ORDER BY result_date ASC";
  $result=mysqli_query($db,$sql);
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  $data_Size=sizeof($data);

// Free result set
if(!empty($data)){


    // foreach variable row iterate over key=>value
    for($i=$data_Size-1;$i>=0;$i--){
    echo '<tr>';
    echo '<td>';
    echo ($data[$i]['company']);

    echo '</td>';
    echo '<td>';
    echo ($data[$i]['email']);

    echo '</td>';
    echo '<td>';
    echo ($data[$i]['phone']);

    echo '</td>';


    echo '</tr>';
      //echo ($data[$i]['email']);
    }


}
  // Fetch one and one row


  // Free result set

 ?>

</tbody>
</table>
</body>
</html>
