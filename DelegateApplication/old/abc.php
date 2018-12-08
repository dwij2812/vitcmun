<?php

$server = "mysql.hostinger.in";
    $username = "u219096124_admin";
    $password = "AlphaBeta1!";
    $dbname = "u219096124_sur";

  $conn = mysqli_connect($server, $username, $password, $dbname) or die("Error Connecting to the server.");

$sql = "select * from eb";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  //mysqli_free_result($result);
}

?>