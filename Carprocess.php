<?php
//start a new session
session_start();

$page_title = "Add Car";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['car_name'];
$car =  $_GET['car_path'];

//define sql statement
$query_str = "INSERT INTO car VALUES (NULL, '$title', '$car')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


header("Location: car.php");
