<?php
//start a new session
session_start();

$page_title = "Add Drawing";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['drawing_name'];
$drawing =  $_GET['drawing_path'];

//define sql statement
$query_str = "INSERT INTO drawing VALUES (NULL, '$title', '$drawing')";

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


header("Location: drawing.php");
