<?php
//start a new session
session_start();

$page_title = "Add Animal";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['animal_name'];
$animal =  $_GET['animal_path'];

//define sql statement
$query_str = "INSERT INTO animal VALUES (NULL, '$title', '$animal')";

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


header("Location: animal.php");
