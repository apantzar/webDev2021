
<!-- This php will delete the selected user :/ -->
<?php 
$response = array( 
    'status' => 0, 
    'msg' => 'Error: Some problems occurred, please try again later.' 
); 
if(!empty($_REQUEST['id'])){ 
    $id = intval($_REQUEST['id']); 
     
    //For database connection 
    require_once 'dbConnect.php'; 
     
    $sql = "DELETE FROM users WHERE id = $id"; //query to delete the user using id
    $delete = $db->query($sql); 
     
    if($delete){ 
        $response['status'] = 1; 
        $response['msg'] = 'User has been deleted successfully! :/'; 
    } 
} 
 
echo json_encode($response);//json file with data