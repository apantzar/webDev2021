<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Errod: Some problems occurred, please try again later :/.' 
); 
if(!empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty( $_REQUEST['email'])){ 
    $username = $_REQUEST['username']; 
    $thepassword = $_REQUEST['password']; 
    $email = $_REQUEST['email']; 
     
    if(!empty($_REQUEST['id'])){ 
        $id = intval($_REQUEST['id']); 
         
        //for db connection
        require_once 'dbConnect.php'; 
         
        $sql = "UPDATE users SET username='$username', password='$thepassword', email='$email' WHERE id = $id"; //query for update data
        $update = $db->query($sql); 
         
        if($update){ 
            $response['status'] = 1; 
            $response['msg'] = 'User has been updated successfully!'; 
        } 
    } 
}else{ 
    $response['msg'] = 'Please fill all the  fields.'; 
} 
 
echo json_encode($response);