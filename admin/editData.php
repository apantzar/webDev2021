<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty( $_REQUEST['email'])){ 
    $username = $_REQUEST['username']; 
    $thepassword = $_REQUEST['password']; 
    $email = $_REQUEST['email']; 
     
    if(!empty($_REQUEST['id'])){ 
        $id = intval($_REQUEST['id']); 
         
        // Include the database config file 
        require_once 'dbConnect.php'; 
         
        $sql = "UPDATE users SET username='$username', password='$thepassword', email='$email' WHERE id = $id"; 
        $update = $db->query($sql); 
         
        if($update){ 
            $response['status'] = 1; 
            $response['msg'] = 'User data has been updated successfully!'; 
        } 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
} 
 
echo json_encode($response);