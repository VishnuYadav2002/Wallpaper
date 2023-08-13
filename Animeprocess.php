<?php
//start a new session
session_start();

$page_title = "Add Anime";

require_once 'include/header.php';
require_once 'include/database.php';

$title = $_GET['anime_name'];
$Anime =  $_GET['anime_path'];

//define sql statement
$query_str = "INSERT INTO anime VALUES (NULL, '$title', '$Anime')";

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


header("Location: anime.php");
