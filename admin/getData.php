<?php 
//For database connection
require_once 'dbConnect.php'; 
     
$page = isset($_POST['page']) ? intval($_POST['page']) : 1; 
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10; 
 
$searchTerm = isset($_POST['term']) ? $db->real_escape_string($_POST['term']) : ''; 
 
$offset = ($page-1)*$rows; 
 
$result = array();  //The result of the query will be stored in this array
 
$whereSQL = "username LIKE '$searchTerm%' OR email LIKE '$searchTerm%'"; //For searching
$result = $db->query("SELECT COUNT(*) FROM users WHERE $whereSQL"); //Result using the query
$row = $result->fetch_row(); 
$response["total"] = $row[0]; 
 
$result = $db->query( "SELECT * FROM users WHERE $whereSQL ORDER BY id DESC LIMIT $offset,$rows"); 
 
$users = array(); 
while($row = $result->fetch_assoc()){ 
    array_push($users, $row); //Push data to array
} 
$response["rows"] = $users; 
 
echo json_encode($response); //Write to json
