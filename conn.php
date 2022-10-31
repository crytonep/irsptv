<?php
//$conn = mysqli_connect("92.205.4.253","n57whzfm2yvo","SlowD2019","cookiename"); //prod
$conn = mysqli_connect("localhost","root","root","cookiename"); //local

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>