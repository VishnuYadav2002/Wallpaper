<?php

//include the code from database.php
require_once('include/database.php');

$username = '';
$password = '';
$login_status = 2;

if ( isset($_POST['username']) )
    $username = trim($_POST['username']);
if ( isset($_POST['password']) )
    $password = trim($_POST['password']);

if (!empty($username)) {
    //The SQL select statement
    $query_stry = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    //Execute the query
    $result = @$conn->query($query_stry);
    if($result -> num_rows){
        //It is a valid user. Need to store the user in Session Variables
        session_start();
        $_SESSION['login'] = $username;
        $result_row = $result->fetch_assoc();
        $_SESSION['role'] = $result_row['role'];
        $_SESSION['name'] = $result_row['name'];
        $_SESSION['id'] = $result_row['id'];

        //update the login status
        $login_status = 1;
    }


}
header( "Location: loginform.php?ls=$login_status");
$conn->close();
