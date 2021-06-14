<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.' 
); 
if(!empty($_REQUEST['UserID']) && !empty($_REQUEST['Date']) && !empty( $_REQUEST['message'])){ 
    $username = $_REQUEST['UserID']; 
    $date = $_POST['Date']; 
    $message = $_REQUEST['message']; 
   
     
    // Include the database config file 
    require_once 'dbConnect.php'; 
     
    $sql = "INSERT INTO comments(UserID, Date, message) VALUES ('$username','$date','$message')"; 
    $insert = $db->query($sql); 
     
    if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'Comment has been added successfully!'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
} 
 
echo json_encode($response);