<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
setcookie(session_name(), '', time()-3600);

//destroy the $_SESSION array
$_SESSION = array();

$page_title = "Log Out";
include('include/header.php');

?>
<div class="container wrapper">
    <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li class="active">Log Out</li>
    </ul>
    <h1 class="text-center">Logged Out</h1>
    <p class="lead text-center text-danger"> Thank you for your visit. You are now logged out.</p>
</div>

<?php
header( "Refresh:2; url=home.php", true, 303);
include('include/footer.php'); ?>