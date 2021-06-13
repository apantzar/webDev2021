<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty( $_REQUEST['email'])){ 
    $username = $_REQUEST['username']; 
    $thepassword = $_REQUEST['password']; 
    $email = $_REQUEST['email']; 
    $usertype = "user";
   
     
    // Include the database config file 
    require_once 'dbConnect.php'; 
     
    $sql = "INSERT INTO users(username, password, email, userType) VALUES ('$username','$thepassword','$email' , '$usertype')"; 
    $insert = $db->query($sql); 
     
    if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'User data has been added successfully!'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
} 
 
echo json_encode($response);