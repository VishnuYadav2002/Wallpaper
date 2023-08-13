<?php
//start a new session
session_start();

$page_title = "Add Nature";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['n_name'];
$nature =  $_GET['n_path'];

//define sql statement
$query_str = "INSERT INTO nature VALUES (NULL, '$title', '$nature')";

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


header("Location: nature.php");
