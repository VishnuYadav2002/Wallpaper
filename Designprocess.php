<?php
//start a new session
session_start();

$page_title = "Add Design";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['design_name'];
$design =  $_GET['design_path'];

//define sql statement
$query_str = "INSERT INTO design VALUES (NULL, '$title', '$design')";

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


header("Location: design.php");
