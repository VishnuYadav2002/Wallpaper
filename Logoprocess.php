<?php
//start a new session
session_start();

$page_title = "Add Logo";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['logo_name'];
$logo =  $_GET['logo_path'];

//define sql statement
$query_str = "INSERT INTO logo VALUES (NULL, '$title', '$logo')";

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


header("Location: logo.php");
