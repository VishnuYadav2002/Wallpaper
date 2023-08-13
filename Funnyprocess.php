<?php
//start a new session
session_start();

$page_title = "Add Funny";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['f_name'];
$funny =  $_GET['f_path'];

//define sql statement
$query_str = "INSERT INTO funny VALUES (NULL, '$title', '$funny')";

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


header("Location: funny.php");
