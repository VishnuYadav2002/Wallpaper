<?php
//start a new session
session_start();

$page_title = "Add Music";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['m_name'];
$music =  $_GET['m_path'];

//define sql statement
$query_str = "INSERT INTO music VALUES (NULL, '$title', '$music')";

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


header("Location: music.php");
