<?php
//start a new session
session_start();

$page_title = "Add Love";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['love_name'];
$love =  $_GET['love_path'];

//define sql statement
$query_str = "INSERT INTO love VALUES (NULL, '$title', '$love')";

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


header("Location: love.php");
