<?php
//start a new session
session_start();

$page_title = "Add Live Wallpaper";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['wp_name'];
$image =  $_GET['wp_path'];

//define sql statement
$query_str = "INSERT INTO livewp  VALUES (NULL, '$title', '$image')";

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


header("Location: livewallpaper.php");
