<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['id'])){ 
    $id = intval($_REQUEST['id']); 
     
    // Include the database config file 
    require_once 'dbConnect.php'; 
     
    $sql = "DELETE FROM users WHERE id = $id"; 
    $delete = $db->query($sql); 
     
    if($delete){ 
        $response['status'] = 1; 
        $response['msg'] = 'User data has been deleted successfully!'; 
    } 
} 
 
echo json_encode($response);