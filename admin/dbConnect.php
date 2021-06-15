<?php 
// Database config
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "users"; 
 
// for database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Checks connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}