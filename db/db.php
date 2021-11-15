<?php

$conn = mysqli_connect("localhost", "id13698075_login", "123@sZ122169", "id13698075_buff");
mysqli_set_charset($conn, 'utf8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>