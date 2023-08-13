<?php
//start a new session
session_start();

$page_title = "Add Entertaiment";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['e_name'];
$entertainment =  $_GET['e_path'];

//define sql statement
$query_str = "INSERT INTO entertainment VALUES (NULL, '$title', '$entertainment')";

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


header("Location: entertainment.php");
