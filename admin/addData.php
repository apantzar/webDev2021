<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Error: Some problems occurred, please try again later.' 
); 
if(!empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty( $_REQUEST['email'])){ 
    $username = $_REQUEST['username']; 
    $thepassword = $_REQUEST['password']; 
    $email = $_REQUEST['email']; 
    $usertype = "user";
   
     
    // For database connection
    require_once 'dbConnect.php'; 
     
    $sql = "INSERT INTO users(username, password, email, userType) VALUES ('$username','$thepassword','$email' , '$usertype')"; //The insert query in order to add new user
    $insert = $db->query($sql); 
     
    if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'User has been added successfully :)!'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the fields.'; 
} 
 
echo json_encode($response); //json file with data