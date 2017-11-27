<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Kolkata");
 
$setcon = 2;
if($setcon == 2) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "nck_gulf";
} else {
	$servername = "192.168.0.113";	
	$username = "root";
	$password = "root";
	$dbname = "nck_gulf";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
 
$base_url = "http://localhost/nck_gulf/";


?>