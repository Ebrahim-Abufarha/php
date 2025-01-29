<?php 
session_start();
$user_name = $_SESSION["user_name"] ;
$user_email = $_SESSION["user_email"];

echo "<h1>your Email is  $user_email </h1>";

echo "<h1>your User Name is  $user_name</h1> ";



?>