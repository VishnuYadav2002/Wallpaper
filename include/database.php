<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'wallpaper1';
$tblUsers = "user";
$tblImage = "image";
$tblAnime = "anime";
$tblAnimal = "animal";
$tblBike = "bike";
$tblCar = "car";
$tblDesign = "design";
$tblDrawing = "drawing";
$tblEntertainment = "entertainment";
$tblFunny = "funny";
$tblLogo = "logo";
$tblLove = "love";
$tblMusic = "music";
$tblNature = "nature";
$tblLivewp = "livewp";




$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
	die("connection failed");
} 

?>