<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['CommentID'])){ 
    $id = intval($_REQUEST['CommentID']); 
     
    // Include the database config file 
    require_once 'dbConnect.php'; 
     
    $sql = "DELETE FROM comments WHERE CommentID = $id"; 
    $delete = $db->query($sql); 
     
    if($delete){ 
        $response['status'] = 1; 
        $response['msg'] = 'Comment has been deleted successfully!'; 
    } 
} 
 
echo json_encode($response);