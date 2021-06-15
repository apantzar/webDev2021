<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Erros: Some problems occurred, please try again later :/.' 
); 
if(!empty($_REQUEST['CommentID'])){ 
    $id = intval($_REQUEST['CommentID']); 
     
    //For db connection 
    require_once 'dbConnect.php'; 
     
    $sql = "DELETE FROM comments WHERE CommentID = $id";  //query for deletion
    $delete = $db->query($sql); 
     
    if($delete){ 
        $response['status'] = 1; 
        $response['msg'] = 'Comment has been deleted successfully!'; 
    } 
} 
 
echo json_encode($response);