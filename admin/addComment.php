<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Error: Some problems occurred, please try again later.' 
); 
if(!empty($_REQUEST['UserID']) && !empty($_REQUEST['Date']) && !empty( $_REQUEST['message'])){ 
    $username = $_REQUEST['UserID']; 
    $date = $_POST['Date']; 
    $message = $_REQUEST['message']; 
   
     
    // For databse connection
    require_once 'dbConnect.php'; 
     
    $sql = "INSERT INTO comments(UserID, Date, message) VALUES ('$username','$date','$message')"; //query to insert new comment to databse 
    $insert = $db->query($sql); 
     
    if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'Comment has been added successfully! :)'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the  fields.'; 
} 
 
echo json_encode($response);//json with data