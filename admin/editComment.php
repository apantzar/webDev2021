<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['UserID']) && !empty($_REQUEST['Date']) && !empty( $_REQUEST['message'])){ 
    $username = $_REQUEST['UserID']; 
    $date = $_POST['Date']; 
    $message = $_REQUEST['message']; 
     
    if(!empty($_REQUEST['CommentID'])){ 
        $id = intval($_REQUEST['CommentID']); 
         
        // For database connection
        require_once 'dbConnect.php'; 
         
        $sql = "UPDATE comments SET UserID='$username', Date='$date', message='$message' WHERE CommentID = $id"; //query to update comment in db
        $update = $db->query($sql); 
         
        if($update){ 
            $response['status'] = 1; 
            $response['msg'] = 'Comment has been updated successfully!'; 
        } 
    } 
}else{ 
    $response['msg'] = 'Please fill all the fields.'; 
} 
 
echo json_encode($response); //json with data