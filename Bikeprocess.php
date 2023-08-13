<?php
//start a new session
session_start();

$page_title = "Add Bike";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['bike_name'];
$bike =  $_GET['bike_path'];

//define sql statement
$query_str = "INSERT INTO bike VALUES (NULL, '$title', '$bike')";

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


header("Location: bike.php");
